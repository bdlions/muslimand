<?php

class Photo_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_PHOTO;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_PHOTO = SERVICE_PATH . "photo/";
    }
    
    public function get_albums_and_categories($user_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getCategoriesAndAlbums');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }

    public function get_photo_categories() {
        $this->curl->create($this->SERVICE_PHOTO . 'getCategories');
        return $this->curl->execute();
    }

    public function create_album($album_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'createAlbum');
        $this->curl->post(array("albumInfo" => json_encode($album_info)));
        return $this->curl->execute();
    }

    public function get_albums($user_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getAlbums');
        $this->curl->post(array("userId" => $user_id));
        return $this->curl->execute();
    }
    public function get_album($album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getAlbum');
        $this->curl->post(array("albumId" => $album_id));
        return $this->curl->execute();
    }

    public function add_photos($photo_info) {
        $this->curl->create($this->SERVICE_PHOTO . 'addPhoto');
        $this->curl->post(array("photoInfo" => json_encode($photo_info)));
        return $this->curl->execute();
    }

    public function get_photo($photo_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getPhoto');
        $this->curl->post(array("photoId" => $photo_id));
        return $this->curl->execute();
    }

    public function update_photo($photo_id, $image) {
        $this->curl->create($this->SERVICE_PHOTO . 'updatePhoto');
        $this->curl->post(array("photoId" => $photo_id, 'image' => $image));
        return $this->curl->execute();
    }

    public function delete_photo($photo_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'deletePhoto');
        $this->curl->post(array("photoId" => $photo_id));
        return $this->curl->execute();
    }

    public function get_photos($album_id) {
        $this->curl->create($this->SERVICE_PHOTO . 'getPhotos');
        $this->curl->post(array("albumId" => $album_id));
        return $this->curl->execute();
    }

}
