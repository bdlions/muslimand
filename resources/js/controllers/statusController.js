angular.module('controllers.Status', ['services.Status', 'services.Timezone', 'infinite-scroll']).
        controller('statusController', function ($scope, $modal, statusService, utilsTimezone) {
            $scope.statuses = [];
            $scope.statusDetails = {};
            $scope.statusTypes = {};
            $scope.status = {};
            $scope.statusInfo = {};
            $scope.statusShareInfo = {};
            $scope.commentInfo = {};
            $scope.sharedInfo = {};
            $scope.newsfeeds = [];
            $scope.likeList = [];
            $scope.commentLikeList = [];
            $scope.shareList = [];
            $scope.CommentList = [];
            $scope.modalImages = [];
            $scope.sliderImages = [];
            $scope.singlePhoto = {};
            $scope.userCurrentTimeStamp = new Date().getTime() / 1000;
            $scope.timeDifferent = 0;
            $scope.userGenderId = "";
            $scope.busy = false;
            $scope.statusFlag = true;
            $scope.getStatusList = function () {
                if ($scope.busy == true) {
                    return;
                }
                $scope.busy = true;
                var statusInfo = {};
                var offset = $scope.statuses.length;
                statusInfo.offset = offset;
                statusService.getStatusList(statusInfo).
                        success(function (data, status, headers, config) {
                            if (typeof data.status_list == "undefined") {
                                $scope.busy = true;
                            } else {
                                var counter = data.status_list.length;
                                for (var i = 0; i < counter; i++) {
                                    $scope.statuses.push(data.status_list[i]);
                                }
                                $scope.getStatusInformation();
                                $scope.busy = false;
                            }
                        }.bind($scope));
            };
            $scope.setUserCurrentTimeStamp = function (userCurrentTimeStamp) {
                $scope.userCurrentTimeStamp = userCurrentTimeStamp;
            };
            $scope.setUserGender = function (genderId) {
                $scope.userGenderId = genderId;
            };
            $scope.setStatus = function (userStatus) {
                $scope.statuses = JSON.parse(userStatus);
                $scope.getStatusInformation();
            };
            $scope.getStatusInformation = function () {
                angular.forEach($scope.statuses, function (status, key) {
                    if (typeof status.timeDiff == "undefined") {
                        status.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, status.createdOn);
                    }
                    if (typeof status.commentList != "undefined") {
                        angular.forEach(status.commentList, function (comment, key) {
                            if (typeof comment.commentTimeDiff == "undefined") {
                                comment.commentTimeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                            }
                        });
                    }
                }, $scope.statuses);
            }


            $scope.getProfileStatusList = function (profileId) {
                if ($scope.busy)
                    return;
                $scope.busy = true;
                var statusInfo = {};
                var offset = $scope.statuses.length;
                statusInfo.offset = offset;
                statusInfo.profileId = profileId;
                statusService.getStatusList(statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.userCurrentTimeStamp = data.user_current_time;
                            $scope.userGenderId = data.user_gender_id;
                            if (typeof data.status_list == "undefined" || data.status_list.length <= 0) {
                                $scope.busy = true;
                            } else {
                                var counter = data.status_list.length;
                                for (var i = 0; i < counter; i++) {
                                    if (typeof data.status_list[i].timeDiff == "undefined") {
                                        data.status_list[i].timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, data.status_list[i].createdOn);
                                    }
                                    if (typeof data.status_list[i].commentList != "undefined") {
                                        angular.forEach(data.status_list[i].commentList, function (comment, key) {
                                            if (typeof comment.commentTimeDiff == "undefined") {
                                                comment.commentTimeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            }
                                        });
                                    }
                                    $scope.statuses.push(data.status_list[i]);
                                }
                                $scope.busy = false;
                            }
                        }.bind($scope));
            };
            $scope.getPageStatusList = function (pageId) {
                if ($scope.busy)
                    return;
                $scope.busy = true;
                var statusInfo = {};
                var offset = $scope.statuses.length;
                statusInfo.offset = offset;
                statusInfo.pageId = pageId;
                statusService.getPageStatusList(statusInfo).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            $scope.userCurrentTimeStamp = data.user_current_time;
                            if (typeof data.status_list == "undefined" || data.status_list.length <= 0) {
                                $scope.busy = true;
                            } else {
                                var counter = data.status_list.length;
                                for (var i = 0; i < counter; i++) {
                                    if (typeof data.status_list[i].timeDiff == "undefined") {
                                        data.status_list[i].timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, data.status_list[i].createdOn);
                                    }
                                    if (typeof data.status_list[i].commentList != "undefined") {
                                        angular.forEach(data.status_list[i].commentList, function (comment, key) {
                                            if (typeof comment.commentTimeDiff == "undefined") {
                                                comment.commentTimeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            }
                                        });
                                    }
                                    $scope.statuses.push(data.status_list[i]);
                                }
                                $scope.busy = false;
                            }
                        }.bind($scope));
            };
            $scope.setStatusDetails = function (statusDetails) {
                var statusInfo = JSON.parse(statusDetails);
                $scope.userCurrentTimeStamp = statusInfo.user_current_time;
                $scope.userGenderId = statusInfo.user_gender_id;
                $scope.statuses = statusInfo.status_list;
                $scope.getStatusInformation();
            };
            $scope.getProfileStatus = function (profileId) {
                statusService.getProfileStatus(profileId).
                        success(function (data, status, headers, config) {
                            $scope.statuses = data.status_list;
                            $scope.userCurrentTimeStamp = data.user_current_time;
                            $scope.userGenderId = data.user_gender_id;
                            $scope.getStatusInformation();
                        });
            };
            $scope.setSharedInfo = function (sharedInfo, requestFunction) {
                $scope.sharedInfo = sharedInfo;
                requestFunction();
            };
            $scope.statusDetails = function (statusId) {
                statusService.statusDetails(statusId).
                        success(function (data, status, headers, config) {
                        });
            };
            /**
             * Add user status 
             * @Author Rashida Sultana
             * 
             * */
            $scope.addStatus = function (imageList, profileUserInfo, requestFunction) {
                if ($scope.statusFlag != true) {
                    return;
                }
                $scope.statusFlag = false;
                var imageListArray = [];
                imageListArray = imageList;
                if (imageListArray.length > 0) {
                    $scope.statusInfo.imageList = [];
                    $scope.statusInfo.imageList = imageList;
                }
                console.log($scope.statusInfo.description);
                if (($scope.statusInfo.description == null || $scope.statusInfo.description == "") && ($scope.statusInfo.imageList == null || typeof $scope.statusInfo.imageList == "undefined")) {
                    return;
                }
                ;
                $scope.statusInfo.profileId = profileUserInfo.profileId;
                $scope.statusInfo.profileFirstName = profileUserInfo.profileFirstName;
                $scope.statusInfo.profileLastName = profileUserInfo.profileLastName;
                statusService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            if (typeof data.status_info.genderId === "undefined") {
                                data.status_info.genderId = $scope.userGenderId;
                            }
                            $scope.statuses.unshift(data.status_info);
                            $scope.statusInfo.description = "";
                            $scope.statusInfo.imageList = null;
                            $scope.statusFlag = true;
                            requestFunction();
                        });
            };
