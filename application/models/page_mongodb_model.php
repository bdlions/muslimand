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

    public function create_album($album_info) {
        $this->curl->create($this->SERVICE_PAGE . 'createAlbum');
        $this->curl->post(array("albumInfo" => json_encode($album_info)));
        return $this->curl->execute();
    }

    function get_page_info($page_id, $user_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getPageInfo');
        $this->curl->post(array("pageId" => $page_id, "userId" => $user_id));
        return $this->curl->execute();
    }

    function get_user_pages($user_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getUserPageList');
        $this->curl->post(array("userId" => $user_id));
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

    function invite_member($page_info, $member_info) {
        $this->curl->create($this->SERVICE_PAGE . 'inviteMember');
        $this->curl->post(array("pageInfo" => json_encode($page_info), "memberInfo" => json_encode($member_info)));
        return $this->curl->execute();
    }

    function join_page_membership($mapping_id, $page_info, $member_info) {
        $this->curl->create($this->SERVICE_PAGE . 'joinPageMamberShip');
        $this->curl->post(array("mappingId" => $mapping_id, "pageInfo" => json_encode($page_info), "memberInfo" => json_encode($member_info)));
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

    public function add_photo_like($user_id, $album_id, $photo_id, $reference_id, $like_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addPhotoLike');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id, "photoId" => $photo_id, "referenceId" => $reference_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }
    public function add_newsfeed_photo_like($user_id, $photo_id, $reference_id, $like_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addNewsfeedPhotoLike');
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

//................
    public function add_album_like($mapping_id, $album_id, $reference_id, $like_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addAlbumLike');
        $this->curl->post(array("mappingId" => $mapping_id, "albumId" => $album_id, "referenceId" => $reference_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }

    public function add_album_comment($album_id, $mapping_id, $reference_id, $comment_info) {
        $this->curl->create($this->SERVICE_PAGE . 'addAlbumComment');
        $this->curl->post(array("albumId" => $album_id, "mappingId" => $mapping_id, "referenceId" => $reference_id, "commentInfo" => json_encode($comment_info)));
        return $this->curl->execute();
    }

    public function get_album_comments($album_id, $mapping_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getAlbumComments');
        $this->curl->post(array("albumId" => $album_id, "mappingId" => $mapping_id));
        return $this->curl->execute();
    }

    public function get_album_like_list($album_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getAlbumLikeList');
        $this->curl->post(array("albumId" => $album_id));
        return $this->curl->execute();
    }

//    public function add_photo_like($user_id, $photo_id, $reference_id, $like_info) {
//        $this->curl->create($this->SERVICE_PHOTO . 'addPhotoLike');
//        $this->curl->post(array("userId" => $user_id, "photoId" => $photo_id, "referenceId" => $reference_id, "likeInfo" => json_encode($like_info)));
//        return $this->curl->execute();
//    }
//     public function add_photo_comment($photo_id, $reference_id, $coment_info, $reference_info, $status_type_id) {
//        $this->curl->create($this->SERVICE_PHOTO . 'addPhotoComment');
//        $this->curl->post(array("photoId" => $photo_id, "referenceId" => $reference_id, "commentInfo" => json_encode($coment_info), "referenceInfo" => json_encode($reference_info), "statusTypeId" => $status_type_id));
//        return $this->curl->execute();
//    }
    public function add_slider_photo_comment($photo_id, $reference_id, $coment_info, $reference_info, $album_id) {
        $this->curl->create($this->SERVICE_PAGE . 'addSliderPhotoComment');
        $this->curl->post(array("photoId" => $photo_id, "referenceId" => $reference_id, "commentInfo" => json_encode($coment_info), "referenceInfo" => json_encode($reference_info), "albumId" => $album_id));
        return $this->curl->execute();
    }

    public function get_photo_comments($photo_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getPhotoComments');
        $this->curl->post(array("photoId" => $photo_id));
        return $this->curl->execute();
    }

    //................

    public function get_page_albums($page_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getAlbums');
        $this->curl->post(array("pageId" => $page_id));
        return $this->curl->execute();
    }

    public function get_page_album_list($page_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getAlbumList');
        $this->curl->post(array("pageId" => $page_id));
        return $this->curl->execute();
    }

    public function get_slider_album($mapping_id, $album_id, $user_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getSliderAlbum');
        $this->curl->post(array("mappingId" => $mapping_id, "albumId" => $album_id, "userId" => $user_id));
        return $this->curl->execute();
    }

    public function get_photos($user_id, $mapping_id, $album_id) {
        $this->curl->create($this->SERVICE_PAGE . 'getPhotos');
        $this->curl->post(array("userId" => $user_id, "mappingId" => $mapping_id, "albumId" => $album_id));
        return $this->curl->execute();
    }

    public function add_photo_comment($photo_id, $reference_id, $coment_info, $reference_info, $status_type_id) {
        $this->curl->create($this->SERVICE_PAGE . 'addPhotoComment');
        $this->curl->post(array("photoId" => $photo_id, "referenceId" => $reference_id, "commentInfo" => json_encode($coment_info), "referenceInfo" => json_encode($reference_info), "statusTypeId" => $status_type_id));
        return $this->curl->execute();
    }

}
