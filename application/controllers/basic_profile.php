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
        $this->load->library('utils');
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

    //---------------------------- About -> Works and Education Module -------------------------//
    /*
     * This method will return list of work places, professional skills, universities, 
     * colleges and schools of a user
     * @author nazmul hasan on 5th September 2015
     */
    function get_works_education() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response = array();
        $response["year_list"] = $this->utils->get_year_list();
        $response['message'] = '';
        $response['work_places'] = '';
        $response['colleges'] = '';
        $response['universities'] = '';
        $response['schools'] = '';
        $response['p_skills'] = '';
        $basic_p_info = $this->basic_profile_mongodb_model->get_works_education($user_id);
        if (!empty($basic_p_info)) {
            if (property_exists($basic_p_info, "wps") != FALSE) {
                $response['work_places'] = $basic_p_info->wps;
            }
            if (property_exists($basic_p_info, "clgs") != FALSE) {
                $response['colleges'] = $basic_p_info->clgs;
            }
            if (property_exists($basic_p_info, "unis") != FALSE) {
                $response['universities'] = $basic_p_info->unis;
            }
            if (property_exists($basic_p_info, "schs") != FALSE) {
                $response['schools'] = $basic_p_info->schs;
            }
            if (property_exists($basic_p_info, "pss") != FALSE) {
                $response['p_skills'] = $basic_p_info->pss;
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
        $requestInfo = json_decode($postdata);
        $request = $requestInfo->workInfo;
        $response = array();
        if (!empty($request)) {
            $user_id = $request->userId;
            $user_work_place = new stdClass();
            $user_work_place->id = $this->utils->generateRandomString(BASCI_PROFILE_WORK_PLACE_ID_LENGTH);
            if (property_exists($request, "company") != FALSE) {
                $user_work_place->{$this->attr_map['company']} = $request->company;
            }
            if (property_exists($request, "position") != FALSE) {
                $user_work_place->{$this->attr_map['position']} = $request->position;
            }
            if (property_exists($request, "city") != FALSE) {
                $user_work_place->{$this->attr_map['city']} = $request->city;
            }
            if (property_exists($request, "description") != FALSE) {
                $user_work_place->{$this->attr_map['description']} = $request->description;
            }
            if (property_exists($request, "startDate") != FALSE) {
                $user_work_place->{$this->attr_map['startDate']} = $request->startDate;
            }
            if (property_exists($request, "endDate") != FALSE) {
                $user_work_place->{$this->attr_map['endDate']} = $request->endDate;
            }
            $result = $this->basic_profile_mongodb_model->add_work_place($user_id, $user_work_place);
            if ($result != null) {
                $response["work_place"] = $user_work_place;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will add professional skill of a user
     * @author nazmul hasan on 31st August 2015
     */

    function add_professional_skill() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $request = $requestInfo->pSkillInfo;
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_professional_skill = new stdClass();
            $user_professional_skill->id = $this->utils->generateRandomString(BASCI_PROFILE_PROFESSIONAL_SKILL_ID_LENGTH);
            if (property_exists($request, "pSkil") != FALSE) {
                $user_professional_skill->{$this->attr_map['professional_skill']} = $request->pSkil;
            }
            $result = $this->basic_profile_mongodb_model->add_p_skill($user_id, $user_professional_skill);
            if ($result != null) {
                $response["p_skill"] = $user_professional_skill;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will add university of a user
     * @author nazmul hasan on 31st August 2015
     */

    function add_university() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "universityInfo") != FALSE) {
            $request = $requestInfo->universityInfo;
        }
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_university = new stdClass();
            $user_university->id = $this->utils->generateRandomString(BASCI_PROFILE_UNIVERSITY_ID_LENGTH);
            if (property_exists($request, "university") != FALSE) {
                $user_university->{$this->attr_map['university']} = $request->university;
            }
            if (property_exists($request, "description") != FALSE) {
                $user_university->{$this->attr_map['description']} = $request->description;
            }
            if (property_exists($request, "startDate") != FALSE) {
                $user_university->{$this->attr_map['startDate']} = $request->startDate;
            }
            if (property_exists($request, "endDate") != FALSE) {
                $user_university->{$this->attr_map['endDate']} = $request->endDate;
            }
            $result = $this->basic_profile_mongodb_model->add_university($user_id, $user_university);
            if ($result != null) {
                $response["university"] = $user_university;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will add college of a user
     * @author nazmul hasan on 31st August 2015
     */

    function add_college() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "collegeInfo") != FALSE) {
            $request = $requestInfo->collegeInfo;
        }
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_college = new stdClass();
            $user_college->id = $this->utils->generateRandomString(BASCI_PROFILE_COLLEGE_ID_LENGTH);
            if (property_exists($request, "college") != FALSE) {
                $user_college->{$this->attr_map['college']} = $request->college;
            }
            if (property_exists($request, "description") != FALSE) {
                $user_college->{$this->attr_map['description']} = $request->description;
            }
            if (property_exists($request, "startDate") != FALSE) {
                $user_college->{$this->attr_map['startDate']} = $request->startDate;
            }
            if (property_exists($request, "endDate") != FALSE) {
                $user_college->{$this->attr_map['endDate']} = $request->endDate;
            }
            $result = $this->basic_profile_mongodb_model->add_college($user_id, $user_college);
            if ($result != null) {
                $response["college"] = $user_college;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will add school of a user
     * @author nazmul hasan on 31st August 2015
     */

    function add_school() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "schoolInfo") != FALSE) {
            $request = $requestInfo->schoolInfo;
        }
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_school = new stdClass();
            $user_school->id = $this->utils->generateRandomString(BASCI_PROFILE_SCHOOL_ID_LENGTH);
            if (property_exists($request, "school") != FALSE) {
                $user_school->{$this->attr_map['school']} = $request->school;
            }
            if (property_exists($request, "description") != FALSE) {
                $user_school->{$this->attr_map['description']} = $request->description;
            }
            if (property_exists($request, "startDate") != FALSE) {
                $user_school->{$this->attr_map['startDate']} = $request->startDate;
            }
            if (property_exists($request, "endDate") != FALSE) {
                $user_school->{$this->attr_map['endDate']} = $request->endDate;
            }
            $result = $this->basic_profile_mongodb_model->add_school($user_id, $user_school);
            if ($result != null) {
                $response["school"] = $user_school;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will edit work place of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_work_place() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $request = $requestInfo->workInfo;
        $response = array();
        if (!empty($request)) {
            $user_id = $this->session->userdata('user_id');
            if (property_exists($request, "id") != FALSE) {
                $work_place_id = $request->id;
            }
            $user_work_place = new stdClass();
            $user_work_place->id = $work_place_id;
            if (property_exists($request, "cmp") != FALSE) {
                $user_work_place->{$this->attr_map['company']} = $request->cmp;
            }
            if (property_exists($request, "pos") != FALSE) {
                $user_work_place->{$this->attr_map['position']} = $request->pos;
            }
            if (property_exists($request, "ct") != FALSE) {
                $user_work_place->{$this->attr_map['city']} = $request->ct;
            }
            if (property_exists($request, "desc") != FALSE) {
                $user_work_place->{$this->attr_map['description']} = $request->desc;
            }
            if (property_exists($request, "sd") != FALSE) {
                $user_work_place->{$this->attr_map['startDate']} = $request->sd;
            }
            if (property_exists($request, "ed") != FALSE) {
                $user_work_place->{$this->attr_map['endDate']} = $request->ed;
            }
            $result = $this->basic_profile_mongodb_model->edit_work_place($user_id, $work_place_id, $user_work_place);
            if ($result != null) {
                $response["work_place"] = $user_work_place;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will edit professional skill of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_professional_skill() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $request = $requestInfo->pSkill;
        $response = array();
        if (!empty($request)) {
            $user_id = $this->session->userdata('user_id');
            if (property_exists($request, "id") != FALSE) {
                $p_skill_id = $request->id;
            }
            $user_professional_skill = new stdClass();
            $user_professional_skill->id = $p_skill_id;
            if (property_exists($request, "ps") != FALSE) {
                $user_professional_skill->{$this->attr_map['professional_skill']} = $request->ps;
            }
            $result = $this->basic_profile_mongodb_model->edit_professional_skill($user_id, $p_skill_id, $user_professional_skill);
            if ($result != null) {
                $response["p_skill"] = $user_professional_skill;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will edit university of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_university() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "uvInfo") != FALSE) {
            $request = $requestInfo->uvInfo;
        }
        $response = array();
        if (!empty($request)) {
            $user_id = $this->session->userdata('user_id');
            if (property_exists($request, "id") != FALSE) {
                $uv_id = $request->id;
            }
            $user_university = new stdClass();
            $user_university->id = $uv_id;
            if (property_exists($request, "uni") != FALSE) {
                $user_university->{$this->attr_map['university']} = $request->uni;
            }
            if (property_exists($request, "desc") != FALSE) {
                $user_university->{$this->attr_map['description']} = $request->desc;
            }
            if (property_exists($request, "sd") != FALSE) {
                $user_university->{$this->attr_map['startDate']} = $request->sd;
            }
            if (property_exists($request, "ed") != FALSE) {
                $user_university->{$this->attr_map['endDate']} = $request->ed;
            }
            $result = $this->basic_profile_mongodb_model->edit_university($user_id, $uv_id, $user_university);
            if ($result != null) {
                $response["university"] = $user_university;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will edit college of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_college() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "collegeInfo") != FALSE) {
            $request = $requestInfo->collegeInfo;
        }
        $response = array();
        if (!empty($request)) {
            $user_id = $this->session->userdata('user_id');
            $user_college = new stdClass();
            if (property_exists($request, "id") != FALSE) {
                $college_id = $request->id;
            }
            $user_college->id = $college_id;
            if (property_exists($request, "clg") != FALSE) {
                $user_college->{$this->attr_map['college']} = $request->clg;
            }
            if (property_exists($request, "desc") != FALSE) {
                $user_college->{$this->attr_map['description']} = $request->desc;
            }
            if (property_exists($request, "sd") != FALSE) {
                $user_college->{$this->attr_map['startDate']} = $request->sd;
            }
            if (property_exists($request, "ed") != FALSE) {
                $user_college->{$this->attr_map['endDate']} = $request->ed;
            }
            $result = $this->basic_profile_mongodb_model->edit_college($user_id, $college_id, $user_college);
            if ($result != null) {
                $response["college"] = $user_college;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will edit school of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_school() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "schoolInfo") != FALSE) {
            $request = $requestInfo->schoolInfo;
        }
        $response = array();
        if (!empty($request)) {
            $user_id = $this->session->userdata('user_id');
            $user_school = new stdClass();
            if (property_exists($request, "id") != FALSE) {
                $school_id = $request->id;
            }
            $user_school->id = $school_id;
            if (property_exists($request, "sch") != FALSE) {
                $user_school->{$this->attr_map['school']} = $request->sch;
            }
            if (property_exists($request, "desc") != FALSE) {
                $user_school->{$this->attr_map['description']} = $request->desc;
            }
            if (property_exists($request, "sd") != FALSE) {
                $user_school->{$this->attr_map['startDate']} = $request->sd;
            }
            if (property_exists($request, "ed") != FALSE) {
                $user_school->{$this->attr_map['endDate']} = $request->ed;
            }
            $result = $this->basic_profile_mongodb_model->edit_school($user_id, $school_id, $user_school);
            if ($result != null) {
                $response["school"] = $user_school;
            }
            echo json_encode($response);
        }
    }

    /*
     * This method will delete  workPlce of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_work_place() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $work_place_id = $request->workPlaceId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_work_place($user_id, $work_place_id);
        if ($result != null) {
            $response["message"] = "Wrok Place Delete Successfully";
        }
        echo json_encode($response);
    }

    /*
     * This method will delete  Professinal Skill of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_p_skill() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $p_skill_id = $request->pSkillId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_p_skill($user_id, $p_skill_id);
        if ($result != null) {
            $response["message"] = "Professional Skill Delete Successfully";
        }
        echo json_encode($response);
    }

    /*
     * This method will delete  College of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_university() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $university_id = $request->universityId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_university($user_id, $university_id);
        if ($result != null) {
            $response["message"] = "University Delete Successfully";
        }
        echo json_encode($response);
    }

    /*
     * This method will delete  College of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_college() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $college_id = $request->collegeId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_college($user_id, $college_id);
        if ($result != null) {
            $response["message"] = "College Delete Successfully";
        }
        echo json_encode($response);
    }

    /*
     * This method will delete  College of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_school() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $school_id = $request->schoolId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_school($user_id, $school_id);
        if ($result != null) {
            $response["message"] = "School Delete Successfully";
        }
        echo json_encode($response);
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

    //............. About Places ...........................

    function get_city_town() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $request->userId;
        $response = array();
        $response['city_town'] = "";
        $city_town = $this->basic_profile_mongodb_model->get_city_town($user_id);
        if (!empty($city_town)) {
            if (property_exists($city_town, "bInfo") != FALSE) {
                $response['city_town'] = $city_town->bInfo;
            }
        }
        echo json_encode($response);
    }

    function add_current_city() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "currentCityInfo") != FALSE) {
            $request = $requestInfo->currentCityInfo;
        }
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_current_city = new stdClass();
            $user_current_city->id = $this->utils->generateRandomString(BASCI_PROFILE_CURRENT_CITY_ID_LENGTH);
            if (property_exists($request, "cityName") != FALSE) {
                $user_current_city->cityName = $request->cityName;
            }
            $result = $this->basic_profile_mongodb_model->add_current_city($user_id, $user_current_city);
            if ($result != null) {
                $response["current_city"] = $user_current_city;
            }
        }
        echo json_encode($response);
    }

    function edit_current_city() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "cityInfo") != FALSE) {
            $request = $requestInfo->cityInfo;
        }
        $response = array();
        $user_id = $this->session->userdata('user_id');
        if (!empty($request)) {
            if (property_exists($request, "id") != FALSE) {
                $city_id = $request->id;
            }
            $user_current_city = new stdClass();
            $user_current_city->id = $city_id;
            if (property_exists($request, "cityName") != FALSE) {
                $user_current_city->cityName = $request->cityName;
            }
            $result = $this->basic_profile_mongodb_model->edit_current_city($user_id, $city_id, $user_current_city);
            if ($result != null) {
                $response["current_city"] = $user_current_city;
            }
        }
        echo json_encode($response);
    }

    function delete_current_city() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $city_id = $request->cCityId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_current_city($user_id, $city_id);
        if ($result != null) {
            $response["message"] = "Current City Delete Successfully";
        }
        echo json_encode($response);
    }

    function add_home_town() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "homeTownInfo") != FALSE) {
            $request = $requestInfo->homeTownInfo;
        }
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_home_town = new stdClass();
            $user_home_town->id = $this->utils->generateRandomString(BASCI_PROFILE_HOME_TOWN_ID_LENGTH);
            if (property_exists($request, "townName") != FALSE) {
                $user_home_town->townName = $request->townName;
            }
            $result = $this->basic_profile_mongodb_model->add_home_town($user_id, $user_home_town);
            if ($result != null) {
                $response["home_town"] = $user_home_town;
            }
        }
        echo json_encode($response);
    }

    function edit_home_town() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "homeTownInfo") != FALSE) {
            $request = $requestInfo->homeTownInfo;
        }
        $user_id = $this->session->userdata('user_id');
        $response = array();
        if (!empty($request)) {
            $user_home_town = new stdClass();
            if (property_exists($request, "id") != FALSE) {
                $home_town_id = $request->id;
            }
            $user_home_town->id = $home_town_id;
            if (property_exists($request, "townName") != FALSE) {
                $user_home_town->townName = $request->townName;
            }
            $result = $this->basic_profile_mongodb_model->edit_home_town($user_id, $home_town_id, $user_home_town);
            if ($result != null) {
                $response["home_town"] = $user_home_town;
            }
        }
        echo json_encode($response);
    }

    function delete_home_town() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $user_id = $this->session->userdata('user_id');
        $town_id = $request->hTownId;
        $response = array();
        $result = array();
        $result = $this->basic_profile_mongodb_model->delete_home_town($user_id, $town_id);
        if ($result != null) {
            $response["message"] = "Home Town Delete Successfully";
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
            if (property_exists($basic_info, "bInfo") != FALSE) {
                $response['basic_info'] = $basic_info;
            }
        }
        echo json_encode($response);
    }

    function add_mobile_phone() {
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "PhoneInfo") != FALSE) {
            $request = $requestInfo->PhoneInfo;
        }
        $response = array();
        if (!empty($request)) {
            if (property_exists($request, "userId") != FALSE) {
                $user_id = $request->userId;
            }
            $user_mobile_phone = new stdClass();
            if (property_exists($request, "phone") != FALSE) {
                $user_mobile_phone->{$this->attr_map['phone']} = $request->phone;
            }
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
        var_dump($family_relations);
        exit;
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
            if (property_exists($about_fquote, "bInfo") != FALSE) {
                $response['about_fquote'] = $about_fquote->bInfo;
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
