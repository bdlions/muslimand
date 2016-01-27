<?php

class Social_network_mongodb_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add_social_network_info($additional_data)
    {
        $this->trigger_events('pre_add_social_network_code');
        //add filter data here
        $id = $this->mongo_db->insert($this->collections['users_social_networks'], $additional_data);
        $this->trigger_events('post_add_social_network_code');
        return isset($id) ? $id : FALSE;
    }
    
    public function is_user_mapped_to_social_network($social_network_id, $code)
    {
        $document = $this->mongo_db
                ->select(array('user_id', 'social_network_id', 'code'))
                ->where('social_network_id', $social_network_id)
                ->where('code', $code)
                ->limit(1)
                ->get($this->collections['users_social_networks']);
        
        if (count($document) === 1) {
            $social_network_info = (object) $document[0];
            return $social_network_info->user_id;
        }
        return FALSE;
    }
    
    public function login_via_social_network($identity)
    {
        $document = $this->mongo_db
                ->select(array('_id', 'groups','userId', 'firstName', 'lastName', 'email', 'password', 'account_status_id', 'last_login'))
                ->where('userId', (string) $identity)
                ->limit(1)
                ->get($this->collections['users']);

        // If user document found
        if (count($document) === 1) {
            $user = (object) $document[0];
            // Set user session data
            $session_data = array(
                'identity' => $user->userId,
                'first_name' => $user->firstName,
                'last_name' => $user->lastName,
                'email' => $user->email,
                'user_id' => $user->userId,
                'group_id' => $user->groups[0]['groupId'],
                'old_last_login' => $user->last_login
            );

            $this->session->set_userdata($session_data);
            return TRUE;
        }
    }
}
