<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->model('basic_profile_mongodb_model');
        $this->load->helper('url');

        // Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    function newsfeed() {
        $id = $this->session->userdata('user_id');
//        $this->template->load("member/newsfeed");
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/newsfeed");
    }

    function profile() {
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/profile");
    }

    function non_friend() {
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/non_friend");
    }

    function about() {
            $user_id = "5563101d8267404011000029";
            $basic_info_array = $this->basic_profile_mongodb_model->get_basic_info($user_id);
            if (!empty($basic_info_array) && is_array($basic_info_array)) {
            $basic_info = $basic_info_array[0];
            $this->data['basic_info']= $basic_info ;
        }

        $this->data['bp_company'] = array(
            'name' => 'bp_company',
            'id' => 'bp_company',
            'type' => 'text',
        );
        $this->data['bp_position'] = array(
            'name' => 'bp_position',
            'id' => 'bp_position',
            'type' => 'text',
        );
        $this->data['bp_city'] = array(
            'name' => 'bp_city',
            'id' => 'bp_city',
            'type' => 'text',
        );
        $this->data['bp_work_description'] = array(
            'name' => 'bp_work_description',
            'id' => 'bp_work_description',
            'rows' => 3,
            'cols' => 30,
            'type' => 'text',
        );
        $this->data['work_update_btn'] = array(
            'name' => 'work_update_btn',
            'id' => 'work_update_btn',
            'type' => 'submit',
            'value' => 'Save',
        );
        $this->data['bp_profession_skill'] = array(
            'name' => 'bp_profession_skill',
            'id' => 'bp_profession_skill',
            'type' => 'text',
        );
        $this->data['ps_update_btn'] = array(
            'name' => 'ps_update_btn',
            'id' => 'ps_update_btn',
            'type' => 'submit',
            'value' => 'Save',
        );
        $this->data['bp_university'] = array(
            'name' => 'bp_university',
            'id' => 'bp_university',
            'type' => 'text',
        );
        $this->data['bp_university_des'] = array(
            'name' => 'bp_university_des',
            'id' => 'bp_university_des',
            'rows' => 3,
            'cols' => 30,
            'type' => 'text',
        );
        $this->data['uv_update_btn'] = array(
            'name' => 'uv_update_btn',
            'id' => 'uv_update_btn',
            'type' => 'submit',
            'value' => 'Save',
        );
        $this->data['bp_college'] = array(
            'name' => 'bp_college',
            'id' => 'bp_college',
            'type' => 'text',
        );
        $this->data['bp_college_des'] = array(
            'name' => 'bp_college_des',
            'id' => 'bp_college_des',
            'rows' => 3,
            'cols' => 30,
            'type' => 'text',
        );
        $this->data['college_update_btn'] = array(
            'name' => 'college_update_btn',
            'id' => 'college_update_btn',
            'type' => 'submit',
            'value' => 'Save',
        );
        $this->data['bp_school'] = array(
            'name' => 'bp_school',
            'id' => 'bp_school',
            'type' => 'text',
        );
        $this->data['bp_school_dec'] = array(
            'name' => 'bp_school_dec',
            'id' => 'bp_school_dec',
            'rows' => 3,
            'cols' => 30,
            'type' => 'text',
        );
        $this->data['school_update_btn'] = array(
            'name' => 'school_update_btn',
            'id' => 'school_update_btn',
            'type' => 'submit',
            'value' => 'Save',
        );
        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/about", $this->data);
//        $this->template->load(NULL, "member/about", $this->data);
//        $this->template->load(MEMBER_PROFILE_TEMPLATE, "member/about");
//        $this->load->view("member/about");
    }

    function account_settings() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/account_settings");
    }

    function friends() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/friends");
    }

    function add_friends() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/add_friends");
    }

    function messages() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/messages");
    }

    function notification_all() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/notification_all");
    }

    function privacy_settings() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/privacy_settings");
    }

    function zakat() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE, "member/zakat");
    }

    function invite() {
        $this->template->load(MEMBER_LOGGED_IN_TEMPLATE_WITH_FOOTER, "member/invite");
    }

}
