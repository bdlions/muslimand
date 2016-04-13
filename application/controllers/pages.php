<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->lang->load('auth');
//        $this->load->library('upload');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->library('utils');
        $this->load->model('page_mongodb_model');
        $this->load->model('photo_mongodb_model');
        $this->load->model('status_mongodb_model');

        $this->load->helper(array('form', 'url'));
        $this->load->helper('language');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
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
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_BRAND) {
                    $brand_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_PRODUCT) {
                    $product_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_GROUP) {
                    $group_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_COMMUNITY) {
                    $community_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_BUSINESS) {
                    $business_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_PLACE) {
                    $place_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_ENTERTAINMENT) {
                    $entertainment_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_COMPANY) {
                    $company_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_ORGANIZATION) {
                    $organization_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_INSTITUTION) {
                    $institution_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_ARTIST_OR_BAND) {
                    $artist_or_band_category_list[] = $category;
                }
                if ($category->categoryId == CATEGORY_TYPE_ID_FOR_PUBLIC_FIGURE) {
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

    function get_page_info($page_id, $user_id) {
        $page_basic_info = array();
        $result_event = $this->page_mongodb_model->get_page_info($page_id, $user_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            $member_info = json_decode($result_event->pageMemberInfo);
            $page_basic_info['member_info'] = $member_info;
            $page_event = json_decode($result_event->pageInfo);
            $user_gender_id = json_decode($result_event->userGender);
            $page_basic_info['user_gender_id'] = $user_gender_id;
            if ($page_event->responseCode == REQUEST_SUCCESSFULL) {

                $page_info = $page_event->result;
                $page_infos = array(
                    'pageId' => $page_info->pageId,
                    'title' => $page_info->title,
                    'category' => $page_info->category,
                    'referenceId' => $page_info->referenceId
                );
                if (property_exists($page_info, "referenceInfo")) {
                    $page_infos['referenceInfo'] = $page_info->referenceInfo;
                }
                if (property_exists($page_info, "intertestedGender")) {
                    $page_infos['intertestedGender'] = $page_info->intertestedGender;
                }
                $page_basic_info['page_info'] = $page_infos;
            }
        }
        return $page_basic_info;
    }

    function timeline($mapping_id = 0) {
        $page_info = new stdClass();
        $page_basic_info = array();
        $member_info = new stdClass();
        $user_id = $this->session->userdata('user_id');
        $page_basic_info = $this->get_page_info($mapping_id, $user_id);
        $this->data['page_info'] = json_encode($page_basic_info['page_info']);
        $this->data['member_info'] = json_encode($page_basic_info["member_info"]);
        $this->data['user_gender_id'] = $page_basic_info['user_gender_id'];
        $this->data['app'] = PAGE_APP;
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $mapping_id;
        $this->data['page_id'] = $mapping_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/page/page_timeline", $this->data);
    }

    function get_user_page_list() {
        $user_id = $this->session->userdata('user_id');
        $page_list = array();
        $result_event = $this->page_mongodb_model->get_user_pages($user_id);
        if ($result_event != "") {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $page_list = $result_event->result;
            }
        }
        $this->data['app'] = PAGE_APP;
        $this->data['page_list'] = $page_list;
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['last_name'] = $this->session->userdata('last_name');
        $this->template->load(null, "member/page/page_list", $this->data);
    }

