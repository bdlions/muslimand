<?php

class Status_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_STATUS;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_STATUS = SERVICE_PATH . "status/";
    }

    public function add_status($status_info) {
        $this->curl->create($this->SERVICE_STATUS . 'addStatus');
        $this->curl->post(array("statusInfo" => json_encode($status_info)));
        return $this->curl->execute();
    }

    public function get_statuses($user_id, $offset, $limit) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatuses');
        $this->curl->post(array("userId" => $user_id, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }
    public function get_user_profile_status($user_id, $mapping_id, $offset, $limit) {
        $this->curl->create($this->SERVICE_STATUS . 'getUserProfileStatuses');
        $this->curl->post(array("userId" => $user_id,"mappingId" =>$mapping_id, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }
    public function get_status_details($status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusDetails');
        $this->curl->post(array("statusId" => $status_id));
        return $this->curl->execute();
    }

    public function update_status($status_id, $status_info) {
        $this->curl->create($this->SERVICE_STATUS . 'updateStatus');
        $this->curl->post(array("statusId" => $status_id, 'statusInfo' => $status_info));
        return $this->curl->execute();
    }

    public function add_status_like($user_id, $status_id, $like_info) {
        $this->curl->create($this->SERVICE_STATUS . 'addStatusLike');
        $this->curl->post(array("userId" => $user_id, "statusId" => $status_id, 'likeInfo' => json_encode($like_info)));
        return $this->curl->execute();
    }

    public function add_status_comment($user_id, $status_id, $comment_info) {
        $this->curl->create($this->SERVICE_STATUS . 'addStatusComment');
        $this->curl->post(array("userId" => $user_id, "statusId" => $status_id, 'commentInfo' => json_encode($comment_info)));
        return $this->curl->execute();
    }

    public function share_status($user_id, $status_id, $ref_user_info, $share_info) {
        $this->curl->create($this->SERVICE_STATUS . 'shareStatus');
        $this->curl->post(array("userId" => $user_id, "statusId" => $status_id, 'refUserInfo' => json_encode($ref_user_info), 'shareInfo' => json_encode($share_info)));
        return $this->curl->execute();
    }

    public function get_status_likes($status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusLikeList');
        $this->curl->post(array("statusId" => $status_id));
        return $this->curl->execute();
    }
    public function get_status_shears($status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusShareList');
        $this->curl->post(array("statusId" => $status_id));
        return $this->curl->execute();
    }

    public function get_status_comments($status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusComments');
        $this->curl->post(array("statusId" => $status_id));
        return $this->curl->execute();
    }

    public function delete_status($status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'deleteStatus');
        $this->curl->post(array("statusId" => $status_id));
        return $this->curl->execute();
    }

}
