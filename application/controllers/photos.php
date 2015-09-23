<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load('auth');
        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('photo_mongodb_model');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_home", $this->data);
    }

    function photos_view_my() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_view_my");
    }

    function photos_view_friend() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_view_friend");
    }

    function photos_albums() {
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_albums");
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

    function get_user_albums() {
        $user_id = $this->session->userdata('user_id');
        $result = $this->photo_mongodb_model->get_user_albums($user_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            if(property_exists($result_array, "albumList")){
            $this->data['user_album_list'] = json_encode($result_array->albumList);
            }
        }
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_view_my_albums",$this->data);
    }

    function get_album() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "userId") != FALSE) {
            $user_id = $requestInfo->userId;
        }
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
        if (property_exists($requestInfo, "albumLikeInfo") != FALSE) {
            $request = $requestInfo->albumLikeInfo;
        }
    }

    function delete_album_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
    }

    function add_album_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
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
    function get_photos() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
    }

    function get_photo() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
    }

    function add_photos() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $result = array();
        $result_ary = array();
        $result_array = array();
        $category_list = array();
        $album_list = array();
        $response = array();
        $user_id = $this->session->userdata('user_id');
        if (!empty($request)) {
            $photo_info = new stdClass();
            $photo_info->photoId = "1"; //this need to autoincrement id ;
            $photo_info->albumId = $request->albumId;
            $photo_info->categoryId = $request->categoryId;
            $photo_info->image = "beli.jpg";
            $result_ary = $this->photo_mongodb_model->add_photos($photo_info);
            if ($result_ary != null) {
                $response["message"] = "Add Photos  Successfully";
            }
            echo json_encode($response);
            return;
        }
        $result = $this->photo_mongodb_model->get_albums_and_categories($user_id);
        if (!empty($result)) {
            $result_array = json_decode($result);
            $category_list = $result_array->categoryList;
            $album_list = $result_array->albumList;
        }
        $this->data["album_lsit"] = json_encode($album_list);
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_add", $this->data);
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
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
    }

    function add_photo_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoLikeInfo") != FALSE) {
            $request = $requestInfo->photoLikeInfo;
        }
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
    }

    function edit_photo_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
    }

    function share_photo_comment() {
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

}
