angular.module('controllers.Page', ['services.Page', 'services.Timezone']).
        controller('pageController', function ($scope, pageService, utilsTimezone) {
            $scope.categoryList = [];
            $scope.brandSubCategoryList = [];
            $scope.productSubCategoryList = [];
            $scope.groupSubCategoryList = [];
            $scope.communitySubCategoryList = [];
            $scope.businessSubCategoryList = [];
            $scope.placeSubCategoryList = [];
            $scope.entertainmentSubCategoryList = [];
            $scope.companySubCategoryList = [];
            $scope.organizationSubCategoryList = [];
            $scope.institutionSubCategoryList = [];
            $scope.artistOrBandSubCategoryList = [];
            $scope.publicFigureSubCategoryList = [];
            $scope.ageRangeList = [];
            $scope.genderList = [];
            $scope.inviteFriendList = [];
            $scope.PageInfo = {};
            $scope.statusInfo = {};
            $scope.PageBasicInfo = {};
            $scope.memberInfo = {};
            $scope.pageFlag = true;

            $scope.setCategoryList = function (categoryList) {
                $scope.categoryList = JSON.parse(categoryList);
            };
            $scope.setBrandSubcategoryList = function (subcategoryList) {
                $scope.brandSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setProductSubcategoryList = function (subcategoryList) {
                $scope.productSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setGroupSubcategoryList = function (subcategoryList) {
                $scope.groupSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setCommunitySubcategoryList = function (subcategoryList) {
                $scope.communitySubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setBusinessSubcategoryList = function (subcategoryList) {
                $scope.businessSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setPlaceSubcategoryList = function (subcategoryList) {
                $scope.placeSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setEntertainmentSubcategoryList = function (subcategoryList) {
                $scope.entertainmentSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setCompanySubcategoryList = function (subcategoryList) {
                $scope.companySubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setOrganizationSubcategoryList = function (subcategoryList) {
                $scope.organizationSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setInstitutionSubcategoryList = function (subcategoryList) {
                $scope.institutionSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setArtistOrBandSubcategoryList = function (subcategoryList) {
                $scope.artistOrBandSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.setPublicFigureSubcategoryList = function (subcategoryList) {
                $scope.publicFigureSubCategoryList = JSON.parse(subcategoryList);
            };
            $scope.SetAgeRange = function (ageList) {
                $scope.ageRangeList = JSON.parse(ageList);
            };
            $scope.SetGenderList = function (genderList) {
                $scope.genderList = JSON.parse(genderList);
            };
            $scope.setPageInfo = function (pageInfo) {
                $scope.PageBasicInfo = JSON.parse(pageInfo);
            };
            $scope.setMemberInfo = function (memberInfo) {
                $scope.memberInfo = JSON.parse(memberInfo);
            };
            $scope.updatePage = function (pageId, requestFunction) {
                $scope.PageInfo.pageId = pageId;
                pageService.updatePage($scope.PageInfo).
                        success(function (data, status, headers, config) {

                            requestFunction(data);
                        });
            };

            $scope.addPage = function (category, requestFunction) {
                var pageInfo = {};
                pageInfo.categoryTitle = category.title;
                pageInfo.categoryId = category.categoryId;
                pageInfo.title = $scope.PageInfo.title;
                if (typeof $scope.PageInfo.subCategory !== "undefined" && $scope.PageInfo.subCategory !== "") {
                    var subCategoryInfo = $scope.PageInfo.subCategory;
                    pageInfo.subCategoryId = subCategoryInfo.subCategoryId;
                    pageInfo.subCategoryTitle = subCategoryInfo.title;
                }
                if (typeof $scope.PageInfo.street != "undefined" && $scope.PageInfo.street != "") {
                    pageInfo.street = $scope.PageInfo.street;
                }
                if (typeof $scope.PageInfo.city != "undefined" && $scope.PageInfo.city != "") {
                    pageInfo.city = $scope.PageInfo.city;
                }
                if (typeof $scope.PageInfo.zipCode != "undefined" && $scope.PageInfo.zipCode != "") {
                    pageInfo.zipCode = $scope.PageInfo.zipCode;
                }
                if (typeof $scope.PageInfo.phone != "undefined" && $scope.PageInfo.phone != "") {
                    pageInfo.phone = $scope.PageInfo.phone;
                }
                pageService.addPage(pageInfo).
                        success(function (data, status, headers, config) {
                            requestFunction(data);
                        });
            };
//...............................................members...........................................................
            $scope.getInviteFriendList = function (pageId, requestFunction) {
                pageService.getInviteFriendList(pageId).
                        success(function (data, status, headers, config) {
                            $scope.inviteFriendList = data.invite_friend_list;
                            requestFunction();
                        });

            };
            $scope.joinPage = function (pageId) {
                pageService.joinPage(pageId).
                        success(function (data, status, headers, config) {
                            if (data.status == "1") {
                                $scope.memberInfo.memberShipStatus = data.member_status;
                            }
                        });
            };
            $scope.leaveMembership = function (pageId) {
                pageService.leaveMembership(pageId).
                        success(function (data, status, headers, config) {
                            if (data.status == "1") {
                                $scope.memberInfo.memberShipStatus = data.member_status;
                            }
                        });
            };
            $scope.addInvitation = function (pageId, friendInfo, requestFunction) {
                var userInfo = {};
                userInfo.userId = friendInfo.userId;
                userInfo.firstName = friendInfo.firstName;
                userInfo.lastName = friendInfo.lastName;
                userInfo.genderId = friendInfo.genderId;
                pageService.addInvitation(pageId, userInfo).
                        success(function (data, status, headers, config) {
                            if (data.status == "1") {
                                angular.forEach($scope.inviteFriendList, function (inviteInfo, key) {
                                    if (inviteInfo.friendInfo.userId == friendInfo.userId) {
                                        inviteInfo.status = data.member_status;
                                    }
                                }, $scope.inviteFriendList);

                            }
                            requestFunction();
                        });
            };
            //...................................Status.................


            /**
             * Add user status 
             * @Author Rashida Sultana
             * 
             * */
            $scope.addStatus = function (imageList, pageId, requestFunction) {
                if ($scope.pageFlag != true) {
                    return;
                }
                $scope.pageFlag = false;
                var imageListArray = [];
                imageListArray = imageList;
                if (imageListArray.length > 0) {
                    $scope.statusInfo.imageList = [];
                    $scope.statusInfo.imageList = imageList;
                }
                if (($scope.statusInfo.description == null || $scope.statusInfo.description == "") && ($scope.statusInfo.imageList == null || typeof $scope.statusInfo.imageList == "undefined")) {
                    return;
                };
                $scope.statusInfo.pageId = $scope.PageBasicInfo.pageId;
                $scope.statusInfo.referenceId = $scope.PageBasicInfo.referenceId;
                $scope.statusInfo.title = $scope.PageBasicInfo.title;
                pageService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.pageFlag = true;
                            requestFunction(data);
                        });
            };







        });
