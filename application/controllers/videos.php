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
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
      
    }

    function index() {
        $video_list = array();
        $user_id = $this->session->userdata('user_id');

        $result = $this->video_mongodb_model->get_videos($user_id);
        if ($result != null) {
            $result = json_decode($result);
            if (property_exists($result, "videoList")) {
                $this->data["video_list"] = json_encode($result->videoList);
            }
        } else {
            $this->data["video_list"] = json_encode(array());
        }
        $this->data['app'] = "app.Video";
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/video/video_home", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/video/video_home", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/video_home", $this->data);
    }

    function videos_sort_most_discussed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Video";
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/video/videos_sort_most_discussed", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_sort_most_discussed", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_discussed", $this->data);
    }

    function videos_sort_most_viewed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Video";
        $this->data['first_name'] = $this->session->userdata('first_name');
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_sort_most_viewed", $this->data);
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_viewed", $this->data);
    }

    function videos_sort_top_rated() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Video";
        $this->data['first_name'] = $this->session->userdata('first_name');
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_sort_top_rated");
        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_sort_top_rated");
    }

    function videos_view_favorite() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Video";
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/video/videos_view_favorite", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_view_favorite", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_favorite", $this->data);
    }

    function videos_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Video";
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/video/videos_view_friend", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_view_friend", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_friend", $this->data);
    }

    function videos_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Video";
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/video/videos_view_my", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_view_my", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_view_my", $this->data);
    }

    function videos_iframe($video_id = 0) {

        $user_id = $this->session->userdata('user_id');
        $result = $this->video_mongodb_model->get_video($user_id, $video_id);
        if ($result != null) {
            $video_info = json_decode($result);
            $video_info->userInfo = json_decode($video_info->userInfo);
            $video_info->url = html_entity_decode($video_info->url);
            $this->data["video_url"] = $video_info->url;
            $this->data["video_info"] = json_encode($video_info);
        } else {
            $this->data["video_info"] = json_encode(array());
        }
        $this->data['app'] = "app.Video";
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/video/videos_iframe", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/video/videos_iframe", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/videos_iframe", $this->data);
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
                    if (property_exists($request, "url")) {
                        list(, $uploaded_vedio_id) = explode('=', $request->url);
                        $vedio_image_url = $this->generate_video_img($uploaded_vedio_id);
                        $url = htmlentities($this->grabYoutubeVideo($request->url));
                    }
                    $user_info = new stdClass();
                    $user_info->userId = $user_id;
                    $user_info->firstName = $this->session->userdata('first_name');
                    $user_info->lastName = $this->session->userdata('last_name');
                    $video_info = new stdClass();
                    $video_info->videoId = $this->utils->generateRandomString(USER_VIDEO_ID_LENGTH);
                    $video_info->url = $url;
                    $video_info->imageUrl = $vedio_image_url;
                    if (property_exists($request, "categoryId")) {
                        $video_info->categoryId = $request->categoryId;
                    }
                    $video_info->userId = $user_id;
                    $video_info->userInfo = $user_info;
                    $video_add_result = $this->video_mongodb_model->add_video($video_info);
                    $video_add_result = json_decode($video_add_result);
                    if ($video_add_result->responseCode == CREATED_SUCCESSFULLY) {
                        $response["message"] = "Video add successfully";
                    }
                    echo json_encode($response);
                    return;
                }
            }
        }

        $category_list = array();
        $category_list_array = $this->video_mongodb_model->get_video_categories();
        if (!empty($category_list_array)) {
            $category_list_array = json_decode($category_list_array);
            $category_list = $category_list_array->categoryList;
        }
        $this->data['user_id'] =$user_id;
        $this->data['first_name'] =$this->session->userdata('first_name');
        $this->data['app'] = "app.Video";
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(null, "member/video/video_add", $this->data);
//        $this->template->load(MEMBER_VIDEO_IN_TEMPLATE, "member/video/video_add", $this->data);
    }

    function grabYoutubeVideo($sText) {
        //$sText = "Check out my latest video here http://www.youtube.com/watch?v=Imh0vEnOMXU&feature=g-vrec Check out my latest video here http://www.youtube.com/watch?v=Imh0vEnOMXU&feature=g-vrec";
        //$sText =  "http://www.youtube.com/watch?v=Imh0vEnOMXU&feature=g-vrec";
        //return $sText;
        if (preg_match_all('@https?://(www\.)?youtube.com/.[^\s.,"\']+@i', $sText, $aMatches)) {
            //Need only the first youtube video link
            //echo $aMatches[0][0];

            $url = $aMatches[0][0];
            //$url = 'http://www.youtube.com/watch?v=Imh0vEnOMXU&feature=g-vrec';    // some youtube url
            $parsed_url = parse_url($url);
            /*
             * Do some checks on components if necessary
             */
            parse_str($parsed_url['query'], $parsed_query_string);
            $v = $parsed_query_string['v'];

            //return $v;
            $width = '470';
            $height = '400';
            return '<object width="' . $width . '" height="' . $height . '"><param name="movie" value="http://www.youtube.com/v/' . $v . '&amp;hl=en_US&amp;fs=1?rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $v . '" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="' . $width . '" height="' . $height . '"></embed></object>';
        } else {
            return $sText;
        }
    }

    function generate_video_img($vedio_id) {
        return $video_image = "http://img.youtube.com/vi/" . $vedio_id . "/1.jpg";
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
        $result = $this->video_mongodb_model->delete_video($video_id);
        var_dump($result);
        exit;
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
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        $like_info->id = $this->utils->generateRandomString(USER_VIDEO_LIKE_ID_LENGTH);
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
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        $comment_info = new stdClass();
        if (property_exists($request, "comment") != FALSE) {
            $comment_info->description = $request->comment;
        }
        $comment_info->userInfo = $user_info;
        $comment_info->id = $this->utils->generateRandomString(USER_VIDEO_COMMENT_ID_LENGTH);
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
