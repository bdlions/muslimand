<?php

class Search_mongodb_model extends CI_Model {

    var $SERVICE_STATUS;

    public function __construct() {
        parent::__construct();
        $this->SERVICE_STATUS = SERVICE_PATH . "search/";
    }

    public function get_search_result($search_value, $offset, $limit) {
        $this->curl->create($this->SERVICE_STATUS . 'getSearchResult');
        $this->curl->post(array("searchValue" => $search_value, "offset" => $offset, "limit" => $limit));
        return $this->curl->execute();
    }



  

}
