<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

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
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_home");
    }
    function photos_view_my(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_view_my");
    }
    function photos_view_friend(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_view_friend");
    }
    function photos_add(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_add");
    }
    function photos_albums(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_albums");
    }
    function photos_view_my_albums(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_view_my_albums");
    }
    function photos_sort_most_viewed(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_sort_most_viewed");
    }
    function photos_sort_top_rated(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_sort_top_rated");
    }
    function photos_sort_most_discussed(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photos_sort_top_rated");
    }
    function photos_gallery(){
        $this->template->load(MEMBER_PHOTO_IN_TEMPLATE, "member/photo/photo_gallery");
    }
}
