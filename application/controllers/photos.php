<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load('auth');
        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->library('utils');
        $this->load->model('friend_mongodb_model');
        $this->load->model('photo_mongodb_model');
        $this->load->model('status_mongodb_model');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
// Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        
    }

    /**
     * this method return user relation and profile info
     * 
     */
    function get_user_relation_info($profile_id = "0") {
        $user_relation_info = array();
        $user_id = $this->session->userdata('user_id');
        if ($profile_id != $user_id && $profile_id != "0") {
            $result = $this->friend_mongodb_model->get_relationship_status($user_id, $profile_id);
            $result = json_decode($result);
            if (property_exists($result, "relationInfo")) {
                $relation_info = json_decode($result->relationInfo);
                if (property_exists($relation_info, "relationTypeId") != FALSE) {
                    $user_relation_info['relation_ship_status'] = $relation_info->relationTypeId;
                }
                if (property_exists($relation_info, "isInitiated") != FALSE) {
                    $user_relation_info['is_initiated'] = $relation_info->isInitiated;
                }
                if (property_exists($relation_info, "firstName") != FALSE) {
                    $user_relation_info['profile_first_name'] = $relation_info->firstName;
                }
                if (property_exists($relation_info, "lastName") != FALSE) {
                    $user_relation_info['profile_last_name'] = $relation_info->lastName;
                }
                 $user_relation_info['user_id'] = $profile_id;
            }
            if (property_exists($result, "userGenderId")) {
                $user_gender_id = json_decode($result->userGenderId);
                $user_relation_info['gender_id'] = $user_gender_id;
            }
            if (property_exists($result, "genderId")) {
                $gender_id = json_decode($result->genderId);
                $user_relation_info['your_gender_id'] = $gender_id;
            }
        } else {
            $gender_id = $this->friend_mongodb_model->get_user_gender_info($user_id);
            $user_relation_info['gender_id'] = $gender_id;
            $user_relation_info['your_gender_id'] = $gender_id;
            $user_relation_info['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
            $user_relation_info['profile_first_name'] = $this->session->userdata('first_name');
            $user_relation_info['profile_last_name'] = $this->session->userdata('last_name');
            $user_relation_info['user_id'] = $user_id;
        }
        return $user_relation_info;
    }

    function get_home_photos($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        if ($profile_id != "0") {
            $mapping_id = $profile_id;
        } else {
            $mapping_id = $user_id;
        }
        $photo_list = array();
        $result_event = $this->photo_mongodb_model->get_timeline_photos($mapping_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $photo_list = $result_event->result;
            }
        }
        $user_relation = $this->get_user_relation_info($profile_id);
        $this->data['photo_list'] = json_encode($photo_list);
        $this->data['app'] = PHOTO_APP;
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $profile_id;
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/photo/photo_home", $this->data);
    }

    function get_user_short_album_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "profileId") != FALSE) {
            $profile_id = $requestInfo->profileId;
        }
        $result_event = $this->photo_mongodb_model->get_user_albums($profile_id);
        if ($result_event != null) {
            $temp_album_list = json_decode($result_event);
            if (property_exists($temp_album_list, "albumList")) {
                $response["album_list"] = $temp_album_list->albumList;
            }
        }
        echo json_encode($response);
        return;
    }

    function get_slider_photos() {
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "referenceId") != FALSE) {
            $reference_id = $requestInfo->referenceId;
        }
        $result_event = $this->photo_mongodb_model->get_slider_photos($user_id, $reference_id);
        if ($result_event != null) {
            $temp_album_list = json_decode($result_event);
            if (property_exists($temp_album_list, "photoList")) {
                $response["photoList"] = $temp_album_list->photoList;
            }
        }
        echo json_encode($response);
        return;
    }

    function get_slider_album() {
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "mappingId") != FALSE) {
            $mapping_id = $requestInfo->mappingId;
        }
        $result_event = $this->photo_mongodb_model->get_slider_album($mapping_id, $album_id, $user_id);
        if ($result_event != null) {
            $temp_album_list = json_decode($result_event);
            if (property_exists($temp_album_list, "photoList")) {
                $response["photoList"] = $temp_album_list->photoList;
            }
            if (property_exists($temp_album_list, "userInfo")) {
                $response["userInfo"] = json_decode($temp_album_list->userInfo);
            }
        }
        echo json_encode($response);
        return;
    }

    function photos_view_my() {
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/photo/photos_view_my", $this->data);
    }

    function photos_view_albums_pic() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_albums_view");
    }

    function photos_view_friend() {
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/photo/photos_view_friend", $this->data);
    }

    function photos_albums() {
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/photo/photos_albums", $this->data);
    }

    function photos_sort_most_viewed() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_sort_most_viewed");
    }

    function photos_sort_top_rated() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_sort_top_rated");
    }

    function photos_sort_most_discussed() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_sort_top_rated");
    }

    function photos_gallery() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_gallery");
    }

    function add_photo_test() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_add_test");
    }

    function get_album() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "profileId") != FALSE) {
            $mapping_id = $requestInfo->profileId;
        }
        $response = array();
        $result = $this->photo_mongodb_model->get_photos($mapping_id, $album_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            if (property_exists($result_array, "photoList")) {
                $response['photo_list'] = $result_array->photoList;
            }
            if (property_exists($result_array, "albumInfo")) {
                $response['album_info'] = json_decode($result_array->albumInfo);
            }
        }
        echo json_encode($response);
        return;
    }

    function create_album() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumInfo") != FALSE) {
            $request = $requestInfo->albumInfo;
        }
        if (!empty($request)) {
            $album_info = new stdClass();
            $album_info->albumId = $this->utils->generateRandomString(USER_PHOTO_CREATE_ALBUM_ID_LENGTH);
            $album_info->userId = $this->session->userdata('user_id');
            if (property_exists($request, "title") != FALSE) {
                $album_info->title = $request->title;
            }
            if (property_exists($request, "description") != FALSE) {
                $album_info->description = $request->description;
            }
            $result = $this->photo_mongodb_model->create_album($album_info);
            if ($result != null) {
                $response["album_lsit"] = $album_info;
                $response["message"] = "Create Album Successfully";
            }
            echo json_encode($response);
        } else {
            $response['message'] = "Create Album is Failed ! ";
            echo json_encode($response);
        }
    }

    function edit_album() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        if (property_exists($requestInfo, "albumInfo") != FALSE) {
            $request = $requestInfo->albumInfo;
        }
    }

    function delete_album() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
    }

    function add_album_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "referenceId") != FALSE) {
            $reference_id = $requestInfo->referenceId;
        }
        if (property_exists($requestInfo, "mappingId") != FALSE) {
            $mapping_id = $requestInfo->mappingId;
        }
        $user_info = new stdClass();
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($requestInfo, "genderId") != FALSE) {
            $user_info->genderId = $requestInfo->genderId;
        }
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        $result_event = $this->photo_mongodb_model->add_album_like($mapping_id, $album_id, $reference_id, $like_info);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["like_info"] = $like_info;
            }
        }
        echo json_encode($response);
    }

    function delete_album_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
    }

    function get_album_like_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        $result = $this->photo_mongodb_model->get_album_like_list($album_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "like") != FALSE) {
                $response["like_list"] = $request_array->like;
            }
        }
        echo json_encode($response);
    }

    function add_album_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
        if (property_exists($request, "albumId") != FALSE) {
            $album_id = $request->albumId;
        }
        if (property_exists($request, "mappingId") != FALSE) {
            $mapping_id = $request->mappingId;
        }
        if (property_exists($request, "referenceId") != FALSE) {
            $reference_id = $request->referenceId;
        }

        $user_info = new stdClass();
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($request, "genderId") != FALSE) {
            $user_info->genderId = $request->genderId;
        }
        $comment_info = new stdClass();
        if (property_exists($request, "comment") != FALSE) {
            $comment_info->description = $request->comment;
        }
        $comment_info->userInfo = $user_info;
        $result_event = $this->photo_mongodb_model->add_album_comment($album_id, $mapping_id, $reference_id, $comment_info);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["comment"] = $comment_info;
            }
        }
        echo json_encode($response);
        return;
    }

    function get_album_comments() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "mappingId") != FALSE) {
            $mapping_id = $requestInfo->mappingId;
        }
        $result_event = $this->photo_mongodb_model->get_album_comments($album_id, $mapping_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["comment_list"] = $result_event->result->comment;
            }
        }
        echo json_encode($response);
    }

    function edit_album_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
    }

    function delete_album_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
    }

