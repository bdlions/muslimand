<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | Database Type
  | -------------------------------------------------------------------------
  | If set to TRUE, Ion Auth will use MongoDB as its database backend.
  |
  | If you use MongoDB there are two external dependencies that have to be
  | integrated with your project:
  |   CodeIgniter MongoDB Active Record Library - http://github.com/alexbilbie/codeigniter-mongodb-library/tree/v2
  |   CodeIgniter MongoDB Session Library - http://github.com/sepehr/ci-mongodb-session
 */
$config['use_mongodb'] = FALSE;

/*
  | -------------------------------------------------------------------------
  | MongoDB Collection.
  | -------------------------------------------------------------------------
  | Setup the mongodb docs using the following command:
  | $ mongorestore sql/mongo
  |
 */

$config['account_status']['active_id'] = '1';
$config['account_status']['inactive_id'] = '2';
$config['account_status']['suspended_id'] = '3';
$config['account_status']['deactivated_id'] = '4';
$config['account_status']['blocked_id'] = '5';

$config['collections']['users'] = 'users';
$config['collections']['groups'] = 'groups';
$config['collections']['login_attempts'] = 'login_attempts';
$config['collections']['countries'] = 'countries';
$config['collections']['user_profiles'] = 'user_profiles';
$config['collections']['religions'] = 'religions';
$config['collections']['users_social_networks'] = 'users_social_networks';
//$config['attr_map']['_id'] = "_id";
//$config['attr_map']['address'] = "adrs";
//$config['attr_map']['addresses'] = "adrses";
//$config['attr_map']['account_status_id'] = 'asId';
//$config['attr_map']['basic_info'] = 'bInfo';
//$config['attr_map']['birth_date'] = 'bDate';
//$config['attr_map']['birth_day'] = 'bd';
//$config['attr_map']['birth_month'] = 'bm';
//$config['attr_map']['birth_year'] = 'by';
//$config['attr_map']['city'] = 'ct';
//$config['attr_map']['college'] = 'clg';
//$config['attr_map']['company'] = 'cmp';
//$config['attr_map']['country'] = 'cty';
//$config['attr_map']['created_on'] = 'co';
//$config['attr_map']['description'] = 'desc';
//$config['attr_map']['email'] = 'email';
//$config['attr_map']['endDate'] = 'ed';
//$config['attr_map']['first_name'] = 'fn';
//$config['attr_map']['gender'] = 'gender';
//$config['attr_map']['gender_id'] = 'gId';
//$config['attr_map']['groups'] = 'groups';
//$config['attr_map']['group_id'] = 'gId';
//$config['attr_map']['id'] = 'id';
//$config['attr_map']['ip_address'] = 'ia';
//$config['attr_map']['last_login'] = 'll';
//$config['attr_map']['last_name'] = 'ln';
//$config['attr_map']['mobile_phones'] = 'mps';
//$config['attr_map']['password'] = 'pwd';
//
//$config['attr_map']['post_code'] = 'pc';
//$config['attr_map']['position'] = 'pos';
//$config['attr_map']['professional_skill'] = 'ps';
//$config['attr_map']['phone'] = 'phn';
//$config['attr_map']['salt'] = 'salt';
//$config['attr_map']['school'] = 'sch';
//$config['attr_map']['startDate'] = 'sd';
//$config['attr_map']['title'] = 'title';
//$config['attr_map']['university'] = 'uni';
//$config['attr_map']['username'] = 'un';
//$config['attr_map']['user_id'] = 'uId';
//$config['attr_map']['website'] = 'ws';
//$config['attr_map']['zip'] = 'zip';

//$config['rev_attr_map']['_id'] = '_id';
//$config['rev_attr_map']['asId'] = "account_status_id";
//$config['rev_attr_map']['adrs'] = "address";
//$config['rev_attr_map']['adrses'] = "addresses";
//$config['rev_attr_map']['bDate'] = 'birth_date';
//$config['rev_attr_map']['bd'] = 'birth_day';
//$config['rev_attr_map']['bm'] = 'birth_month';
//$config['rev_attr_map']['by'] = 'birth_year';
//$config['rev_attr_map']['bInfo'] = 'basic_info';
//$config['rev_attr_map']['cmp'] = 'company';
//$config['rev_attr_map']['cty'] = 'country';
//$config['rev_attr_map']['ct'] = 'city';
//$config['rev_attr_map']['gId'] = 'gender_id';
//$config['rev_attr_map']['id'] = 'id';
//$config['rev_attr_map']['mps'] = 'mobile_phones';
//$config['rev_attr_map']['pc'] = 'post_code';
//$config['rev_attr_map']['phn'] = 'phone';
//$config['rev_attr_map']['pos'] = 'position';
//$config['rev_attr_map']['uId'] = 'user_id';
//$config['rev_attr_map']['ws'] = 'website';
//$config['rev_attr_map']['zip'] = 'zip';

