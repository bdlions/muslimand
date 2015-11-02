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
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
        $this->relations = $relations = array(
            "relation_type_friend_id" => RELATION_TYPE_FRIEND_ID,
            "relation_type_pending_id" => RELATION_TYPE_PENDING_ID,
            "relation_type_block_id" => RELATION_TYPE_BLOCK_ID,
            "non_relation_type_friend_id" => RELATION_TYPE_NON_FRIEND_ID,
            "your_relation_type_id" => YOUR_RELATION_TYPE_ID,
            "request_sender" => REQUEST_SENDER,
            "request_receiver" => REQUEST_RECEIVER,
            "base_url" => base_url()
        );
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

    function get_friend_list($friend_id = "0") {
        $user_relation = array();
        $user_id = $this->session->userdata('user_id');
        if ($friend_id != $user_id && $friend_id != "0") {
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

//get friend list either user itself or friend's 
        if ($friend_id != "0") {
            $user_id = $friend_id;
        } else {
            $user_id = $user_id;
        }
        $offset = 0;
        $limit = 5;
        $friend_list = array();
        $status_type = "1";
        $friend_list_result = $this->friend_mongodb_model->get_friend_list($user_id, $status_type, $offset, $limit);
        if ($friend_list_result != null) {
            $friend_list_result = json_decode($friend_list_result);
            if (property_exists($friend_list_result, "result")) {
                $friend_list = $friend_list_result->result;
            }
        }
     
        $this->data['friendList'] = $friend_list;
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['friend_id'] = $friend_id;
        $this->data['app'] = "app.Friend";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/friends", $this->data);
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