//.........................photo module.........................................
    function get_user_photos() {
        $offset = 0;
        $limit = 5;
        $user_id = "2";
        $response = array();
//        $user_id = $this->session->userdata('user_id');
        $result = $this->photo_mongodb_model->get_user_photos($user_id, $offset, $limit);
        var_dump($result);
        exit;
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
    }

//used method
    function get_photo_info($photo_id = 0) {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $result = $this->photo_mongodb_model->get_photo($user_id, $photo_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            $result_array->userInfo = json_decode($result_array->userInfo);
            $response['photo_info'] = $result_array;
        }
        echo json_encode($response);
        return;
    }

    function get_photo($photo_id = 0) {
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $result = $this->photo_mongodb_model->get_photo($user_id, $photo_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            $this->data['photo_info'] = json_encode($result_array);
        }
        $this->data['app'] = PHOTO_APP;
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/photo/photo_gallery", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/photo/photo_gallery", $this->data);
//        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_gallery", $this->data);
    }

    /* public function image_upload() {
      $response = array();
      $postdata = file_get_contents("php://input");
      $requestInfo = json_decode($postdata);
      $file = array();
      $files = array();
      if (isset($_FILES["userfile"])) {
      $file_info = $_FILES["userfile"];

      //            var_dump($file_info);
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
      } */

    /**
     * this method upload image at server
     * @ param file info
     *  */
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

