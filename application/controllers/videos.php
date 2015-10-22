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
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
         $result = $this->video_mongodb_model->get_videos($user_id);
         var_dump($result);exit;
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/video_home", $this->data);
    }

    function videos_sort_most_discussed() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_discussed", $this->data);
    }

    function videos_sort_most_viewed() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_viewed", $this->data);
    }

    function videos_sort_top_rated() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_top_rated");
    }

    function videos_view_favorite() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_favorite", $this->data);
    }

    function videos_view_friend() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_friend", $this->data);
    }

    function videos_view_my() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_my", $this->data);
    }

    function videos_iframe() {
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_iframe", $this->data);
    }

    /*
     * This method share a video
     * @created by rashida on 21 October
     */

    function add_video() {
        $response = array();
        $result = array();
        $user_id = $this->session->userdata('user_id');
        if (file_get_contents("php://input") != null) {
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "videoInfo")) {
                $request = $requestInfo->videoInfo;
                if (!empty($request)) {
                    $user_info = new stdClass();
                    $user_info->userId = $user_id;
                    $user_info->firstName = "Rashida";
                    $user_info->lastName = "Rashida";
                    $video_info = new stdClass();
                    $video_info->url = $request->url;
                    $video_info->categoryId = $request->categoryId;
                    $video_info->userId = $user_id;
                    $video_info->userInfo = $user_info;
                    $result = $this->video_mongodb_model->add_video($video_info);
                    if ($result != null) {
                        $response["message"] = "Video add successfully";
                    }
                    echo json_encode($response);
                    return;
                }
            }
        }

        $video_info = new stdClass();
        $category_list = array();
        $category_list_array = $this->video_mongodb_model->get_video_categories();
        if (!empty($category_list_array)) {
            $category_list_array = json_decode($category_list_array);
            $category_list = $category_list_array->categoryList;
        }
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Video";
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/video_add", $this->data);
    }

    /*
     * This method share a video
     * @created by rashida on 21 October
     */

    function share_video() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "videoId") != FALSE) {
            $video_id = $requestInfo->videoId;
        }
    }

    /*
     * This method delete a video
     * @created by rashida on 21 October
     */

    function delete_video() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "videoId") != FALSE) {
            $video_id = $requestInfo->videoId;
        }
    }

    /*
     * This method add a video like
     * @created by rashida on 21 October
     */

    function add_video_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "videoId") != FALSE) {
            $video_id = $requestInfo->videoId;
        }
        $user_info = new stdClass();
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->fristName = "Rashida Sultana";
        $user_info->lastName = "Shemin";
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        $result = $this->video_mongodb_model->add_video_like($video_id, $like_info);
        if ($result != null) {
            $response["like_info"] = $like_info;
        }
        echo json_encode($response);
    }

    /*
     * This method delete a video like
     * @created by rashida on 21 October
     */

    function delete_video_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "videoId") != FALSE) {
            $video_id = $requestInfo->videoId;
        }
    }

    /*
     * This method return get a video likes
     * @created by rashida on 21 October
     */

    function get_video_like_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "videoId") != FALSE) {
            $video_id = $requestInfo->videoId;
        }
        $result = $this->video_mongodb_model->get_video_like_list($video_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "like") != FALSE) {
                $response["like_list"] = $request_array->like;
            }
        }
        echo json_encode($response);
    }

    /*
     * This method return gadd a video comment
     * @created by rashida on 21 October
     */

    function add_video_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
        if (property_exists($request, "videoId") != FALSE) {
            $video_id = $request->videoId;
        }
        $user_info = new stdClass();
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->fristName = "Rashida Sultana";
        $user_info->lastName = "Shemin";
        $comment_info = new stdClass();
        if (property_exists($request, "comment") != FALSE) {
            $comment_info->description = $request->comment;
        }
        $comment_info->userInfo = $user_info;
        $result = $this->video_mongodb_model->add_video_comment($video_id, $comment_info);
        if ($result != null) {
            $response["comment"] = $comment_info;
        }
        echo json_encode($response);
        return;
    }

    /*
     * This method return comments of a video 
     * @created by rashida on 21 October
     */

    function get_video_comments() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "videoId") != FALSE) {
            $video_id = $requestInfo->videoId;
        }
        $result = $this->video_mongodb_model->get_video_comments($video_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "comment") != FALSE) {
                $response["comment_list"] = $request_array->comment;
            }
        }
        echo json_encode($response);
    }

    /*
     * This method return  edit comment of a video 
     * @created by rashida on 21 October
     */

    function edit_video_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
    }

    /*
     * This method return  delete comment of a video 
     * @created by rashida on 21 October
     */

    function delete_video_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
    }

}
