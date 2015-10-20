<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('video_mongodb_model');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
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

    function index() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Status";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/video_home",$this->data);
    }

    function videos_sort_most_discussed() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_discussed");
    }

    function videos_sort_most_viewed() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_viewed");
    }

    function videos_sort_top_rated() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_top_rated");
    }

    function videos_view_favorite() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_favorite");
    }

    function videos_view_friend() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_friend");
    }

    function videos_view_my() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_my");
    }

    function videos_iframe() {
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_iframe");
    }

    function video_add() {
        $response = array();
        $result = array();
        $user_id = "100157"; //from session
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if (!empty($request)) {
            $video_info = new stdClass();
            $video_info->url = $request->url;
            $video_info->categoryId = $request->categoryId;
            $video_info->userId = $user_id;
            $result = $this->video_mongodb_model->add_vedio($video_info);
            if ($result != null) {
                $response["message"] = "Video add successfully";
            }
            echo json_encode($response);
            return;
        }
        $album_info = new stdClass();
        $category_list = array();
        $category_list_array = $this->video_mongodb_model->get_video_categories();
        if (!empty($category_list_array)) {
            $category_list_array = json_decode($category_list_array);
            $category_list = $category_list_array->categoryList;
        }
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/video_add", $this->data);
    }

}
