<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('common_mongodb_model');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }
    function get_countries(){
        
        $countries = $this->common_mongodb_model->get_all_countries();
        foreach ($countries as $country_list) {
             $this->data['country_list'][$country_list['code']] = $country_list['name'];
            
        }
        var_dump($countries);
    } 
    
    
    function t(){
        echo $this->lang->line('update_user_profile_successful');
    }
  

}
