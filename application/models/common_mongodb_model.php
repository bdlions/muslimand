<?php
class Common_mongodb_model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
    } 
    
    /*
     * This method will return country list from the database
     */
    public function get_all_countries()
    {
        return $this->mongo_db
                ->select('*')
                ->get($this->collections['countries']);
        
    }
    /*
     * This method will return religions list from the database
     */
    public function get_all_religions()
    {
        return $this->mongo_db
                ->select('*')
                ->get($this->collections['religions']);
        
    }
}
