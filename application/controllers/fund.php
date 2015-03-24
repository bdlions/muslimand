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
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_home");
    }

    function fund_newsfeed() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_newsfeed");
    }

    function fund_raising_page_add() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_raising_page_add");
    }

    function fund_sort_view_my() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_my");
    }

    function fund_sort_view_friend() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_friend");
    }

    function fund_sort_view_my_donated() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_my_donated");
    }

    function fund_sort_view_featured() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_featured");
    }

    function fund_sort_view_reached() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_reached");
    }

    function fund_sort_view_expired() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_expired");
    }

    function fund_sort_view_closed() {
        $this->template->load(MEMBER_FUND_IN_TEMPLATE, "member/fund/fund_sort_view_closed");
    }
}
