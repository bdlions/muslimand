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
    }
    function index(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_home");
    }
    function library_add(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_add");
    }
    function library_newsfeed(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_newsfeed");
    }
    function library_sort_view_my(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_sort_view_my");
    }
    function library_sort_view_friend(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_sort_view_friend");
    }
    function library_most_view(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_most_view");
    }
    function library_most_discussed(){
        $this->template->load(MEMBER_LIBRARY_IN_TEMPLATE, "member/library/library_most_discussed");
    }
}
