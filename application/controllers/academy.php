<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Academy extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load('auth');
        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();
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

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_home",$this->data);
    }

    function course_add() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_add",$this->data);
    }

    function academy_course_home() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_home",$this->data);
    }

    function academy_course_lecture() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_lecture",$this->data);
    }

    function academy_course_students() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_students",$this->data);
    }

    function academy_course_realted_ques() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_realted_ques",$this->data);
    }

    function academy_sort_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_sort_view_my",$this->data);
    }

    function academy_sort_view_my_published() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_sort_view_my_published", $this->data);
    }

    function academy_sort_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['constants'] = json_encode($this->relations);
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_sort_view_friend", $this->data);
    }

}
