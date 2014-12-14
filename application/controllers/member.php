<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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

    //redirect if needed, otherwise display the user list
 

       
    
    
    function newsfeed()
    {
        echo"fhgfh";        exit();
        $this->template->load(NULL, "member/newsfeed", $this->data);
    }
    function profile()
    {
        $this->template->load(NULL, "member/profile", $this->data);
    }
//    function ()
//    {
//        $this->template->load(NULL, "view/member/newsfeed", $this->data);
//    }
//    function newsfeed()
//    {
//        $this->template->load(NULL, "view/member/newsfeed", $this->data);
//    }

}