// update a status...............
            $scope.updateStatus = function (status) {
                if ($scope.statusFlag != true) {
                    return;
                }
                $scope.statusFlag = false;
                var statusId = status.statusId;
                statusService.updateStatus(status).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                    (value.description = data.description);
                                    $("#updateStatus" + statusId).hide();
                                    $("#displayStatus" + statusId).show();
                                }
                            }, $scope.statuses);
                            $scope.statusFlag = true;
                        });
            };
            /**
             * add status like
             * parameter statusId 
             * */
            $scope.addLike = function (status) {
                if ($scope.statusFlag != true) {
                    return;
                }
                $scope.statusFlag = false;
                var statusId = status.statusId;
                statusService.addLike(status).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                    $scope.likeList.push(data.status_like_info);
                                    (value.likeStatus = "1");
                                    if (typeof value.likeCounter == "undefined") {
                                        (value.likeCounter = 1);
                                    } else {
                                        (value.likeCounter = value.likeCounter + 1);
                                    }
                                }
                            }, $scope.statuses);
                            $scope.statusFlag = true;
                        });
                return false;
            };
            /**
             * add status like
             * parameter statusId 
             * */
            $scope.addStatusCommentLike = function (statusId, commentId) {
                statusService.addStatusCommentLike(statusId, commentId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (status, key) {
                                angular.forEach(status.commentList, function (value, key) {
                                    if (value.commentId == commentId) {
                                        (value.CommentlikeStatus = "1");
                                        if (typeof value.commentlikeCounter == "undefined") {
                                            (value.commentlikeCounter = 1);
                                        } else {
                                            (value.commentlikeCounter = value.commentlikeCounter + 1);
                                        }
                                    }
                                }, status);
                            }, $scope.statuses);
                        });
                return false;
            };
            /**
             * Status comment Add
             * 
             * */
            $scope.addComment = function (genderId, referenceUserInfo, statusId) {
                if ($scope.statusFlag != true) {
                    return;
                }
                $scope.statusFlag = false;
                $scope.statusInfo.referenceUserInfo = referenceUserInfo;
//                $scope.statusInfo.referenceUserInfo.genderId = $scope.userGenderId;
                $scope.statusInfo.statusId = statusId;
                if ($scope.statusInfo.commentDes == "" || $scope.statusInfo.commentDes == null) {
                    return;
                }
                statusService.addComment($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                    if (typeof value.commentList === "undefined") {
                                        value.commentList = new Array();
                                    }
                                    if (typeof data.status_comment_info.userGenderId === "undefined") {
                                        data.status_comment_info.userGenderId = genderId;
                                    }
                                    if (typeof data.status_comment_info.commentTimeDiff === "undefined") {
                                        data.status_comment_info.commentTimeDiff = "1 sec ago";
                                    }
                                    value.commentList.unshift(data.status_comment_info);
                                }
                            }, $scope.statuses);
                            $scope.statusInfo.commentDes = "";
                            $scope.statusFlag = true;
                        });
                return false;
            };
            /**
             * delete Status
             * */
            $scope.deleteStatus = function (statusId) {
                statusService.deleteStatus(statusId).
                        success(function (data, status, headers, config) {
                            $("#pagelet" + statusId).hide();
                            alert(data.message);
                        });
                return false;
            };
            $scope.shareStatus = function (requestFunction) {
                statusService.shareStatus($scope.sharedInfo, $scope.statusShareInfo).
                        success(function (data, status, headers, config) {
                            $scope.statuses.push(data.status_info);
                            $scope.statusShareInfo.description = "";
                            requestFunction();
                        });
            };
            $scope.setNewsfeeds = function (t) {
                $scope.newsfeeds = JSON.parse(t);
            };
            $scope.getStatusLikeList = function (statusId, requestFunction) {
                statusService.getStatusLikeList(statusId).
                        success(function (data, status, headers, config) {
                            $scope.likeList = data.like_list;
                            requestFunction();
                        });
                return false;
            };
            $scope.getStatusShareList = function (statusId, requestFunction) {
                statusService.getStatusShareList(statusId).
                        success(function (data, status, headers, config) {
                            $scope.shareList = data.share_list;
                            requestFunction();
                        });
                return false;
            };
            $scope.getStatusComments = function (statusId, requestFunction) {
                statusService.getStatusComments(statusId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (status, key) {
                                if (status.statusId == statusId ? status.commentList = data.comment_list : '') {
                                }
                                if (typeof status.commentList != "undefined") {
                                    angular.forEach(status.commentList, function (comment, key) {
                                        if (typeof comment.commentTimeDiff == "undefined") {
                                            comment.commentTimeDiff = utilsTimezone.convertDateToFullTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        } else {
                                            comment.commentTimeDiff = "1sec ago ";
                                        }
                                    });
                                }
                            }, $scope.statuses);
                            requestFunction();
                        });
                return false;
            };
            $scope.updateStatusComment = function (statusId, comment) {
                var commentId = comment.commentId;
                var commentInfo = {};
                commentInfo.statusId = statusId;
                commentInfo.commentId = commentId;
                commentInfo.description = comment.description;
                statusService.updateStatusComment(commentInfo).
                        success(function (data, status, headers, config) {
                            $("#displayStatusComment_" + commentId).show();
                            $("#updateStatusComment_" + commentId).hide();
                        });
            };
            $scope.deleteStatusComment = function (statusId, commentId, requestFunction) {
                statusService.deleteStatusComment(statusId, commentId).
                        success(function (data, status, headers, config) {
                            if (data.status == "1") {
                                requestFunction(data.status);
                            }

                        });
            };
            $scope.getStatusCommentLikeList = function (statusId, commentId, requestFunction) {
                statusService.getStatusCommentLikeList(statusId, commentId).
                        success(function (data, status, headers, config) {
                            $scope.commentLikeList = data.like_list;
                            requestFunction();
                        });
                return false;
            };

            //photo slider methords...................
            $scope.open = function (statusInfo, image) {
                var statusId = statusInfo.statusId;
                var userInfo = statusInfo.userInfo;
                var userId = statusInfo.userInfo.userId;
                var statusTypeId = statusInfo.statusTypeId;
                statusService.getSliderPhotoList(statusId).
                        success(function (data, status, headers, config) {
                            if (typeof data.statusInfoList != "undefined") {
                                $scope.sliderImages = data.statusInfoList;
                                angular.forEach($scope.sliderImages, function (photoInfo, key) {
                                    if (photoInfo.image == image) {
                                        photoInfo.active = true;
                                    }
                                    if (photoInfo.userId == userId) {
                                        photoInfo.userInfo = userInfo;
                                    }
                                    if (typeof photoInfo.statusTypeId == "undefined") {
                                        photoInfo.statusTypeId = statusTypeId;
                                    }
                                    if (typeof photoInfo.createdOn != "undefined") {
                                        photoInfo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photoInfo.createdOn);
                                    }
                                    if (typeof photoInfo.commentList != "undefined") {
                                        angular.forEach(photoInfo.commentList, function (comment, key) {
                                            if (typeof comment.createdOn != "undefined") {
                                                comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            }
                                        });
                                    }

                                }, $scope.sliderImages);
                                $scope.modalInstance = $modal.open({
                                    animation: true,
                                    templateUrl: 'template/newsfeed.html',
                                    scope: $scope
                                });
                            }
                        });
            };
            $scope.addPhotoLike = function (photoId, referenceId, requestFunction) {
                statusService.addPhotoLike(photoId, referenceId).
                        success(function (data, status, headers, config) {
                            console.log(data);
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
                            requestFunction();
                        });
                return false;
            };
            $scope.addMPhotoLike = function (photoId, requestFunction) {
                statusService.addMPhotoLike(photoId).
                        success(function (data, status, headers, config) {
                            console.log(data);
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
                            requestFunction();
                        });
                return false;
            };

            $scope.ok = function () {
                $scope.modalInstance.close();
            };
        });
