<?php

class Friend_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_FRIEND;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_FRIEND = SERVICE_PATH . "friend/";
    }

    public function add_friend($user_id, $friend_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'addFriend');
        $this->curl->post(array("userId" => $user_id, "friendId" => $friend_id));
        return $this->curl->execute();
    }

    public function get_friend_list($user_id) {
        $this->curl->create($this->SERVICE_FRIEND . 'getFriendList');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }

}
