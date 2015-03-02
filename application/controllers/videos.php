<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

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
    function video_add(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/video_add");
    }
    function video_demo(){
        $this->template->load(VIDEO_IN_TEMPLATE, "member/video/video_demo");
    }
    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|mp4';
        $config['max_size'] = '100000000';
//        $config['max_width'] = '1024';
//        $config['max_height'] = '768';

//        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);exit;
//            $this->load->view('upload_form', $error);
        } else {
            $upload_data = $this->upload->data();
            exec("ffmpeg -i " . $upload_data['full_path'] . " " . $upload_data['file_path'] . $upload_data['raw_name'] . ".flv");
            $this->data['upload_data'] = $upload_data;
            $this->template->load(VIDEO_IN_TEMPLATE, "member/video/video_demo");
//            $this->load->view('video_demo', $data);
        }
    }

}
