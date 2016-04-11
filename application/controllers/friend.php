<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Friend extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('friend_mongodb_model');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function add_friend() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        $user_id = $this->session->userdata('user_id');
        $result = $this->friend_mongodb_model->add_friend($user_id, $friend_id);
        if ($result != null) {
            $response["relation_ship_status"] = RELATION_TYPE_PENDING_ID;
            $response["is_initiated"] = REQUEST_SENDER;
        }

        echo json_encode($response);
    }

    function update_online_status() {
        $user_id = $this->session->userdata('user_id');
        $result_event = $this->friend_mongodb_model->update_online_status($user_id);
        if ($result_event != NULL || $result_event != "") {
            $result = json_decode($result);
            if ($result->responseCode == REQUEST_SUCCESSFULL) {
                $response['status'] = "1";
            }else{
              $response['status'] = "0";  
            }
        }
    }

    function approve_request() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        $user_id = $this->session->userdata('user_id');
        $result = $this->friend_mongodb_model->approve_friend($user_id, $friend_id);
        if ($result != null) {
            $response["relation_ship_status"] = RELATION_TYPE_FRIEND_ID;
        }
        echo json_encode($response);
    }

    function block_request($friend_id = 0) {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        if (property_exists($requestInfo, "statusType") != FALSE) {
            $status_type = $requestInfo->statusType;
        }
        $user_id = $this->session->userdata('user_id');
        if ($status_type == RELATION_TYPE_NON_FRIEND_ID) {
            $result = $this->friend_mongodb_model->block_non_friend($user_id, $friend_id);
        } else {
            $result = $this->friend_mongodb_model->block_friend($user_id, $friend_id);
        }
        if (!empty($result)) {

            $response["message"] = "user is blocked successfully";
        }
        echo json_encode($response);
    }

    function remove_friend_request() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        $user_id = $this->session->userdata('user_id');
        $result = $this->friend_mongodb_model->remove_friend_request($user_id, $friend_id);
        if ($result != null) {
            $response["relation_ship_status"] = RELATION_TYPE_NON_FRIEND_ID;
        }
        echo json_encode($response);
    }

    function cancel_friend_request() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        $user_id = $this->session->userdata('user_id');
        $result = $this->friend_mongodb_model->remove_friend_request($user_id, $friend_id);
        if ($result != null) {
            $response["relation_ship_status"] = RELATION_TYPE_NON_FRIEND_ID;
        }
        echo json_encode($response);
    }

    function get_friend_list($profile_id = "0") {
        $user_relation = array();
        $friend_list = array();
        $user_id = $this->session->userdata('user_id');
        if ($profile_id != $user_id && $profile_id != "0") {
            $result = $this->friend_mongodb_model->get_relationship_status($user_id, $profile_id);
            $result = json_decode($result);
            if (property_exists($result, "relationInfo")) {
                $relation_info = json_decode($result->relationInfo);
                if (property_exists($relation_info, "relationTypeId") != FALSE) {
                    $user_relation['relation_ship_status'] = $relation_info->relationTypeId;
                }
                if (property_exists($relation_info, "isInitiated") != FALSE) {
                    $user_relation['is_initiated'] = $relation_info->isInitiated;
                }
                if (property_exists($relation_info, "firstName") != FALSE) {
                    $user_relation['profile_first_name'] = $relation_info->firstName;
                }
                if (property_exists($relation_info, "lastName") != FALSE) {
                    $user_relation['profile_last_name'] = $relation_info->lastName;
                }
            }
            if (property_exists($result, "userGenderId")) {
                $user_gender_id = json_decode($result->userGenderId);
                $user_relation['gender_id'] = $user_gender_id;
            }
        } else {
            $user_relation['gender_id'] = $this->friend_mongodb_model->get_user_gender_info($user_id);
            $user_relation['relation_ship_status'] = YOUR_RELATION_TYPE_ID;
            $user_relation['profile_first_name'] = $this->session->userdata('first_name');
            $user_relation['profile_last_name'] = $this->session->userdata('last_name');
        }

//get friend list either user itself or friend's 
        if ($profile_id != "0" && $profile_id != $user_id) {
            $friend_list = $this->get_friend_list_info($profile_id);
        } else {
            $friend_list = $this->get_friend_list_info($user_id);
        }
        $this->data['friendList'] = $friend_list;
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.Friend";
        $this->template->load(null, "member/friends", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/friends", $this->data);
//        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/friends", $this->data);
    }

    function get_chat_friend_list() {
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $response['friend_list'] = $this->get_friend_list_info($user_id);
        $user_info = new stdClass();
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->genderId = $this->friend_mongodb_model->get_user_gender_info($user_id);
        $response['user_info'] = $user_info;
        echo json_encode($response);
    }

    function get_short_friend_list() {
        $limit = SHORT_FRIEND_LIST_LIMIT;
        $offset = SHORT_FRIEND_LIST_OFFSET;
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "profileId") != FALSE) {
            $profile_id = $requestInfo->profileId;
        }
        $response['friend_list'] = $this->get_friend_list_info($profile_id, $limit, $offset);
        echo json_encode($response);
    }

    function get_friend_list_info($user_id = 0, $limit = 12, $offset = 0) {
        $offset = $offset;
        $limit = $limit;
        $friend_list = array();
        $status_type = RELATION_TYPE_FRIEND_ID;
        $friend_list_result = $this->friend_mongodb_model->get_friend_list($user_id, $status_type, $offset, $limit);
        if ($friend_list_result != null) {
            $friend_list_result = json_decode($friend_list_result);
            if (property_exists($friend_list_result, "result")) {
                $friend_list = $friend_list_result->result;
            }
        }
        return $friend_list;
    }

    function get_pending_list() {
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 5;
        $friend_list = array();
        $status_type = RELATION_TYPE_PENDING_ID;
        $result = $this->friend_mongodb_model->get_pending_list($user_id, $offset, $limit, $status_type);
        if (!empty($result)) {
            $response["friend_list"] = json_decode($result);
            $response["status_type"] = RELATION_TYPE_FRIEND_ID;
        }
        echo json_encode($response);
    }

}
