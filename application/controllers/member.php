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
        $this->load->helper('url');

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

    function newsfeed() {

        $user_id = $this->session->userdata('user_id');

        $offset = 0;
        $limit = 5;
        $result = array();
        $status_list = array();
        $result = $this->status_mongodb_model->get_statuses($user_id, $offset, $limit);
        $result = json_decode($result);
        if ($result != null) {
            foreach ($result as $resultInfo) {
                if (property_exists($resultInfo, "userInfo")) {
                    $resultInfo->userInfo = json_decode($resultInfo->userInfo);
                }
                if (property_exists($resultInfo, "referenceInfo")) {
                    $resultInfo->referenceInfo = json_decode($resultInfo->referenceInfo);
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
        $this->data['constants'] = json_encode($this->relations);
        $this->data['app'] = "app.Status";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/newsfeed", $this->data);
    }

    function timeline($friend_id = 0) {
        $user_relation = array();
        $user_id = $this->session->userdata('user_id');
        if ($friend_id != $user_id) {
            $result = $this->friend_mongodb_model->get_relationship_status($user_id, $friend_id);
            $result = json_decode($result);
            if ($result != null) {
                if (property_exists($result, "relationShipStatus") != FALSE) {
                    $user_relation['relation_ship_status'] = $result->relationShipStatus;
                }
                if (property_exists($result, "isInitiated") != FALSE) {
                    $user_relation['is_initiated'] = $result->isInitiated;
                }
            }
        } else {
            $user_relation['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
        }
        $this->data['constants'] = json_encode($this->relations);
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['friend_id'] = $friend_id;
        $this->data['app'] = "app.Friend";
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/timeline", $this->data);
    }

    function about($user_id = 0) {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/about", $this->data);
    }

    function account_settings() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/account_settings");
    }

    function add_friends() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/add_friends");
    }

    function messages() {
        $this->data['app'] = "app.Friend";
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/messages", $this->data);
    }

    function notification_all() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/notification_all");
    }

    function privacy_settings() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/privacy_settings");
    }

    function zakat() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/zakat");
    }

    function invite() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE_WITH_FOOTER, "member/invite");
    }

}