//    function add_photos() {
//        $result = array();
//        $image_add_result = array();
//        $result_ary = array();
//        $result_array = array();
//        $category_list = array();
//        $album_list = array();
//        $image_list = array();
//        $user_image_list_info = array();
//        $response = array();
//        $user_id = $this->session->userdata('user_id');
//        if (file_get_contents("php://input") != null) {
//            $user_info = new stdClass();
//            $user_info->userId = $user_id;
//            $user_info->firstName = $this->session->userdata('first_name');
//            $user_info->lastName = $this->session->userdata('last_name');
//            $postdata = file_get_contents("php://input");
//            $requestInfo = json_decode($postdata);
//            if (property_exists($requestInfo, "photoInfo") != FALSE) {
//                $request = $requestInfo->photoInfo;
//            }
//            if (!empty($request)) {
//                if (property_exists($request, "imageList") != FALSE) {
//                    $image_list = $request->imageList;
//                }
//                $images = array();
//                if (!empty($image_list)) {
//                    foreach ($image_list as $image) {
//                        $photo_info = new stdClass();
//                        $photo_info->photoId = $this->utils->generateRandomString(USER_PHOTO_ID_LENGTH);
//                        if (property_exists($request, "albumId") != FALSE) {
//                            $photo_info->albumId = $request->albumId;
//                            $album_id = $request->albumId;
//                        }
//                        if (property_exists($request, "categoryId") != FALSE) {
//                            $photo_info->categoryId = $request->categoryId;
//                        }
//                        $tempimage = new stdClass();
//                        $tempimage->image = $image;
//                        $images[] = $tempimage;
//                        $photo_info->image = $image;
//                        $user_image_list_info[] = $photo_info;
//                    }
//                    $image_add_result = $this->photo_mongodb_model->add_photos($user_id, $album_id, $user_image_list_info);
//                    $image_add_result = json_decode($image_add_result);
//                    if ($image_add_result->responseCode == CREATED_SUCCESSFULLY) {
//                        $status_info = new stdClass();
//                        $status_info->userId = $user_id;
//                        $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
//                        $status_info->statusTypeId = ADD_ALBUM_PHOTOS;
//                        $status_info->images = $images;
//                        $status_info->userInfo = $user_info;
//                        $status_result = $this->status_mongodb_model->add_status($status_info);
//                        $status_result = json_decode($status_result);
//                        if ($status_result->responseCode == CREATED_SUCCESSFULLY) {
//                            $response['message'] = "added successfullly";
//                        }
//                    }
//                    echo json_encode($response);
//                } else {
//                    $response["message"] = "Please Seelect at least one Picture";
//                    echo json_encode($response);
//                }
//            } else {
//                $response["message"] = "Error message";
//                echo json_encode($response);
//            }
//        }
//
//        $result = $this->photo_mongodb_model->get_albums_and_categories($user_id);
//        if (!empty($result)) {
//            $result_array = json_decode($result);
//            $category_list = $result_array->categoryList;
//            $album_list = $result_array->albumList;
//        }
//        $this->data['app'] = "app.Photo";
//        $this->data["user_id"] = $user_id;
//        $this->data["first_name"] = $this->session->userdata('first_name');
//        $this->data["album_lsit"] = json_encode($album_list);
//        $this->data["category_list"] = json_encode($category_list);
//        $this->template->load(null, "member/photo/photo_add", $this->data);
////        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_add", $this->data);
//    }
    function add_photos() {
        $result = array();
        $image_add_result = array();
        $result_ary = array();
        $result_array = array();
        $category_list = array();
        $album_list = array();
        $image_list = array();
        $user_image_list_info = array();
        $response = array();
        $user_id = $this->session->userdata('user_id');
        if (file_get_contents("php://input") != null) {
            $user_info = new stdClass();
            $user_info->userId = $user_id;
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "photoInfo") != FALSE) {
                $request = $requestInfo->photoInfo;
            }
            if (!empty($request)) {
                if (property_exists($request, "imageList") != FALSE) {
                    $image_list = $request->imageList;
                }
                $images = array();
                if (!empty($image_list)) {
                    $status_id = $this->utils->generateRandomString(STATUS_ID_LENGTH);
                    foreach ($image_list as $image) {
                        $photo_info = new stdClass();
                        $photo_info->photoId = $this->utils->generateRandomString(USER_PHOTO_ID_LENGTH);
                        if (property_exists($request, "albumId") != FALSE) {
                            $photo_info->albumId = $request->albumId;
                            $album_id = $request->albumId;
                        }
                        if (property_exists($request, "categoryId") != FALSE) {
                            $photo_info->categoryId = $request->categoryId;
                        }
                        $tempimage = new stdClass();
                        $tempimage->image = $image;
                        $images[] = $tempimage;
                        $photo_info->image = $image;
                        $photo_info->referenceId = $status_id;
                        $user_image_list_info[] = $photo_info;
                    }
                    $image_add_result = $this->photo_mongodb_model->add_photos($user_id, $album_id, $user_image_list_info);
                    $image_add_result = json_decode($image_add_result);
                    if ($image_add_result->responseCode == REQUEST_SUCCESSFULL) {
                        if ($image_add_result->result == USER_ALLOW_FOR_STATUS) {
                            $status_info = new stdClass();
                            $status_info->userId = $user_id;
                            $status_info->mappingId = $user_id;
                            $status_info->statusId = $status_id;
                            $status_info->statusTypeId = STATUS_TYPE_ID_ADD_ALBUM_PHOTOS;
                            $status_info->images = $images;
                            $status_info->userInfo = $user_info;
                            $status_result = $this->status_mongodb_model->add_status($status_info);
                            $status_result = json_decode($status_result);
                            if ($status_result->responseCode == REQUEST_SUCCESSFULL) {
                                $response['status'] = "1";
                            } else {
                                $response['status'] = "0";
                            }
                        } else {
                            $response['status'] = "1";
                        }
                    }
                    echo json_encode($response);
                    return;
                } else {
                    $response["message"] = "Please Seelect at least one Picture";
                    echo json_encode($response);
                }
            } else {
                $response["message"] = "Error message";
                echo json_encode($response);
                return;
            }
            return;
        }

        $result = $this->photo_mongodb_model->get_albums_and_categories($user_id);
        if (!empty($result)) {
            $result_array = json_decode($result);
            $category_list = $result_array->categoryList;
            $album_list = $result_array->albumList;
        }
        $user_relation = $this->get_user_relation_info($user_id);
        $this->data['app'] = PHOTO_APP;
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data["first_name"] = $this->session->userdata('first_name');
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data["album_lsit"] = json_encode($album_list);
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(null, "member/photo/photo_add", $this->data);
    }

    function edit_photo() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoInfo") != FALSE) {
            $request = $requestInfo->photoInfo;
        }
    }

    function delete_photo() {
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $result = $this->photo_mongodb_model->delete_photo($user_id, $album_id, $photo_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "responseCode") != FALSE) {
                if ($request_array->responseCode == "100157") {
                    $response["Message"] = "delete Photo Successfully";
                }
            }
        }
        echo json_encode($response);
    }