$config['attr_map']['_id'] = "_id";
$config['attr_map']['address'] = "address";
$config['attr_map']['addresses'] = "addresses";
$config['attr_map']['account_status_id'] = 'account_status_id';
$config['attr_map']['basic_info'] = 'basic_info';
$config['attr_map']['birth_date'] = 'birth_date';
$config['attr_map']['birth_day'] = 'birth_day';
$config['attr_map']['birth_month'] = 'birth_month';
$config['attr_map']['birth_year'] = 'birth_year';
$config['attr_map']['city'] = 'city';
$config['attr_map']['college'] = 'college';
$config['attr_map']['company'] = 'company';
$config['attr_map']['country'] = 'country';
$config['attr_map']['created_on'] = 'created_on';
$config['attr_map']['description'] = 'description';
$config['attr_map']['email'] = 'email';
$config['attr_map']['endDate'] = 'endDate';
$config['attr_map']['first_name'] = 'first_name';
$config['attr_map']['gender'] = 'gender';
$config['attr_map']['gender_id'] = 'gender_id';
$config['attr_map']['groups'] = 'groups';
$config['attr_map']['group_id'] = 'group_id';
$config['attr_map']['id'] = 'id';
$config['attr_map']['ip_address'] = 'ip_address';
$config['attr_map']['last_login'] = 'last_login';
$config['attr_map']['last_name'] = 'last_name';
$config['attr_map']['mobile_phones'] = 'mobile_phones';
$config['attr_map']['password'] = 'password';

$config['attr_map']['post_code'] = 'post_code';
$config['attr_map']['position'] = 'position';
$config['attr_map']['professional_skill'] = 'professional_skill';
$config['attr_map']['phone'] = 'phone';
$config['attr_map']['salt'] = 'salt';
$config['attr_map']['school'] = 'school';
$config['attr_map']['startDate'] = 'startDate';
$config['attr_map']['title'] = 'title';
$config['attr_map']['university'] = 'university';
$config['attr_map']['username'] = 'username';
$config['attr_map']['user_id'] = 'user_id';
$config['attr_map']['website'] = 'website';
$config['attr_map']['zip'] = 'zip';

$config['rev_attr_map']['_id'] = '_id';
$config['rev_attr_map']['account_status_id'] = "account_status_id";
$config['rev_attr_map']['address'] = "address";
$config['rev_attr_map']['addresses'] = "addresses";
$config['rev_attr_map']['birth_date'] = 'birth_date';
$config['rev_attr_map']['birth_day'] = 'birth_day';
$config['rev_attr_map']['birth_month'] = 'birth_month';
$config['rev_attr_map']['birth_year'] = 'birth_year';
$config['rev_attr_map']['basic_info'] = 'basic_info';
$config['rev_attr_map']['company'] = 'company';
$config['rev_attr_map']['country'] = 'country';
$config['rev_attr_map']['city'] = 'city';
$config['rev_attr_map']['gender_id'] = 'gender_id';
$config['rev_attr_map']['id'] = 'id';
$config['rev_attr_map']['mobile_phones'] = 'mobile_phones';
$config['rev_attr_map']['post_code'] = 'post_code';
$config['rev_attr_map']['phone'] = 'phone';
$config['rev_attr_map']['position'] = 'position';
$config['rev_attr_map']['user_id'] = 'user_id';
$config['rev_attr_map']['website'] = 'website';
$config['rev_attr_map']['zip'] = 'zip';

/*
  | -------------------------------------------------------------------------
  | Tables.
  | -------------------------------------------------------------------------
  | Database table names.
 */
$config['tables']['users'] = 'users';
$config['tables']['groups'] = 'groups';
$config['tables']['users_groups'] = 'users_groups';
$config['tables']['login_attempts'] = 'login_attempts';

/*
  | Users table column and Group table column you want to join WITH.
  |
  | Joins from users.id
  | Joins from groups.id
 */
$config['join']['users'] = 'user_id';
$config['join']['groups'] = 'group_id';

/*
  | -------------------------------------------------------------------------
  | Hash Method (sha1 or bcrypt)
  | -------------------------------------------------------------------------
  | Bcrypt is available in PHP 5.3+
  |
  | IMPORTANT: Based on the recommendation by many professionals, it is highly recommended to use
  | bcrypt instead of sha1.
  |
  | NOTE: If you use bcrypt you will need to increase your password column character limit to (80)
  |
  | Below there is "default_rounds" setting.  This defines how strong the encryption will be,
  | but remember the more rounds you set the longer it will take to hash (CPU usage) So adjust
  | this based on your server hardware.
  |
  | If you are using Bcrypt the Admin password field also needs to be changed in order login as admin:
  | $2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36
  |
  | Becareful how high you set max_rounds, I would do your own testing on how long it takes
  | to encrypt with x rounds.
 */
