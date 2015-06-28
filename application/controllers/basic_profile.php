<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('basic_profile_mongodb_model');
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
        $user_id = "5563101d8267404011000029";
        $basic_info = array();
        $new_data_list = array();
        $basic_info_list = array();
        $new_basic_info = array();
        $return_basic_info = array();
        $new_data = array();
        $basic_info_array = $this->basic_profile_mongodb_model->get_basic_info($user_id);
        if (!empty($basic_info_array) && is_array($basic_info_array)) {
            $basic_info = $basic_info_array[0];
            $new_basic_info = $basic_info;
            $doucument_exsist_id = array_key_exists($document_id, $basic_info);
            if ($doucument_exsist_id == 1) {
                $basic_info_list = ($basic_info[$document_id]);
                $new_data_list = json_decode($basic_info_list);
            }
        }
        $new_data_list[] = $additional_data;
        $new_basic_info [$document_id] = json_encode($new_data_list);
        if ($basic_info != null) {
            $result_id = $this->basic_profile_mongodb_model->update_basic_info($user_id, $new_basic_info);
            if ($result_id == true) {

                return $return_basic_info[$document_id] = $additional_data;
            } else {
                return $this->basic_profile_mongodb_model->errors_alert();
            }
        } else {
            return $result_id = $this->basic_profile_mongodb_model->add_basic_info($user_id, $new_basic_info);
        }
    }

    function add_work_place() {
        $user_id = "100157";
        if ($this->input->post()) {
            $response = array();
            $return_basic_info = array();
            $user_work_places = new stdClass();
            $user_work_places->company = $this->input->post('bp_company');
            $user_work_places->position = $this->input->post('bp_position');
            $user_work_places->city = $this->input->post('bp_city');
            $user_work_places->description = $this->input->post('bp_work_description');
            $result = $this->basic_profile_mongodb_model->add_work_place($user_id, $user_work_places);
            if ($result != null) {
                $response["work_place"] = $user_work_places;
            }
            echo json_encode($response);
        }
    }

    function add_professional_skill() {
        $user_id = "100157";
        if ($this->input->post()) {
            $response = array();
            $user_professional_skill = new stdClass();
            $user_professional_skill->pSkill = $this->input->post('bp_profession_skill');
            $result = $this->basic_profile_mongodb_model->add_p_skill($user_id, $user_professional_skill);
            if ($result != null) {
                $response["p_skill"] = $user_professional_skill;
            }

            echo json_encode($response);
        }
    }

    function add_university() {
        $user_id = "100157";
        if ($this->input->post()) {
            $response = array();
            $response['message'] = '';
            $user_university = new stdClass();
            $user_university->university = $this->input->post('bp_university');
            $user_university->description = $this->input->post('bp_university_des');
//            $user_university->time_period = $this->input->post('time_period');
            $result = $this->basic_profile_mongodb_model->add_university($user_id, $user_university);
            if ($result != null) {
                $response["university"] = $user_university;
            }
            echo json_encode($response);
        }
    }

    function add_college() {
        $user_id = "100157";
        if ($this->input->post()) {
            $response = array();
            $basic_info = array();
            $response['message'] = '';
            $user_college = new stdClass();
            $user_college->college = $this->input->post('bp_college');
            $user_college->description = $this->input->post('bp_college_des');
            $result = $this->basic_profile_mongodb_model->add_college($user_id, $user_college);
            if ($result != null) {
                $response["college"] = $user_college;
            }
            echo json_encode($response);
        }
    }

    function add_school() {
        $user_id = "100157";
        if ($this->input->post()) {
            $response = array();
            $response['message'] = '';
            $user_school = new stdClass();
            $user_school->school = $this->input->post('bp_school');
            $user_school->description = $this->input->post('bp_school_dec');
            $result = $this->basic_profile_mongodb_model->add_school($user_id, $user_school);
            if ($result != null) {
                $response["school"] = $user_school;
            }
            echo json_encode($response);
        }
    }

    function get_works_education() {
        $response = array();
        $response['message'] = 'hi there';
        $user_id = "100157";
        $basic_p_info = $this->basic_profile_mongodb_model->get_works_education($user_id);
        $response['work_places'] = $basic_p_info->workPlaces;
        $response['colleges'] = $basic_p_info->colleges;
        $response['universities'] = $basic_p_info->universities;
        $response['schools'] = $basic_p_info->schools;
        $response['p_skills'] = $basic_p_info->pSkills;
        echo json_encode($response);
    }

    function get_city_town() {
        $response = array();
        $user_id = "100157";
        $city_town = $this->basic_profile_mongodb_model->get_city_town($user_id);
        echo json_encode($city_town);
    }
    function get_family_relations() {
        $response = array();
        $user_id = "100157";
        $family_relations = $this->basic_profile_mongodb_model->get_family_relations($user_id);
        echo json_encode($family_relations);
    }

    function add_current_city() {
        $response = array();
        $user_id = "100157";
        $user_current_city = new stdClass();
        $user_current_city->cityName = $this->input->post('current_city');
        $result = $this->basic_profile_mongodb_model->add_current_city($user_id,$user_current_city);
        if($result != null){
            $response["current_city"] = $user_current_city ;
        }
        echo json_encode($response);
    }
    function add_home_town() {
        $response = array();
        $user_id = "100157";
        $user_home_town = new stdClass();
        $user_home_town->townName = $this->input->post('home_town');
        $result = $this->basic_profile_mongodb_model->add_home_town($user_id,$user_home_town);
        if($result != null){
            $response["home_town"] = $user_home_town ;
        }
        echo json_encode($response);
    }

    function delete_basic_profile_info() {
        $user_id = "5563101d8267404011000029";
        $result = $this->basic_profile_mongodb_model->delete_basic_info($user_id);
    }

}