//used method
    function add_photo_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "referenceId") != FALSE) {
            $reference_id = $requestInfo->referenceId;
        }
        $user_id = $this->session->userdata('user_id');
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($requestInfo, "genderId") != FALSE) {
            $user_info->genderId = $requestInfo->genderId;
        }
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        if(isset($album_id) && $album_id = "" && $album_id != null){
        $result = $this->photo_mongodb_model->add_photo_like($user_id, $album_id, $photo_id, $reference_id, $like_info);
        }else{
           $result = $this->photo_mongodb_model->add_newsfeed_photo_like($user_id, $photo_id, $reference_id, $like_info);   
        }
        if ($result != null) {
            $result = json_decode($result);
            if ($result->responseCode != REQUEST_SUCCESSFULL) {
                $response['message'] = "Error while Processing ! ";
            } else {
                $response["like_info"] = $like_info;
            }
        }
        echo json_encode($response);
    }

    //used method
    function add_m_photo_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $user_id = $this->session->userdata('user_id');
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        $result = $this->photo_mongodb_model->add_m_photo_like($user_id, $photo_id, $like_info);
        if ($result != null) {
            $result = json_decode($result);
            if ($result->responseCode != REQUEST_SUCCESSFULL) {
                $response['message'] = "Error while Processing ! ";
            } else {
                $response["like_info"] = $like_info;
            }
        }
        echo json_encode($response);
    }

    function get_photo_like_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $result = $this->photo_mongodb_model->get_photo_like_list($photo_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "like") != FALSE) {
                $response["like_list"] = $request_array->like;
            }
        }
        echo json_encode($response);
    }

    function delete_photo_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
    }

    function add_photo_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
        if (property_exists($request, "photoId") != FALSE) {
            $photo_id = $request->photoId;
        }
        if (property_exists($request, "referenceId") != FALSE) {
            $reference_id = $request->referenceId;
        }
        if (property_exists($request, "statusTypeId") != FALSE) {
            $status_type_id = $request->statusTypeId;
        }
        if (property_exists($request, "albumId") != FALSE) {
            $album_id = $request->albumId;
        }
        $ref_user_info = new stdClass();
        if (property_exists($request, "userInfo")) {
            $reference_user_info = $request->userInfo;
            $ref_user_info->userId = $reference_user_info->userId;
            $ref_user_info->firstName = $reference_user_info->firstName;
            $ref_user_info->lastName = $reference_user_info->lastName;
            $ref_user_info->genderId = $reference_user_info->genderId;
        }
        $user_id = $this->session->userdata('user_id');
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($requestInfo, "genderId") != FALSE) {
            $user_info->genderId  = $requestInfo->genderId;
        }
        $comment_info = new stdClass();
        if (property_exists($request, "comment") != FALSE) {
            $comment_info->description = $request->comment;
        }
        $comment_info->userInfo = $user_info;

        if (isset($status_type_id)) {
            $result = $this->photo_mongodb_model->add_photo_comment($photo_id, $reference_id, $comment_info, $ref_user_info, $status_type_id);
        } else {
            $result = $this->photo_mongodb_model->add_slider_photo_comment($photo_id, $reference_id, $comment_info, $ref_user_info, $album_id);
        }
        if ($result != null) {
            $result = json_decode($result);
            if ($result->responseCode != REQUEST_SUCCESSFULL) {
                $response['message'] = "Error while Processing ! ";
            } else {
                $response["comment"] = $comment_info;
            }
        }
        echo json_encode($response);
    }

    function get_photo_comments() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $result = $this->photo_mongodb_model->get_photo_comments($photo_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "comment") != FALSE) {
                $response["comment_list"] = $request_array->comment;
            }
        }
        echo json_encode($response);
    }

    function edit_photo_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
    }

    function delete_photo_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
    }

    function crop_add_profile_picture() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "x") != FALSE) {
            $image_x = $requestInfo->x;
        }
        if (property_exists($requestInfo, "y") != FALSE) {
            $image_y = $requestInfo->y;
        }
        if (property_exists($requestInfo, "h") != FALSE) {
            $image_h = $requestInfo->h;
            $targ_h = $image_h;
        }
        if (property_exists($requestInfo, "w") != FALSE) {
            $image_w = $requestInfo->w;
            $targ_w = $image_w;
        }
        if (property_exists($requestInfo, "src") != FALSE) {
            $src = $requestInfo->src;
        }
        if (property_exists($requestInfo, "src_w") != FALSE) {
            $src_w = $requestInfo->src_w;
        }
        if (property_exists($requestInfo, "src_h") != FALSE) {
            $src_h = $requestInfo->src_h;
        }

        $result = array();
        $jpeg_quality = 100;
        $src_relative_path = str_replace(base_url(), '', $src);
        $user_id = $this->session->userdata('user_id');
        $new_name = $user_id . '.jpg';
        $temp_src_name = $user_id . '_' . now() . '.jpg';
        $temp_src_relative_path = USER_ALBUM_IMAGE_PATH . $temp_src_name;
        $this->utils->resize_image($src_relative_path, $temp_src_relative_path, $src_h, $src_w);
        $img_r = imagecreatefromjpeg($temp_src_relative_path);
        $dst_r = ImageCreateTrueColor($image_w, $image_h);
        imagecopyresampled($dst_r, $img_r, 0, 0, $image_x, $image_y, $targ_w, $targ_h, $image_w, $image_h);
        imagejpeg($dst_r, TEMP_PROFILE_IMAGE_PATH . $new_name, $jpeg_quality);
        imagejpeg($dst_r, USER_ALBUM_IMAGE_PATH . $temp_src_name, $jpeg_quality);

