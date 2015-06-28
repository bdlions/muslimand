<?php

class Basic_profile_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_BASIC_PROFILE;
    public function __construct() {
        parent::__construct();
        $this->SERVICE_BASIC_PROFILE = SERVICE_PATH . "basicProfile/";
    }

    
      public function get_works_education($user_id){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'getWorksEducation');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }
    
      public function get_city_town($user_id){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'getCityTown');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }
      public function get_family_relations($user_id){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'getFamilyRelation');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }
    
    public function add_work_place($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addWorkPlace');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    public function add_p_skill($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addPSkill');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    
    public function add_university($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addUniversity');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    public function add_college($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addCollege');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    public function add_school($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addSchool');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    public function add_current_city($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addCurrentCity');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    public function add_home_town($user_id ,$additional_data){
        $this->curl->create($this->SERVICE_BASIC_PROFILE.'addHomeTown');
        $this->curl->post(array("userId" => $user_id, "additionalData" => json_encode($additional_data)));
        return $this->curl->execute();
    }
    
    
    
    
    /*
     * This method add basic information of a user
     * parameter user_id 
     * @Rashida 19 May 2015
     */
    public function add_basic_info($user_id,$additional_data) {
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
    function update_basic_info($user_id,$additional_data) {
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
