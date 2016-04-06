<?php

class Status_mongodb_model extends CI_Model {

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
        $this->curl->post(array("userId" => $user_id, "mappingId" => $mapping_id, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }

    public function get_page_profile_status($user_id, $mapping_id, $offset, $limit) {
        $this->curl->create($this->SERVICE_STATUS . 'getPageProfileStatuses');
        $this->curl->post(array("userId" => $user_id, "mappingId" => $mapping_id, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }

    public function get_status_details($user_id, $status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusDetails');
        $this->curl->post(array("userId" => $user_id, "statusId" => $status_id));
        return $this->curl->execute();
    }

    public function update_status($status_id, $status_info) {
        $this->curl->create($this->SERVICE_STATUS . 'updateStatus');
        $this->curl->post(array("statusId" => $status_id, 'statusInfo' => $status_info));
        return $this->curl->execute();
    }
    public function update_status_photo($user_id, $status_id, $status_info) {
        $this->curl->create($this->SERVICE_STATUS . 'updateStatusPhoto');
        $this->curl->post(array("statusId" => $status_id, 'statusInfo' => $status_info));
        return $this->curl->execute();
    }

    public function add_status_like($user_id, $status_id, $like_info, $status_type_id) {
        $this->curl->create($this->SERVICE_STATUS . 'addStatusLike');
        $this->curl->post(array("userId" => $user_id, "statusId" => $status_id, 'likeInfo' => json_encode($like_info), 'statusTypeId' => $status_type_id));
        return $this->curl->execute();
    }

    public function add_status_comment_like($status_id, $comment_id, $like_info) {
        $this->curl->create($this->SERVICE_STATUS . 'addStatusCommentLike');
        $this->curl->post(array("statusId" => $status_id, "commentId" => $comment_id, 'likeInfo' => json_encode($like_info)));
        return $this->curl->execute();
    }

    public function add_status_comment($reference_user_info, $status_id, $status_type_id,  $comment_info) {
        $this->curl->create($this->SERVICE_STATUS . 'addStatusComment');
        $this->curl->post(array("referenceUserInfo" => json_encode($reference_user_info), "statusId" => $status_id, "statusTypeId" => $status_type_id, 'commentInfo' => json_encode($comment_info)));
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

    public function get_status_comments($user_id, $status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusComments');
        $this->curl->post(array("userId" => $user_id, "statusId" => $status_id));
        return $this->curl->execute();
    }

    public function update_status_comment($status_id, $comment_id, $description) {
        $this->curl->create($this->SERVICE_STATUS . 'updateStatusComment');
        $this->curl->post(array("statusId" => $status_id, "commentId" => $comment_id, "description" => $description));
        return $this->curl->execute();
    }

    public function delete_status_comment($status_id, $comment_id) {
        $this->curl->create($this->SERVICE_STATUS . 'deleteStatusComment');
        $this->curl->post(array("statusId" => $status_id, "commentId" => $comment_id));
        return $this->curl->execute();
    }

    public function get_status_comment_like_list($status_id, $comment_id) {
        $this->curl->create($this->SERVICE_STATUS . 'getStatusCommentLikeList');
        $this->curl->post(array("statusId" => $status_id, "commentId" => $comment_id));
        return $this->curl->execute();
    }

    public function delete_status($status_id) {
        $this->curl->create($this->SERVICE_STATUS . 'deleteStatus');
        $this->curl->post(array("statusId" => $status_id));
        return $this->curl->execute();
    }

    public function get_recent_activities($user_id, $offset, $limit) {
        $this->curl->create($this->SERVICE_STATUS . 'getRecentActivities');
        $this->curl->post(array("userId" => $user_id, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }

}
