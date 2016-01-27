<?php

class Basic_profile_mongodb_model extends CI_Model {

    var $SERVICE_BASIC_PROFILE;

    public function __construct() {
        parent::__construct();
        $this->load->library('Utils');
        $this->SERVICE_BASIC_PROFILE = SERVICE_PATH . "basicProfile/";
    }

    //---------------------------- About -> Works and Education Module -------------------------//
    /*
     * This method will return list of work places, professional skills, universities, 
     * colleges and schools of a user
     * @param $user_id, user id
     * @author nazmul hasan on 5th September 2015
     */
    public function get_works_education($user_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'getWorksEducation');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }

    /*
     * This method will add work place of a user
     * @param $user_id, user id
     * @param $work_place_data, work place data to be added
     * @author nazmul hasan on 5th September 2015
     */

    public function add_work_place($user_id, $work_place_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addWorkPlace');
        $this->curl->post(array("userId" => $user_id, "workPlaceData" => json_encode($work_place_data)));
        return $this->curl->execute();
    }

    /*
     * This method will add professional skill of a user
     * @param $user_id, user id
     * @param $professional_skill_data, professional skill data to be added
     * @author nazmul hasan on 5th September 2015
     */

    public function add_p_skill($user_id, $professional_skill_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addProfessionalSkill');
        $this->curl->post(array("userId" => $user_id, "professionalSkillData" => json_encode($professional_skill_data)));
        return $this->curl->execute();
    }

    /*
     * This method will add university of a user
     * @param $user_id, user id
     * @param $university_data, university data to be added
     * @author nazmul hasan on 5th September 2015
     */

    public function add_university($user_id, $university_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addUniversity');
        $this->curl->post(array("userId" => $user_id, "universityData" => json_encode($university_data)));
        return $this->curl->execute();
    }

    /*
     * This method will add college of a user
     * @param $user_id, user id
     * @param $college_data, college data to be added
     * @author nazmul hasan on 5th September 2015
     */

    public function add_college($user_id, $college_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addCollege');
        $this->curl->post(array("userId" => $user_id, "collegeData" => json_encode($college_data)));
        return $this->curl->execute();
    }

    /*
     * This method will add school of a user
     * @param $user_id, user id
     * @param $school_data, school data to be added
     * @author nazmul hasan on 5th September 2015
     */

    public function add_school($user_id, $school_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addSchool');
        $this->curl->post(array("userId" => $user_id, "schoolData" => json_encode($school_data)));
        return $this->curl->execute();
    }

    /*
     * This method will edit work place of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_work_place($user_id, $work_place_id, $work_place_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editWorkPlace');
        $this->curl->post(array("userId" => $user_id, "workPlaceId" => $work_place_id, "workPlaceData" => json_encode($work_place_data)));
        return $this->curl->execute();
    }

    /*
     * This method will edit professional skill of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_professional_skill($user_id, $p_skill_id, $user_professional_skill) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editProfessionalSkill');
        $this->curl->post(array("userId" => $user_id, "pSkillId" => $p_skill_id, "pSkillData" => json_encode($user_professional_skill)));
        return $this->curl->execute();
    }

    /*
     * This method will edit university of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_university($user_id, $uv_id, $user_university) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editUniversity');
        $this->curl->post(array("userId" => $user_id, "universityId" => $uv_id, "universityData" => json_encode($user_university)));
        return $this->curl->execute();
    }

    /*
     * This method will edit college of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_college($user_id, $college_id, $user_college) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editCollege');
        $this->curl->post(array("userId" => $user_id, "collegeId" => $college_id, "collegeData" => json_encode($user_college)));
        return $this->curl->execute();
    }

    /*
     * This method will edit school of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_school($user_id, $school_id, $user_school) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editSchool');
        $this->curl->post(array("userId" => $user_id, "schoolId" => $school_id, "schoolData" => json_encode($user_school)));
        return $this->curl->execute();
    }

    /*
     * This method will delete  workPlce of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_work_place($user_id, $work_place_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteWrokPlace');
        $this->curl->post(array("userId" => $user_id, "wrokPlaceId" => $work_place_id));
        return $this->curl->execute();
    }

    /*
     * This method will delete  Professional of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_p_skill($user_id, $p_skill_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deletePSkill');
        $this->curl->post(array("userId" => $user_id, "pSkillId" => $p_skill_id));
        return $this->curl->execute();
    }

    /*
     * This method will delete  University of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_university($user_id, $university_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteUniversity');
        $this->curl->post(array("userId" => $user_id, "universityId" => $university_id));
        return $this->curl->execute();
    }

    /*
     * This method will delete  College of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_college($user_id, $college_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteCollege');
        $this->curl->post(array("userId" => $user_id, "collegeId" => $college_id));
        return $this->curl->execute();
    }

    /*
     * This method will delete  College of a user
     * @author Rashida Sultana on 11-9-15
     */

    function delete_school($user_id, $school_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteSchool');
        $this->curl->post(array("userId" => $user_id, "schoolId" => $school_id));
        return $this->curl->execute();
    }

    public function get_overview($user_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'getOverview');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }

    public function get_city_town($user_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'getCityTown');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }

    public function get_family_relations($user_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'getFamilyRelation');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }

    public function get_contact_basic_info($user_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'getContactBasicInfo');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }

    public function get_about_fquote($user_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'getAboutFQuote');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }

    public function add_about($user_id, $additional_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addAbout');
        $this->curl->post(array("userId" => $user_id, "aboutInfo" => json_encode($additional_data)));
        return $this->curl->execute();
    }

    public function add_fquote($user_id, $user_fquote) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addFQuote');
        $this->curl->post(array("userId" => $user_id, "fQuoteInfo" => json_encode($user_fquote)));
        return $this->curl->execute();
    }

    public function add_current_city($user_id, $additional_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addCurrentCity');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }

    public function edit_current_city($user_id, $city_id, $city_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editCurrentCity');
        $this->curl->post(array("userId" => $user_id, "cityData" => json_encode($city_info)));
        return $this->curl->execute();
    }

    function delete_current_city($user_id, $city_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteCurrentCity');
        $this->curl->post(array("userId" => $user_id, "cityId" => $city_id));
        return $this->curl->execute();
    }

    public function add_home_town($user_id, $additional_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addHomeTown');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }

    public function edit_home_town($user_id, $home_town_id, $user_home_town) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editHomeTown');
        $this->curl->post(array("userId" => $user_id, "townData" => json_encode($user_home_town)));
        return $this->curl->execute();
    }

    function delete_home_town($user_id, $town_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteHomeTown');
        $this->curl->post(array("userId" => $user_id, "townId" => $town_id));
        return $this->curl->execute();
    }

    public function add_relationship_status($user_id, $relationship_status) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addRelationshipStatus');
        $this->curl->post(array("userId" => $user_id, "relationshipStatus" => json_encode($relationship_status)));
        return $this->curl->execute();
    }
    public function edit_relationship_status($user_id, $relationship_status) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editRelationshipStatus');
        $this->curl->post(array("userId" => $user_id, "relationshipStatus" => json_encode($relationship_status)));
        return $this->curl->execute();
    }

    public function add_mobile_phone($user_id, $mobile_phone_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addMobilePhone');
        $this->curl->post(array("userId" => $user_id, "mobilePhoneInfo" =>json_encode($mobile_phone_info)));
        return $this->curl->execute();
    }

    public function edit_mobile_phone($user_id, $mobile_phone_id, $mobile_phone_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editMobilePhone');
        $this->curl->post(array("userId" => $user_id, "mobileId" => $mobile_phone_id, "mobilePhoneInfo" => json_encode($mobile_phone_info)));
        return $this->curl->execute();
    }

    public function delete_mobile_phone($user_id, $mobile_phone_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteMobilePhone');
        $this->curl->post(array("userId" => $user_id, "phoneId" => $mobile_phone_id));
        return $this->curl->execute();
    }

    public function add_address($user_id, $address_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addAddress');
        $this->curl->post(array("userId" => $user_id, "addressInfo" => json_encode($address_info)));
        return $this->curl->execute();
    }

    public function edit_address($user_id, $address_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editAddress');
        $this->curl->post(array("userId" => $user_id, "addressInfo" => json_encode($address_info)));
        return $this->curl->execute();
    }

    public function delete_address($user_id, $address_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteAddress');
        $this->curl->post(array("userId" => $user_id, "addressId" => $address_id));
        return $this->curl->execute();
    }

    public function add_website($user_id, $website_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addWebsite');
        $this->curl->post(array("userId" => $user_id, "websiteInfo" => json_encode($website_info)));
        return $this->curl->execute();
    }

    public function edit_website($user_id, $website_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editWebsite');
        $this->curl->post(array("userId" => $user_id, "websiteInfo" => json_encode($website_info)));
        return $this->curl->execute();
    }

    public function delete_website($user_id, $website_id) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteWebsite');
        $this->curl->post(array("userId" => $user_id, "websiteId" => $website_id));
        return $this->curl->execute();
    }

    public function add_email($user_id, $email_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addEmail');
        $this->curl->post(array("userId" => $user_id, "emailInfo" => json_encode($email_info)));
        return $this->curl->execute();
    }

    public function edit_email($user_id, $email_id, $email_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'editEmail');
        $this->curl->post(array("userId" => $user_id, "emailId" => $email_id, "emailInfo" => json_encode($email_info)));
        return $this->curl->execute();
    }
    public function delete_email($user_id, $email_id ) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'deleteEmail');
        $this->curl->post(array("userId" => $user_id, "emailId" => $email_id));
        return $this->curl->execute();
    }

    /*
     * This method add basic information of a user
     * parameter user_id 
     * @Rashida 19 May 2015
     */

    public function add_basic_info($user_id, $additional_data) {
        $this->trigger_events('pre_add_basic_info');
        //add filter data here
        $id = $this->mongo_db->insert($this->collections['user_profiles'], $additional_data);
        $this->trigger_events('post_add_basic_info');
        return isset($id) ? $id : FALSE;
    }

}