//resize and crop
        $this->utils->resize_image(TEMP_PROFILE_IMAGE_PATH . $new_name, PROFILE_PICTURE_PATH_W100_H100 . $new_name, PROFILE_PICTURE_H100, PROFILE_PICTURE_W100);
        $this->utils->resize_image(TEMP_PROFILE_IMAGE_PATH . $new_name, PROFILE_PICTURE_PATH_W50_H50 . $new_name, PROFILE_PICTURE_H50, PROFILE_PICTURE_W50);
        $this->utils->resize_image(TEMP_PROFILE_IMAGE_PATH . $new_name, PROFILE_PICTURE_PATH_W40_H40 . $new_name, PROFILE_PICTURE_H40, PROFILE_PICTURE_W40);
        $this->utils->resize_image(TEMP_PROFILE_IMAGE_PATH . $new_name, PROFILE_PICTURE_PATH_W30_H30 . $new_name, PROFILE_PICTURE_H30, PROFILE_PICTURE_W30);
        $this->utils->resize_image(TEMP_PROFILE_IMAGE_PATH . $new_name, PROFILE_PICTURE_PATH_W25_H25 . $new_name, PROFILE_PICTURE_H25, PROFILE_PICTURE_W25);
//delete temp src image
//update database related to profile picture
//        $data = array(
//            'photo' => $temp_src_name
//        );
//        $this->basic_profile->update_profile_info($data, $user_id);
//adding this picture into profile picture album

        $image_list = array();
        $image = new stdClass();
        $image->image = $temp_src_name;
        $image_list[] = $image;
        $album_id = PROFILE_PHOTOS_ALBUM_ID;
        $album_title = PROFILE_PHOTOS_ALBUM_TITLE;
        $album_result = $this->album_add($user_id, $album_id, $album_title, $image_list);