//.......................................................memebers...........................................


    function get_invite_friend_list() {
        if (file_get_contents("php://input") != null) {
            $response = array();
            $invite_friend_list = array();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "pageId") != FALSE) {
                $page_id = $requestInfo->pageId;
            }
            $offset = PAGE_INVITE_FRIEND_LIST_INITIAL_OFFSET;
            $limit = PAGE_INVITE_FRIEND_LIST_INITIAL_LIMIT;
            $user_id = $this->session->userdata('user_id');
            $result_event = $this->page_mongodb_model->get_invite_friend_list($page_id, $user_id, $offset, $limit);
            if ($result_event != null) {
                $friend_list = json_decode($result_event);
                foreach ($friend_list as $invite_friend_info) {
                    $invite_friend_info->friendInfo = json_decode($invite_friend_info->friendInfo);
                    $invite_friend_list[] = $invite_friend_info;
                }
                $response['invite_friend_list'] = $invite_friend_list;
            }
            echo json_encode($response);
            return;
        }
    }

    function add_invitation() {
        if (file_get_contents("php://input") != null) {
            $response = array();
            $invite_friend_list = array();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            $page_info = new stdClass();
            if (property_exists($requestInfo, "pageInfo") != FALSE) {
                $p_info = $requestInfo->pageInfo;
                $page_info->pageId = $p_info->pageId;
                $page_info->referenceId = $p_info->referenceId;
                $page_info->title = $p_info->title;
            }
            $member_info = new stdClass();
            if (property_exists($requestInfo, "userInfo") != FALSE) {
                $user_info = $requestInfo->userInfo;
                $member_info->userId = $user_info->userId;
                $member_info->firstName = $user_info->firstName;
                $member_info->lastName = $user_info->lastName;
                $member_info->genderId = $user_info->genderId;
            }
            $result_event = $this->page_mongodb_model->invite_member($page_info, $member_info);
            if ($result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['status'] = "1";
                    $response['member_status'] = PAGE_MEMBER_STATUS_ID_INVITED;
                } else {
                    $response['status'] = "0";
                }
            } else {
                $response['status'] = "0";
            }
            echo json_encode($response);
        }
    }

    function join_page() {
        if (file_get_contents("php://input") != null) {
            $response = array();
            $invite_friend_list = array();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            $page_info = new stdClass();
            if (property_exists($requestInfo, "pageInfo") != FALSE) {
                $p_info = $requestInfo->pageInfo;
                $page_info->pageId = $p_info->pageId;
                $page_info->referenceId = $p_info->referenceId;
                $page_info->title = $p_info->title;
                $mapping_id = $p_info->referenceInfo->userId;
            }
            $member_info = new stdClass();
            $member_info->userId = $this->session->userdata('user_id');
            $member_info->firstName = $this->session->userdata('first_name');
            $member_info->lastName = $this->session->userdata('last_name');
            $result_event = $this->page_mongodb_model->join_page_membership($mapping_id, $page_info, $member_info);
            if ($result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['status'] = "1";
                    $response['member_status'] = PAGE_MEMBER_STATUS_ID_LIKED;
                } else {
                    $response['status'] = "0";
                }
            } else {
                $response['status'] = "0";
            }
            echo json_encode($response);
        }
    }

    function leave_membership() {
        if (file_get_contents("php://input") != null) {
            $response = array();
            $invite_friend_list = array();
            $postdata = file_get_contents("php://input");
            $requestInfo = json_decode($postdata);
            if (property_exists($requestInfo, "pageId") != FALSE) {
                $page_id = $requestInfo->pageId;
            }
            $user_id = $this->session->userdata('user_id');
            $result_event = $this->page_mongodb_model->leave_page_membership($page_id, $user_id);
            if ($result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response['status'] = "1";
                    $response['member_status'] = PAGE_MEMBER_STATUS_ID_NON_MEMBER;
                } else {
                    $response['status'] = "0";
                }
            } else {
                $response['status'] = "0";
            }
            echo json_encode($response);
        }
    }

//...................................................................photos.....................



    function get_home_photos($page_id = "0") {
        $page_info = new stdClass();
        $member_info = new stdClass();
        $page_basic_info = array();
        $user_id = $this->session->userdata('user_id');
        $photo_list = array();
        $page_basic_info = $this->get_page_info($page_id, $user_id);
        $result_event = $this->page_mongodb_model->get_timeline_photos($page_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $photo_list = $result_event->result;
            }
        }
        $this->data['page_info'] = json_encode($page_basic_info['page_info']);
        $this->data['member_info'] = json_encode($page_basic_info["member_info"]);
        $this->data['user_gender_id'] = $page_basic_info['user_gender_id'];
        $this->data['photo_list'] = json_encode($photo_list);
        $this->data['user_id'] = $user_id;
        $this->data['profile_id'] = $page_id;
        $this->data['page_id'] = $page_id;
        $this->data['app'] = PAGE_APP;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->template->load(null, "member/page/page_photo", $this->data);
    }

