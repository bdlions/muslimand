<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('notification_mongodb_model');
        $this->load->helper('url');
        $this->load->library('Utils');

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

    function get_notification_counter() {
        $response = array();
        $notification_counters = $this->notification_mongodb_model->get_notification_counter();
        if (property_exists($notification_counters, "notificationCounter")) {
            $response['notification_counters'] = json_decode($notification_counters->notificationCounter);
        }
        echo json_encode($response);
        return;
    }

    function update_status_get_general_notifications() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "counterValue")) {
            $counter_value = $requestInfo->counterValue;
        }
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $status_type_id = NOTIFICATION_STATUS_TYPE_READ_ID;
        $offset = 0;
        $limit = 5;
        $notification_list = array();
        if ($counter_value > 0) {
            $response["notification_list"] = $this->notification_mongodb_model->update_status_get_general_notifications($user_id, $status_type_id, $offset, $limit);
        } else {
            $response["notification_list"] = $this->notification_mongodb_model->get_general_notifications($user_id, $offset, $limit);
        }
        echo json_encode($response);
        return;
    }

    function update_status_get_friend_notification() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "counterValue")) {
            $counter_value = $requestInfo->counterValue;
        }
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $status_type_id = RELATION_TYPE_PENDING_ID;
        $offset = 0;
        $limit = 5;
        if ($counter_value > 0) {
            $response["friend_list"] = $this->notification_mongodb_model->update_status_get_friend_notification($user_id, $status_type_id, $offset, $limit);
        } else {
            $response["friend_list"] = $this->notification_mongodb_model->get_friend_notifications($user_id, $offset, $limit);
        }
        echo json_encode($response);
        return;
    }

    function get_all_notification() {
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 5;
        $this->data["notification_list"] = json_encode($this->notification_mongodb_model->get_general_notifications($user_id, $offset, $limit));
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Friend";
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/notification_all", $this->data);
    }

}
