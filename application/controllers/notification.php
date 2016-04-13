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
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
    }

    function get_notification_counter() {
        $response = array();
        $user_id = $this->session->userdata('user_id');
        $notification_counters_info = $this->notification_mongodb_model->get_notification_counter($user_id);
        if (!empty($notification_counters_info)) {
            if (property_exists($notification_counters_info, "userInitiationInfo")) {
                $response['user_initiation_info'] = json_decode($notification_counters_info->userInitiationInfo);
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
//        if ( $counter_value > 0) {
        $general_notificatons = $this->notification_mongodb_model->update_status_get_general_notifications($user_id, $status_type_id, $offset, $limit);
        foreach ($general_notificatons as $notification) {
            $notification->notification = json_decode($notification->notification);
            $notification_list[] = $notification;
        }
        $response['general_notification'] = $notification_list;


//             $result = json_decode($result);
//            $response["general_notification"] = $this->notification_mongodb_model->update_status_get_general_notifications($user_id, $status_type_id, $offset, $limit);
//        } else {
//            $response["general_notification"] = $this->notification_mongodb_model->get_general_notifications($user_id, $offset, $limit);
//        }
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
        $counter_value = 0;
        if ($counter_value > 0) {
        $result = $this->notification_mongodb_model->update_status_get_friend_notification($user_id, $offset, $limit);
        } else {
            $result = $this->notification_mongodb_model->get_friend_notifications($user_id, $offset, $limit);
        }
        $friend_notification_list = array();
        foreach ($result as $notification) {
            $notification->friendNotification = json_decode($notification->friendNotification);
            $friend_notification_list[] = $notification;
        }
        $response['friend_notification_list'] = $friend_notification_list;
        echo json_encode($response);
        return;
    }

    function get_all_notification() {
        $user_id = $this->session->userdata('user_id');
        $offset = 0;
        $limit = 5;
        $result = $this->notification_mongodb_model->get_general_notifications($user_id, $offset, $limit);
        $friend_notification_list = array();
        foreach ($result as $notification) {
            $notification->notification = json_decode($notification->notification);
            $friend_notification_list[] = $notification;
        }
        $this->data['notification_list'] = json_encode($friend_notification_list);
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['app'] = "app.Friend";
        $this->template->load(null, "member/notification_all", $this->data);
//        $this->template->load(MEMBER_TEMPLATE, "member/notification_all", $this->data);
//        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/notification_all", $this->data);
    }

}
