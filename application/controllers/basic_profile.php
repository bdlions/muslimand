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
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_work_places = new stdClass();
            $user_work_places->company = $request->company;
            $user_work_places->position = $request->position;
            $user_work_places->city = $request->city;
            $user_work_places->description = $request->description;
            $result = $this->basic_profile_mongodb_model->add_work_place($user_id, $user_work_places);
            if ($result != null) {
                $response["work_place"] = $user_work_places;
            }
            echo json_encode($response);
        }
    }

    function add_professional_skill() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_professional_skill = new stdClass();
            $user_professional_skill->pSkill = $request->pSkil;
            $result = $this->basic_profile_mongodb_model->add_p_skill($user_id, $user_professional_skill);
            if ($result != null) {
                $response["p_skill"] = $user_professional_skill;
            }

            echo json_encode($response);
        }
    }

    function add_university() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_university = new stdClass();
            $user_university->university = $request->university;
            $user_university->description = $request->description;
            $result = $this->basic_profile_mongodb_model->add_university($user_id, $user_university);
            if ($result != null) {
                $response["university"] = $user_university;
            }
            echo json_encode($response);
        }
    }

    function add_college() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_college = new stdClass();
            $user_college->college = $request->college;
            $user_college->description = $request->description;
            $result = $this->basic_profile_mongodb_model->add_college($user_id, $user_college);
            if ($result != null) {
                $response["college"] = $user_college;
            }
            echo json_encode($response);
        }
    }

    function add_school() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_school = new stdClass();
            $user_school->school = $request->school;
            $user_school->description = $request->description;
            $result = $this->basic_profile_mongodb_model->add_school($user_id, $user_school);
            if ($result != null) {
                $response["school"] = $user_school;
            }
            echo json_encode($response);
        }
    }

    function get_overview() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response = array();
        $response['website'] = "";
        $response['mobilePhone'] = "";
        $response['city'] = "";
        $response['university'] = "";
        $response['birthDate'] = "";
        $response['workPlace'] = "";
        $response['email'] = "";
        $response['address'] = "";
        $overview = $this->basic_profile_mongodb_model->get_overview($user_id);
        if (!empty($overview)) {
            if (property_exists($overview, "website") != false) {
                $response['website'] = json_decode($overview->website);
            }
            if (property_exists($overview, "mobilePhone") != false) {
                $response['mobilePhone'] = json_decode($overview->mobilePhone);
            }
            if (property_exists($overview, "city") != FALSE) {
                $response['city'] = json_decode($overview->city);
            }
            if (property_exists($overview, "university") != FALSE) {
                $response['university'] = json_decode($overview->university);
            }
            if (property_exists($overview, "birthDate") != FALSE) {
                $response['birthDate'] = json_decode($overview->birthDate);
            }
            if (property_exists($overview, "workPlace") != FALSE) {
                $response['workPlace'] = json_decode($overview->workPlace);
            }
            if (property_exists($overview, "email") != FALSE) {
                $response['email'] = json_decode($overview->email);
            }
            if (property_exists($overview, "address") != FALSE) {
                $response['address'] = json_decode($overview->address);
            }
        }
        echo json_encode($response);
    }

    function get_works_education() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response = array();
        $response['message'] = '';
        $response['work_places'] = '';
        $response['colleges'] = '';
        $response['universities'] = '';
        $response['schools'] = '';
        $response['p_skills'] = '';
        $basic_p_info = $this->basic_profile_mongodb_model->get_works_education($user_id);
        if (!empty($basic_p_info)) {
            if (property_exists($basic_p_info, "workPlaces") != FALSE) {
                $response['work_places'] = $basic_p_info->workPlaces;
            }
            if (property_exists($basic_p_info, "colleges") != FALSE) {
                $response['colleges'] = $basic_p_info->colleges;
            }
            if (property_exists($basic_p_info, "universities") != FALSE) {
                $response['universities'] = $basic_p_info->universities;
            }
            if (property_exists($basic_p_info, "schools") != FALSE) {
                $response['schools'] = $basic_p_info->schools;
            }
            if (property_exists($basic_p_info, "pSkills") != FALSE) {
                $response['p_skills'] = $basic_p_info->pSkills;
            }
        }
        echo json_encode($response);
    }

    function get_city_town() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response = array();
        $response['city_town'] = "";
        $city_town = $this->basic_profile_mongodb_model->get_city_town($user_id);
        if (!empty($city_town)) {
            if (property_exists($city_town, "basicInfo") != FALSE) {
                $response['city_town'] = $city_town->basicInfo;
            }
        }
        echo json_encode($response);
    }

    function get_contact_basic_info() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response = array();
        $response['basic_info'] = "";
        $basic_info = $this->basic_profile_mongodb_model->get_contact_basic_info($user_id);
        if (!empty($basic_info)) {
            if (property_exists($basic_info, "basicInfo") != FALSE) {
                $response['basic_info'] = $basic_info;
            }
        }
        echo json_encode($response);
    }

    function get_family_relations() {
        $response = array();
        $response['family_relations'] = "";
        $user_id = "100157";
        $family_relations = $this->basic_profile_mongodb_model->get_family_relations($user_id);
        if (!empty($family_relations)) {
            $response['family_relations'] = $family_relations;
        }
        echo json_encode($response);
    }

    function add_current_city() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_current_city = new stdClass();
            $user_current_city->cityName = $request->cityName;
            $result = $this->basic_profile_mongodb_model->add_current_city($user_id, $user_current_city);
            if ($result != null) {
                $response["current_city"] = $user_current_city;
            }
        }
        echo json_encode($response);
    }

    function add_home_town() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_home_town = new stdClass();
            $user_home_town->townName = $request->townName;
            $result = $this->basic_profile_mongodb_model->add_home_town($user_id, $user_home_town);
            if ($result != null) {
                $response["home_town"] = $user_home_town;
            }
        }
        echo json_encode($response);
    }

    function add_relationship_status() {
        $response = array();
        $user_id = "100157";
        $relationship_status = $this->input->post('relationship');
        $user_relationship_status = new stdClass();
        $user_relationship_status->relationshipStatus = $relationship_status;
        $result = $this->basic_profile_mongodb_model->add_relationship_status($user_id, $relationship_status);
        if ($relationship_status != null) {
            $response["relation_Status"] = $user_relationship_status;
        }
        echo json_encode($response);
    }

    function add_mobile_phone() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_mobile_phone = new stdClass();
            $user_mobile_phone->phone = $request->phone;
            $result = $this->basic_profile_mongodb_model->add_mobile_phone($user_id, $user_mobile_phone);
            if ($result != null) {
                $response["mobile_phone"] = $user_mobile_phone;
            }
        }
        echo json_encode($response);
    }

    function add_address() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_address = new stdClass();
            $user_address->address = $request->address;
            $user_address->city = $request->city;
            $user_address->postCode = $request->postCode;
            $user_address->zip = $request->zip;
            $result = $this->basic_profile_mongodb_model->add_address($user_id, $user_address);
            if ($result != null) {
                $response["address"] = $user_address;
            }
        }
        echo json_encode($response);
    }

    function add_website() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_website = new stdClass();
            $user_website->website = $request->website;
            $result = $this->basic_profile_mongodb_model->add_website($user_id, $user_website);
            if ($result != null) {
                $response["website"] = $user_website;
            }
        }
        echo json_encode($response);
    }

    function add_email() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_email = new stdClass();
            $user_email->email = $request->email;
            $result = $this->basic_profile_mongodb_model->add_email($user_id, $user_email);
            if ($result != null) {
                $response["email"] = $user_email;
            }
        }
        echo json_encode($response);
    }

    function delete_basic_profile_info() {
        $user_id = "5563101d8267404011000029";
        $result = $this->basic_profile_mongodb_model->delete_basic_info($user_id);
    }

    function angular_test() {
        $response = array();
        $response['firstName'] = "shemin";
        $response['lastName'] = "Haque";
        $response['email'] = "shemin@gmail.com";
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
