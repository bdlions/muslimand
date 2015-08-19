<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('search_mongodb_model');
        $this->load->helper('url');

// Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function get_users() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
//        $search_value = $request->searchValue;
        $search_value = "searchvalue";
        $result = $this->search_mongodb_model->get_users($search_value);
        var_dump(json_decode($result));exit;
            $response["users_info"] = $result;
        echo json_encode($response);
    }


}
