<?php
class Landing_page_model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
    } 
    
    public function get_countries_religions(){
        $this->curl->create('http://localhost:8080/dataservice/ctrl/getCountryAndReligion');
        $this->curl->post(array());
        return json_decode($this->curl->execute());
    }
}

