<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('status_mongodb_model');
        $this->load->model('photo_mongodb_model');
        $this->load->helper('url');
        $this->load->library('utils');

// Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    public function image_upload() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $file = array();
        $files = array();
        if (isset($_FILES["userfile"])) {
            $file_info = $_FILES["userfile"];
            $result = $this->utils->upload_image($file_info, USER_ALBUM_IMAGE_PATH);
            if ($result['status'] == 1) {
                $picture = $result['upload_data']['file_name'];
                $file = array(
                    "name" => $picture,
                    "type" => "image/jpeg",
                    "url" => base_url() . USER_ALBUM_IMAGE_PATH . $picture,
                    "thumbnailUrl" => base_url() . USER_ALBUM_IMAGE_PATH . $picture,
                    "deleteUrl" => base_url() . USER_ALBUM_IMAGE_PATH . $picture,
                    "size" => 100,
                    "deleteType" => "DELETE"
                );

                $files[] = $file;
                $response["files"] = $files;
            } else {
                $this->data['message'] = $result['message'];
                echo json_encode($this->data);
                return;
            }
            echo json_encode($response);
            return;
        }
    }

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function add_status() {

        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $album_result = array();
        $response = array();
        $user_id = $this->session->userdata('user_id');
        if ($requestInfo != null) {
            $user_info = new stdClass();
            $user_info->userId = $user_id;
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');
            $status_info = new stdClass();
            $status_info->userId = $user_id;
            $new_status_id = $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);

            if (property_exists($requestInfo, "statusInfo") != FALSE) {
                $request = $requestInfo->statusInfo;
            }
            if (property_exists($request, "profileId") != FALSE) {

                $profile_id = $request->profileId;
            }

            if ($user_id != $profile_id && $profile_id != "") {
                $status_info->mappingId = $profile_id;
                $status_info->statusTypeId = POST_STATUS_BY_USER_AT_FRIEND_PROFILE_TYPE_ID;
            } else {
                $status_info->mappingId = $user_id;
                $status_info->statusTypeId = POST_STATUS_BY_USER_AT_HIS_PROFILE_TYPE_ID;
            }
            if (property_exists($request, "description") != FALSE) {
                $status_info->description = $request->description;
            }
            $images = array();
            if (property_exists($request, "imageList") != FALSE) {
                $image_list = $request->imageList;

                foreach ($image_list as $imageInfo) {
                    $image = new stdClass();
                    $image->image = $imageInfo;
                    $images[] = $image;
                }
                $album_id = TIMELINE_PHOTOS_ALBUM_ID;
                $album_title = TIMELINE_PHOTOS_ALBUM_TITLE;
                $album_result = $this->album_add($user_id, $album_id, $album_title, $image_list);
            }
            $status_info->images = $images;
            $status_info->userInfo = $user_info;
            $result = $this->status_mongodb_model->add_status($status_info);
            if ($result != null) {
                if ($user_id != $profile_id && $profile_id != "") {
                    $maping_user_info = new stdClass();
                    $maping_user_info->userId = $profile_id;
                    if (property_exists($request, "profileFirstName") != FALSE) {
                        $maping_user_info->firstName = $request->profileFirstName;
                    }
                    if (property_exists($request, "profileLastName") != FALSE) {
                        $maping_user_info->lastName = $request->profileLastName;
                    }
                    $profile_id = $status_info->mappingId = $request->profileId;
                    $status_info->mappingUserInfo = $maping_user_info;
                }
                $response["status_info"] = $status_info;
            }
        }
        echo json_encode($response);
    }

    function share_status() {

        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if ($requestInfo != null) {
            if (property_exists($requestInfo, "oldStatusInfo")) {
                $old_status_info = $requestInfo->oldStatusInfo;
            }
            if (property_exists($requestInfo, "statusInfo")) {
                $new_status_info = $requestInfo->statusInfo;
            }

            $user_info = new stdClass();
            $user_info->userId = $this->session->userdata('user_id');
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');

            $ref_user_info = new StdClass();
            if (property_exists($old_status_info, "userInfo")) {
                $user_id = $ref_user_info->userId = $old_status_info->userInfo->userId;
                $ref_user_info->firstName = $old_status_info->userInfo->firstName;
                $ref_user_info->lastName = $old_status_info->userInfo->lastName;
            }
            $ref_info = new stdClass();
            $ref_info->userInfo = $ref_user_info;
            if (property_exists($old_status_info, "images")) {
                $images = array();
                $image_list = $old_status_info->images;
                foreach ($image_list as $imageInfo) {
                    $image = new stdClass();
                    $image->image = $imageInfo->image;
                    $images[] = $image;
                }
                $ref_info->images = $images;
            }
            if (property_exists($old_status_info, "description")) {
                $ref_info->description = $old_status_info->description;
            }

            if (property_exists($old_status_info, "statusId")) {
                $status_id = $old_status_info->statusId;
            }
            $r_user_info = new stdClass();
            $r_user_info->userInfo = $ref_user_info;
            $status_info = new stdClass();
            $status_info->userId = $this->session->userdata('user_id');
            $status_info->statusTypeId = SHARE_OTHER_STATUS;
            $new_status_id = $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
            if (property_exists($new_status_info, "description")) {
                $status_info->description = $new_status_info->description;
            }
            $referenceId = new stdClass();
            $referenceId->statusId = $new_status_id;
            $referenceList = array();
            $referenceList[] = $referenceId;
            $status_info->referenceList = $referenceList;
            $status_info->userInfo = $user_info;
            $status_info->referenceInfo = $ref_info;
            $result = $this->status_mongodb_model->share_status($user_id, $status_id, $r_user_info, $status_info);
            if ($result != null) {
                $response["status_info"] = $status_info;
            }
        }
        echo json_encode($response);
    }

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function update_status() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $status_id = $request->statusId;
        $description = $request->description;
        $result = $this->status_mongodb_model->update_status($status_id, $description);
        if ($result != null) {
            $response["description"] = $description;
        }
        echo json_encode($response);
    }

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function add_status_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $ref_user_info = new StdClass(); //get from session;
        $ref_user_info->userId = $this->session->userdata('user_id');

        $ref_user_info->firstName = $this->session->userdata('first_name');
        $ref_user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        if (property_exists($request, "userId")) {
            $user_id = $request->userId;
        }
        $status_like_info = new StdClass();
        $status_like_info->userInfo = $ref_user_info;
        $result = $this->status_mongodb_model->add_status_like($user_id, $status_id, $status_like_info);
        if ($result != null) {
            $response["status_like_info"] = $status_like_info;
        }
        echo json_encode($response);
    }

    /**
     * this methord add status comment
     * @param userId and user comment Info
     *  */
    function add_status_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $ref_user_info = new StdClass(); //get from session;
        $ref_user_info->userId = $this->session->userdata('user_id');
        $ref_user_info->firstName = $this->session->userdata('first_name');
        $ref_user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        if (property_exists($request, "userId")) {
            $user_id = $request->userId;
        }
        $status_comment_info = new StdClass();
        $status_comment_info->commentId = $this->utils->generateRandomString(STATUS_COMMENT_ID_LENGTH);
        $status_comment_info->description = $request->description;
        $status_comment_info->userInfo = $ref_user_info;
        $result = $this->status_mongodb_model->add_status_comment($user_id, $status_id, $status_comment_info);
        if ($result != null) {
            $response["status_comment_info"] = $status_comment_info;
        }
        echo json_encode($response);
    }

    function get_statuses() {
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 5;
        $result = array();
        $result = $this->status_mongodb_model->get_statuses($user_id, $offset, $limit);
        if ($result != null) {
            $result = json_decode($result);
            if (property_exists($result, "mappingUserInfo")) {
                $result->mappingUserInfo = json_decode($result->mappingUserInfo);
            }
            $this->data["status_list"] = $result;
        }
        $this->data['app'] = "app.Status";
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/newsfeed", $this->data);
    }

    function get_user_profile_status_test() {
        $response = array();
        $mapping_id = $_POST['profileId'];
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 5;
        $result = array();
        $status_list = array();
        $result = $this->status_mongodb_model->get_user_profile_status($user_id, $mapping_id, $offset, $limit);
        if ($result != null) {
            $result = json_decode($result);
            foreach ($result as $status) {
                if (property_exists($status, "userInfo")) {
                    $status->userInfo = json_decode($status->userInfo);
                    $status_list[] = $status;
                }
            }
            $response["status_list"] = $status_list;
        }
        echo json_encode($response);
    }

    function get_user_profile_status() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $mapping_id = $request->profileId;
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 5;
        $result = array();
        $status_list = array();
        $result = $this->status_mongodb_model->get_user_profile_status($user_id, $mapping_id, $offset, $limit);
        if ($result != null) {
            $result = json_decode($result);
            foreach ($result as $status) {
                if (property_exists($status, "userInfo")) {
                    $status->userInfo = json_decode($status->userInfo);
                }
                if (property_exists($status, "mappingUserInfo")) {
                    $status->mappingUserInfo = json_decode($status->mappingUserInfo);
                }
                $status_list[] = $status;
            }
            $response["status_list"] = $status_list;
        }
        echo json_encode($response);
    }

    function get_status_details() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        $status_id = "135ZjKetRtqR7lS";
        $result = $this->status_mongodb_model->get_status_details($status_id);
        var_dump($result);
    }

    /**
     * this methord delete status 
     * @param userId 
     *  */
    function delete_status() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $status_id = $request->statusId;
        $result = array();
        $response = array();
        $result = $this->status_mongodb_model->delete_status($status_id);
        if ($result != null) {
            $response["message"] = "Status Delete Successfully";
        }
        echo json_encode($response);
    }

    function get_status_likes() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        $result = array();
        $response = array();
        $result = $this->status_mongodb_model->get_status_likes($status_id);
        $result = json_decode($result);
        if ($result != null) {
            $response["like_list"] = $result->like;
        }
        echo json_encode($response);
    }

    function get_status_shears() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        $result = array();
        $response = array();
        $result = $this->status_mongodb_model->get_status_shears($status_id);
        $result = json_decode($result);
        if ($result != null) {
            if (property_exists($result, "share")) {
                $response["share_list"] = $result->share;
            }
        }
        echo json_encode($response);
    }

    function get_status_comments() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if (property_exists($request, "statusId")) {

            $status_id = $request->statusId;
        }
        $result = array();
        $response = array();
        $result = $this->status_mongodb_model->get_status_comments($status_id);
        $result = json_decode($result);
        if ($result != null) {
            $response["comment_list"] = $result->comment;
        }
        echo json_encode($response);
    }

    function album_add($user_id, $album_id, $type_title, $image_list) {
        $user_image_list_info = array();
        $response = array();
        $result = $this->photo_mongodb_model->get_album_info($user_id, $album_id);
        $result = json_decode($result);
        if ($result->responseCode == BAD_REQUSET) {
            $album_info = new stdClass();
            $album_info->albumId = $album_id;
            $album_info->userId = $user_id;
            $album_info->title = $type_title;
            $response = $this->photo_mongodb_model->create_album($album_info);
        }
        foreach ($image_list as $image) {
            $photo_info = new stdClass();
            $photo_info->photoId = $this->utils->generateRandomString(USER_PHOTO_ID_LENGTH);
            $photo_info->albumId = $album_id;
            $photo_info->image = $image;
            $user_image_list_info[] = $photo_info;
        }
        $image_add_result = $this->photo_mongodb_model->add_photos($album_id, $user_image_list_info);
    }

}
