<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('status_mongodb_model');
        $this->load->helper('url');

// Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function add_status() {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        $user_id = "100157";
        if ($request != null) {
            $user_info = new stdClass();
            $user_info->userId = "100157"; //get from session;
            $user_info->fristName = "Shemin"; //get from session;
            $user_info->lastName = "Haque";

//            $ref_user_info = new StdClass(); //get from session;
//            $ref_user_info->userId = "100105";
//            $ref_user_info->fristName = "Keya";
//            $ref_user_info->lastName = "Moni";
//            $ref_Info = new StdClass();
//            $ref_Info->description = "I Like this Invention";
//            $ref_Info->userInfo = $ref_user_info;

            $status_info = new stdClass();
            $status_info->userId = '100157';
            $status_info->statusId = '1';
            $status_info->statusTypeId = '1';
            $status_info->description = $request->description;
            $status_info->userInfo = $user_info;
            $result = $this->status_mongodb_model->add_status($status_info);
            if ($result != null) {
                $response["status_info"] = $status_info;
            }
        }
        echo json_encode($response);
    }

    function update_status() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $status_id = $request->statusId;
        $description = $request->description;
        $status_info = new stdClass();
        $status_info->description = $request->description;
        $result = $this->status_mongodb_model->update_status($status_id, $description);
        if ($result != null) {
            $response["status_info"] = $status_info;
        }
        echo json_encode($response);
    }

    function add_status_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $ref_user_info = new StdClass(); //get from session;
        $ref_user_info->userId = $request->refUserId;
        $ref_user_info->fristName = "Keya";
        $ref_user_info->lastName = "Moni";
        $status_id = $request->statusId;
        $status_like_info = new StdClass();
        $status_like_info->userInfo = $ref_user_info;
        $result = $this->status_mongodb_model->add_status_like($status_id, $status_like_info);
        if ($result != null) {
            $response["status_like_info"] = $status_like_info;
        }
        echo json_encode($response);
    }

    function add_status_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $ref_user_info = new StdClass(); //get from session;
        $ref_user_info->userId = $request->refUserId;
        $ref_user_info->fristName = "Keya";
        $ref_user_info->lastName = "Moni";
        $status_id = $request->statusId;
        $status_comment_info = new StdClass();
        $status_comment_info->description = $request->description;
        $status_comment_info->userInfo = $ref_user_info;
        $result = $this->status_mongodb_model->add_status_comment($status_id, $status_comment_info);
        if ($result != null) {
            $response["status_comment_info"] = $status_comment_info;
        }
        echo json_encode($response);
    }

    function get_statuses() {
        $user_id = "100157";
//        $result = array();
//        $result = $this->status_mongodb_model->get_statuses($user_id);
//        if ($result != null) {
//            $result1 = json_decode($result);
//            $this->data["newsfeed"] = $result1->statusList;
//        }
        $result = array();
        $result['newsfeed'] = $this->status_mongodb_model->get_statuses($user_id);
//        $result['newsfeed'] = 'dsfsdfsdf';
        $this->data = $result;

        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/newsfeed", $this->data);
    }

    function delete_status() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $status_id = $request->statusId;
        $result = array();
        $response = array();
        $result = $this->status_mongodb_model->delete_status($status_id);
        if ($result != null) {
            $response["message"] = "Status Delete Successfully";
        }
        echo json_encode($response);
    }

    function test_add() {
//        $arr['firstName'] = "dklfjsdf";
//        $arr['lastName'] = "fsdfsdf";
//        $arr['firstName'] = $_POST['firstName'];
//        $arr['lastName'] = $_POST['lastName'];

        echo json_encode($this->input->post());
//        var_dump($this->input->post('testArray'));
    }

}
