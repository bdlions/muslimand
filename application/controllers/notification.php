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
    }

    function get_notification_counter() {
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $notification_counters = $this->notification_mongodb_model->get_notification_counter($user_id);
        if (!empty($notification_counters)) {
            if (property_exists($notification_counters, "notificationCounter")) {
                $response['notification_counters'] = json_decode($notification_counters->notificationCounter);
            }
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
            $response["general_notification"] = $this->notification_mongodb_model->update_status_get_general_notifications($user_id, $status_type_id, $offset, $limit);
        } else {
            $response["general_notification"] = $this->notification_mongodb_model->get_general_notifications($user_id, $offset, $limit);
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
        $offset = 0;
        $limit = 5;
        if ($counter_value > 0) {
            $response["friend_list"] = $this->notification_mongodb_model->update_status_get_friend_notification($user_id, $offset, $limit);
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
