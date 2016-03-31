<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    /**
     * Holds the name of collection of user
     * @var array
     */
    public $attr_map = array();

    function __construct() {
        parent::__construct();
        $this->attr_map = $this->config->item('attr_map', 'ion_auth');
        $this->load->library('form_validation');
        
        $this->load->library('ion_auth');
        $this->load->library('utils');
        $this->load->helper('url');
        $this->load->model('common_mongodb_model');
        $this->load->model('basic_profile_mongodb_model');
        $this->load->model('landing_page_model');
        $this->load->model('social_network_mongodb_model');
        // Load MongoDB library instead of native db driver if required
//        $this->config->item('use_mongodb', 'ion_auth') ?
//                        $this->load->library('mongo_db') :
//                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
        $this->load->helper('language');
    }

    //redirect if needed, otherwise display the user list
    function index() {

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $user_group = $this->ion_auth->get_current_user_types();
            //print_r($user_group);
            foreach ($user_group as $key => $group) {
                if ($group == ADMIN) {
                    //set the flash data error message if there is one
                    $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                    //list the users
//                    $this->data['users'] = $this->ion_auth->users()->result();
//                    foreach ($this->data['users'] as $k => $user) {
//                        $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
//                    }

                    //$this->_render_page('auth/index', $this->data);
                    $this->template->load(NULL, ADMIN_LOGIN_SUCCESS_VIEW, $this->data);
                    break;
                } elseif ($group == MEMBER_GROUP_TITLE) {
                    redirect('newsfeed', 'refresh');
                } else {
                    echo "Non member";
                }
            }
        }
    }

    
    function login() {

        $this->data['title'] = "Login";
        $country_list = array();
        $religion_list = array();
        $country_time_zone = array();
        $gender_list = array();
        $user_list_info = array();
        $user_list = array();
        $landing_page_info = $this->landing_page_model->get_landing_page_info();
        $gender = $this->utils->get_gender();
        foreach ($gender as $key => $gender_info) {
            $gender_list[$key] = $gender_info;
        }
        if (!empty($landing_page_info)) {
            if (property_exists($landing_page_info, "countryList") != FALSE) {
                foreach ($landing_page_info->countryList as $country_info) {
                    $country_list[$country_info->code] = $country_info->title;
                    $country_time_zone[$country_info->code] = $country_info->gmtOffset;
                    //hard coded
//                    $country_time_zone[$country_info->code] = "+6";
                }
            }
            if (property_exists($landing_page_info, "religionList") != FALSE) {
                foreach ($landing_page_info->religionList as $religion_info) {
                    $religion_list[$religion_info->religionId] = $religion_info->title;
                }
            }
            if (property_exists($landing_page_info, "userList") != FALSE) {

                $user_list = $landing_page_info->userList;
                if (!empty($user_list)) {
                    foreach ($user_list as $user) {
                        if (property_exists($user, "gender")) {
                            $user->gender = json_decode($user->gender);
                        }
                        if (property_exists($user, "country")) {
                            $user->country = json_decode($user->country);
                        }
                        $user_list_info[] = $user;
                    }
                    $this->data['user_list'] = json_encode($user_list_info);
                } else {
                    $this->data['user_list'] = json_encode(array());
                }
            }
        } else {
            $this->data['user_list'] = json_encode(array());
        }
        if ($this->input->post('register_btn') != null) {
            //validate form input to register
            $this->form_validation->set_rules('gender_id', 'Gender', 'required');
            $this->form_validation->set_rules('r_first_name', 'First Name', 'required');
            $this->form_validation->set_rules('r_last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('r_email', 'Email', 'required');
            $this->form_validation->set_rules('r_password', 'Password', 'required');
//            $this->form_validation->set_rules('birthday_day', 'Day', 'required');
//            $this->form_validation->set_rules('birthday_month', 'Month', 'required');
//            $this->form_validation->set_rules('birthday_year', 'Year', 'required');
            $this->form_validation->set_rules('r_password_conf', 'Password confirm', 'required|matches[r_password]');
        } else if ($this->input->post('login_btn') != null) {
            //validate form input to login
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        }
        if ($this->form_validation->run() == true) {
            if ($this->input->post('register_btn') != null) {
                $username = strtolower($this->input->post('r_first_name')) . ' ' . strtolower($this->input->post('r_last_name'));
                $email = $this->input->post('r_email');
                $password = $this->input->post('r_password');
                $country_code = $this->input->post('country_list');
                $religion_id = $this->input->post('religion_list');
                $gender_id = $this->input->post('gender_id');
                if ($country_code != null) {
                    $country_title = $country_list[$country_code];
                    $gmt_offset = $country_time_zone[$country_code];
                }
                if ($religion_id != null) {
                    $religion_title = $religion_list[$religion_id];
                }

                if ($gender_id != null) {
                    $gender_title = $gender_list[$gender_id];
                }
                $country = new stdClass();
                $country->code = $country_code;
                $country->title = $country_title;
                $country->gmtOffset = $gmt_offset;
                $religion = new stdClass();
                $religion->id = $religion_id;
                $religion->title = $religion_title;
                $gender = new stdClass();
                $gender->genderId = $gender_id;
                $gender->title = $gender_title;
                $group_info = new stdClass();
                $group_info->groupId = MEMBER_GROUP_ID;
                $group_info->title = MEMBER_GROUP_TITLE;
                $groups = array();
                $groups[] = $group_info;
                $additional_data = new stdClass();
                $additional_data->firstName = $this->input->post('r_first_name');
                $additional_data->lastName = $this->input->post('r_last_name');
                $additional_data->country = $country;
                $additional_data->gender = $gender;
                $additional_data->groups = $groups;
                $birth_date = new stdClass();
                $birth_date->birthDay = $this->input->post('birthday_day');
                $birth_date->birthMonth = $this->input->post('birthday_month');
                $birth_date->birthYear = $this->input->post('birthday_year');

                $basic_info = new stdClass();
                $basic_info->birthDate = $birth_date;
                $basic_info->gender = $gender;
                $basic_info->religions = $religion;
                $user_basic_info = new stdClass();
                $user_basic_info->basicInfo = $basic_info;
                $id = $this->ion_auth->register($username, $password, $email, $additional_data, $user_basic_info);
                if ($id != null && $id != FALSE) {
                    $this->ion_auth->set_message('account_creation_successful');
                    //adding social network code
//                        if (!empty($this->session->userdata('social_network_id')) && !empty($this->session->userdata('social_network_code'))) {
//                            $social_network_data = array(
//                                'user_id' => $id,
//                                'social_network_id' => $this->session->userdata('social_network_id'),
//                                'code' => $this->session->userdata('social_network_code')
//                            );
//                            $this->social_network_mongodb_model->add_social_network_info($social_network_data);
//                            $this->session->unset_userdata('social_network_id');
//                            $this->session->unset_userdata('social_network_code');
//                        } else {
//                            //send email to the client to confirm the email
//                            $this->ion_auth->email_activation($id);
//                        }
                    //check to see if we are creating the user
//                    //redirect them back to the admin page
                    $success_image = base_url() . "resources/images/success_img.png";
                    $this->session->set_flashdata('success_image', $success_image);
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                } else {
                    $this->session->set_flashdata('message', "Unsuccessful to register a user.");
                }
                redirect("login", 'refresh');
                //$this->data['message'] = $this->session->flashdata('message');
                //redirect("auth/login", 'refresh');
                //$this->template->load("templates/profile_setting_tmpl", "display_message", $this->data);
            } else if ($this->input->post('login_btn') != null) {
                //check to see if the user is logging in
                //check for "remember me"
                $remember = (bool) $this->input->post('remember');
                $login_success = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
                if ($login_success == TRUE) {
                    //if the login is successful
                    //redirect them back to the home page
                    //$this->session->set_flashdata('message', $this->ion_auth->messages());
                    //redirect('auth/', 'refresh');
                    redirect('newsfeed', 'refresh');
                } else {
                    //if the login was un-successful
                    //redirect them back to the login page
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    redirect('auth/login_attempt', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
                }
            }
        } else {

            $r_first_name = $this->form_validation->set_value('r_first_name');
            if (!empty($this->session->userdata('first_name'))) {
                $r_first_name = $this->session->userdata('first_name');
                $this->session->unset_userdata('first_name');
            }
            $this->data['r_first_name'] = array(
                'name' => 'r_first_name',
                'id' => 'r_first_name',
                'type' => 'text',
                'value' => $r_first_name,
            );
            $this->data['r_last_name'] = array(
                'name' => 'r_last_name',
                'id' => 'r_last_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('r_last_name'),
            );
            $this->data['r_email'] = array(
                'name' => 'r_email',
                'id' => 'r_email',
                'type' => 'text',
                'value' => $this->form_validation->set_value('r_email'),
            );

            $this->data['r_password'] = array(
                'name' => 'r_password',
                'id' => 'r_password',
                'type' => 'password',
                'value' => $this->form_validation->set_value('r_password'),
            );
            $this->data['r_password_conf'] = array(
                'name' => 'r_password_conf',
                'id' => 'r_password_conf',
                'type' => 'password',
                'value' => $this->form_validation->set_value('r_password_conf'),
            );
            $this->data['register_btn'] = array('name' => 'register_btn',
                'id' => 'register_btn',
                'type' => 'submit',
                'value' => 'Sign Up',
            );

            //the user is not logging in so display the login page
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->data['success_image'] = $this->session->flashdata('success_image');

            $this->data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );
            $this->data['login_btn'] = array('name' => 'login_btn',
                'id' => 'login_btn',
                'type' => 'submit',
                'tabindex' => '4',
                'value' => 'Sign in',
            );
            $this->data['country_list'] = $country_list;
            $this->data['gender_list'] = $gender_list;
            $this->data['religion_list'] = $religion_list;
            $this->data['month_list'] = $this->utils->get_month_list();
            $this->data["date_list"] = $this->utils->get_date_list();
            $this->data["year_list"] = $this->utils->get_year_list();
//            var_dump($this->data);
//            exit;
            $this->template->load("templates/home_tmpl", LOGIN_VIEW, $this->data);
            //$this->_render_page('auth/login', $this->data);
        }
    }

    function login_attempt() {

        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $this->data['identity'] = array('name' => 'identity',
            'id' => 'identity',
            'type' => 'text',
            'value' => $this->form_validation->set_value('identity'),
        );
        $this->data['password'] = array('name' => 'password',
            'id' => 'password',
            'type' => 'password',
        );
        $this->data['login_btn'] = array('name' => 'login_btn',
            'id' => 'login_btn',
            'type' => 'submit',
            'tabindex' => '4',
            'value' => 'Sign in',
        );
        $this->template->load(NON_MEMBER_TEMPLATE_HEADER_LOGO, "auth/wrong_password", $this->data);
    }

    function password_recover() {
        $this->template->load(NON_MEMBER_TEMPLATE_HEADER_LOGO, "auth/forgot_password");
    }

    //log the user out
    function logout() {
        $this->data['title'] = "Logout";

        //log the user out
        $logout = $this->ion_auth->logout();

        //redirect them to the login page
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('login', 'refresh');
    }

    //change password
    function change_password() {
        $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
        $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();

        if ($this->form_validation->run() == false) {
            //display the form
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
            $this->data['old_password'] = array(
                'name' => 'old',
                'id' => 'old',
                'type' => 'password',
            );
            $this->data['new_password'] = array(
                'name' => 'new',
                'id' => 'new',
                'type' => 'password',
                'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
            );
            $this->data['new_password_confirm'] = array(
                'name' => 'new_confirm',
                'id' => 'new_confirm',
                'type' => 'password',
                'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
            );
            $this->data['user_id'] = array(
                'name' => 'user_id',
                'id' => 'user_id',
                'type' => 'hidden',
                'value' => $user->id,
            );

            //render
            $this->_render_page('auth/change_password', $this->data);
        } else {
            $identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change) {
                //if the password was successfully changed
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $this->logout();
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth/change_password', 'refresh');
            }
        }
    }

    //forgot password
    function forgot_password() {
        $this->form_validation->set_rules('email', $this->lang->line('forgot_password_validation_email_label'), 'required');
        if ($this->form_validation->run() == false) {
            //setup the input
            $this->data['email'] = array('name' => 'email',
                'id' => 'email',
            );

            if ($this->config->item('identity', 'ion_auth') == 'username') {
                $this->data['identity_label'] = $this->lang->line('forgot_password_username_identity_label');
            } else {
                $this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
            }
            $this->data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );
            $this->data['login_btn'] = array('name' => 'login_btn',
                'id' => 'login_btn',
                'type' => 'submit',
                'value' => 'Sign in',
            );
            //set any errors and display the form
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            //$this->_render_page('auth/forgot_password', $this->data);
            $this->template->load(NULL, "nonmember/forgot_password", $this->data);
        } else {
            // get identity for that email
            $config_tables = $this->config->item('tables', 'ion_auth');
            $identity = $this->db->where('email', $this->input->post('email'))->limit('1')->get($config_tables['users'])->row();

            //run the forgotten password method to email an activation code to the user
            $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

            if ($forgotten) {
                //if there were no errors
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("auth/login", 'refresh'); //we should display a confirmation page here instead of the login page
            } else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect("auth/forgot_password", 'refresh');
            }
        }
    }

    //reset password - final step for forgotten password
    public function reset_password($code = NULL) {
        if (!$code) {
            show_404();
        }

        $user = $this->ion_auth->forgotten_password_check($code);

        if ($user) {
            //if the code is valid then display the password reset form

            $this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
            $this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

            if ($this->form_validation->run() == false) {
                //display the form
                //set the flash data error message if there is one
                $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
                $this->data['new_password'] = array(
                    'name' => 'new',
                    'id' => 'new',
                    'type' => 'password',
                    'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
                );
                $this->data['new_password_confirm'] = array(
                    'name' => 'new_confirm',
                    'id' => 'new_confirm',
                    'type' => 'password',
                    'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
                );
                $this->data['user_id'] = array(
                    'name' => 'user_id',
                    'id' => 'user_id',
                    'type' => 'hidden',
                    'value' => $user->id,
                );
                $this->data['csrf'] = $this->_get_csrf_nonce();
                $this->data['code'] = $code;

                //render
                $this->_render_page('auth/reset_password', $this->data);
            } else {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')) {

                    //something fishy might be up
                    $this->ion_auth->clear_forgotten_password_code($code);

                    show_error($this->lang->line('error_csrf'));
                } else {
                    // finally change the password
                    $identity = $user->{$this->config->item('identity', 'ion_auth')};

                    $change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

                    if ($change) {
                        //if the password was successfully changed
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                        $this->logout();
                    } else {
                        $this->session->set_flashdata('message', $this->ion_auth->errors());
                        redirect('auth/reset_password/' . $code, 'refresh');
                    }
                }
            }
        } else {
            //if the code is invalid then send them back to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

    //activate the user
    function activate($id, $code = false) {
        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
        } else if ($this->ion_auth->is_admin()) {
            $activation = $this->ion_auth->activate($id);
        }

        if ($activation) {
            //redirect them to the auth page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("auth", 'refresh');
        } else {
            //redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

    //deactivate the user
    function deactivate($id = NULL) {
        $id = $this->config->item('use_mongodb', 'ion_auth') ? (string) $id : (int) $id;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
        $this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            // insert csrf check
            $this->data['csrf'] = $this->_get_csrf_nonce();
            $this->data['user'] = $this->ion_auth->user($id)->row();

            $this->_render_page('auth/deactivate_user', $this->data);
        } else {
            // do we really want to deactivate?
            if ($this->input->post('confirm') == 'yes') {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
                    show_error($this->lang->line('error_csrf'));
                }

                // do we have the right userlevel?
                if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
                    $this->ion_auth->deactivate($id);
                }
            }

            //redirect them back to the auth page
            redirect('auth', 'refresh');
        }
    }

    //create a new user
    function create_user() {
        $this->data['title'] = "Create User";

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        //validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
        $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|xss_clean');
        $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required|xss_clean');
        $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required|xss_clean');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true) {
            $username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data)) {
            //check to see if we are creating the user
            //redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("auth", 'refresh');
        } else {
            //display the create user form
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['first_name'] = array(
                'name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $this->data['last_name'] = array(
                'name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['email'] = array(
                'name' => 'email',
                'id' => 'email',
                'type' => 'text',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['company'] = array(
                'name' => 'company',
                'id' => 'company',
                'type' => 'text',
                'value' => $this->form_validation->set_value('company'),
            );
            $this->data['phone'] = array(
                'name' => 'phone',
                'id' => 'phone',
                'type' => 'text',
                'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name' => 'password_confirm',
                'id' => 'password_confirm',
                'type' => 'password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );

            $this->_render_page('auth/create_user', $this->data);
        }
    }

    //edit a user
    function edit_user($id) {
        $this->data['title'] = "Edit User";

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        $user = $this->ion_auth->user($id)->row();
        $groups = $this->ion_auth->groups()->result_array();
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();

        //validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required|xss_clean');
        $this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required|xss_clean');
        $this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required|xss_clean');
        $this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required|xss_clean');
        $this->form_validation->set_rules('groups', $this->lang->line('edit_user_validation_groups_label'), 'xss_clean');

        if (isset($_POST) && !empty($_POST)) {
            // do we have a valid request?
            if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
                show_error($this->lang->line('error_csrf'));
            }

            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            );

            //Update the groups user belongs to
            $groupData = $this->input->post('groups');

            if (isset($groupData) && !empty($groupData)) {

                $this->ion_auth->remove_from_group('', $id);

                foreach ($groupData as $grp) {
                    $this->ion_auth->add_to_group($grp, $id);
                }
            }

            //update the password if it was posted
            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');

                $data['password'] = $this->input->post('password');
            }

            if ($this->form_validation->run() === TRUE) {
                $this->ion_auth->update($user->id, $data);

                //check to see if we are creating the user
                //redirect them back to the admin page
                $this->session->set_flashdata('message', "User Saved");
                redirect("auth", 'refresh');
            }
        }

        //display the edit user form
        $this->data['csrf'] = $this->_get_csrf_nonce();

        //set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        //pass the user to the view
        $this->data['user'] = $user;
        $this->data['groups'] = $groups;
        $this->data['currentGroups'] = $currentGroups;

        $this->data['first_name'] = array(
            'name' => 'first_name',
            'id' => 'first_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('first_name', $user->first_name),
        );
        $this->data['last_name'] = array(
            'name' => 'last_name',
            'id' => 'last_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('last_name', $user->last_name),
        );
        $this->data['company'] = array(
            'name' => 'company',
            'id' => 'company',
            'type' => 'text',
            'value' => $this->form_validation->set_value('company', $user->company),
        );
        $this->data['phone'] = array(
            'name' => 'phone',
            'id' => 'phone',
            'type' => 'text',
            'value' => $this->form_validation->set_value('phone', $user->phone),
        );
        $this->data['password'] = array(
            'name' => 'password',
            'id' => 'password',
            'type' => 'password'
        );
        $this->data['password_confirm'] = array(
            'name' => 'password_confirm',
            'id' => 'password_confirm',
            'type' => 'password'
        );

        $this->_render_page('auth/edit_user', $this->data);
    }

    // create a new group
    function create_group() {
        $this->data['title'] = $this->lang->line('create_group_title');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        //validate form input
        $this->form_validation->set_rules('group_name', $this->lang->line('create_group_validation_name_label'), 'required|alpha_dash|xss_clean');
        $this->form_validation->set_rules('description', $this->lang->line('create_group_validation_desc_label'), 'xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
            if ($new_group_id) {
                // check to see if we are creating the group
                // redirect them back to the admin page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("auth", 'refresh');
            }
        } else {
            //display the create group form
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['group_name'] = array(
                'name' => 'group_name',
                'id' => 'group_name',
                'type' => 'text',
                'value' => $this->form_validation->set_value('group_name'),
            );
            $this->data['description'] = array(
                'name' => 'description',
                'id' => 'description',
                'type' => 'text',
                'value' => $this->form_validation->set_value('description'),
            );

            $this->_render_page('auth/create_group', $this->data);
        }
    }

    //edit a group
    function edit_group($id) {
        // bail if no group id given
        if (!$id || empty($id)) {
            redirect('auth', 'refresh');
        }

        $this->data['title'] = $this->lang->line('edit_group_title');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        $group = $this->ion_auth->group($id)->row();

        //validate form input
        $this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash|xss_clean');
        $this->form_validation->set_rules('group_description', $this->lang->line('edit_group_validation_desc_label'), 'xss_clean');

        if (isset($_POST) && !empty($_POST)) {
            if ($this->form_validation->run() === TRUE) {
                $group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

                if ($group_update) {
                    $this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));
                } else {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                }
                redirect("auth", 'refresh');
            }
        }

        //set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        //pass the user to the view
        $this->data['group'] = $group;

        $this->data['group_name'] = array(
            'name' => 'group_name',
            'id' => 'group_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('group_name', $group->name),
        );
        $this->data['group_description'] = array(
            'name' => 'group_description',
            'id' => 'group_description',
            'type' => 'text',
            'value' => $this->form_validation->set_value('group_description', $group->description),
        );

        $this->_render_page('auth/edit_group', $this->data);
    }

    function _get_csrf_nonce() {
        $this->load->helper('string');
        $key = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    function _valid_csrf_nonce() {
        if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
                $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function _render_page($view, $data = null, $render = false) {

        $this->viewdata = (empty($data)) ? $this->data : $data;

        $view_html = $this->load->view($view, $this->viewdata, $render);

        if (!$render)
            return $view_html;
    }

    function login_wrong_attempt() {
        $this->data['message'] = $this->session->flashdata('message');
        $this->data['identity'] = array(
            'name' => 'identity',
            'id' => 'identity',
            'type' => 'text',
            'value' => $this->form_validation->set_value('identity'),
        );
        $this->data['password'] = array(
            'name' => 'password',
            'id' => 'password',
            'type' => 'password',
        );
        $this->data['login_btn'] = array(
            'name' => 'login_btn',
            'id' => 'login_btn',
            'type' => 'submit',
            'value' => 'Sign in',
        );
        $this->template->load(NULL, "nonmember/wrong_password", $this->data);
    }

    function twitter() {
        $this->load->library('twitteroauth');
        $twitter_config = $this->config->item('twitter');

        if ($this->session->userdata('access_token') && $this->session->userdata('access_token_secret')) {
            // If user already logged in
            $this->connection = $this->twitteroauth->create($twitter_config['twitter_consumer_token'], $twitter_config['twitter_consumer_secret'], $this->session->userdata('access_token'), $this->session->userdata('access_token_secret'));
        } elseif ($this->session->userdata('request_token') && $this->session->userdata('request_token_secret')) {
            // If user in process of authentication
            $this->connection = $this->twitteroauth->create($twitter_config['twitter_consumer_token'], $twitter_config['twitter_consumer_secret'], $this->session->userdata('request_token'), $this->session->userdata('request_token_secret'));
        } else {
            // Unknown user
            $this->connection = $this->twitteroauth->create($twitter_config['twitter_consumer_token'], $twitter_config['twitter_consumer_secret']);
        }
        if ($this->input->get('oauth_token')) {

            $access_token = $this->connection->getAccessToken($this->input->get('oauth_verifier'));

            if ($this->connection->http_code == 200) {
                $this->session->set_userdata('access_token', $access_token['oauth_token']);
                $this->session->set_userdata('access_token_secret', $access_token['oauth_token_secret']);

                $this->session->unset_userdata('request_token');
                $this->session->unset_userdata('request_token_secret');

                $profile_info = $this->connection->get('users/show', array("screen_name" => $access_token['screen_name']));
                $code = $profile_info->id;
                $user_id = $this->social_network_mongodb_model->is_user_mapped_to_social_network(SOCIAL_NETWORK_ID_TWITTER, $code);
                if ($user_id === FALSE) {
                    $this->session->set_userdata('social_network_id', SOCIAL_NETWORK_ID_TWITTER);
                    $this->session->set_userdata('social_network_code', $profile_info->id);
                    $this->session->set_userdata('first_name', $profile_info->name);
                    redirect('auth/login', 'refresh');
                } else {
                    $this->social_network_mongodb_model->login_via_social_network($user_id);
                    redirect('auth', 'refresh');
                }
            } else {
                // An error occured. Add your notification code here.
                redirect('auth/login', 'refresh');
            }
        } else if ($this->session->userdata('access_token') && $this->session->userdata('access_token_secret')) {
            // User is already authenticated. Add your user notification code here.
            $access_token_array = explode("-", $this->session->userdata('access_token'));
            if (!empty($access_token_array)) {
                $code = $access_token_array[0];
                $user_id = $this->social_network_mongodb_model->is_user_mapped_to_social_network(SOCIAL_NETWORK_ID_TWITTER, $code);
                if ($user_id === FALSE) {
                    $this->session->unset_userdata('access_token');
                    $this->session->unset_userdata('access_token_secret');
                    redirect('auth/twitter', 'refresh');
                } else {
                    $this->social_network_mongodb_model->login_via_social_network($user_id);
                    redirect('auth', 'refresh');
                }
            }
            //redirect('auth/login', 'refresh');
        } else {
            // Making a request for request_token
            $request_token = $this->connection->getRequestToken(base_url('auth/twitter'));

            $this->session->set_userdata('request_token', $request_token['oauth_token']);
            $this->session->set_userdata('request_token_secret', $request_token['oauth_token_secret']);

            if ($this->connection->http_code == 200) {
                $url = $this->connection->getAuthorizeURL($request_token, "");
                redirect($url);
            } else {
                // An error occured. Make sure to put your error notification code here.
                redirect('auth/twitter', 'refresh');
            }
        }
    }

    function login_complete() {
        $this->load->model('org/user/profile_model');
        if ($this->profile_model->is_security_information_stored($this->session->userdata('user_id'))) {
            redirect('home', 'refresh');
            //redirect('profile', 'refresh');
        } else {
            $session_data = array(
                'request_type' => PRE_SETTINGS
            );
            $this->session->set_userdata($session_data);
            redirect('profile', 'refresh');
        }
    }

}
