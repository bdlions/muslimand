<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
//        header('Access-Control-Allow-Origin: *');
//        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
//        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
//        $method = $_SERVER['REQUEST_METHOD'];
//        if ($method == "OPTIONS") {
//            die();
//        }
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
//        $this->load->model('basic_profile_mongodb_model');
        $this->load->helper('url');
        $this->load->library('utils');
//
//        // Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();
//
//        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
//
//        $this->lang->load('auth');
//        $this->load->helper('language');
    }

//	public function index()
//	{
//            $this->curl->create('http://localhost:8080/dataservice/ctrl/arrayTest');
//            $param = array("name" => "Alamgir", "workList" => array("ComapnyName1" => "Shampan", "ComapnyName2" => "BBC"), "userId" => 123);
//            
//            $this->curl->post(array("input" => json_encode($param)));
//            print_r($this->curl->execute());
//            
//	}


    public function index() {
        $this->load->view("welcome_test");
    }

//
    public function image_upload() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $file = array();
        $files = array();
        if (isset($_FILES["userfile"])) {
            $file_info = $_FILES["userfile"];
            $result = $this->utils->upload_image($file_info, USER_ALMUB_IMAGE_PATH);
            if ($result['status'] == 1) {
                $picture = $result['upload_data']['file_name'];
                $file = array(
                    "name" => $picture,
                    "type" => "image/jpeg",
                    "url" => base_url() . USER_ALMUB_IMAGE_PATH . $picture,
                    "thumbnailUrl" => base_url() . USER_ALMUB_IMAGE_PATH . $picture,
                    "deleteUrl" => base_url() . USER_ALMUB_IMAGE_PATH . $picture,
                    "size" => 100,
                    "deleteType" => "DELETE"
                );

                $files[] = $file;
                $response["files"] = $files;
                $file_name = $_FILES['file_var_name']['name'];
            } else {
                $this->data['message'] = $result['message'];
                echo json_encode($this->data);
                return;
            }
            echo json_encode($response);
            return;
        }
    }

    public function image_crop() {
        $response = array();
        $imageData = $this->input->post('imageData');
        list($type, $data) = explode(';', $imageData);
        list(, $data) = explode(',', $imageData);
        $imageData = base64_decode($data);
        $user_id = "2";
//        $temp_src_name = $user_id.'.jpg';
        $file = TEMP_IMAGE_PATH . $user_id . '_' . now() . '.jpg';
        $success = file_put_contents($file, $imageData);
        $this->utils->resize_image($file, PROFILE_PICTURE_PATH_W100_H100 . $temp_src_name, PROFILE_PICTURE_H100, PROFILE_PICTURE_W100);
        $this->utils->resize_image($file, PROFILE_PICTURE_PATH_W50_H50 . $temp_src_name, PROFILE_PICTURE_H50, PROFILE_PICTURE_W50);
        $this->utils->resize_image($file, PROFILE_PICTURE_PATH_W32_H32 . $temp_src_name, PROFILE_PICTURE_H32, PROFILE_PICTURE_W32);
        
        $image_list = array();
        $image = new stdClass();
        $image->image = $temp_src_name;
        $image_list[] = $image;
        $album_id = PROFILE_PHOTOS_ALBUM_ID;
        $album_title = PROFILE_PHOTOS_ALBUM_TITLE;
        $album_result = $this->album_add($user_id, $album_id, $album_title, $image_list);
        //add status in user profile related to the change of profile picture
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = "Shemin"; //get from session;
        $user_info->lastName = "Haque";
        $status_info = new stdClass();
        $status_info->userId = $user_id;
        $new_status_id = $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
        $status_info->statusTypeId = STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE;
        $status_info->images = $image_list;
        $status_info->userInfo = $user_info;
        $result = $this->status_mongodb_model->add_status($status_info);
        if ($result != null) {
            $response["status_info"] = $status_info;
        }
        echo json_encode($response);
        
        if ($success != null) {
            $response['message'] = "Image upload Successfully";
        } else {
            $response['message'] = "Sorry !! Please select again";
        }
        echo json_encode($response);
        return;
    }
    
    
    function infinity_call_test(){
     $array1 = array(
         "id " => "1",
         "name" => "shaemin1"
     );
     $array2 = array(
         "id " => "1",
         "name" => "shaemin2"
     );
     $array3 = array(
         "id " => "1",
         "name" => "shaemin3"
     );
     $array4 = array(
         "id " => "1",
         "name" => "shaemin4"
     );
     
     $array5 = array(
         "id " => "1",
         "name" => "shaemin5"
     );
     
     $array6 = array(
         "id " => "1",
         "name" => "shaemin6"
     );
     
     $array7 = array(
         "id " => "1",
         "name" => "shaemin7"
     );
     $response = array();
     $response[] = $array1;
     $response[] = $array2;
     $response[] = $array3;
     $response[] = $array4;
     $response[] = $array5;
     $response[] = $array6;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     $response[] = $array7;
     
     echo json_encode($response);
     return ;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */