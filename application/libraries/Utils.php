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
            "0" => 'gender',
            "1" => 'Male',
            "2" => 'Female',
            "3" => 'Other',
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
            "0" => 'month',
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

    /*
     * this method return list of month
     *  @Rashida 17th May 2015
     *  
     *  */

    public function get_date_list() {
        $date_list[0] = "date";
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
     * this method return list of year
     *  @Rashida 17th May 2015
     *  
     *  */

    public function get_year_list() {
        for ($i = 2015; $i >= 1915; $i--) {
            $year_list["" . $i] = "" . $i;
        }
        return $year_list;
    }
    
    /*
     * This method will encode an object to a json string mapping attributes
     * @author nazmul hasan
     * @created on 18th september 2015
     */
    public function json_encode_attr_map($value, $options = 0, $depth = 512)
    {
        $value = json_encode($value);
        $matches = array();
        preg_match_all('/\"(\w+)\":/', $value, $matches, PREG_SET_ORDER);
        foreach($matches as $match)
        {
            $value = str_replace($match[0], "\"".$this->attr_map[$match[1]]."\":", $value);
        }
        return $value;
    }
    /*
     * This method will decode a json string to an object mapping attributes
     * @author nazmul hasan
     * @created on 18th september 2015
     */
    public function json_decode_attr_map($json, $assoc = false, $depth = 512, $options = 0)
    {
        $matches = array();
        preg_match_all('/\"(\w+)\":/', $json, $matches, PREG_SET_ORDER);
        foreach($matches as $match)
        {
            $json = str_replace($match[0], "\"".$this->rev_attr_map[$match[1]]."\":", $json);
        }
        return json_decode($json);
    }

}
