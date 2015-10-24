<?php

class Search_mongodb_model extends Ion_auth_mongodb_model {

    var $SERVICE_STATUS;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_STATUS = SERVICE_PATH . "search/";
    }

    public function get_users($search_value) {
        $this->curl->create($this->SERVICE_STATUS . 'getUsers');
        $this->curl->post(array("searchValue" => $search_value));
        return $this->curl->execute();
    }



  

}
