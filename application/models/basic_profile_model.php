<?php

class Basic_profile_model extends Ion_auth_mongodb_model {

    public function __construct() {
        parent::__construct();
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
        return $this->mongo_db
                        ->where('_id', new MongoId($user_id))
//                ->select('basic_info')
//                ->select('*')
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
                ->where('_id', new MongoId($user_id))
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
