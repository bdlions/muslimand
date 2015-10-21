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
    }

    function add_friend() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        $user_id = $this->session->userdata('user_id');
        $type_id = PENDING_RELATION_TYPE_ID;
        $result = $this->friend_mongodb_model->add_request($user_id, $friend_id, $type_id);
        if ($result != null) {
            $response["relation_ship_status"] = PENDING_RELATION_TYPE_ID;
            $response["is_initiated"] = REQUEST_RECEIVER;
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
        $type_id = FRIEND_RELATION_TYPE_ID;
        $result = $this->friend_mongodb_model->change_relation_ship_status($user_id, $friend_id, $type_id);
        if ($result != null) {
            $response["relation_ship_status"] = FRIEND_RELATION_TYPE_ID;
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
        $type_id = BLOCKED_RELATION_TYPE_ID;
        if ($status_type == NON_RELATION_TYPE_ID) {
            $result = $this->friend_mongodb_model->add_request($user_id, $friend_id, $type_id);
        } else {
            $result = $this->friend_mongodb_model->change_relation_ship_status($user_id, $friend_id, $type_id);
        }
        if (!empty($result)) {

            $response["message"] = "user is blocked successfully";
        }
        echo json_encode($response);
    }

    function delete_request() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "friendId") != FALSE) {
            $friend_id = $requestInfo->friendId;
        }
        $user_id = $this->session->userdata('user_id');
        $result = $this->friend_mongodb_model->delete_request($user_id, $friend_id);
        if ($result != null) {
            $response["relation_ship_status"] = NON_RELATION_TYPE_ID;
        }
        echo json_encode($response);
    }

    function get_friend_list($friend_id = 0) {
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
        $relations = array(
            "friend_relation_type_id" => FRIEND_RELATION_TYPE_ID,
            "pending_relation_type_id" => PENDING_RELATION_TYPE_ID,
            "blocked_relation_type_id" => BLOCKED_RELATION_TYPE_ID,
            "non_friend_relation_type_id" => NON_RELATION_TYPE_ID,
            "your_relation_type_id" => YOUR_RELATION_TYPE_ID,
            "request_sender" => REQUEST_SENDER,
            "request_receiver" => REQUEST_RECEIVER,
            "base_url" => base_url()
        );
        $this->data['constants'] = json_encode($relations);
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['user_id'] = $user_id;
        $this->data['friend_id'] = $friend_id;
        $this->data['app'] = "app.Friend";

        if ($friend_id != 0) {
            $user_id = $friend_id;
        } else {
            $user_id = $user_id;
        }
        $offset = 0;
        $limit = 5;
        $friend_list = array();
        $status_type = FRIEND_RELATION_TYPE_ID;
        $result = $this->friend_mongodb_model->get_friend_list($user_id, $offset, $limit, $status_type);
        if (!empty($result)) {
            $this->data['friendList'] = $result;
        }
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/friends", $this->data);
    }

    function get_pending_list() {
        $response = array();
        $user_id = $this->session->userdata('user_id'); 
        $offset = 0;
        $limit = 5;
        $friend_list = array();
        $status_type = PENDING_RELATION_TYPE_ID;
        $result = $this->friend_mongodb_model->get_friend_list($user_id, $offset, $limit, $status_type);
        if (!empty($result)) {
            $response["friend_list"] = json_decode($result);
            $response["status_type"] = FRIEND_RELATION_TYPE_ID;
        }
        echo json_encode($response);
    }

}
