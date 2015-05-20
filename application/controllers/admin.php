<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    
    function admin_panel()
    {
        $this->template->load(ADMIN_LOGGED_IN_TEMPLATE, "admin/admin_panel");
    }
    function photo_config()
    {
        $this->template->load(ADMIN_LOGGED_IN_TEMPLATE, "admin/sections/photo/photos");
    }
    function video_config()
    {
        $this->template->load(ADMIN_LOGGED_IN_TEMPLATE, "admin/sections/video/videos");
    }
    function page_config()
    {
        $this->template->load(ADMIN_LOGGED_IN_TEMPLATE, "admin/sections/page/pages");
    }

}
