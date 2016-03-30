<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

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
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_BLOG_IN_TEMPLATE, "member/blog/blog_home", $this->data);
    }

    function blogs_add() {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_BLOG_IN_TEMPLATE, "member/blog/blog_add", $this->data);
    }

    function blogs_sort_view_my() {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_BLOG_IN_TEMPLATE, "member/blog/blogs_sort_view_my", $this->data);
    }

    function blogs_sort_view_friend() {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_BLOG_IN_TEMPLATE, "member/blog/blogs_sort_view_friend", $this->data);
    }

    function blogs_newsfeed() {
        $user_id = $this->session->userdata('user_id');
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_BLOG_IN_TEMPLATE, "member/blog/blogs_newsfeed", $this->data);
    }

}
