<?php
class Landing_page_model extends CI_Model
{
    var $SERVICE_LANDING_PAGE;
    public function __construct() 
    {
        parent::__construct();
        $this->SERVICE_STATUS = SERVICE_PATH . "landingpage/";
    } 
    
    public function get_countries_religions(){
        $this->curl->create($this->SERVICE_STATUS . 'getCountryAndReligion');
        $this->curl->post(array());
        return json_decode($this->curl->execute());
    }
}

