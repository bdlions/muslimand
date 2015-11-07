<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('message_mongodb_model');
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

    function add_mesage() {
        
    }

    function get_message_summary_list() {
        $limit = 5;
        $offset = 0;
        $user_id = $this->session->userdata('user_id');
        $result = $this->message_mongodb_model->get_message_summary_list($user_id, $offset, $limit);
        var_dump($result);
    }

    function get_message_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "groupId")) {
            $group_id = $requestInfo->groupId;
        }
        $limit = 5;
        $offset = 0;
        $result = $this->message_mongodb_model->get_message_list($group_id, $offset, $limit);
       echo json_encode($result);
        return;
    }

}
