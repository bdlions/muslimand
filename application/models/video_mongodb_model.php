<?php

class Video_mongodb_model extends CI_Model {

    var $SERVICE_VIDEO;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_VIDEO = SERVICE_PATH . "video/";
    }

    /*
     * This method will return vedio categories 
     * @author created by Shemin on 21 October 2015
     */

    public function get_video_categories() {
        $this->curl->create($this->SERVICE_VIDEO . 'getVideoCategories');
        return $this->curl->execute();
    }

    /*
     * This method will add user video 
     * @param $video_info, video information
     * @author created by Shemin on 21 October 2015
     */

    public function add_video($video_info) {
        $this->curl->create($this->SERVICE_VIDEO . 'addVideo');
        $this->curl->post(array("videoInfo" => json_encode($video_info)));
        return $this->curl->execute();
    }

    /*
     * This method will all  videos of a user 
     * @param $user_id, user id
     * @author created by Shemin on 21 October 2015
     */

    public function get_videos($user_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'getVideos');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }

    /*
     * This method will return a video info
     * @param $user_id, user id
     * @param $video_id, video id
     * @author created by Shemin on 21 October 2015
     */

    public function get_video($user_id, $video_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'getVideo');
        $this->curl->post(array("userId" => $user_id, "videoId" => $video_id));
        return $this->curl->execute();
    }

    /*
     * This method will shared a user video 
     * @param $video_info, video information
     * @author created by Shemin on 21 October 2015
     */

    public function share_video($user_id, $video_id, $video_info) {
        $this->curl->create($this->SERVICE_VIDEO . 'shareVideo');
        $this->curl->post(array("videoId" => $video_id, "videoInfo" => json_encode($video_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete user video 
     * @param $user_id, user id 
     * @param $video_id,video id 
     * @author created by Shemin on 21 October 2015
     */

    public function delete_video($video_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'deleteVideo');
        $this->curl->post(array("videoId" => $video_id));
        return $this->curl->execute();
    }

    /*
     * This method will add  video like
     * @param $video_id,video id 
     * @param $like_info,user info who liked this
     * @author created by Shemin on 21 October 2015
     */

    public function add_video_like($video_id, $like_info) {
        $this->curl->create($this->SERVICE_VIDEO . 'addVideoLike');
        $this->curl->post(array("videoId" => $video_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete user video 
     * @param $user_id, user id 
     * @param $video_id,video id 
     * @author created by Shemin on 21 October 2015
     */

    public function delete_video_like($video_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'deleteVideoLike');
        $this->curl->post(array("videoId" => $video_id));
        return $this->curl->execute();
    }

    /*
     * This method will return video like list 
     * @param $video_id,video id 
     * @author created by Shemin on 21 October 2015
     */

    public function get_video_like_list($video_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'getVideoLikeList');
        $this->curl->post(array("videoId" => $video_id));
        return $this->curl->execute();
    }

    /*
     * This method will add  video comment
     * @param $user_id, user id 
     * @param $video_id,video id 
     * @param $comment_info,comment informations
     * @author created by Shemin on 21 October 2015
     */

    public function add_video_comment($video_id, $comment_info) {
        $this->curl->create($this->SERVICE_VIDEO . 'addVideoComment');
        $this->curl->post(array("videoId" => $video_id, "commentInfo" => json_encode($comment_info)));
        return $this->curl->execute();
    }

    /*
     * This method will return comment list of a video
     * @param $video_id,video id 
     * @author created by Shemin on 21 October 2015
     */

    public function get_video_comments($video_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'getVideoComments');
        $this->curl->post(array("videoId" => $video_id));
        return $this->curl->execute();
    }

    /*
     * This method will edit video comment
     * @param $video_id,video id 
     * @param $comment_id, comment id 
     * @param $comment_info,comment informations
     * @author created by Shemin on 21 October 2015
     */

    public function edit_video_comment($video_id, $comment_id, $comment_info) {
        $this->curl->create($this->SERVICE_VIDEO . 'editVideoComment');
        $this->curl->post(array("videoId" => $video_id, "commentId" => $comment_id, "commentInfo" => json_encode($comment_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete video comment
     * @param $user_id, user id 
     * @param $video_id,video id 
     * @author created by Shemin on 21 October 2015
     */

    public function delete_video_comment($video_id, $comment_id) {
        $this->curl->create($this->SERVICE_VIDEO . 'deleteVideoComment');
        $this->curl->post(array("videoId" => $video_id, "commentId" => $comment_id,));
        return $this->curl->execute();
    }

}
