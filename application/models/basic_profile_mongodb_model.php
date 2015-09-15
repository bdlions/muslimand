<?php

class Basic_profile_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_BASIC_PROFILE;

    public function __construct() {
        parent::__construct();
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

    function update_work_place($user_id,$work_place_id,$work_place_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'UpdateWorkPlace');
        $this->curl->post(array("userId" => $user_id,"workPlaceId" => $work_place_id, "workPlaceData" => json_encode($work_place_data)));
        return $this->curl->execute();
    }

    /*
     * This method will edit professional skill of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_professional_skill() {
        
    }

    /*
     * This method will edit university of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_university() {
        
    }

    /*
     * This method will edit college of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_college() {
        
    }

    /*
     * This method will edit school of a user
     * @author nazmul hasan on 5th September 2015
     */

    function edit_school() {
        
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

    public function add_home_town($user_id, $additional_data) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addHomeTown');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }

    public function add_relationship_status($user_id, $relationship_status) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addRelationshipStatus');
        $this->curl->post(array("userId" => $user_id, "relationshipStatus" => json_encode($relationship_status)));
        return $this->curl->execute();
    }

    public function add_mobile_phone($user_id, $mobile_phone_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addMobilePhone');
        $this->curl->post(array("userId" => $user_id, "mobilePhoneInfo" => json_encode($mobile_phone_info)));
        return $this->curl->execute();
    }

    public function add_address($user_id, $address_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addAddress');
        $this->curl->post(array("userId" => $user_id, "addressInfo" => json_encode($address_info)));
        return $this->curl->execute();
    }

    public function add_website($user_id, $website_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addWebsite');
        $this->curl->post(array("userId" => $user_id, "websiteInfo" => json_encode($website_info)));
        return $this->curl->execute();
    }

    public function add_email($user_id, $email_info) {
        $this->curl->create($this->SERVICE_BASIC_PROFILE . 'addEmail');
        $this->curl->post(array("userId" => $user_id, "emailInfo" => json_encode($email_info)));
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

    /*
     * This method add basic information of a user
     * parameter user_id 
     * @Rashida 19 May 2015
     */

    public function get_basic_info($user_id) {

//        $user_id='556311458267404811000029';
//        var_dump($user_id);
//        $cursor = $this->mongo_db
////                ->where('_id', new MongoId($user_id))
//                ->select(array(),array('email'))
//                ->limit(1)
////                ->offset(1)
//                ->get('users');
//        
////        foreach ($cursor as $user){
//            var_dump($cursor);
//            
////        }
//        exit;

        return $this->mongo_db
                        ->where('user_id', new MongoId($user_id))
                        ->where('basic_info', new MongoId($id))
                        ->select(array('basic_info'))
                        ->get($this->collections['user_profiles']);
    }

    /*
     * This method update basic information of a user
     * parameter user_id and additional data
     * @Rashida 19 May 2015
     */

    function update_basic_info($user_id, $additional_data) {
//        $this->trigger_events('extra_where');
        $result = $this->mongo_db
                ->where('user_id', new MongoId($user_id))
                ->update($this->collections['user_profiles'], $additional_data);
        if ($result === TRUE) {
            $this->set_message('update_user_profile_successful');
            return TRUE;
        }
        $this->set_error('fail_to_update_user_profile');
        return FALSE;
    }

    /*
     * This method delete basic information of a user
     * parameter user_id 
     * @Rashida 19 May 2015
     */

    public function delete_basic_info($user_id) {
        if ($user_id != null) {
            $this->mongo_db
                    ->where('user_id', new MongoId($user_id))
                    ->delete($this->collections['user_profiles']);
            $this->set_message('delete_user_profile_successful');
            return TRUE;
        }
        $this->set_error('fail_to_delete_user_profile');
        return FALSE;
    }

}