//...............................
    function add_album_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "referenceId") != FALSE) {
            $reference_id = $requestInfo->referenceId;
        }
        if (property_exists($requestInfo, "mappingId") != FALSE) {
            $mapping_id = $requestInfo->mappingId;
        }
        $user_info = new stdClass();
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($requestInfo, "genderId") != FALSE) {
            $user_info->genderId = $requestInfo->genderId;
        }
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        $result_event = $this->page_mongodb_model->add_album_like($mapping_id, $album_id, $reference_id, $like_info);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["like_info"] = $like_info;
            }
        }
        echo json_encode($response);
    }

    function add_album_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
        if (property_exists($request, "albumId") != FALSE) {
            $album_id = $request->albumId;
        }
        if (property_exists($request, "mappingId") != FALSE) {
            $mapping_id = $request->mappingId;
        }
        if (property_exists($request, "referenceId") != FALSE) {
            $reference_id = $request->referenceId;
        }

        $user_info = new stdClass();
        $user_info->userId = $this->session->userdata('user_id');
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($request, "genderId") != FALSE) {
            $user_info->genderId = $request->genderId;
        }
        $comment_info = new stdClass();
        if (property_exists($request, "comment") != FALSE) {
            $comment_info->description = $request->comment;
        }
        $comment_info->userInfo = $user_info;
        $result_event = $this->page_mongodb_model->add_album_comment($album_id, $mapping_id, $reference_id, $comment_info);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["comment"] = $comment_info;
            }
        }
        echo json_encode($response);
        return;
    }

    function get_album_comments() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "mappingId") != FALSE) {
            $mapping_id = $requestInfo->mappingId;
        }
        $result_event = $this->page_mongodb_model->get_album_comments($album_id, $mapping_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["comment_list"] = $result_event->result->comment;
            }
        }
        echo json_encode($response);
    }

    function get_album_like_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        $result = $this->page_mongodb_model->get_album_like_list($album_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "like") != FALSE) {
                $response["like_list"] = $request_array->like;
            }
        }
        echo json_encode($response);
    }

    function add_photo_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "referenceId") != FALSE) {
            $reference_id = $requestInfo->referenceId;
        }
        $user_id = $this->session->userdata('user_id');
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($requestInfo, "genderId") != FALSE) {
            $user_info->genderId = $requestInfo->genderId;
        }
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        if(isset($album_id) && $album_id = "" && $album_id != null){
        $result = $this->page_mongodb_model->add_photo_like($user_id, $album_id, $photo_id, $reference_id, $like_info);
        }else{
           $result = $this->page_mongodb_model->add_newsfeed_photo_like($user_id, $photo_id, $reference_id, $like_info);   
        }
        if ($result != null) {
            $result = json_decode($result);
            if ($result->responseCode != REQUEST_SUCCESSFULL) {
                $response['message'] = "Error while Processing ! ";
            } else {
                $response["like_info"] = $like_info;
            }
        }
        echo json_encode($response);
    }

    function add_photo_comment() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "commentInfo") != FALSE) {
            $request = $requestInfo->commentInfo;
        }
        if (property_exists($request, "photoId") != FALSE) {
            $photo_id = $request->photoId;
        }
        if (property_exists($request, "referenceId") != FALSE) {
            $reference_id = $request->referenceId;
        }
        if (property_exists($request, "statusTypeId") != FALSE) {
            $status_type_id = $request->statusTypeId;
        }
        if (property_exists($request, "albumId") != FALSE) {
            $album_id = $request->albumId;
        }
        $ref_user_info = new stdClass();
        if (property_exists($request, "userInfo")) {
            $reference_user_info = $request->userInfo;
            $ref_user_info->userId = $reference_user_info->userId;
            $ref_user_info->firstName = $reference_user_info->firstName;
            $ref_user_info->lastName = $reference_user_info->lastName;
            $ref_user_info->genderId = $reference_user_info->genderId;
        }
        $user_id = $this->session->userdata('user_id');
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        if (property_exists($requestInfo, "genderId") != FALSE) {
            $user_info->genderId = $requestInfo->genderId;
        }
        $comment_info = new stdClass();
        if (property_exists($request, "comment") != FALSE) {
            $comment_info->description = $request->comment;
        }
        $comment_info->userInfo = $user_info;

        if (isset($status_type_id)) {
            $result = $this->page_mongodb_model->add_photo_comment($photo_id, $reference_id, $comment_info, $ref_user_info, $status_type_id);
        } else {
            $result = $this->page_mongodb_model->add_slider_photo_comment($photo_id, $reference_id, $comment_info, $ref_user_info, $album_id);
        }
        if ($result != null) {
            $result = json_decode($result);
            if ($result->responseCode != REQUEST_SUCCESSFULL) {
                $response['message'] = "Error while Processing ! ";
            } else {
                $response["comment"] = $comment_info;
            }
        }
        echo json_encode($response);
    }

    function get_photo_comments() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $result = $this->page_mongodb_model->get_photo_comments($photo_id);
        $request_array = json_decode($result);
        if (!empty($request_array)) {
            if (property_exists($request_array, "comment") != FALSE) {
                $response["comment_list"] = $request_array->comment;
            }
        }
        echo json_encode($response);
    }

