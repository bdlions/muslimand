<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }
    function index(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/video_home");
    }
    function videos_sort_most_discussed(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_discussed");
    }
    function videos_sort_most_viewed(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_sort_most_viewed");
    }
    function videos_sort_top_rated(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_sort_top_rated");
    }
    function videos_view_favorite(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_view_favorite");
    }
    function videos_view_friend(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_view_friend");
    }
    function videos_view_my(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_view_my");
    }
    function videos_iframe(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/videos_iframe");
    }

}
