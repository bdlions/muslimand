<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Name:  Utils
 * Requirements: PHP5 or above
 *
 */
class Utils {

    public function __construct() {
        
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
        $year_list["0"] = "year";
        for ($i = 2015; $i >= 1915; $i--) {
            $year_list["" . $i] = "" . $i;
        }
        return $year_list;
    }

}
