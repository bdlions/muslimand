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

    function get_search_result() {
        $temp_users = array();
        $response = array();
        $search_value = $_POST['input_value'];
        if ($search_value != null) {
            $result_users = $this->search_mongodb_model->get_users($search_value);
            if ($result_users != null) {
                
                $users = json_decode($result_users);
                var_dump($users);exit;
                foreach ($users as $user) {

                    $user->value = $user->firstName . " " . $user->lastName;
//                    $user->signature = "";
                    $user->url = base_url() . 'member/timeline/' . $user->userId;
                    if ($user->firstName != NULL && $user->firstName != "") {
                        $user->signature = $user->firstName[0];
                    }
                    if ($user->lastName != NULL && $user->lastName != "") {
                        $user->signature = $user->signature . $user->lastName[0];
                    }
//                    $user->user_image = base_url() . PROFILE_PICTURE_PATH_W32_H32 . $user->photo;
                    array_push($temp_users, $user);
                }
                $response['users'] = $temp_users;
            }
            echo json_encode($response);
        } else {
            echo json_encode(array());
        }
    }

}
