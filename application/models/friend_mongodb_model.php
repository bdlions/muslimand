<?php

class Friend_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_FRIEND;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_FRIEND = SERVICE_PATH . "friend/";
    }

    public function add_request($user_id, $friend_id, $type_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'addRequest');
        $this->curl->post(array("userId" => $user_id, "friendId" => $friend_id, "typeId" => $type_id ));
        return $this->curl->execute();
    }
    public function change_relation_ship_status($user_id, $friend_id,$type_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'changeRelationShipStatus');
        $this->curl->post(array("userId" => $user_id, "friendId" => $friend_id, "typeId" => $type_id));
        return $this->curl->execute();
    }
    public function delete_request($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'deleteRequest');
        $this->curl->post(array("userId" => $user_id, "friendId" => $friend_id));
        return $this->curl->execute();
    }

    public function get_friend_list($user_id,$offset,$limit,$status_type) {
        $this->curl->create($this->SERVICE_FRIEND . 'getFriendList');
        $this->curl->post(array("userId" => $user_id,"offset" => $offset,"limit" => $limit, "statusType" => $status_type));
        return $this->curl->execute();
    }
    public function get_relationship_status($user_id,$friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'getRelationShipStatus');
        $this->curl->post(array("userId" => $user_id, "friendId" => $friend_id));
        return $this->curl->execute();
    }

}
