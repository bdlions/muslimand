<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Friend extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('friend_mongodb_model');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function add_friend() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if ($request != null) {
            $user_id = $request->userId;
            $friend_id = $request->friendId;
            $result = $this->friend_mongodb_model->add_friend($user_id, $friend_id);
            if ($result != null) {
                $response["message"] = "Add Successfully";
            }
        }

        echo json_encode($response);
    }

    function get_friend_list() {
        $user_id = "100105";
        $friend_list = array();
        $result = $this->friend_mongodb_model->get_friend_list($user_id);
        if (!empty($result)) {
            $result = json_decode($result);
            if (property_exists($result, "friendList") != false) {
                $friend_list_array = $result->friendList;
            }
            foreach ($friend_list_array as $friends) {
                $friends->fristName = "Shemin";
                $friends->lastName = "Haque";
                $friend_list[] = $friends;
            }
        }
        $this->data['friendList'] = json_encode($friend_list);
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/friends", $this->data);
    }

}
