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
            $scope.likeList = [];
            $scope.PageInfo = {};
            $scope.albumDetail = {};
            $scope.statusInfo = {};
            $scope.PageBasicInfo = {};
            $scope.photoCommentInfo = {};
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
            $scope.setUserGender = function (genderId) {
                $scope.userGenderId = genderId;
            };
            $scope.setPageInfoList = function (pageList) {
                $scope.pageInfoList = pageList;
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
                            $scope.pageAlbumList = data.album_list
                            requestFunction();
                        });
            };
            //....................

            $scope.addAlbumLike = function (albumInfo) {
                var albumId = albumInfo.albumId;
                var referenceId = albumInfo.referenceId;
                var mappingId = albumInfo.pageId;
                pageService.addAlbumLike(albumId, referenceId, mappingId, $scope.userGenderId).
                        success(function (data, status, headers, config) {
                            $scope.albumDetail.likeStatus = "1";
                            if (typeof $scope.albumDetail.likeCounter != "undefined") {
                                $scope.albumDetail.likeCounter + +1;
                            } else {
                                $scope.albumDetail.likeCounter = 1;
                            }
                            $scope.albumDetail.likeCounter
                            $scope.likeList.push(data.like_info);
                        });
            };


            $scope.addAlbumComment = function (albumInfo) {
                var albumId = albumInfo.albumId;
                $scope.albumCommentInfo.albumId = albumInfo.albumId;
                $scope.albumCommentInfo.mappingId = albumInfo.pageId;
                $scope.albumCommentInfo.referenceId = albumInfo.referenceId;
                $scope.albumCommentInfo.genderId = $scope.userGenderId;
                pageService.addAlbumComment($scope.albumCommentInfo).
                        success(function (data, status, headers, config) {
                            data.comment.createdOn = "1 see ago";
                            if (typeof $scope.albumDetail.commentList == "undefined") {
                                $scope.albumDetail.commentList = new Array();
                            }
                            $scope.albumDetail.commentList.push(data.comment);
                            $scope.albumCommentInfo.comment = "";
                        });
                return false;
            };

            $scope.getAlbumComments = function (albumId, mappingId, requestFunction) {
                pageService.getAlbumComments(albumId, mappingId).
                        success(function (data, status, headers, config) {
                            if (typeof data.comment_list != "undefine") {
                                angular.forEach(data.comment_list, function (comment, key) {
                                    if (typeof comment.createdOn != "undefined") {
                                        if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                            comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        } else {
                                            comment.createdOn = "1 see ago";
                                        }
                                    }
                                }, data.comment_list);
                            }
                            $scope.albumDetail.commentList = data.comment_list;
                            requestFunction();
                        });
                return false;
            };


            $scope.getAlbumLikeList = function (albumId, requestFunction) {
                pageService.getAlbumLikeList(albumId).
                        success(function (data, status, headers, config) {
                            $scope.likeList = data.like_list;
                            requestFunction();
                        });
                return false;
            };



            $scope.addPhotoLike = function (albumId, photoId, referenceId, requestFunction) {
                pageService.addPhotoLike(albumId, photoId, referenceId, $scope.userGenderId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.sliderImages, function (value, key) {
                                if (value.photoId == photoId) {
                                    (value.likeStatus = "1");
                                    if (typeof value.likeCounter == "undefined") {
                                        (value.likeCounter = 1);
                                    } else {
                                        (value.likeCounter = value.likeCounter + 1);
                                    }
                                }
                            }, $scope.sliderImages);
//                            $scope.photolikeList.push(data.like_info);
                            requestFunction();
                        });
                return false;
            };
            $scope.addPhotoComment = function (photoInfo) {
                var photoId = $scope.photoCommentInfo.photoId = photoInfo.photoId;
                $scope.photoCommentInfo.referenceId = photoInfo.referenceId;
                $scope.photoCommentInfo.albumId = photoInfo.albumId;
                $scope.photoCommentInfo.userInfo = photoInfo.userInfo;
                pageService.addPhotoComment($scope.photoCommentInfo, $scope.userGenderId).
                        success(function (data, status, headers, config) {
                            data.comment.createdOn = "1 see ago";
                            angular.forEach($scope.sliderImages, function (value, key) {
                                if (value.photoId === photoId) {
                                    if (typeof value.commentList == "undefined") {
                                        value.commentList = new Array();
                                    }
                                    value.commentList.push(data.comment);
                                }
                            }, $scope.sliderImages);
                            $scope.photoCommentInfo.comment = "";
                        });
                return false;
            };

            $scope.getPhotoComments = function (photoId, requestFunction) {
                pageService.getPhotoComments(photoId).
                        success(function (data, status, headers, config) {
                            if (typeof data.comment_list != "undefined") {
                                angular.forEach(data.comment_list, function (comment, key) {
                                    if (typeof comment.createdOn != "undefined") {
                                        if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                            comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        } else {
                                            comment.createdOn = "1 see ago";
                                        }
                                    }
                                });
                            }
                            angular.forEach($scope.sliderImages, function (value, key) {
                                if (value.photoId == photoId ? value.commentList = data.comment_list : '') {
                                }
                            }, $scope.sliderImages);
                            $scope.photoCommentInfo.comment = "";
                            requestFunction();
                        });
                return false;
            };



