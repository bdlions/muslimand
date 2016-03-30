<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function about() {
        $this->template->load(FOOTER_TEMPLATE, "footer/about");
    }

    function contact() {
        $this->template->load(FOOTER_TEMPLATE, "footer/contact");
    }

    function privacy() {
        $this->template->load(FOOTER_TEMPLATE, "footer/privacy");
    }

    function terms() {
        $this->template->load(FOOTER_TEMPLATE, "footer/terms");
    }

}
