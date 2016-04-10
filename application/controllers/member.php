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
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

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
                if (property_exists($relation_info, "userId") != FALSE) {
                    $user_relation_info['user_id'] = $relation_info->userId;
                }
            }
            if (property_exists($result, "userGenderId")) {
                $user_gender_id = json_decode($result->userGenderId);
                $user_relation_info['gender_id'] = $user_gender_id;
            }
        } else {
            $user_relation_info['gender_id'] = $this->friend_mongodb_model->get_user_gender_info($user_id);
            $user_relation_info['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
            $user_relation_info['profile_first_name'] = $this->session->userdata('first_name');
            $user_relation_info['profile_last_name'] = $this->session->userdata('last_name');
            $user_relation_info['user_id'] = $user_id;
        }
        return $user_relation_info;
    }

    function newsfeed($offset = 0, $limit = 0) {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $user_id = $this->session->userdata('user_id');
        $limit = STATUS_LIMIT_PER_REQUEST;
        $offset = STATUS_INITIAL_OFFSET;
        $result = array();
        $status_list = array();
        $result = $this->status_mongodb_model->get_statuses($user_id, $offset, $limit);
        $result = json_decode($result);
        if ($result != null) {
            if (property_exists($result, "userCurrentTime")) {
                $this->data['user_current_time'] = $result->userCurrentTime;
            }
            if (property_exists($result, "userGenderId")) {
                $this->data['user_gender_id'] = $result->userGenderId;
            }
            if (property_exists($result, "statusInfoList")) {
                $status_info_list = $result->statusInfoList;
            }
            foreach ($status_info_list as $resultInfo) {
                if (property_exists($resultInfo, "userInfo")) {
                    $resultInfo->userInfo = json_decode($resultInfo->userInfo);
                }
                if (property_exists($resultInfo, "pageInfo")) {
                    $resultInfo->pageInfo = json_decode($resultInfo->pageInfo);
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
        $this->data['app'] = "app.Status";
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['last_name'] = $this->session->userdata('last_name');

        $this->template->load(null, "member/newsfeed", $this->data);
    }

    function timeline($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        if ($profile_id == "0" && $user_id == FALSE) {
            redirect('auth/login', 'refresh');
        }
        $user_relation = array();
        $user_relation = $this->get_user_relation_info($profile_id);
        $this->data['profile_first_name'] = $user_relation['profile_first_name'];
        $this->data['profile_last_name'] = $user_relation['profile_last_name'];
        $this->data['gender_id'] = $user_relation['gender_id'];
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.MemberProfile";
        if ($user_id == FALSE) {

            $this->template->load(null, "non_member/timeline", $this->data);
        } else {
            $this->template->load(null, "member/timeline", $this->data);
        }
    }

    function about($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        if ($profile_id == "0" && $user_id == FALSE) {
            redirect('auth/login', 'refresh');
        }
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_relation'] = json_encode($this->get_user_relation_info($profile_id));
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.BasicProfile";
        if ($user_id == FALSE) {
            $this->template->load(null, "non_member/about", $this->data);
        } else {
            $this->template->load(null, "member/about", $this->data);
        }
    }

    function account_settings($profile_id = "0") {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $user_id = $this->session->userdata('user_id');
        $this->data['user_relation'] = json_encode($this->get_user_relation_info($profile_id));
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.Status";
        $this->template->load(null, "member/account_settings", $this->data);
    }

    function chat_tmpl_load() {
        $this->load->view('chat/friend_ticker');
    }

    function messages() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $user_current_time = now();
        $message_ummery_list = array();
        $recent_mage_info = array();
        $limit = 10;
        $offset = 0;
        $user_id = $this->session->userdata('user_id');
        $result = $this->message_mongodb_model->get_message_summary_list($user_id, $offset, $limit);
        if ($result != null) {
            $message_ummery_list = $result->messageSummeryList;
            if (property_exists($result, "recentMessageInfo")) {
                $recent_mage_info = json_decode($result->recentMessageInfo);
            }
            if (property_exists($result, "currentTime")) {
                $user_current_time = json_decode($result->currentTime);
            }
        }
        $this->data["message_summery_list"] = $message_ummery_list;
        $this->data["recent_message_info"] = $recent_mage_info;
        $this->data["user_current_time"] = $user_current_time;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_id'] = $user_id;
        $this->data['app'] = "app.Message";
        $this->template->load(null, "member/messages", $this->data);
    }

    function privacy_settings($profile_id = "0") {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $user_id = $this->session->userdata('user_id');
        $this->data['user_relation'] = json_encode($this->get_user_relation_info($profile_id));
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.Status";
        $this->template->load(null, "member/privacy_settings", $this->data);
    }

    function zakat() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(null, "member/zakat", $this->data);
    }

    function invite() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE_WITH_FOOTER, "member/invite");
    }
    
    

}
