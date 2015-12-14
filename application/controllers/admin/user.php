<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');        
    }
    
    public function users()
    {
        
    }
    
    public function basic_info()
    {
        
    }
    
    public function followers()
    {
        
    }
    
    public function albums()
    {
        
    }
    
    public function messages()
    {
        
    }
    
    public function logs()
    {
        
    }
}
