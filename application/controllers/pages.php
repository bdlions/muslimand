<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load('auth');
//$this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->library('utils');
        $this->load->model('page_mongodb_model');
        $this->load->model('status_mongodb_model');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
// Load MongoDB library instead of native db driver if required
        $this->config->item('use_mongodb', 'ion_auth') ?
                        $this->load->library('mongo_db') :
                        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    function index() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_home", $this->data);
    }

    function pages_add() {
        $category_list = array();
        $sub_category_list = array();
        $brand_category_list = array();
        $community_category_list = array();
        $business_category_list = array();
        $place_category_list = array();
        $entertainment_category_list = array();
        $company_category_list = array();
        $organization_category_list = array();
        $result_event = $this->page_mongodb_model->get_categories_subcaregories();
        if ($result_event != null) {
            $category_list = $result_event->categoryList;
            $sub_category_list = $result_event->subCategoryList;
            foreach ($sub_category_list as $category) {
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_BRAND){
                    $brand_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_COMMUNITY){
                    $community_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_BUSINESS){
                    $business_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_PLACE){
                    $place_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_ENTERTAINMENT){
                    $entertainment_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_COMPANY){
                    $company_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_ORGANIZATION){
                    $organization_category_list[] = $category;
                }
                
            }
        }
        $this->data['categories'] = $category_list;
        $this->data['brand_subcategories'] = $brand_category_list;
        $this->data['community_subcategories'] = $community_category_list;
        $this->data['business_subcategories'] = $business_category_list;
        $this->data['place_subcategories'] = $place_category_list;
        $this->data['entertainment_subcategories'] = $entertainment_category_list;
        $this->data['company_subcategories'] = $company_category_list;
        $this->data['organization_subcategories'] = $organization_category_list;
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = PAGE_APP;
        $this->template->load(NULL, "member/page/page_add", $this->data);
    }

    function add_page_like() {
        if (file_get_contents("php://input") != null) {
            $page_information = new stdClass();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "pageId") != FALSE) {
                $page_id = $requestInfo->pageId;
            }
            $member_info = new stdClass();
            $member_info->userId = $this->session->userdata('user_id');
            $member_info->firstName = $this->session->userdata('first_name');
            $member_info->lastName = $this->session->userdata('last_name');
            $result_event = $this->page_mongodb_model->add_page_like($page_id, $member_info);
        }
    }

    /*
     * this function will add a page basic info
     * return alaow to create new page if the page dosn't exist.
     */

    function add_page() {
        if (file_get_contents("php://input") != null) {
            $page_information = new stdClass();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "pageInfo") != FALSE) {
                $page_info = $requestInfo->pageInfo;
            }
            $category_info = new stdClass();
            if (property_exists($page_info, "categoryId") != FALSE) {
                $category_info->categoryId = $page_info->categoryId;
            }
            if (property_exists($page_info, "categoryTitle") != FALSE) {
                $category_info->categoryTitle = $page_info->categoryTitle;
            }
            $sub_category_info = new stdClass();
            if (property_exists($page_info, "subCategoryId") != FALSE) {
                $sub_category_info->subCategoryId = $page_info->subCategoryId;
            }
            if (property_exists($page_info, "subCategoryTitle") != FALSE) {
                $sub_category_info->subCategoryTitle = $page_info->subCategoryTitle;
            }
            if (property_exists($page_info, "title") != FALSE) {
                $page_information->title = $page_info->title;
            }
            if (property_exists($page_info, "street") != FALSE) {
                $page_information->street = $page_info->street;
            }
            if (property_exists($page_info, "city") != FALSE) {
                $page_information->city = $page_info->city;
            }
            if (property_exists($page_info, "zipCode") != FALSE) {
                $page_information->zipCode = $page_info->zipCode;
            }
            if (property_exists($page_info, "phone") != FALSE) {
                $page_information->phone = $page_info->phone;
            }
            $page_information->pageId = $this->utils->generateRandomString(PAGE_ID_LENGTH);
            $page_information->referenceId = $this->session->userdata('user_id');
            $page_information->category = $category_info;
            $page_information->subCategory = $sub_category_info;
            $result_event = $this->page_mongodb_model->add_page($page_information);
            if ($result_event != "" || $result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['message'] = "Page Created Succefully";
                } else if ($result_event->responseCode == PAGE_NAME_VALIDATION_EXIST) {
                    $response['message'] = "Sorry! Page Title is alreay Exist";
                } else {
                    $response['message'] = "Error While Processing";
                }
            }
            echo json_encode($response);
            return;
        }
    }

    /*
     * this function will update a page  info
     * 
     */

    function update_page() {
        $user_id = $this->session->userdata('user_id');
        if (file_get_contents("php://input") != null) {
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "pageInfo") != FALSE) {
                $page_info = $requestInfo->pageInfo;
            }
            $age_range = new stdClass();
            if (property_exists($page_info, "minAge") != FALSE) {
                $age_range->minAge = $page_info->minAge;
            }
            if (property_exists($page_info, "maxAge") != FALSE) {
                $age_range->maxAge = $page_info->maxAge;
            }
            $page_info = new stdClass();
            $page_info->interestedAgeRange = $age_range;
            if (property_exists($page_info, "about") != FALSE) {
                $page_info->about = $page_info->about;
            }
            if (property_exists($page_info, "intertestedGender") != FALSE) {
                $page_info->intertestedGender = $page_info->intertestedGender;
            }
            $userInfo = new stdClass();
            $userInfo->userId = $user_id;
            $userInfo->firstName = $this->session->userdata('first_name');
            $userInfo->lastName = $this->session->userdata('last_name');
            $page_info->intertestedGender = "3";
            $page_info->referenceId = $user_id;
            $page_info->referenceInfo = $userInfo;
            $result_event = $this->page_mongodb_model->update_page($page_info);
            if ($result_event != null) {
                $result_event = json_encode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['message'] = "Page Created Succefully";
                } else {
                    $response['message'] = "Error While Processing";
                }
            }
            echo json_encode($response);
            return;
        }
    }

    function newsfeed($mapping_id = 0) {
        $mapping_id = "1";
        $user_id = $this->session->userdata('user_id');
        $result_event = $this->page_mongodb_model->get_page_info($mapping_id);
        $result_event = json_decode($result_event);
        var_dump($result_event);
//        $result_event = json_encode($result_event);
        exit;
        if ($result_event != "") {
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $page_info = $result_event->result;
            } else {
                $response['message'] = "Error While Processing";
            }
        }
        var_dump($result_event);
        exit;
    }

    /**
     * this methord add a new status of a user 
     * @param userId and user status Info
     *  */
    function add_status() {

        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $album_result = array();
        $response = array();
        $user_id = $this->session->userdata('user_id');
        if ($requestInfo != null) {
            $user_info = new stdClass();
            $user_info->userId = $user_id;
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');
            $status_info = new stdClass();
            $status_info->userId = $user_id;
            $new_status_id = $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);

            if (property_exists($requestInfo, "statusInfo") != FALSE) {
                $request = $requestInfo->statusInfo;
            }
            if (property_exists($request, "profileId") != FALSE) {

                $profile_id = $request->profileId;
            }
            $images = array();
            $image_size;
            if (property_exists($request, "imageList") != FALSE) {
                $image_list = $request->imageList;
                $image_size = count($image_list);
                if (!empty($image_list)) {
                    foreach ($image_list as $imageInfo) {
                        $image = new stdClass();
                        $image->image = $imageInfo;
                        $images[] = $image;
                    }
                    $album_id = TIMELINE_PHOTOS_ALBUM_ID;
                    $album_title = TIMELINE_PHOTOS_ALBUM_TITLE;
                    $album_result = $this->album_add($user_id, $album_id, $album_title, $image_list, $new_status_id);
                }
            }
            if ($user_id != $profile_id && $profile_id != "" && $image_size == 1) {
                $status_info->mappingId = $profile_id;
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTO;
            } else if ($user_id != $profile_id && $profile_id != "") {
                $status_info->mappingId = $profile_id;
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE;
            } else if ($image_size == 1) {
                $status_info->mappingId = $user_id;
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTO;
            } else {
                $status_info->mappingId = $user_id;
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE;
            }
            if (property_exists($request, "description") != FALSE) {
                $status_info->description = $request->description;
            }

            $status_info->images = $images;
            $status_info->userInfo = $user_info;
            $result = $this->status_mongodb_model->add_status($status_info);
            $result = json_decode($result);
            if ($result->responseCode == REQUEST_SUCCESSFULL) {
                if ($user_id != $profile_id && $profile_id != "") {
                    $maping_user_info = new stdClass();
                    $maping_user_info->userId = $profile_id;
                    if (property_exists($request, "profileFirstName") != FALSE) {
                        $maping_user_info->firstName = $request->profileFirstName;
                    }
                    if (property_exists($request, "profileLastName") != FALSE) {
                        $maping_user_info->lastName = $request->profileLastName;
                    }
                    $profile_id = $status_info->mappingId = $request->profileId;
                    $status_info->mappingUserInfo = $maping_user_info;
                }
                $status_info->timeDiff = "1sec ago";
                $response["status_info"] = $status_info;
            }
        }
        echo json_encode($response);
    }

    function pages_sort_view_my() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_view_my", $this->data);
    }

    function pages_sort_view_friend() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_view_friend", $this->data);
    }

    function pages_sort_most_liked() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/pages_sort_most_liked", $this->data);
    }

    function pages_newsfeed() {
        $user_id = $this->session->userdata('user_id');
        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = PAGE_APP;
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_TEMPLATE, "member/page/page_timeline", $this->data);
    }

    function pages_photo() {
        $user_id = $this->session->userdata('user_id');
        $result = $this->photo_mongodb_model->get_user_albums($user_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            if (property_exists($result_array, "albumList")) {
                $this->data['user_album_list'] = json_encode($result_array->albumList);
            }
        } else {
            $this->data['user_album_list'] = array();
        }
        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_photo", $this->data);
    }

    function pages_photo_add() {
        $result = array();
        $image_add_result = array();
        $result_ary = array();
        $result_array = array();
        $category_list = array();
        $album_list = array();
        $image_list = array();
        $user_image_list_info = array();
        $response = array();
        $user_id = $this->session->userdata('user_id');
        if (file_get_contents("php://input") != null) {
            $user_info = new stdClass();
            $user_info->userId = $user_id;
            $user_info->firstName = $this->session->userdata('first_name');
            $user_info->lastName = $this->session->userdata('last_name');
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "photoInfo") != FALSE) {
                $request = $requestInfo->photoInfo;
            }
            if (!empty($request)) {
                if (property_exists($request, "imageList") != FALSE) {
                    $image_list = $request->imageList;
                }
                $images = array();
                if (!empty($image_list)) {
                    foreach ($image_list as $image) {
                        $photo_info = new stdClass();
                        $photo_info->photoId = $this->utils->generateRandomString(USER_PHOTO_ID_LENGTH);
                        if (property_exists($request, "albumId") != FALSE) {
                            $photo_info->albumId = $request->albumId;
                            $album_id = $request->albumId;
                        }
                        if (property_exists($request, "categoryId") != FALSE) {
                            $photo_info->categoryId = $request->categoryId;
                        }
                        $tempimage = new stdClass();
                        $tempimage->image = $image;
                        $images[] = $tempimage;
                        $photo_info->image = $image;
                        $user_image_list_info[] = $photo_info;
                    }
                    $image_add_result = $this->photo_mongodb_model->add_photos($user_id, $album_id, $user_image_list_info);
                    $image_add_result = json_decode($image_add_result);
                    if ($image_add_result->responseCode == CREATED_SUCCESSFULLY) {
                        $status_info = new stdClass();
                        $status_info->userId = $user_id;
                        $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
                        $status_info->statusTypeId = ADD_ALBUM_PHOTOS;
                        $status_info->images = $images;
                        $status_info->userInfo = $user_info;
                        $status_result = $this->status_mongodb_model->add_status($status_info);
                        $status_result = json_decode($status_result);
                        if ($status_result->responseCode == CREATED_SUCCESSFULLY) {
                            $response['message'] = "added successfullly";
                        }
                    }
                    echo json_encode($response);
                } else {
                    $response["message"] = "Please Seelect at least one Picture";
                    echo json_encode($response);
                }
            } else {
                $response["message"] = "Error message";
                echo json_encode($response);
            }
        }

        $result = $this->photo_mongodb_model->get_albums_and_categories($user_id);
        if (!empty($result)) {
            $result_array = json_decode($result);
            $category_list = $result_array->categoryList;
            $album_list = $result_array->albumList;
        }
        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data["first_name"] = $this->session->userdata('first_name');
        $this->data['user_relation'] = json_encode($user_relation);
        $this->data["album_lsit"] = json_encode($album_list);
        $this->data["category_list"] = json_encode($category_list);
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_photo_add", $this->data);
    }

    function pages_get_photo_album($album_id = 0) {
        $user_id = $this->session->userData('user_id');
        $response = array();
        $result = $this->photo_mongodb_model->get_photos($user_id, $album_id);
        $result_array = json_decode($result);
        if (!empty($result_array)) {
            if (property_exists($result_array, "photoList")) {
                $this->data['photo_list'] = json_encode($result_array->photoList);
            }
            if (property_exists($result_array, "albumInfo")) {
                $this->data['album_info'] = json_encode(json_decode($result_array->albumInfo));
            }
        }

        $user_relation = array();
        $user_relation['first_name'] = $this->session->userdata('first_name');
        $user_relation['last_name'] = $this->session->userdata('last_name');
        $user_relation['user_id'] = $user_id;
        $this->data['app'] = "app.Photo";
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data["first_name"] = $this->session->userdata('first_name');
        $this->data['user_relation'] = json_encode($user_relation);
        $this->template->load(null, "member/page/page_album_photo_view", $this->data);
    }

    function pages_about($profile_id = "0") {
        $user_id = $this->session->userdata('user_id');
        if ($profile_id == "0" && $user_id == FALSE) {
            redirect('auth/login', 'refresh');
        }
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['profile_id'] = $profile_id;
        $this->data['app'] = "app.BasicProfile";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_about", $this->data);
    }

    function pages_getting_started() {
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['app'] = "app.Header";
        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_getting_started", $this->data);
    }

}
