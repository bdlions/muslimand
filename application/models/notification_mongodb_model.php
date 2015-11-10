<?php
class Notification_mongodb_model extends CI_Model
{
    var $SERVICE_NOTIFICATION;
    public function __construct() 
    {
        parent::__construct();
        $this->SERVICE_NOTIFICATION = SERVICE_PATH . "notification/";
    } 
    
    public function get_notification_counter($user_id){
        $this->curl->create($this->SERVICE_NOTIFICATION . 'getNotificationCounter');
        $this->curl->post(array("userId" => $user_id));
        return json_decode($this->curl->execute());
    }
    public function update_status_get_general_notifications($user_id, $status_type_id, $offset, $limit){
        $this->curl->create($this->SERVICE_NOTIFICATION . 'updateStatusGetGeneralNotifications');
        $this->curl->post(array("userId" => $user_id, "statusTypeId" => $status_type_id, "offset" => $offset, "limit" => $limit));
        return json_decode($this->curl->execute());
    }
    public function get_general_notifications($user_id, $offset, $limit){
        $this->curl->create($this->SERVICE_NOTIFICATION . 'getGeneralNotifications');
        $this->curl->post(array("userId" => $user_id, "offset" => $offset, "limit" => $limit));
        return json_decode($this->curl->execute());
    }
      public function update_status_get_friend_notification($user_id,  $offset, $limit){
        $this->curl->create($this->SERVICE_NOTIFICATION . 'updateStatusGetFriendNotifications');
        $this->curl->post(array("userId" => $user_id,  "offset" => $offset, "limit" => $limit));
        return json_decode($this->curl->execute());
    }
      public function get_friend_notifications($user_id, $offset, $limit){
        $this->curl->create($this->SERVICE_NOTIFICATION . 'getFriendNotifications');
        $this->curl->post(array("userId" => $user_id, "offset" => $offset, "limit" => $limit));
        return json_decode($this->curl->execute());
    }
}

