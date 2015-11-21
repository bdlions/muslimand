<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('basic_profile_mongodb_model');
        $this->load->model('friend_mongodb_model');
        $this->load->model('status_mongodb_model');
        $this->load->model('message_mongodb_model');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
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
            if ($result != null) {
                if (property_exists($result, "relationTypeId") != FALSE) {
                    $user_relation_info['relation_ship_status'] = $result->relationTypeId;
                }
                if (property_exists($result, "isInitiated") != FALSE) {
                    $user_relation_info['is_initiated'] = $result->isInitiated;
                }
                if (property_exists($result, "firstName") != FALSE) {
                    $user_relation_info['profile_first_name'] = $result->firstName;
                }
                if (property_exists($result, "lastName") != FALSE) {
                    $user_relation_info['profile_last_name'] = $result->lastName;
                }
            }
        } else {
            $user_relation_info['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
            $user_relation_info['profile_first_name'] = $this->session->userdata('first_name');
            $user_relation_info['profile_last_name'] = $this->session->userdata('last_name');
        }
        return $user_relation_info;
    }

    function newsfeed() {
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 10;
        $result = array();
        $status_list = array();
        $result = $this->status_mongodb_model->get_statuses($user_id, $offset, $limit);
        $result = json_decode($result);
        if ($result != null) {
            if (property_exists($result, "userCurrentTime")) {
                $user_current_time = $result->userCurrentTime;
                $this->data['user_current_time'] = $user_current_time;
            }
            if (property_exists($result, "statusInfoList")) {
                $status_info_list = $result->statusInfoList;
            }
            foreach ($status_info_list as $resultInfo) {
                if (property_exists($resultInfo, "userInfo")) {
                    $resultInfo->userInfo = json_decode($resultInfo->userInfo);
                }
                if (property_exists($resultInfo, "referenceInfo")) {
                    $resultInfo->referenceInfo = json_decode($resultInfo->referenceInfo);
                }
                if (property_exists($resultInfo, "mappingUserInfo")) {
                    $resultInfo->mappingUserInfo = json_decode($resultInfo->mappingUserInfo);
                }
                if (property_exists($resultInfo, "commentList")) {
                    $commentList = $resultInfo->commentList;
                    $commentListInfo = array();
                    foreach ($commentList as $comment) {
                        $comment->userInfo = json_decode($comment->userInfo);
                        $commentListInfo[] = $comment;
                    }
                    $resultInfo->commentList = $commentListInfo;
                }
                $status_list[] = $resultInfo;
            }
            $this->data["status_list"] = json_encode($status_list);
        } else {
            $this->data["status_list"] = json_encode(array());
        }
        $status_type_ids = array(
            "post_status_by_user_at_his_profile_id" => POST_STATUS_BY_USER_AT_HIS_PROFILE_TYPE_ID,
            "post_status_by_user_at_friend_profile_id" => POST_STATUS_BY_USER_AT_FRIEND_PROFILE_TYPE_ID,
            "change_profile_picture_id" => CHANGE_PROFILE_PICTURE,
            "change_cover_picture_id" => CHANGE_COVER_PICTURE,
            "share_other_status_id" => SHARE_OTHER_STATUS,
            "share_other_photo_id" => SHARE_OTHER_PHOTO,
            "share_other_video_id" => SHARE_OTHER_VIDEO,
            "add_album_photos_id" => ADD_ALBUM_PHOTOS
        );
        $this->data["ststus_type_ids"] = json_encode($status_type_ids);
        $this->data['app'] = "app.Status";
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['last_name'] = $this->session->userdata('last_name');
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/newsfeed", $this->data);
    }

    function timeline($profile_id = "0") {
        $user_relation = array();
        $user_id = $this->session->userdata('user_id');
        $user_relation = $this->get_user_relation_info($profile_id);
        $this->data['profile_first_name'] = $user_relation['profile_first_name'];
        $this->data['profile_last_name'] = $user_relation['profile_last_name'];
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.MemberProfile";
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/timeline", $this->data);
    }

    function about($profile_id = 0) {

        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_relation'] = json_encode($this->get_user_relation_info($profile_id));
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.BasicProfile";
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/about", $this->data);
    }

    function account_settings($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_relation'] = json_encode($this->get_user_relation_info($profile_id));
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.Status";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/account_settings", $this->data);
    }

    function add_friends() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/add_friends");
    }

    function messages() {

        $limit = 10;
        $offset = 0;
        $user_id = $this->session->userdata('user_id');
        $result = $this->message_mongodb_model->get_message_summary_list($user_id, $offset, $limit);
        $this->data["message_summery_list"] = $result;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_id'] = $user_id;
        $this->data['app'] = "app.Message";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/messages", $this->data);
    }

    function privacy_settings($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_relation'] = json_encode($this->get_user_relation_info($profile_id));
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.Status";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/privacy_settings", $this->data);
    }

    function zakat() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/zakat");
    }

    function invite() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE_WITH_FOOTER, "member/invite");
    }

}
