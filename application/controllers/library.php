<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
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

    function index() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_home",$this->data);
    }

    function library_add() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_add",$this->data);
    }

    function library_newsfeed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_newsfeed",$this->data);
    }

    function library_sort_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_sort_view_my",$this->data);
    }

    function library_sort_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_sort_view_friend",$this->data);
    }

    function library_most_view() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_most_view",$this->data);
    }

    function library_most_discussed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_most_discussed",$this->data);
    }

}
