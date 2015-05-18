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
  * this method return list of month
  * @Rashida 17th May 2015
  *  
  *  */
    
 public function get_monthList(){
        $months = array(
                        0=>'month',
                        1 => 'Jan',
                        2 => 'Feb',
                        3 => 'Mar',
                        4 => 'Apr',
                        5 => 'May',
                        6 => 'Jun',
                        7 => 'Jul',
                        8 => 'Aug',
                        9 => 'Sep',
                        10 => 'Oct',
                        11 => 'Nov',
                        12 => 'Dec'
            );
        return $months;
    }
 public function get_gender(){
        $gender = array(
                         0=>'gender',
                        'Male' => 'Male',
                        'Female' => 'Female',
            );
        return $gender;
    }
 /*
  * this method return list of month
  *  @Rashida 17th May 2015
  *  
  *  */
 public function get_dateList() {
        $date_list[0] = "date";
        for ($i = 1; $i <= 31; $i++) {
            if ($i < 10) {
                $date_list[$i] = "0" . $i;
            } else {
                $date_list[$i] = "" . $i;
            }
        }
        return $date_list;
    }

  /*
  * this method return list of year
  *  @Rashida 17th May 2015
  *  
  *  */
 public function get_yearList() {
        $year_list[0] = "year";
        for ($i = 2011; $i >= 1905; $i--) {
            $year_list[$i] = "" . $i;
        }
        return $year_list;
    }

}