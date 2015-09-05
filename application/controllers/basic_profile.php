<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_profile extends CI_Controller {
    /**
     * Holds the attributes mapping
     * @var array
     */
    public $attr_map = array();
    function __construct() {
        parent::__construct();
        // Initialize attributes mapping
        $this->attr_map = $this->config->item('attr_map', 'ion_auth');
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

//..........................About Module ...............................
// ................... about overview ...................

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

    //.................. About Works and Educations ...................... ..

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
    
    /*
     * This method will add work place of a user
     * @author nazmul hasan on 31st August 2015
     */
    function add_work_place() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $work_place = new stdClass();
            $user_work_place = new stdClass();
            $user_work_place->{$this->attr_map['company']} = $request->company;
            $work_place->company = $request->company;
            $user_work_place->{$this->attr_map['position']} = $request->position;
            $work_place->position = $request->position;
            $user_work_place->{$this->attr_map['city']} = $request->city;
            $work_place->city = $request->city;
            $user_work_place->{$this->attr_map['description']} = $request->description;
            $work_place->description = $request->description;
            $result = $this->basic_profile_mongodb_model->add_work_place($user_id, $user_work_place);
            if ($result != null) {
                $response["work_place"] = $work_place;
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

    //............. About Places ...........................

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

    //................. About Contact and Basic Info .................   
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

//......................About Family and RelationShip ...............

    function get_family_relations() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response['family_relations'] = "";
        $family_relations = $this->basic_profile_mongodb_model->get_family_relations($user_id);
        if (!empty($family_relations)) {
            $response['family_relations'] = $family_relations;
        }
        echo json_encode($response);
    }

    function add_relationship_status() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_relationship_status = new stdClass();
            $user_relationship_status->relationshipStatus = $request->relationship;
            $result = $this->basic_profile_mongodb_model->add_relationship_status($user_id, $user_relationship_status);
            if ($result != null) {
                $response["relation_Status"] = $user_relationship_status;
            }
        }
        echo json_encode($response);
    }

    //..............About Yourself ........................

    function get_about_fquote() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response['about_fquote'] = "";
        $about_fquote = $this->basic_profile_mongodb_model->get_about_fquote($user_id);
        if (!empty($about_fquote)) {
            if (property_exists($about_fquote, "basicInfo") != FALSE) {
                $response['about_fquote'] = $about_fquote->basicInfo;
            }
        }
        echo json_encode($response);
    }

    function add_about() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_about = new stdClass();
            $user_about->about = $request->about;
            $result = $this->basic_profile_mongodb_model->add_about($user_id, $user_about);
            if ($result != null) {
                $response["about"] = $user_about;
            }
        }
        echo json_encode($response);
    }
    function add_fquote() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_fquote = new stdClass();
            $user_fquote->fQuote = $request->fQuote;
            $result = $this->basic_profile_mongodb_model->add_fquote($user_id, $user_fquote);
            if ($result != null) {
                $response["f_quote"] = $user_fquote;
            }
        }
        echo json_encode($response);
    }

//................... ...............End About Module .......................

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
