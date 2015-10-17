<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('status_mongodb_model');
        $this->load->helper('url');
        $this->load->library('utils');

// Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
        $this->relations = $relations = array(
            "friend_relation_type_id" => FRIEND_RELATION_TYPE_ID,
            "pending_relation_type_id" => PENDING_RELATION_TYPE_ID,
            "blocked_relation_type_id" => BLOCKED_RELATION_TYPE_ID,
            "non_friend_relation_type_id" => NON_RELATION_TYPE_ID,
            "your_relation_type_id" => YOUR_RELATION_TYPE_ID,
            "request_sender" => REQUEST_SENDER,
            "request_receiver" => REQUEST_RECEIVER,
            "base_url" => base_url()
        );
    }

    
     public function image_upload() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $file = array();
        $files = array();
        if (isset($_FILES["userfile"])) {
            $file_info = $_FILES["userfile"];
            $result = $this->utils->upload_image($file_info, USER_TIMELINE_IMAGE_PATH);
            if ($result['status'] == 1) {
                $picture = $result['upload_data']['file_name'];
                $file = array(
                    "name" => $picture,
                    "type" => "image/jpeg",
                    "url" => base_url() . USER_TIMELINE_IMAGE_PATH . $picture,
                    "thumbnailUrl" => base_url() . USER_TIMELINE_IMAGE_PATH . $picture,
                    "deleteUrl" => base_url() . USER_TIMELINE_IMAGE_PATH . $picture,
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

        $response = array();
        $user_id = "100157";
        if ($requestInfo != null) {
            $user_info = new stdClass();
            $user_info->userId = $this->session->userdata('user_id');
            $user_info->fristName = "Shemin"; //get from session;
            $user_info->lastName = "Haque";
            $status_info = new stdClass();
            $status_info->userId = $this->session->userdata('user_id');
            $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
            $status_info->statusTypeId = POST_STATUS_BY_USER_AT_HIS_PROFILE_TYPE_ID;
            if (property_exists($requestInfo, "statusInfo") != FALSE) {
                $request = $requestInfo->statusInfo;
            }
            if (property_exists($request, "description") != FALSE) {
                $status_info->description = $request->description;
            }
                $image = new stdClass();
                $images = array();
            if (property_exists($request, "imageList") != FALSE) {
                $image_list = $request->imageList;
               
                foreach ($image_list as $imageInfo) {
                   $image->image =  $imageInfo;
                    $images[]=$image;
                }
            }
            $status_info->images = $images;
            $status_info->userInfo = $user_info;
            $result = $this->status_mongodb_model->add_status($status_info);
            if ($result != null) {
                $status_info->commentList = array();
                $status_info->likeList = array();
                $status_info->shareList = array();
                $response["status_info"] = $status_info;
            }
        }
        echo json_encode($response);
    }

    function share_status() {

        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if ($request != null) {
            $user_info = new stdClass();
            $user_info->userId = $this->session->userdata('user_id');
            $user_info->fristName = "Shemin"; //get from session;
            $user_info->lastName = "Haque";

            $ref_user_info = new StdClass(); //get from session;
            if (property_exists($request, "userId")) {
                $ref_user_info->userId = $request->userId;
            }
            if (property_exists($request, "fristName")) {
                $ref_user_info->fristName = $request->fristName;
            }
            if (property_exists($request, "lastName")) {
                $ref_user_info->lastName = $request->lastName;
            }
            $ref_info = new stdClass();
            if (property_exists($request, "description")) {
                $ref_info->description = $request->description;
            }
            $ref_info->userInfo = $ref_user_info;
            if (property_exists($request, "statusId")) {
                $status_id = $request->statusId;
            }


            $r_user_info = new stdClass();
            $r_user_info->userInfo = $ref_user_info;
            $status_info = new stdClass();
            $status_info->userId = $this->session->userdata('user_id');
            $status_info->statusTypeId = SHARE_OTHER_STATUS;
            $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
            if (property_exists($request, "newDescription")) {
                $status_info->description = $request->newDescription;
            }
            $status_info->userInfo = $user_info;
            $status_info->referenceInfo = $ref_info;
            $result = $this->status_mongodb_model->share_status($status_id, $r_user_info, $status_info);
            if ($result != null) {
                $status_info->commentList = array();
                $status_info->likeList = array();
                $status_info->shareList = array();
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
        $ref_user_info->fristName = "Keya";
        $ref_user_info->lastName = "Moni";
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        $status_like_info = new StdClass();
        $status_like_info->userInfo = $ref_user_info;
        $result = $this->status_mongodb_model->add_status_like($status_id, $status_like_info);
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
        $ref_user_info->fristName = "Keya";
        $ref_user_info->lastName = "Moni";
        if (property_exists($request, "statusId")) {
            $status_id = $request->statusId;
        }
        $status_comment_info = new StdClass();
        $status_comment_info->commentId = $this->utils->generateRandomString(STATUS_COMMENT_ID_LENGTH);
        $status_comment_info->description = $request->description;
        $status_comment_info->userInfo = $ref_user_info;
        $result = $this->status_mongodb_model->add_status_comment($status_id, $status_comment_info);
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
            $this->data["status_list"] = $result;
        }
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Status";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/newsfeed", $this->data);
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

    function test_add() {
//        $arr['firstName'] = "dklfjsdf";
//        $arr['lastName'] = "fsdfsdf";
//        $arr['firstName'] = $_POST['firstName'];
//        $arr['lastName'] = $_POST['lastName'];

        echo json_encode($this->input->post());
//        var_dump($this->input->post('testArray'));
    }

}
