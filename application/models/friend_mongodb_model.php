<?php

class Friend_mongodb_model extends CI_Model {

    var $SERVICE_FRIEND;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_FRIEND = SERVICE_PATH . "relation/";
    }

    public function add_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'addFriend');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id ));
        return $this->curl->execute();
    }
    public function update_online_status($user_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'updateOnlineStatus');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }
    public function block_non_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'blockNonFriend');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id ));
        return $this->curl->execute();
    }
    public function block_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'blockFriend');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id ));
        return $this->curl->execute();
    }
    public function change_relation_ship_status($user_id, $friend_id,$type_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'changeRelationShipStatus');
        $this->curl->post(array("userId" => $user_id, "friendId" => $friend_id, "typeId" => $type_id));
        return $this->curl->execute();
    }
    public function approve_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'approveFriend');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id));
        return $this->curl->execute();
    }
    public function remove_friend_request($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'removeFriendRequest');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id));
        return $this->curl->execute();
    }
    public function unblock_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'unblockFriend');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id));
        return $this->curl->execute();
    }
    
    public function remove_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'removeFriend');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id));
        return $this->curl->execute();
    }
    

    public function get_friend_list($user_id,$status_type,$offset,$limit) {
        $this->curl->create($this->SERVICE_FRIEND . 'getRelationList');
        $this->curl->post(array("userId" => $user_id, "relationTypeId" => $status_type,"offset" => $offset,"limit" => $limit));
        return $this->curl->execute();
    }
    public function get_pending_list($user_id,$status_type,$offset,$limit) {
        $this->curl->create($this->SERVICE_FRIEND . 'getRelationList');
        $this->curl->post(array("userId" => $user_id, "relationTypeId" => $status_type,"offset" => $offset,"limit" => $limit));
        return $this->curl->execute();
    }
    public function get_relationship_status($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'getRelationInfo');
        $this->curl->post(array("fromUserId" => $user_id, "toUserId" => $friend_id));
        return $this->curl->execute();
    }
    public function get_user_gender_info($user_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'getUserGenderInfo');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }

}
