angular.module('controllers.Status', ['services.Status', 'services.Timezone']).
        controller('statusController', function ($scope, statusService, utilsTimezone) {
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
            $scope.shareList = [];
            $scope.CommentList = [];
            $scope.userCurrentTimeStamp = 0;
            $scope.timeDifferent = 0;

            $scope.setUserCurrentTimeStamp = function (userCurrentTimeStamp) {
                $scope.userCurrentTimeStamp = userCurrentTimeStamp;
            };

            $scope.setStatus = function (userStatus) {
                $scope.statuses = JSON.parse(userStatus);
                angular.forEach($scope.statuses, function (status, key) {
                    if (typeof status.timeDiff == "undefined") {
                        status.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, status.createdOn);
                    } else {
                        status.timeDiff = "1sec ago ";
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
                console.log($scope.statuses);
            };

            $scope.setStatusDetails = function (statusDetails) {
                $scope.statuses = JSON.parse(statusDetails);
            };

            $scope.getProfileStatus = function (profileId) {
                statusService.getProfileStatus(profileId).
                        success(function (data, status, headers, config) {
                            $scope.statuses = data.status_list;
                            $scope.userCurrentTimeStamp = data.user_current_time;
                            angular.forEach($scope.statuses, function (value, key) {
                                if (typeof value.timeDiff == "undefined") {
                                    value.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, value.createdOn);
                                } else {
                                    value.timeDiff = "1sec ago ";
                                }
                            }, $scope.statuses);
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
                $scope.statusInfo.imageList = [];
                $scope.statusInfo.imageList = imageList;
                $scope.statusInfo.profileId = profileUserInfo.profileId;
                $scope.statusInfo.profileFirstName = profileUserInfo.profileFirstName;
                $scope.statusInfo.profileLastName = profileUserInfo.profileLastName;
                statusService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.statuses.unshift(data.status_info);
                            requestFunction();
                        });
            };
// update a status...............
            $scope.updateStatus = function (status) {
                statusId = status.statusId;
                statusService.updateStatus(status).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                    (value.description = data.description);
                                    $("#updateStatus" + statusId).hide();
                                    $("#displayStatus" + statusId).show();
                                }
                            }, $scope.statuses);

                        });
            };
            /**
             * add status like
             * parameter statusId 
             * */
            $scope.addLike = function (userId, statusId) {
                statusService.addLike(userId, statusId).
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
                            angular.forEach($scope.statuses, function (value1, key) {
                                angular.forEach(value1.commentList, function (value, key) {
                                    if (value.commentId == commentId) {
                                        (value.likeStatus = "1");
                                        if (typeof value.likeCounter == "undefined") {
                                            (value.likeCounter = 1);
                                        } else {
                                            (value.likeCounter = value.likeCounter + 1);
                                        }
                                    }
                                }, value1);
                            }, $scope.statuses);

                        });
                return false;
            };
            /**
             * Status comment Add
             * 
             * */
            $scope.addComment = function (referenceUserInfo, statusId) {
                $scope.statusInfo.referenceUserInfo = referenceUserInfo;
                $scope.statusInfo.statusId = statusId;
                statusService.addComment($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                    if (typeof value.commentList === "undefined") {
                                        value.commentList = new Array();
                                    }
                                    value.commentList.push(data.status_comment_info);
                                }
                            }, $scope.statuses);
                            $scope.statusInfo.commentDes = "";
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
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId ? value.commentList = data.comment_list : '') {
                                }
                            }, $scope.statuses);
                            requestFunction();
                        });
                return false;

            };
            /**
             * Feild hde and show 
             * */

            $scope.selectCommentField = function (statusId) {
                $('#commentInputField' + statusId).focus();
            };
            $scope.selectEditField = function (statusId) {
                $("#displayStatus" + statusId).hide();
                $("#updateStatus" + statusId).show();
            };

        });
