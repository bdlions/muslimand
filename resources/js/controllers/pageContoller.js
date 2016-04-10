angular.module('controllers.Page', ['services.Page', 'services.Timezone']).
        controller('pageController', function ($scope, $modal, pageService, utilsTimezone) {
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
            $scope.pageAlbums = [];
            $scope.timeLinePhotoList = [];
            $scope.inviteFriendList = [];
            $scope.albumPhotoList = [];
            $scope.pageAlbumList = [];
            $scope.pageInfoList = [];
            $scope.PageInfo = {};
            $scope.albumDetail = {};
            $scope.statusInfo = {};
            $scope.PageBasicInfo = {};
            $scope.memberInfo = {};
            $scope.userCurrentTimeStamp = new Date().getTime() / 1000;
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
            $scope.setPageBasicInfo = function (pageInfo) {

                $scope.PageBasicInfo = JSON.parse(pageInfo);
            };
            $scope.setMemberInfo = function (memberInfo) {
                $scope.memberInfo = JSON.parse(memberInfo);
            };
            $scope.setPageInfoList = function (pageList) {
                $scope.pageInfoList = pageList;
                console.log($scope.pageInfoList)
            };
            $scope.setTimelineList = function (photoList) {
                $scope.timeLinePhotoList = JSON.parse(photoList);
            };
            $scope.updatePage = function (pageId, requestFunction) {
                $scope.PageInfo.pageId = pageId;
                pageService.updatePage($scope.PageInfo).
                        success(function (data, status, headers, config) {

                            requestFunction(data);
                        });
            };
            $scope.getPageAlbumList = function (pageId, requestFunction) {
                pageService.getPageAlbumList(pageId).
                        success(function (data, status, headers, config) {
                            $scope.pageAlbums = data.album_list
                            requestFunction();
                        });
            };
            $scope.createAlbum = function (requestFunction) {
                $scope.albumInfo.pageId = $scope.PageBasicInfo.pageId;
                pageService.createAlbum($scope.albumInfo).
                        success(function (data, status, headers, config) {
                            $scope.pageAlbumList.push(data.album_info);
                            $scope.albumInfo = "";
                            requestFunction();
                        });
                return false;
            };
            $scope.updatePage = function (pageId, requestFunction) {
                $scope.PageInfo.pageId = pageId;
                pageService.updatePage($scope.PageInfo).
                        success(function (data, status, headers, config) {

                            requestFunction(data);
                        });
            };
            $scope.getPageAlbums = function (pageId, requestFunction) {
                pageService.getPageAlbums(pageId).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            $scope.pageAlbumList = data.album_list
                            requestFunction();
                        });
            };



            $scope.getPageAlbum = function (albumId, pageId, requestFunction) {
                pageService.getPageAlbum(albumId, pageId).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            if (typeof data.photo_list != "undefined") {
                                $scope.albumPhotoList = data.photo_list;
                            }
                            if (typeof data.album_info != "undefined") {
                                $scope.albumDetail = data.album_info;
                                if (typeof $scope.albumDetail.commentList != "undefined") {
                                    angular.forEach($scope.albumDetail.commentList, function (comment, key) {
                                        if (typeof comment.createdOn != "undefined") {
                                            comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        }
                                    }, $scope.albumDetail.commentList);
                                }
                            }
                            requestFunction();
                        });
            };


            $scope.addPhotos = function (imageList, pageId, requestFunction) {
                $scope.photoInfo.imageList = [];
                $scope.photoInfo.imageList = imageList;
                $scope.photoInfo.pageId = pageId;
                $scope.photoInfo.title = $scope.PageBasicInfo.title;
                pageService.addPhotos($scope.photoInfo).
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
                var pageInfo = $scope.PageBasicInfo;
                pageService.joinPage(pageInfo).
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
                var pageInfo = $scope.PageBasicInfo;
                pageService.addInvitation(pageInfo, userInfo).
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
                }
                ;
                $scope.statusInfo.pageId = $scope.PageBasicInfo.pageId;
                $scope.statusInfo.referenceId = $scope.PageBasicInfo.referenceId;
                $scope.statusInfo.title = $scope.PageBasicInfo.title;
                pageService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.pageFlag = true;
                            requestFunction(data);
                        });
            };


            $scope.openPhotoModal = function (photoInfo) {
                var albumId = photoInfo.albumId;
                var mappingId = photoInfo.pageId;
                var photoId = photoInfo.photoId;
                pageService.getSliderAlbum(albumId, mappingId).
                        success(function (data, status, headers, config) {
                            var pageInfo = {};
                            if (typeof data.pageInfo != "undefined") {
                                pageInfo = data.pageInfo;
                            }
                            if (typeof data.photoList != "undefined") {
                                $scope.sliderImages = data.photoList;
                                angular.forEach($scope.sliderImages, function (photoInfo, key) {
                                    if (photoInfo.photoId == photoId) {
                                        photoInfo.active = true;
                                    }
                                    photoInfo.pageInfo = pageInfo;
                                    if (typeof photoInfo.createdOn != "undefined") {
                                        photoInfo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photoInfo.createdOn);
                                    }
                                    if (typeof photoInfo.commentList != "undefined") {
                                        angular.forEach(photoInfo.commentList, function (comment, key) {
                                            comment.userInfo = JSON.parse(comment.userInfo);
                                            if (typeof comment.createdOn != "undefined") {
                                                comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            }
                                        });
                                    }
                                }, $scope.sliderImages);
                                $scope.modalInstance = $modal.open({
                                    animation: true,
                                    templateUrl: 'template/slider_photo-modal.html',
                                    scope: $scope
                                });
                            }
                        });
            };
            $scope.ok = function () {
                $scope.modalInstance.close();
            };




        });
