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
        $product_category_list = array();
        $group_category_list = array();
        $community_category_list = array();
        $business_category_list = array();
        $place_category_list = array();
        $entertainment_category_list = array();
        $company_category_list = array();
        $organization_category_list = array();
        $institution_category_list = array();
        $artist_or_band_category_list = array();
        $public_figure_category_list = array();
        $result_event = $this->page_mongodb_model->get_categories_subcaregories();
        if ($result_event != null) {
            $category_list = $result_event->categoryList;
            $sub_category_list = $result_event->subCategoryList;
            foreach ($sub_category_list as $category) {
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_BRAND){
                    $brand_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_PRODUCT){
                    $product_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_GROUP){
                    $group_category_list[] = $category;
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
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_INSTITUTION){
                    $institution_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_ARTIST_OR_BAND){
                    $artist_or_band_category_list[] = $category;
                }
                if($category->categoryId == CATEGORY_TYPE_ID_FOR_PUBLIC_FIGURE){
                    $public_figure_category_list[] = $category;
                }
            }
        }
        $this->data['categories'] = $category_list;
        $this->data['brand_subcategories'] = $brand_category_list;
        $this->data['product_subcategories'] = $product_category_list;
        $this->data['group_subcategories'] = $group_category_list;
        $this->data['community_subcategories'] = $community_category_list;
        $this->data['business_subcategories'] = $business_category_list;
        $this->data['place_subcategories'] = $place_category_list;
        $this->data['entertainment_subcategories'] = $entertainment_category_list;
        $this->data['company_subcategories'] = $company_category_list;
        $this->data['organization_subcategories'] = $organization_category_list;
        $this->data['institution_subcategories'] = $institution_category_list;
        $this->data['artist_or_band_subcategories'] = $artist_or_band_category_list;
        $this->data['public_figure_subcategories'] = $public_figure_category_list;
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
            $page_id = $page_information->pageId = $this->utils->generateRandomString(PAGE_ID_LENGTH);
            $page_information->referenceId = $this->session->userdata('user_id');
            $page_information->category = $category_info;
            $page_information->subCategory = $sub_category_info;
            $result_event = $this->page_mongodb_model->add_page($page_information);
            if ($result_event != "" || $result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['status'] = "1";
                    $response['page_id'] = $page_id;
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
        $response = array();
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
            $page_basic_info = new stdClass();
            $page_basic_info->interestedAgeRange = $age_range;
            if (property_exists($page_info, "about") != FALSE) {
                $page_basic_info->about = $page_info->about;
            }
            if (property_exists($page_info, "pageId") != FALSE) {
                $page_basic_info->pageId = $page_info->pageId;
            }
            if (property_exists($page_info, "intertestedGender") != FALSE) {
                $page_basic_info->intertestedGender = $page_info->intertestedGender;
            }
            $userInfo = new stdClass();
            $userInfo->userId = $user_id;
            $userInfo->firstName = $this->session->userdata('first_name');
            $userInfo->lastName = $this->session->userdata('last_name');
            $page_basic_info->referenceId = $user_id;
            $page_basic_info->referenceInfo = $userInfo;
            $result_event = $this->page_mongodb_model->update_page($page_basic_info);
            if ($result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['status'] = "1";
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
        $page_info = new stdClass();
        $like_counter = "0";
        $user_id = $this->session->userdata('user_id');
        $result_event = $this->page_mongodb_model->get_page_info($mapping_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            $member_event = json_decode($result_event->pageMemberCounter);
            $page_event = json_decode($result_event->pageInfo);
            if ($member_event->responseCode == REQUEST_SUCCESSFULL) {
                $like_counter = $member_event->result;
            }
            if ($page_event->responseCode == REQUEST_SUCCESSFULL) {
                $page_info = $page_event->result;
            }
        }
        $this->data['page_info'] = $page_info;
        $this->data['like_counter'] = $like_counter;
        $this->data['profile_id'] = $mapping_id;
        $this->data['app'] = PAGE_APP;
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $user_id;
        $this->data['page_id'] = $mapping_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(MEMBER_TEMPLATE, "member/page/page_timeline", $this->data);
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
        $page_image_list_info = array();
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
                        $page_image_list_info[] = $photo_info;
                    }
                    $image_add_result = $this->photo_mongodb_model->add_photos($user_id, $album_id, $page_image_list_info);
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

//    function pages_about($profile_id = "0") {
//        $user_id = $this->session->userdata('user_id');
//        if ($profile_id == "0" && $user_id == FALSE) {
//            redirect('auth/login', 'refresh');
//        }
//        $this->data['user_id'] = $user_id;
//        $this->data['first_name'] = $this->session->userdata('first_name');
//        $this->data['profile_id'] = $profile_id;
//        $this->data['app'] = "app.BasicProfile";
//        $this->template->load(MEMBER_PAGE_IN_TEMPLATE, "member/page/page_about", $this->data);
//    }

    function pages_getting_started($page_id = 0) {
        $this->data['age_range_list'] = $this->utils->get_age_list();
        $this->data['gender_list'] = $this->utils->get_gender();
        $this->data['user_id'] = $this->session->userdata('user_id');
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['page_id'] = $page_id;
        $this->data['app'] = PAGE_APP;
        $this->template->load(null, "member/page/page_getting_started", $this->data);
    }

    public function add_profile_picture($page_id = 0) {
        $response = array();
        $image_data = $this->input->post('imageData');
        $user_id = $this->session->userdata('user_id');
        //temp picture upload to server for profile picture
        $page_profile_picture_name = $page_id . '.jpg';
        $profile_picture_temp_path = TEMP_PAGE_IMAGE_PATH;
        $result1 = $this->upload_picture($image_data, $page_profile_picture_name, $profile_picture_temp_path);
        // image upload to user album for database save 
        $temp_src_name = $page_id . '_' . now() . '.jpg';
        $page_image_path = PAGE_IMAGE_PATH;
        $result2 = $this->upload_picture($image_data, $temp_src_name, $page_image_path);

        if ($result1['status'] != 0 && $result2['status'] != 0) {
            //resize profile picture 
            $file_temp = $profile_picture_temp_path . $page_profile_picture_name;
            $this->utils->resize_image($file_temp, PAGE_PROFILE_PICTURE_PATH_W150_H150 . $page_profile_picture_name, PAGE_PROFILE_PICTURE_H150, PAGE_PROFILE_PICTURE_W150);
            $this->utils->resize_image($file_temp, PAGE_PROFILE_PICTURE_PATH_W100_H100 . $page_profile_picture_name, PAGE_PROFILE_PICTURE_H100, PAGE_PROFILE_PICTURE_W100);
            $this->utils->resize_image($file_temp, PAGE_PROFILE_PICTURE_PATH_W50_H50 . $page_profile_picture_name, PAGE_PROFILE_PICTURE_H50, PAGE_PROFILE_PICTURE_W50);
            $this->utils->resize_image($file_temp, PAGE_PROFILE_PICTURE_PATH_W40_H40 . $page_profile_picture_name, PAGE_PROFILE_PICTURE_H40, PAGE_PROFILE_PICTURE_W40);
            $this->utils->resize_image($file_temp, PAGE_PROFILE_PICTURE_PATH_W30_H30 . $page_profile_picture_name, PAGE_PROFILE_PICTURE_H30, PAGE_PROFILE_PICTURE_W30);
            $this->utils->resize_image($file_temp, PAGE_PROFILE_PICTURE_PATH_W25_H25 . $page_profile_picture_name, PAGE_PROFILE_PICTURE_H25, PAGE_PROFILE_PICTURE_W25);
            //create album if no album exsist for profile picture or add picture to profile picture album
            $image_list = array();
            $image = new stdClass();
            $image->image = $temp_src_name;
            $image_list[] = $image;
            $album_id = PAGE_PROFILE_PHOTOS_ALBUM_ID;
            $album_title = PAGE_PROFILE_PHOTOS_ALBUM_TITLE;
            $status_id = $this->utils->generateRandomString(PAGE_ID_LENGTH);
            $album_result = $this->album_add($page_id, $album_id, $album_title, $image_list, $status_id);
            if ($album_result != '' && $album_result != null) {
                $album_result = json_decode($album_result);
                if ($album_result->responseCode == REQUEST_SUCCESSFULL) {
                    $page_title = $album_result->result;
                    $page_info = new stdClass();
                    $page_info->pageId = $page_id;
                    $page_info->referenceId = $user_id;
                    $page_info->title = $page_title;
                    $status_info = new stdClass();
                    $status_info->userId = $user_id;
                    $new_status_id = $status_info->statusId = $status_id;
                    $status_info->statusTypeId = STATUS_TYPE_ID_PAGE_CHANGE_PROFILE_PICTURE;
                    $status_info->images = $image_list;
                    $status_info->pageInfo = $page_info;
                    $status_info->mappingId = $page_id;
                    $result = $this->page_mongodb_model->add_status($status_info);
                    $result = json_decode($result);
                    if ($result->responseCode == REQUEST_SUCCESSFULL) {
                        $response["message"] = "Profile picture add successfully";
                        $response["status"] = "1";
                    }
                }
            }
        }
        echo json_encode($response);
        return;
    }

    function add_cover_picture($page_id = 0) {
        $response = array();
        $image_data = $this->input->post('imageData');
        $user_id = $this->session->userdata('user_id');
        //temp picture upload to server for cover picture
        $cover_picture_image_name = $page_id . '.jpg';
        $cover_image_temp_path = PAGE_COVER_PICTURE_IMAGE_PATH;
        $result1 = $this->upload_picture($image_data, $cover_picture_image_name, $cover_image_temp_path);
        // image upload to user album for database save 
        $temp_src_name = $page_id . '_' . now() . '.jpg';
        $page_image_path = PAGE_IMAGE_PATH;
        $result2 = $this->upload_picture($image_data, $temp_src_name, $page_image_path);

        if ($result1['status'] != 0 && $result2['status'] != 0) {
            //create album if no album exsist for cover picture or add picture to cover picture album
            $image_list = array();
            $image = new stdClass();
            $image->image = $temp_src_name;
            $image_list[] = $image;
            $album_id = PAGE_COVER_PHOTOS_ALBUM_ID;
            $album_title = PAGE_COVER_PHOTOS_ALBUM_TITLE;
            $status_id = $this->utils->generateRandomString(PAGE_ID_LENGTH);
            $album_result = $this->album_add($page_id, $album_id, $album_title, $image_list, $status_id);
            //add status in user profile related to the change of cover picture
            if ($album_result != '' && $album_result != null) {
                $album_result = json_decode($album_result);
                if ($album_result->responseCode == REQUEST_SUCCESSFULL) {
                    $page_title = $album_result->result;
                    $page_info = new stdClass();
                    $page_info->pageId = $page_id;
                    $page_info->referenceId = $user_id;
                    $page_info->title = $page_title;
                    $status_info = new stdClass();
                    $status_info->userId = $user_id;
                    $new_status_id = $status_info->statusId = $status_id;
                    $status_info->statusTypeId = STATUS_TYPE_ID_PAGE_CHANGE_COVER_PICTURE;
                    $status_info->images = $image_list;
                    $status_info->pageInfo = $page_info;
                    $status_info->mappingId = $page_id;
                    $result = $this->page_mongodb_model->add_status($status_info);
                    $result = json_decode($result);
                    if ($result->responseCode == REQUEST_SUCCESSFULL) {
                        $response["status_info"] = $status_info;
                    }
                }
            }

            echo json_encode($response);
        }
    }

    public function upload_picture($image_data, $image_name, $image_path) {
        $response = array();
        list(, $data) = explode(',', $image_data);
        $final_image_data = base64_decode($data);
        $file = $image_path . $image_name;
        $result = file_put_contents($file, $final_image_data);
        if ($result != null) {
            $response['status'] = 1;
        } else {
            $response['status'] = 0;
        }
        return $response;
    }

    function album_add($page_id, $album_id, $type_title, $image_list, $status_id) {
        $page_image_list_info = array();
        $response = array();
        foreach ($image_list as $image) {
            $photo_info = new stdClass();
            $photo_info->photoId = $this->utils->generateRandomString(USER_PHOTO_ID_LENGTH);
            $photo_info->albumId = $album_id;
            $photo_info->image = $image->image;
            $photo_info->referenceId = $status_id;
            $page_image_list_info[] = $photo_info;
        }
        $image_add_result = $this->page_mongodb_model->add_photos($page_id, $album_id, $page_image_list_info);
        return $image_add_result;
    }

}