$config['hash_method'] = 'sha1'; // IMPORTANT: Make sure this is set to either sha1 or bcrypt
$config['default_rounds'] = 8;  // This does not apply if random_rounds is set to true
$config['random_rounds'] = FALSE;
$config['min_rounds'] = 5;
$config['max_rounds'] = 9;

/*
  | -------------------------------------------------------------------------
  | Authentication options.
  | -------------------------------------------------------------------------
  | maximum_login_attempts: This maximum is not enforced by the library, but is
  | used by $this->ion_auth->is_max_login_attempts_exceeded().
  | The controller should check this function and act
  | appropriately. If this variable set to 0, there is no maximum.
 */
$config['site_title'] = "Example.com";       // Site Title, example.com
$config['admin_email'] = "admin@example.com"; // Admin Email, admin@example.com
$config['default_group'] = 'members';           // Default group, use name
$config['admin_group'] = 'admin';             // Default administrators group, use name
$config['user_id_length'] = 15;                  // Default length of user id
$config['identity'] = 'email';             // A database column which is used to login with
$config['min_password_length'] = 8;                   // Minimum Required Length of Password
$config['max_password_length'] = 20;                  // Maximum Allowed Length of Password
$config['email_activation'] = FALSE;               // Email Activation for registration
$config['manual_activation'] = FALSE;               // Manual Activation for registration
$config['remember_users'] = TRUE;                // Allow users to be remembered and enable auto-login
$config['user_expire'] = 86500;               // How long to remember the user (seconds). Set to zero for no expiration
$config['user_extend_on_login'] = FALSE;               // Extend the users cookies everytime they auto-login
$config['track_login_attempts'] = TRUE;               // Track the number of failed login attempts for each user or ip.
$config['maximum_login_attempts'] = 3;                   // The maximum number of failed login attempts.
$config['lockout_time'] = 600;                 // The number of seconds to lockout an account due to exceeded attempts
$config['forgot_password_expiration'] = 0;                   // The number of miliseconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.


/*
  | -------------------------------------------------------------------------
  | Email options.
  | -------------------------------------------------------------------------
  | email_config:
  | 	  'file' = Use the default CI config or use from a config file
  | 	  array  = Manually set your email config settings
 */
$config['use_ci_email'] = FALSE; // Send Email using the builtin CI email class, if false it will return the code and the identity
$config['email_config'] = array(
    'mailtype' => 'html',
);

/*
  | -------------------------------------------------------------------------
  | Email templates.
  | -------------------------------------------------------------------------
  | Folder where email templates are stored.
  | Default: auth/
 */
$config['email_templates'] = 'auth/email/';

/*
  | -------------------------------------------------------------------------
  | Activate Account Email Template
  | -------------------------------------------------------------------------
  | Default: activate.tpl.php
 */
$config['email_activate'] = 'activate.tpl.php';

/*
  | -------------------------------------------------------------------------
  | Forgot Password Email Template
  | -------------------------------------------------------------------------
  | Default: forgot_password.tpl.php
 */
$config['email_forgot_password'] = 'forgot_password.tpl.php';

/*
  | -------------------------------------------------------------------------
  | Forgot Password Complete Email Template
  | -------------------------------------------------------------------------
  | Default: new_password.tpl.php
 */
$config['email_forgot_password_complete'] = 'new_password.tpl.php';

/*
  | -------------------------------------------------------------------------
  | Salt options
  | -------------------------------------------------------------------------
  | salt_length Default: 10
  |
  | store_salt: Should the salt be stored in the database?
  | This will change your password encryption algorithm,
  | default password, 'password', changes to
  | fbaa5e216d163a02ae630ab1a43372635dd374c0 with default salt.
 */
$config['salt_length'] = 10;
$config['store_salt'] = FALSE;

/*
  | -------------------------------------------------------------------------
  | Message Delimiters.
  | -------------------------------------------------------------------------
 */
$config['message_start_delimiter'] = '<p>';  // Message start delimiter
$config['message_end_delimiter'] = '</p>';  // Message end delimiter
$config['error_start_delimiter'] = '<p>';  // Error mesage start delimiter
$config['error_end_delimiter'] = '</p>'; // Error mesage end delimiter

/* End of file ion_auth.php */
/* Location: ./application/config/ion_auth.php */
