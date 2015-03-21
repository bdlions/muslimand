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

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }
    function index(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_home");
    }
    function course_add(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_add");
    }
    function academy_course_home(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_home");
    }
    function academy_course_lecture(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_lecture");
    }
    function academy_course_students(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_students");
    }
    function academy_course_realted_ques(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_course_realted_ques");
    }
    function academy_sort_view_my(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_sort_view_my");
    }
    function academy_sort_view_my_published(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_sort_view_my_published");
    }
    function academy_sort_view_friend(){
        $this->template->load(MEMBER_ACADEMY_IN_TEMPLATE, "member/academy/academy_sort_view_friend");
    }
}
