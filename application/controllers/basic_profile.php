<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('basic_profile_model');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function add_basic_info($document_id, $additional_data) {
//        $user_id = $this->session->userdata('user_id');
        $user_id = "55605ee98267405c0700002a";
        $basic_info = array();
        $new_data_list = array();
        $basic_info_list = array();
        $new_basic_info = array();
        $return_basic_info = array();
        $new_data = array();
        $basic_info_array = $this->basic_profile_model->get_basic_info($user_id);
        if (!empty($basic_info_array) && is_array($basic_info_array)) {
            $basic_info = $basic_info_array[0];
            $new_basic_info = $basic_info ;
            $doucument_exsist_id = array_key_exists($document_id, $basic_info);
            if ($doucument_exsist_id == 1) {
                $basic_info_list = ($basic_info[$document_id]);
                $new_data_list = json_decode($basic_info_list);
            }
        }
        $new_data_list[] = $additional_data;
        $new_basic_info [$document_id] =  json_encode($new_data_list);
        if ($basic_info != null) {
            $result_id = $this->basic_profile_model->update_basic_info($user_id, $new_basic_info);
            if($result_id == true){
             return $return_basic_info[$document_id] = $additional_data;
            }
            else{
                return $this->basic_profile_model->errors_alert();
            }
        } else {
            return $result_id = $this->basic_profile_model->add_basic_info($user_id, $new_basic_info);
        }
    }

    function add_work_place() {
        if ($this->input->post()) {
            $response = array();
//            $response['message'] = '';
            $user_work_places = new stdClass();
            $user_work_places->company = $this->input->post('bp_company'); 
            $user_work_places->position = $this->input->post('bp_position'); 
            $user_work_places->city = $this->input->post('bp_city'); 
            $user_work_places->description = $this->input->post('bp_work_description'); 
            $user_work_places->time_period = $this->input->post('time_period'); 
            $document_id = "work_places";
            $response['basic_info'] = $this->add_basic_info($document_id, $user_work_places);
            $response['message'] = $this->basic_profile_model->messages_alert();
            echo json_encode($response);
        }
    }
     function add_universities() {
        if ($this->input->post()) {
            $response = array();
            $response['message'] = '';
            $user_university = new stdClass();
            $user_university->university = $this->input->post('bp_university'); 
            $user_university->description = $this->input->post('bp_university_des'); 
            $user_university->time_period = $this->input->post('time_period'); 
            $document_id = "universities";
            $response['basic_info'] = $this->add_basic_info($document_id, $user_university);
            $response['message'] = $this->basic_profile_model->messages_alert();
            echo json_encode($response);
        }
    }
    
    function add_colleges() {
        if ($this->input->post()) {
            $response = array();
            $response['message'] = '';
            $user_college = new stdClass();
            $user_college->college = $this->input->post('bp_college'); 
            $user_college->description = $this->input->post('bp_college_des'); 
            $user_college->time_period = $this->input->post('time_period'); 
            $document_id = "colleges";
            $response['basic_info'] = $this->add_basic_info($document_id, $user_college);
            $response['message'] = $this->basic_profile_model->messages_alert();
            echo json_encode($response);
        }
    }
   
    function add_schools() {
        if ($this->input->post()) {
            $response = array();
            $response['message'] = '';
            $user_school = new stdClass();
            $user_school->school = $this->input->post('bp_school'); 
            $user_school->description = $this->input->post('bp_school_dec'); 
            $user_school->time_period = $this->input->post('time_period'); 
            $document_id = "schools";
            $response['basic_info']= $this->add_basic_info($document_id, $user_school);
            $response['message'] = $this->basic_profile_model->messages_alert();
            echo json_encode($response);
        }
    }
    function add_professional_skills() {
        if ($this->input->post()) {
            $response = array();
            $response['message'] = '';
            $user_professional_skill = new stdClass();
            $user_professional_skill->p_skill = $this->input->post('bp_profession_skill'); 
            $document_id = "p_skills";
            $response['basic_info'] = $this->add_basic_info($document_id, $user_professional_skill);
            $response['message'] = $this->basic_profile_model->messages_alert();
            echo json_encode($response);
        }
    }

    function get_basic_profile_info() {
        $user_id = "555ac3f0826740c810000029";
        $basic_info = $this->basic_profile_model->get_basic_info($user_id);
        var_dump($basic_info);
    }

    function delete_basic_profile_info() {
        $user_id = "555ac3f0826740c810000029";
        $result = $this->basic_profile_model->delete_basic_info($user_id);
    }

}
