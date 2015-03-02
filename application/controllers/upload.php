<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|mp4';
//        $config['max_size']	= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if (!is_dir('uploads')) {
            mkdir('./uploads', 0777, true);
        }
        $dir_exist = true; // flag for checking the directory exist or not
        if (!is_dir('uploads/')) {
            mkdir('./uploads/', 0777, true);
            $dir_exist = false; // dir not exist
        } else {
        }
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $upload_data = $this->upload->data();
            exec("ffmpeg -i " . $upload_data['full_path'] . " " . $upload_data['file_path'] . $upload_data['raw_name'] . ".flv");
            $data = array('upload_data' => $this->upload->data(), 'filename1' => $upload_data['raw_name'].'.mp4', 'filename2' => $upload_data['raw_name'].'.flv');
            $this->load->view('upload_success', $data);
        }
    }
}

?>