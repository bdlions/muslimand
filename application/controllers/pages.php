<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->lang->load('auth');
//$this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->library('utils');
        $this->load->model('photo_mongodb_model');
        $this->load->model('status_mongodb_model');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
// Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_home", $this->data);
    }

    function pages_add() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_add", $this->data);
    }

    function pages_sort_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_view_my", $this->data);
    }

    function pages_sort_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_view_friend", $this->data);
    }

    function pages_sort_most_liked() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_most_liked", $this->data);
    }

    function pages_newsfeed() {
        $user_id = $this->session->userdata('user_id');
        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['first_name'] = $this->session->userdata('first_name');

        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_timeline", $this->data);
    }

    function pages_photo() {
        $user_id = $this->session->userdata('user_id');
        $result = $this->photo_mongodb_model->get_user_albums($user_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            if (property_exists($result_array, "albumList")) {
                $this->data['user_album_list'] = json_encode($result_array->albumList);
            }
        } else {
            $this->data['user_album_list'] = array();
        }
        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
         $this->data['user_relation'] = json_encode($user_relation);
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_photo", $this->data);
    }
    function pages_photo_add() {
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
                        $user_image_list_info[] = $photo_info;
                    }
                    $image_add_result = $this->photo_mongodb_model->add_photos($user_id, $album_id, $user_image_list_info);
                    $image_add_result = json_decode($image_add_result);
                    if ($image_add_result->responseCode == CREATED_SUCCESSFULLY) {
                        $status_info = new stdClass();
                        $status_info->userId = $user_id;
                        $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
                        $status_info->statusTypeId = ADD_ALBUM_PHOTOS;
                        $status_info->images = $images;
                        $status_info->userInfo = $user_info;
                        $status_result = $this->status_mongodb_model->add_status($status_info);
                        $status_result = json_decode($status_result);
                        if ($status_result->responseCode == CREATED_SUCCESSFULLY) {
                            $response['message'] = "added successfullly";
                        }
                    }
                    echo json_encode($response);
                } else {
                    $response["message"] = "Please Seelect at least one Picture";
                    echo json_encode($response);
                }
            } else {
                $response["message"] = "Error message";
                echo json_encode($response);
            }
        }

        $result = $this->photo_mongodb_model->get_albums_and_categories($user_id);
        if (!empty($result)) {
            $result_array = json_decode($result);
            $category_list = $result_array->categoryList;
            $album_list = $result_array->albumList;
        }
         $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data["first_name"] = $this->session->userdata('first_name');
       $this->data['user_relation'] = json_encode($user_relation);
        $this->data["album_lsit"] = json_encode($album_list);
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_photo_add", $this->data);
    }
    function pages_get_photo_album($album_id = 0) {
        $user_id = $this->session->userData('user_id');
        $response = array();
        $result = $this->photo_mongodb_model->get_photos($user_id, $album_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            if (property_exists($result_array, "photoList")) {
                $this->data['photo_list'] = json_encode($result_array->photoList);
            }
            if (property_exists($result_array, "albumInfo")) {
                $this->data['album_info'] = json_encode(json_decode($result_array->albumInfo));
            }
        }
        
        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data["first_name"] = $this->session->userdata('first_name');
       $this->data['user_relation'] = json_encode($user_relation);
        $this->template->load(null, "member/page/page_album_photo_view", $this->data);
    }

    function pages_about($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        if ($profile_id == "0" && $user_id == FALSE) {
            redirect('auth/login', 'refresh');
        }
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.BasicProfile";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_about", $this->data);
    }

    function pages_getting_started() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_getting_started", $this->data);
    }

}