//...........................





            $scope.getPageAlbum = function (albumId, pageId, requestFunction) {
                pageService.getPageAlbum(albumId, pageId).
                        success(function (data, status, headers, config) {
                            if (typeof data.photo_list != "undefined") {
                                $scope.albumPhotoList = data.photo_list;
                            }
                            if (typeof data.album_info != "undefined") {
                                $scope.albumDetail = data.album_info;
                                var tempPageInfo = $scope.albumDetail.pageInfo ;
                                if (typeof tempPageInfo != "undefined" && tempPageInfo != pageId) {
                                    $scope.albumDetail.pageInfo = JSON.parse($scope.albumDetail.pageInfo);
                                } else {
                                    var pageInfo = {};
                                    pageInfo.pageId = $scope.PageBasicInfo.pageId;
                                    pageInfo.title = $scope.PageBasicInfo.title;
                                    pageInfo.referenceId = $scope.PageBasicInfo.referenceId;
                                    $scope.albumDetail.pageInfo = pageInfo;
                                }
                                if (typeof $scope.albumDetail.commentList != "undefined") {
                                    angular.forEach($scope.albumDetail.commentList, function (comment, key) {
                                        comment.userInfo = JSON.parse(comment.userInfo);
                                        if (typeof comment.createdOn != "undefined") {
                                            if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                                comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            } else {
                                                comment.createdOn = "1 see ago";
                                            }
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


//            $scope.openPhotoModal = function (photoInfo) {
//                var albumId = photoInfo.albumId;
//                var mappingId = photoInfo.pageId;
//                var photoId = photoInfo.photoId;
//                pageService.getSliderAlbum(albumId, mappingId).
//                        success(function (data, status, headers, config) {
//                            var pageInfo = {};
//                            if (typeof data.pageInfo != "undefined") {
//                                pageInfo = data.pageInfo;
//                            }
//                            if (typeof data.photoList != "undefined") {
//                                $scope.sliderImages = data.photoList;
//                                angular.forEach($scope.sliderImages, function (photoInfo, key) {
//                                    if (photoInfo.photoId == photoId) {
//                                        photoInfo.active = true;
//                                    }
//                                    photoInfo.pageInfo = pageInfo;
//                                    if (typeof photoInfo.createdOn != "undefined") {
//                                        photoInfo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photoInfo.createdOn);
//                                    }
//                                    if (typeof photoInfo.commentList != "undefined") {
//                                        angular.forEach(photoInfo.commentList, function (comment, key) {
//                                            comment.userInfo = JSON.parse(comment.userInfo);
//                                            if (typeof comment.createdOn != "undefined") {
//                                                comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
//                                            }
//                                        });
//                                    }
//                                }, $scope.sliderImages);
//                                $scope.modalInstance = $modal.open({
//                                    animation: true,
//                                    templateUrl: 'template/slider_photo-modal.html',
//                                    scope: $scope
//                                });
//                            }
//                        });
//            };


            $scope.openTimelinePhotoModal = function (photoInfo, pageInfo) {
                var pageInfo = {};
                pageInfo.pageId = $scope.PageBasicInfo.pageId;
                pageInfo.title = $scope.PageBasicInfo.title;
                pageInfo.referenceId = $scope.PageBasicInfo.referenceId;
                $scope.openPhotoModal(photoInfo, pageInfo);

            }

            $scope.openPhotoModal = function (photoInfo, pageInfo) {
                var albumId = photoInfo.albumId;
                var mappingId = photoInfo.pageId;
                var photoId = photoInfo.photoId;
                pageService.getSliderAlbum(albumId, mappingId).
                        success(function (data, status, headers, config) {
                            if (typeof data.photoList != "undefined") {
                                $scope.sliderImages = data.photoList;
                                angular.forEach($scope.sliderImages, function (photoInfo, key) {
                                    if (photoInfo.photoId == photoId) {
                                        photoInfo.active = true;
                                    }
                                    
                                    photoInfo.pageInfo = pageInfo;

                                    if (typeof photoInfo.createdOn != "undefined") {
                                        if ($scope.userCurrentTimeStamp > photoInfo.createdOn) {
                                            photoInfo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photoInfo.createdOn);
                                        } else {
                                            photoInfo.createdOn = "1 see ago";
                                        }
                                    }
                                    if (typeof photoInfo.commentList != "undefined") {
                                        angular.forEach(photoInfo.commentList, function (comment, key) {
                                            comment.userInfo = JSON.parse(comment.userInfo);
                                            if (typeof comment.createdOn != "undefined") {
                                                if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                                    comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                                } else {
                                                    comment.createdOn = "1 see ago";
                                                }
                                            }
                                        });
                                    }
//
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