//add status in user profile related to the change of profile picture
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        $status_info = new stdClass();
        $status_info->userId = $user_id;
        $new_status_id = $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
        $status_info->statusTypeId = STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE;
        $status_info->images = $image_list;
        $status_info->userInfo = $user_info;
        $result = $this->status_mongodb_model->add_status($status_info);
        if ($result != null) {
            $response["status_info"] = $status_info;
        }
        echo json_encode($response);
    }

    public function upload_picture($image_data, $image_name, $image_path) {
        $response = array();
        list(, $data) = explode(',', $image_data);
        $final_image_data = base64_decode($data);
        $file = $image_path . $image_name;
        $result = file_put_contents($file, $final_image_data);
        if ($result != null) {
            $response['status'] = 1;
        } else {
            $response['status'] = 0;
        }
        return $response;
    }

    public function add_profile_picture() {
        $response = array();
        $image_data = $this->input->post('imageData');
        $user_id = $this->session->userdata('user_id');
        //temp picture upload to server for profile picture
        $profile_picture_name = $user_id . '.jpg';
        $profile_picture_temp_path = TEMP_PROFILE_IMAGE_PATH;
        $result1 = $this->upload_picture($image_data, $profile_picture_name, $profile_picture_temp_path);
        // image upload to user album for database save 
        $temp_src_name = $user_id . '_' . now() . '.jpg';
        $user_image_path = USER_ALBUM_IMAGE_PATH;
        $result2 = $this->upload_picture($image_data, $temp_src_name, $user_image_path);

        if ($result1['status'] != 0 && $result2['status'] != 0) {
            //resize profile picture 
            $file_temp = $profile_picture_temp_path . $profile_picture_name;
            $this->utils->resize_image($file_temp, PROFILE_PICTURE_PATH_W150_H150 . $profile_picture_name, PROFILE_PICTURE_H150, PROFILE_PICTURE_W150);
            $this->utils->resize_image($file_temp, PROFILE_PICTURE_PATH_W100_H100 . $profile_picture_name, PROFILE_PICTURE_H100, PROFILE_PICTURE_W100);
            $this->utils->resize_image($file_temp, PROFILE_PICTURE_PATH_W50_H50 . $profile_picture_name, PROFILE_PICTURE_H50, PROFILE_PICTURE_W50);
            $this->utils->resize_image($file_temp, PROFILE_PICTURE_PATH_W40_H40 . $profile_picture_name, PROFILE_PICTURE_H40, PROFILE_PICTURE_W40);
            $this->utils->resize_image($file_temp, PROFILE_PICTURE_PATH_W30_H30 . $profile_picture_name, PROFILE_PICTURE_H30, PROFILE_PICTURE_W30);
            $this->utils->resize_image($file_temp, PROFILE_PICTURE_PATH_W25_H25 . $profile_picture_name, PROFILE_PICTURE_H25, PROFILE_PICTURE_W25);
            //create album if no album exsist for profile picture or add picture to profile picture album
            $image_list = array();
            $image = new stdClass();
            $image->image = $temp_src_name;
            $image_list[] = $image;
            $album_id = PROFILE_PHOTOS_ALBUM_ID;
            $album_title = PROFILE_PHOTOS_ALBUM_TITLE;
            $status_id = $this->utils->generateRandomString(STATUS_ID_LENGTH);
            $album_result = $this->album_add($user_id, $album_id, $album_title, $image_list, $status_id);
            //add status in user profile related to the change of profile picture
            $user_info = new stdClass();
            $user_info->userId = $user_id;
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');
            $gender_id = $this->friend_mongodb_model->get_user_gender_info($user_id);
            $user_info->genderId = $gender_id;
            $status_info = new stdClass();
            $status_info->userId = $user_id;
            $new_status_id = $status_info->statusId = $status_id;
            $status_info->statusTypeId = STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE;
            $status_info->images = $image_list;
            $status_info->userInfo = $user_info;
            $status_info->mappingId = $user_id;

            $result = $this->status_mongodb_model->add_status($status_info);
            if ($result != null) {
                $response["message"] = "Profile picture add successfully";
                $response["status"] = "1";
            }
        }
        echo json_encode($response);
        return;
    }

    function add_cover_picture() {
        $response = array();
        $image_data = $this->input->post('imageData');
        $user_id = $this->session->userdata('user_id');

        // image upload to user album for database save 
        $temp_src_name = $user_id . '_' . now() . '.jpg';
        $user_image_path = USER_ALBUM_IMAGE_PATH;
        $result2 = $this->upload_picture($image_data, $temp_src_name, $user_image_path);

        //temp picture upload to server for cover picture
        $cover_picture_image_name = $user_id . '.jpg';
        // $cover_image_temp_path = COVER_PICTURE_IMAGE_PATH;
        $result1 = $this->upload_picture($image_data, $cover_picture_image_name, COVER_PICTURE_IMAGE_PATH);

        if ($result1['status'] != 0 && $result2['status'] != 0) {
            //create album if no album exsist for cover picture or add picture to cover picture album
            $image_list = array();
            $image = new stdClass();
            $image->image = $temp_src_name;
            $image_list[] = $image;
            $album_id = COVER_PHOTOS_ALBUM_ID;
            $album_title = COVER_PHOTOS_ALBUM_TITLE;
            $status_id = $this->utils->generateRandomString(STATUS_ID_LENGTH);
            $album_result = $this->album_add($user_id, $album_id, $album_title, $image_list, $status_id);
            //add status in user profile related to the change of cover picture
            $user_info = new stdClass();
            $user_info->userId = $user_id;
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');
            $gender_id = $this->friend_mongodb_model->get_user_gender_info($user_id);
            $user_info->genderId = $gender_id;
            $status_info = new stdClass();
            $status_info->userId = $user_id;
            $new_status_id = $status_info->statusId = $status_id;
            $status_info->statusTypeId = STATUS_TYPE_ID_CHANGE_COVER_PICTURE;
            $status_info->images = $image_list;
            $status_info->userInfo = $user_info;
            $status_info->mappingId = $user_id;
            $result = $this->status_mongodb_model->add_status($status_info);
            if ($result != null) {
                $response["status_info"] = $status_info;
            }
            echo json_encode($response);
        }
    }

    function album_add($user_id, $album_id, $type_title, $image_list, $status_id) {
        $user_image_list_info = array();
        $response = array();
        foreach ($image_list as $image) {
            $photo_info = new stdClass();
            $photo_info->photoId = $this->utils->generateRandomString(USER_PHOTO_ID_LENGTH);
            $photo_info->albumId = $album_id;
            $photo_info->image = $image->image;
            $photo_info->referenceId = $status_id;
            $user_image_list_info[] = $photo_info;
        }
        $image_add_result = $this->photo_mongodb_model->add_photos($user_id, $album_id, $user_image_list_info);
    }

}
