<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Name:  Utils
 * Requirements: PHP5 or above
 *
 */
class Utils {

    public $attr_map = array();
    public $rev_attr_map = array();

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->config('ion_auth', TRUE);
        $this->attr_map = $this->CI->config->item('attr_map', 'ion_auth');
        $this->rev_attr_map = $this->CI->config->item('rev_attr_map', 'ion_auth');
        $this->CI->load->library('image_lib');
    }

    /*
     * This method will return a random string based on given length
     * @param $lendth, random string length
     * @author nazmul hasan on 19th August 2015
     */

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    /*
     * this method return list of gender
     * @Rashida 17th May 2015
     *  
     *  */

    public function get_gender() {
        $gender = array(
            "1" => 'Male',
            "2" => 'Female',
            "3" => 'Both',
        );
        return $gender;
    }

    /*
     * this method return list of month
     * @Rashida 17th May 2015
     *  
     *  */

    public function get_month_list() {
        $months = array(
            "0" => 'Month',
            "01" => 'Jan',
            "02" => 'Feb',
            "03" => 'Mar',
            "04" => 'Apr',
            "05" => 'May',
            "06" => 'Jun',
            "07" => 'Jul',
            "08" => 'Aug',
            "09" => 'Sep',
            "10" => 'Oct',
            "11" => 'Nov',
            "12" => 'Dec'
        );
        return $months;
    }

    public function get_relationship_status_list() {
        $relationship_status = array(
            "01" => 'Single',
            "02" => 'In a relationship',
            "03" => 'Engaged',
            "04" => 'Married',
            "05" => 'In a civil union',
            "06" => 'In a domestic partnership',
            "07" => 'In an open relationship',
            "08" => 'Its complicated',
            "09" => 'Separated',
            "10" => 'Divorced',
            "11" => 'Widowed',
        );
        return $relationship_status;
    }

    /*
     * this method return list of month
     *  @Rashida 17th May 2015
     *  
     *  */

    public function get_date_list() {
        $date_list[0] = "Date";
        for ($i = 1; $i <= 31; $i++) {
            if ($i < 10) {
                $date_list["0" . $i] = "0" . $i;
            } else {
                $date_list["" . $i] = "" . $i;
            }
        }
        return $date_list;
    }

    /*
     * this method return age from 15 - 115 
     *  @Rashida 20th March 2016
     *  
     *  */

    public function get_age_list() {
        for ($i = 15; $i <= 115; $i++) {
            $age_list["" . $i] = "" . $i;
        }
        return $age_list;
    }

    /*
     * this method return list of year
     *  @Rashida 17th May 2015
     *  
     *  */

    public function get_year_list() {
        for ($i = 2016; $i >= 1915; $i--) {
            $year_list["" . $i] = "" . $i;
        }
        return $year_list;
    }

    /*
     * This method will encode an object to a json string mapping attributes
     * @author nazmul hasan
     * @created on 18th september 2015
     */

    public function json_encode_attr_map($value, $options = 0, $depth = 512) {
        $value = json_encode($value);
        $matches = array();
        preg_match_all('/\"(\w+)\":/', $value, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $value = str_replace($match[0], "\"" . $this->attr_map[$match[1]] . "\":", $value);
        }
        return $value;
    }

    /*
     * This method will decode a json string to an object mapping attributes
     * @author nazmul hasan
     * @created on 18th september 2015
     */

    public function json_decode_attr_map($json, $assoc = false, $depth = 512, $options = 0) {
        $matches = array();
        preg_match_all('/\"(\w+)\":/', $json, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $json = str_replace($match[0], "\"" . $this->rev_attr_map[$match[1]] . "\":", $json);
        }
        return json_decode($json);
    }

    public function upload_image($file_info, $uploaded_path) {
        $result = array();
        if (isset($file_info)) {
            $config['image_library'] = 'gd2';
            $config['upload_path'] = $uploaded_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '10240';
            $config['maintain_ratio'] = FALSE;

            $this->CI = & get_instance();
//            $this->CI->load->config('ion_auth', TRUE);
            $this->CI->load->library('upload', $config);

            if (!$this->CI->upload->do_upload()) {
                $result['status'] = 0;
                $result['message'] = $this->CI->upload->display_errors();
            } else {
                $upload_data = $this->CI->upload->data();
                $result['status'] = 1;
                $result['message'] = 'Image is uploaded successfully';
                $result['upload_data'] = $upload_data;
            }
        }
        return $result;
    }

    public function rename_file_name() {

        if (!$this->upload->do_upload()) {
            return $this->upload->display_errors();
        } else {
            $res = $this->upload->data();

            $file_path = $res['file_path'];
            $file = $res['full_path'];
            $file_ext = $res['file_ext'];

            $final_file_name = time() . $file_ext;


// here is the renaming functon
            rename($file, $file_path . $final_file_name);
        }
    }

    /*
     * This method will resize an image
     * @param $source_path, source image relative path
     * @param $new_path, destination image relative path
     * @param $height, height of destination image
     * @param $width, width of destination image
     * @Author 
     */

    public function resize_image($source_path, $new_path, $height, $width) {
        $result = array();
        $config = array(
            'image_library' => 'gd2',
            'source_image' => FCPATH . $source_path,
            'new_image' => FCPATH . $new_path,
            'maintain_ratio' => FALSE,
            'overwrite' => TRUE,
            'height' => $height,
            'width' => $width
        );
        $image_absolute_path = FCPATH . dirname($new_path);
        if (!is_dir($image_absolute_path)) {
            mkdir($image_absolute_path, 0777, TRUE);
        }
        $this->CI->image_lib->clear();
        $this->CI->image_lib->initialize($config);
        if (!$this->CI->image_lib->resize()) {
            $result['status'] = 0;
            $result['message'] = $this->CI->image_lib->display_errors();
        } else {
            $result['status'] = 1;
        }
        return $result;
    }

}
