<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');        
    }
    
    public function photo_categories()
    {
        $this->template->load("admin/templates/main_tmpl", "admin/media/photo/photo_categories");
    }

    public function create_photo_category()
    {
        $this->template->load("admin/templates/main_tmpl", "admin/media/photo/create_photo_category");
    }
    
    public function update_photo_category()
    {
       $this->template->load("admin/templates/main_tmpl", "admin/media/photo/update_photo_category");  
    }
    
    public function delete_photo_category()
    {
        $this->template->load("admin/templates/main_tmpl", "admin/media/photo/modal_delete_photo_category");   
    }
    
    public function video_categories()
    {
        $this->template->load("admin/templates/main_tmpl", "admin/media/video/video_categories");
    }

    public function create_video_category()
    {
        $this->template->load("admin/templates/main_tmpl", "admin/media/video/create_video_category"); 
    }
    
    public function update_video_category()
    {
       $this->template->load("admin/templates/main_tmpl", "admin/media/video/update_video_category");    
    }
    
    public function delete_video_category()
    {
        $this->template->load("admin/templates/main_tmpl", "admin/media/video/modal_delete_video_category");   
    }
}
