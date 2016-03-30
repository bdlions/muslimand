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
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
    }

    function get_search_result() {
        $temp_users = array();
        $temp_pages = array();
        $response = array();
        $search_value = $_POST['input_value'];
        if ($search_value != null) {
            $offset = SEARCH_OFFSET;
            $limit = SEARCH_LIMIT;
            $search_result = $this->search_mongodb_model->get_search_result($search_value, $offset, $limit);
            if ($search_result != null) {

                $search_result = json_decode($search_result);
                if (property_exists($search_result, "userList") != FALSE) {
                    $users = $search_result->userList;
                    foreach ($users as $user) {
                        $user->value = $user->firstName . " " . $user->lastName;
                        $user->url = base_url() . 'member/timeline/' . $user->userId;
                        if ($user->firstName != NULL && $user->firstName != "") {
                            $user->signature = $user->firstName[0];
                        }
                        $user->user_image = base_url() . PROFILE_PICTURE_PATH_W30_H30 . $user->userId . ".jpg";
                        $user->user_on_error_image = base_url() . PROFILE_PICTURE_PATH_W30_H30 . "30x30_" . $user->gender->genderId . ".jpg";
                        array_push($temp_users, $user);
                    }
                    $response['users'] = $temp_users;
                }
                if (property_exists($search_result, "pageList") != FALSE) {
                    $pages = $search_result->pageList;
                    foreach ($pages as $page) {
                        $page->value = $page->title ;
                        $page->url = base_url() . 'pages/timeline/' . $page->pageId;
                        $page->page_image = base_url() . PAGE_PROFILE_PICTURE_PATH_W30_H30 .$page->pageId . ".jpg";
                        $page->page_on_error_image = base_url() . PAGE_PROFILE_PICTURE_PATH_W30_H30 . "profile.jpg";
                        array_push($temp_pages, $page);
                    }
                    $response['pages'] = $temp_pages;
                }
            }
            echo json_encode($response);
        } else {
            echo json_encode(array());
        }
    }

}
