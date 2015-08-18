<?php

class Video_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_VIDEO;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_VIDEO = SERVICE_PATH . "video/";
    }

    public function get_video_categories() {
        $this->curl->create($this->SERVICE_VIDEO . 'getCategories');
        return $this->curl->execute();
    }

    public function add_vedio($video_info) {
        $this->curl->create($this->SERVICE_VIDEO . 'addVideo');
        $this->curl->post(array("videoInfo" => json_encode($video_info)));
        return $this->curl->execute();
    }

//    public function get_albums($user_id) {
//        $this->curl->create($this->SERVICE_PHOTO . 'getAlbums');
//        $this->curl->post(array("userId" => $user_id));
//        return $this->curl->execute();
//    }
 
}
