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

    function newsfeed() {
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 10;
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
                if (property_exists($resultInfo, "mappingUserInfo")) {
                    $resultInfo->mappingUserInfo = json_decode($resultInfo->mappingUserInfo);
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
        if ($profile_id != $user_id && $profile_id != "0") {
            $result = $this->friend_mongodb_model->get_relationship_status($user_id, $profile_id);
            $result = json_decode($result);
            if ($result != null) {
                if (property_exists($result, "relationTypeId") != FALSE) {
                    $user_relation['relation_ship_status'] = $result->relationTypeId;
                }
                if (property_exists($result, "isInitiated") != FALSE) {
                    $user_relation['is_initiated'] = $result->isInitiated;
                }
                if (property_exists($result, "firstName") != FALSE) {
                    $this->data['profile_first_name'] = $result->firstName;
                }
                if (property_exists($result, "lastName") != FALSE) {
                    $this->data['profile_last_name'] = $result->lastName;
                }
            }
        } else {
            $user_relation['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
            $this->data['profile_first_name'] = $this->session->userdata('first_name');
            $this->data['profile_last_name'] = $this->session->userdata('last_name');
        }
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.MemberProfile";
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/timeline", $this->data);
    }

    function about($friend_id = 0) {

        $user_id = $this->session->userdata('user_id');
        if ($friend_id != $user_id) {
            $result = $this->friend_mongodb_model->get_relationship_status($user_id, $friend_id);
            $result = json_decode($result);
            if ($result != null) {
                if (property_exists($result, "relationTypeId") != FALSE) {
                    $user_relation['relation_ship_status'] = $result->relationTypeId;
                }
                if (property_exists($result, "isInitiated") != FALSE) {
                    $user_relation['is_initiated'] = $result->isInitiated;
                }
            }
        } else {
            $user_relation['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
        }
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['friend_id'] = $friend_id;
        $this->data['app'] = "app.BasicProfile";
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/about", $this->data);
    }

    function account_settings() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/account_settings");
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