//.....................
    function get_page_short_album_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "pageId") != FALSE) {
            $page_id = $requestInfo->pageId;
        }
        $result_event = $this->page_mongodb_model->get_page_albums($page_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["album_list"] = $result_event->result;
            }
        }
        echo json_encode($response);
        return;
    }

    function get_page_album_list() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "pageId") != FALSE) {
            $page_id = $requestInfo->pageId;
        }
        $result_event = $this->page_mongodb_model->get_page_album_list($page_id);
        if ($result_event != null) {
            $result_event = json_decode($result_event);
            if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                $response["album_list"] = $result_event->result;
            }
        }
        echo json_encode($response);
        return;
    }

    function create_album() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumInfo") != FALSE) {
            $request = $requestInfo->albumInfo;
        }
        if (!empty($request)) {
            $album_info = new stdClass();
            $album_info->albumId = $this->utils->generateRandomString(USER_PHOTO_CREATE_ALBUM_ID_LENGTH);
            if (property_exists($request, "pageId") != FALSE) {
                $album_info->pageId = $request->pageId;
            }
            if (property_exists($request, "title") != FALSE) {
                $album_info->title = $request->title;
            }
            if (property_exists($request, "description") != FALSE) {
                $album_info->description = $request->description;
            }
            $result_event = $this->page_mongodb_model->create_album($album_info);
            if ($result_event != "" || $result_event != null) {
                $result_event = json_decode($result_event);
                if ($result_event->responseCode == REQUEST_SUCCESSFULL) {
                    $response["album_info"] = $album_info;
                    $response["message"] = "Create Album Successfully";
                }
            }
            echo json_encode($response);
            return;
        } else {
            $response['message'] = "Create Album is Failed ! ";
            echo json_encode($response);
        }
    }

    function get_slider_photos() {
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "referenceId") != FALSE) {
            $reference_id = $requestInfo->referenceId;
        }
        $result_event = $this->page_mongodb_model->get_slider_photos($user_id, $reference_id);
        if ($result_event != null) {
            $temp_album_list = json_decode($result_event);
            if (property_exists($temp_album_list, "photoList")) {
                $response["photoList"] = $temp_album_list->photoList;
            }
        }
        echo json_encode($response);
        return;
    }

    function get_slider_album() {
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "mappingId") != FALSE) {
            $mapping_id = $requestInfo->mappingId;
        }
        $result_event = $this->page_mongodb_model->get_slider_album($mapping_id, $album_id, $user_id);
        if ($result_event != null) {
            $temp_album_list = json_decode($result_event);
            if (property_exists($temp_album_list, "photoList")) {
                $response["photoList"] = $temp_album_list->photoList;
            }
            if (property_exists($temp_album_list, "pageInfo")) {
                $response["pageInfo"] = json_decode($temp_album_list->pageInfo);
            }
        }
        echo json_encode($response);
        return;
    }

    function get_album() {
        $user_id = $this->session->userdata('user_id');
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "albumId") != FALSE) {
            $album_id = $requestInfo->albumId;
        }
        if (property_exists($requestInfo, "pageId") != FALSE) {
            $mapping_id = $requestInfo->pageId;
        }
        $response = array();
        $result_event = $this->page_mongodb_model->get_photos($user_id, $mapping_id, $album_id);
        if ($result_event != "") {
            $result_array = json_decode($result_event);
            if (!empty($result_array)) {
                if (property_exists($result_array, "photoList")) {
                    $response['photo_list'] = $result_array->photoList;
                }
                if (property_exists($result_array, "albumInfo")) {
                    $response['album_info'] = json_decode($result_array->albumInfo);
                }
            }
        }
        echo json_encode($response);
        return;
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

    function pages_photo_add($page_id = "0") {
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
        if ($page_id != "0") {
            $mapping_id = $page_id;
        }
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
                if (property_exists($request, "pageId") != FALSE) {
                    $page_id = $request->pageId;
                }
                if (property_exists($request, "title") != FALSE) {
                    $title = $request->title;
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
                        $status_id = $photo_info->referenceId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
                        $page_image_list_info[] = $photo_info;
                    }
                    $image_add_result = $this->page_mongodb_model->add_photos($page_id, $album_id, $page_image_list_info);
                    $image_add_result = json_decode($image_add_result);
                    if ($image_add_result->responseCode == REQUEST_SUCCESSFULL) {
                        $result = $image_add_result->result;
                        if ($result == $title) {
                            $page_info = new stdClass();
                            $page_info->pageId = $page_id;
                            $page_info->referenceId = $user_id;
                            $page_info->title = $title;

                            $status_info = new stdClass();
                            $status_info->pageId = $page_id;
                            $status_info->mappingId = $page_id;
                            $status_info->statusId = $status_id;
                            $status_info->statusTypeId = STATUS_TYPE_ID_ADD_PAGE_ALBUM_PHOTOS;
                            $status_info->images = $images;
                            $status_info->userInfo = $user_info;
                            $status_info->pageInfo = $page_info;
                            $status_result = $this->page_mongodb_model->add_status($status_info);
                            $status_result = json_decode($status_result);
                            if ($status_result->responseCode == REQUEST_SUCCESSFULL) {
                                $response['status'] = "1";
                            }
                        } else {
                            $response['status'] = "1";
                        }
                    } else {
                        $response['status'] = "0";
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

//        $result = $this->photo_mongodb_model->get_albums_and_categories($user_id);
//        if (!empty($result)) {
//            $result_array = json_decode($result);
//            $category_list = $result_array->categoryList;
//            $album_list = $result_array->albumList;
//        }
//
//        $user_id = $this->session->userdata('user_id');
//        $result_event = $this->page_mongodb_model->get_page_info($mapping_id, $user_id);
//        if ($result_event != null) {
//            $result_event = json_decode($result_event);
//            $member_info = $result_event->pageMemberInfo;
//            $page_event = json_decode($result_event->pageInfo);
//            if ($page_event->responseCode == REQUEST_SUCCESSFULL) {
//                $page_info = $page_event->result;
//            }
//        }
//
//        $user_relation = array();
//        $user_relation['first_name'] = $this->session->userdata('first_name');
//        $user_relation['last_name'] = $this->session->userdata('last_name');
//        $user_relation['user_id'] = $user_id;
//        $this->data['app'] = "app.Photo";
//        $this->data['user_id'] = $user_id;
//        $this->data['profile_id'] = $user_id;
//        $this->data["first_name"] = $this->session->userdata('first_name');
//        $this->data['page_info'] = array();
//        $this->data['member_info'] = $member_info;
//        $this->data["album_lsit"] = json_encode(array());
//        $this->data["category_list"] = json_encode(array());
//        $this->template->load(null, "member/page/section/page_photo_add", $this->data);
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

    function pages_getting_started($page_id = 0) {
        $user_id = $this->session->userdata('user_id');
        $page_basic_info = $this->get_page_info($page_id, $user_id);
        $this->data['page_info'] = $page_basic_info['page_info'];
        $this->data['age_range_list'] = $this->utils->get_age_list();
        $this->data['gender_list'] = $this->utils->get_gender();
        $this->data['user_id'] = $user_id;
        $this->data['first_name'] = $this->session->userdata('first_name');
        $this->data['page_id'] = $page_id;
        $this->data['app'] = PAGE_APP;
        $this->template->load(null, "member/page/page_getting_started", $this->data);
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
                    $status_info->pageId = $page_id;
                    $new_status_id = $status_info->statusId = $status_id;
                    $status_info->statusTypeId = STATUS_TYPE_ID_PAGE_CHANGE_PROFILE_PICTURE;
                    $status_info->images = $image_list;
                    $status_info->pageInfo = $page_info;
                    $status_info->mappingId = $page_id;
                    $result = $this->page_mongodb_model->add_status($status_info);
                    $result = json_decode($result);
                    if ($result->responseCode == REQUEST_SUCCESSFULL) {
                        $response["page_title"] = $page_title;
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
                    $status_info->pageId = $page_id;
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

//.......................status.........................................

    /**
     * this method upload image at server
     * @ param file info
     *  */
    public function image_upload() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        $file = array();
        $files = array();
        if (isset($_FILES["userfile"])) {
            $file_info = $_FILES["userfile"];
            $result = $this->utils->upload_image($file_info, PAGE_IMAGE_PATH);
            if ($result['status'] == 1) {
                $picture = $result['upload_data']['file_name'];
                $file = array(
                    "name" => $picture,
                    "type" => "image/jpeg",
                    "url" => base_url() . PAGE_IMAGE_PATH . $picture,
                    "thumbnailUrl" => base_url() . PAGE_IMAGE_PATH . $picture,
                    "deleteUrl" => base_url() . PAGE_IMAGE_PATH . $picture,
                    "size" => 100,
                    "deleteType" => "DELETE"
                );
                $files[] = $file;
                $response["files"] = $files;
            } else {
                $this->data['message'] = $result['message'];
                echo json_encode($this->data);
                return;
            }
            echo json_encode($response);
            return;
        }
    }

    /**
     * this methord add a new status of a page 
     * @param userId and page status Info
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

            $new_status_id = $status_info->statusId = $this->utils->generateRandomString(STATUS_ID_LENGTH);
            if (property_exists($requestInfo, "statusInfo") != FALSE) {
                $request = $requestInfo->statusInfo;
            }
            $page_info = new stdClass();
            if (property_exists($request, "pageId") != FALSE) {
                $page_id = $request->pageId;
                $page_info->pageId = $page_id;
                $status_info->pageId = $page_id;
            }
            if (property_exists($request, "referenceId") != FALSE) {
                $reference_id = $request->referenceId;
                $page_info->referenceId = $reference_id;
            }
            if (property_exists($request, "title") != FALSE) {
                $title = $request->title;
                $page_info->title = $title;
            }
            $images = array();
            $image_size = 0;
            if (property_exists($request, "imageList") != FALSE) {
                $image_list = $request->imageList;
                $image_size = count($image_list);
                if (!empty($image_list)) {
                    foreach ($image_list as $imageInfo) {
                        $image = new stdClass();
                        $image->image = $imageInfo;
                        $images[] = $image;
                    }
                    $album_id = PAGE_TIMELINE_PHOTOS_ALBUM_ID;
                    $album_title = PAGE_TIMELINE_PHOTOS_ALBUM_TITLE;
                    $album_result = $this->album_add($page_id, $album_id, $album_title, $images, $new_status_id);
                }
            }
            if ($user_id == $reference_id && $reference_id != "" && $image_size == 1) {
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_S_PHOTO;
            } else if ($user_id == $reference_id && $reference_id != "" && $image_size > 1) {
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_M_PHOTOS;
            } else if ($user_id == $reference_id && $reference_id != "" && $image_size <= 0) {
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE;
            } else if ($user_id != $reference_id && $reference_id != "" && $image_size == 1) {
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_S_PHOTO;
            } else if ($user_id != $reference_id && $image_size > 1) {
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_M_PHOTOS;
            } else if ($user_id != $reference_id && $image_size < 0) {
                $status_info->statusTypeId = STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE;
            }
            if (property_exists($request, "description") != FALSE) {
                $status_info->description = $request->description;
            }
            $status_info->images = $images;
            $status_info->userInfo = $user_info;
            $status_info->pageInfo = $page_info;
            $status_info->mappingId = $page_id;
            $result = $this->page_mongodb_model->add_status($status_info);
            $result = json_decode($result);
            if ($result->responseCode == REQUEST_SUCCESSFULL) {
                $response["status"] = "1";
            } else {
                $response["status"] = "0";
                $response["message"] = "Sorry! Error while add Status !! ";
            }
        }
        echo json_encode($response);
    }

//    function add_photo_like() {
//        $response = array();
//        $postdata = file_get_contents("php://input");
//        $requestInfo = json_decode($postdata);
//        if (property_exists($requestInfo, "photoId") != FALSE) {
//            $photo_id = $requestInfo->photoId;
//        }
//        if (property_exists($requestInfo, "referenceId") != FALSE) {
//            $reference_id = $requestInfo->referenceId;
//        }
//        $user_id = $this->session->userdata('user_id');
//        $user_info = new stdClass();
//        $user_info->userId = $user_id;
//        $user_info->firstName = $this->session->userdata('first_name');
//        $user_info->lastName = $this->session->userdata('last_name');
//         if (property_exists($requestInfo, "referenceId") != FALSE) {
//            $reference_id = $requestInfo->referenceId;
//        }
//        $like_info = new stdClass();
//        $like_info->userInfo = $user_info;
//        $result = $this->page_mongodb_model->add_photo_like($user_id, $photo_id, $reference_id, $like_info);
//        if ($result != null) {
//            $result = json_decode($result);
//            if ($result->responseCode != REQUEST_SUCCESSFULL) {
//                $response['message'] = "Error while Processing ! ";
//            } else {
//                $response["like_info"] = $like_info;
//            }
//        }
//        echo json_encode($response);
//    }

    function add_m_photo_like() {
        $response = array();
        $postdata = file_get_contents("php://input");
        $requestInfo = json_decode($postdata);
        if (property_exists($requestInfo, "photoId") != FALSE) {
            $photo_id = $requestInfo->photoId;
        }
        $user_id = $this->session->userdata('user_id');
        $user_info = new stdClass();
        $user_info->userId = $user_id;
        $user_info->firstName = $this->session->userdata('first_name');
        $user_info->lastName = $this->session->userdata('last_name');
        $like_info = new stdClass();
        $like_info->userInfo = $user_info;
        $result = $this->page_mongodb_model->add_m_photo_like($user_id, $photo_id, $like_info);
        if ($result != null) {
            $result = json_decode($result);
            if ($result->responseCode != REQUEST_SUCCESSFULL) {
                $response['message'] = "Error while Processing ! ";
            } else {
                $response["like_info"] = $like_info;
            }
        }
        echo json_encode($response);
    }

//    function add_photo_comment() {
//        $response = array();
//        $postdata = file_get_contents("php://input");
//        $requestInfo = json_decode($postdata);
//        if (property_exists($requestInfo, "commentInfo") != FALSE) {
//            $request = $requestInfo->commentInfo;
//        }
//        if (property_exists($request, "photoId") != FALSE) {
//            $photo_id = $request->photoId;
//        }
//        if (property_exists($request, "referenceId") != FALSE) {
//            $reference_id = $request->referenceId;
//        }
//        if (property_exists($request, "statusTypeId") != FALSE) {
//            $status_type_id = $request->statusTypeId;
//        }
//        $ref_user_info = new stdClass();
//        if (property_exists($request, "userInfo")) {
//            $reference_user_info = $request->userInfo;
//            $ref_user_info->userId = $reference_user_info->userId;
//            $ref_user_info->firstName = $reference_user_info->firstName;
//            $ref_user_info->lastName = $reference_user_info->lastName;
//        }
//        $user_id = $this->session->userdata('user_id');
//        $user_info = new stdClass();
//        $user_info->userId = $user_id;
//        $user_info->firstName = $this->session->userdata('first_name');
//        $user_info->lastName = $this->session->userdata('last_name');
//        $comment_info = new stdClass();
//        if (property_exists($request, "comment") != FALSE) {
//            $comment_info->description = $request->comment;
//        }
//        $comment_info->userInfo = $user_info;
//        $result = $this->page_mongodb_model->add_photo_comment($photo_id, $reference_id, $comment_info, $ref_user_info, $status_type_id);
//        if ($result != null) {
//            $result = json_decode($result);
//            if ($result->responseCode != REQUEST_SUCCESSFULL) {
//                $response['message'] = "Error while Processing ! ";
//            } else {
//                $response["comment"] = $comment_info;
//            }
//        }
//        echo json_encode($response);
//    }

}
