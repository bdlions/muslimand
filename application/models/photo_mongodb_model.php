<?php

class Photo_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_PHOTO;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_PHOTO = SERVICE_PATH . "photo/";
    }

    /*
     * This method will return list of photo albums , albums categorise, 
     * @param $user_id, user id
     * @author created by Rashida on 20th September 2015
     */

    public function get_albums_and_categories($user_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getCategoriesAndAlbums');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }

//......................................Album module............................

    /*
     * This method will returns a user all albums  
     * @param $user_id, user id 
     * @author created by Rashida on 20th September 2015
     */

    public function get_all_albums($user_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getAlbums');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }

    /*
     * This method will returns a  albums of a user 
     * @param $user_id, user id 
     * @param $album_id, album id 
     * @author created by Rasida on 20th September 2015
     */

    public function get_album($user_id, $album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getAlbum');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id));
        return $this->curl->execute();
    }

    /*
     * This method will create user album  
     * @param $user_id, user id 
     * @param $album_info, album informations 
     * @author created by Shemin on 20th September 2015
     */

    public function create_album($album_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'createAlbum');
        $this->curl->post(array("albumInfo" => json_encode($album_info)));
        return $this->curl->execute();
    }

    /*
     * This method will edit user album 
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @param $album_info, album informations 
     * @author created by Shemin on 20th September 2015
     */

    public function edit_album($user_id, $album_id, $album_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'editAlbum');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id, "albumInfo" => json_encode($album_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete user album 
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @author created by Shemin on 20th September 2015
     */

    public function delete_album($user_id, $album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deleteAlbum');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id));
        return $this->curl->execute();
    }

    /*
     * This method will add  album like
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @param $like_info,user info who liked this
     * @author created by Shemin on 20th September 2015
     */

    public function add_album_like($user_id, $album_id, $like_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'addAlbumLike');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete user album 
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @author created by Shemin on 20th September 2015
     */

    public function delete_album_like($user_id, $album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deleteAlbumLike');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id));
        return $this->curl->execute();
    }

    /*
     * This method will add  album comment
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @param $comment_info,comment informations
     * @author created by Rashida on 20th September 2015
     */

    public function add_album_comment($user_id, $album_id, $comment_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'addAlbumComment');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id, "commentInfo" => json_encode($comment_info)));
        return $this->curl->execute();
    }

    /*
     * This method will edit album comment
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @param $comment_info,comment informations
     * @author created by Rashida on 20th September 2015
     */

    public function edit_album_comment($user_id, $album_id, $comment_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'editAlbumComment');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id, "commentInfo" => json_encode($comment_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete album comment
     * @param $user_id, user id 
     * @param $album_id,album id 
     * @author created by Rashida on 20th September 2015
     */

    public function delete_album_comment($user_id, $album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deleteAlbumComment');
        $this->curl->post(array("userId" => $user_id, "albumId" => $album_id));
        return $this->curl->execute();
    }

//.....................................Photo module.............................

    /*
     * This method will return a photos info in a album
     * @param $album_id,album id 
     * @author created by Rashida on 20th September 2015
     */
    public function get_photos($album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getPhotos');
        $this->curl->post(array("albumId" => $album_id));
        return $this->curl->execute();
    }

    /*
     * This method will return a photo info
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @author created by Rashida on 20th September 2015
     */

    public function get_photo($album_id, $photo_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getPhoto');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id));
        return $this->curl->execute();
    }

    /*
     * This method will add  photos 
     * @param $album_id,album id 
     * @param $photo_info,photo info 
     * @author created by Rashida on 20th September 2015
     */

    public function add_photos($album_id, $photo_list) {
        $this->curl->create($this->SERVICE_PHOTO . 'addPhotos');
        $this->curl->post(array("albumId" => $album_id, "photoList" => json_encode($photo_list)));
        return $this->curl->execute();
    }

    /*
     * This method will edit  photo
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @param $photo_info,photo info 
     * @author created by Rashida on 20th September 2015
     */

    public function edit_photo($album_id, $photo_id, $photo_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'editPhoto');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id, "photoInfo" => json_encode($photo_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete photo
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @author created by Rashida on 20th September 2015
     */

    public function delete_photo($album_id, $photo_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deletePhoto');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id));
        return $this->curl->execute();
    }

    /*
     * This method will add photo like
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @param $like_info,like info 
     * @author created by Rashida on 20th September 2015
     */

    public function add_photo_like($album_id, $photo_id, $like_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'addPhotoLike');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id, "likeInfo" => json_encode($like_info)));
        return $this->curl->execute();
    }

    /*
     * This method will add photo like
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @author created by Rashida on 20th September 2015
     */

    public function delete_photo_like($album_id, $photo_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deletePhotoLike');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id));
        return $this->curl->execute();
    }

    /*
     * This method will add photo comment
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @param $coment_info, comment info 
     * @author created by Rashida on 20th September 2015
     */

    public function add_photo_comment($album_id, $photo_id, $coment_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'addPhotoComment');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id, "commentInfo" => json_encode($coment_info)));
        return $this->curl->execute();
    }

    /*
     * This method will edit photo comment
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @param $coment_info, comment info 
     * @author created by Rashida on 20th September 2015
     */

    public function edit_photo_comment($album_id, $photo_id, $coment_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'editPhotoComment');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id, "commentInfo" => json_encode($coment_info)));
        return $this->curl->execute();
    }

    /*
     * This method will delete photo comment
     * @param $album_id,album id 
     * @param $photo_id,photo id 
     * @author created by Rashida on 20th September 2015
     */

    public function delete_photo_comment($album_id, $photo_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deletePhotoComment');
        $this->curl->post(array("albumId" => $album_id, "photoId" => $photo_id));
        return $this->curl->execute();
    }

}
