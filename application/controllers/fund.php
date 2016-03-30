<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fund extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load('auth');
        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
        // Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_home", $this->data);
    }

    function fund_newsfeed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_newsfeed", $this->data);
    }

    function fund_raising_page_add() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_raising_page_add", $this->data);
    }

    function fund_sort_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_my", $this->data);
    }

    function fund_sort_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_friend", $this->data);
    }

    function fund_sort_view_my_donated() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_my_donated", $this->data);
    }

    function fund_sort_view_featured() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_featured", $this->data);
    }

    function fund_sort_view_reached() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_reached", $this->data);
    }

    function fund_sort_view_expired() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_expired", $this->data);
    }

    function fund_sort_view_closed() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_closed", $this->data);
    }

}
