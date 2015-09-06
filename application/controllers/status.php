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

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function add_status() {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        $user_id = "100157";
        if ($request != null) {
            $user_info = new stdClass();
            $user_info->userId = $this->session->userdata('user_id');
            $user_info->fristName = "Shemin"; //get from session;
            $user_info->lastName = "Haque";
            $status_info = new stdClass();
            $status_info->userId = '100157';
            $status_info->statusId = '2';
            $status_info->statusTypeId = POST_STATUS_BY_USER_AT_HIS_PROFILE_TYPE_ID;
            $status_info->description = $request->description;
            $status_info->userInfo = $user_info;
            $result = $this->status_mongodb_model->add_status($status_info);
            if ($result != null) {
                $status_info->commentList = array();
                $status_info->likeList = array();
                $status_info->shareList = array();
                $response["status_info"] = $status_info;
            }
        }
        echo json_encode($response);
    }

    function share_status() {

        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        if ($request != null) {
            $user_info = new stdClass();
            $user_info->userId = $this->session->userdata('user_id');
            $user_info->fristName = "Shemin"; //get from session;
            $user_info->lastName = "Haque";
            
            $ref_user_info = new StdClass(); //get from session;
            $ref_user_info->userId = "100105";
            $ref_user_info->fristName = "Keya";
            $ref_user_info->lastName = "Moni";
            $ref_info = new stdClass();
            $ref_info->description = $request->oldDescription;
            $ref_info->userInfo = $ref_user_info;
            
            $status_id = $request->statusId;
            $status_info = new stdClass();
            $status_info->userId = '100157';
            $status_info->statusTypeId = POST_STATUS_BY_USER_AT_FRIEND_PROFILE_TYPE_ID;
            $status_info->description = $request->description;
            $status_info->userInfo = $user_info;
            $status_info->referenceInfo = $ref_info;
            
            $result = $this->status_mongodb_model->share_status($status_id, $ref_user_info, $status_info);
            if ($result != null) {
                $status_info->commentList = array();
                $status_info->likeList = array();
                $status_info->shareList = array();
                $response["status_info"] = $status_info;
            }
        }
        $status_id = $request->statusId;

        
        if ($result != null) {
            $response['share_info'] = $ref_user_info;
        }
    }

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function update_status() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $status_id = $request->statusId;
        $description = $request->description;
        $result = $this->status_mongodb_model->update_status($status_id, $description);
        if ($result != null) {
            $response["description"] = $description;
        }
        echo json_encode($response);
    }

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function add_status_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $ref_user_info = new StdClass(); //get from session;
        $ref_user_info->userId = $this->session->userdata('user_id');
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

    /**
     * this methord add status comment
     * @param userId and user comment Info
     *  */
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

    /**
     * this methord delete status 
     * @param userId 
     *  */
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
