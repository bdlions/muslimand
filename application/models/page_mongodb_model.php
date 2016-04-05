<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_mongodb_model extends CI_Controller {

    var $SERVICE_PAGE;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_PAGE = SERVICE_PATH . "page/";
    }

    public function get_categories_subcaregories() {
        $this->curl->create($this->SERVICE_PAGE . 'getCategorySubCategory');
        return json_decode($this->curl->execute());
    }

    public function get_subcaregories() {
        $this->curl->create($this->SERVICE_PAGE . 'getSubCategories');
        return json_decode($this->curl->execute());
    }

    function add_page($page_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addPage');
        $this->curl->post(array("pageInfo" => json_encode($page_info)));
        return $this->curl->execute();
    }

    function update_page($page_info) {
        $this->curl->create($this->SERVICE_PAGE . 'updatePage');
        $this->curl->post(array("pageInfo" => json_encode($page_info)));
        return $this->curl->execute();
    }

    function get_page_info($page_id, $user_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getPageInfo');
        $this->curl->post(array("pageId" => $page_id, "userId" => $user_id));
        return $this->curl->execute();
    }

    function add_page_like($page_id, $member_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addPageLike');
        $this->curl->post(array("pageId" => $page_id, "memberInfo" => json_encode($member_info)));
        return $this->curl->execute();
    }

    function get_invite_friend_list($page_id, $user_id, $offset = 0, $limit = 0) {
        $this->curl->create($this->SERVICE_PAGE . 'getInviteFriendList');
        $this->curl->post(array("pageId" => $page_id, "userId" => $user_id, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }

    function invite_member($page_id, $member_info) {
        $this->curl->create($this->SERVICE_PAGE . 'inviteMember');
        $this->curl->post(array("pageId" => $page_id, "memberInfo" => json_encode($member_info)));
        return $this->curl->execute();
    }

    function join_page_membership($page_id, $member_info) {
        $this->curl->create($this->SERVICE_PAGE . 'joinPageMamberShip');
        $this->curl->post(array("pageId" => $page_id, "memberInfo" => json_encode($member_info)));
        return $this->curl->execute();
    }

    function leave_page_membership($page_id, $user_id) {
        $this->curl->create($this->SERVICE_PAGE . 'leavePageMemberShip');
        $this->curl->post(array("pageId" => $page_id, "userId" => $user_id));
        return $this->curl->execute();
    }

    /*
     * This method will add  photos 
     * @param $album_id,album id 
     * @param $photo_info,photo info 
     * @author created by Rashida on 
     */

    public function add_photos($page_id, $album_id, $photo_list) {
        $this->curl->create($this->SERVICE_PAGE . 'addPhotos');
        $this->curl->post(array("pageId" => $page_id, "albumId" => $album_id, "photoList" => json_encode($photo_list)));
        return $this->curl->execute();
    }

    public function add_status($status_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addStatus');
        $this->curl->post(array("statusInfo" => json_encode($status_info)));
        return $this->curl->execute();
    }

    public function get_slider_photos($user_id, $reference_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getSliderPhotos');
        $this->curl->post(array("userId" => $user_id, "referenceId" => $reference_id));
        return $this->curl->execute();
    }

    public function add_photo_like($user_id, $photo_id, $reference_id, $like_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addPhotoLike');
        $this->curl->post(array("userId" => $user_id, "photoId" => $photo_id, "referenceId" => $reference_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }

    public function add_m_photo_like($user_id, $photo_id, $like_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addMPhotoLike');
        $this->curl->post(array("userId" => $user_id, "photoId" => $photo_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }

    public function get_timeline_photos($page_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getTimelinePhotos');
        $this->curl->post(array("pageId" => $page_id));
        return $this->curl->execute();
    }

    public function get_user_albums($page_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getAlbums');
        $this->curl->post(array("pageId" => $page_id));
        return $this->curl->execute();
    }

    public function get_slider_album($mapping_id, $album_id, $user_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getSliderAlbum');
        $this->curl->post(array("mappingId" => $mapping_id, "albumId" => $album_id, "userId" => $user_id));
        return $this->curl->execute();
    }

    public function get_photos($user_id, $album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getPhotos');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id));
        return $this->curl->execute();
    }

}
