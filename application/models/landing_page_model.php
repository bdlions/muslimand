<?php
class Landing_page_model extends CI_Model
{
    var $SERVICE_LANDING_PAGE;
    public function __construct() 
    {
        parent::__construct();
        $this->SERVICE_STATUS = SERVICE_PATH . "landingpage/";
    } 
    
    public function get_landing_page_info(){
        $this->curl->create($this->SERVICE_STATUS . 'getLandingPageInfo');
        return json_decode($this->curl->execute());
    }
}

