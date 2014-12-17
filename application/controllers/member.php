<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
    
    function newsfeed()
    {
        $this->template->load("member/newsfeed");
    }
    function profile()
    {
        $this->template->load("member/profile");
    }
    function about()
    {
//        $this->template->load(NULL, "member/about", $this->data);
        
        $this->load->view("member/about");
    }

}
