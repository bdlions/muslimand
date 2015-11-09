<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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


        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_home", $this->data);
    }

    function pages_add() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_add", $this->data);
    }

    function pages_sort_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_view_my", $this->data);
    }

    function pages_sort_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_view_friend", $this->data);
    }

    function pages_sort_most_liked() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_most_liked", $this->data);
    }

    function pages_newsfeed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_newsfeed", $this->data);
    }

}
