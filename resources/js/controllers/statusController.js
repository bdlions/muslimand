angular.module('controllers.Status', ['services.Status']).
        controller('statusController', function ($scope, statusService) {
            $scope.statuses = [];
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


            $scope.setStatus = function (t) {
                $scope.statuses = JSON.parse(t);
//                console.log($scope.statuses);
            };
  
            $scope.setSharedInfo = function (sharedInfo, requestFunction) {
                $scope.sharedInfo = sharedInfo;
//                console.log($scope.sharedInfo);
                requestFunction();
            };
            /**
             * Add user status 
             * @Author Rashida Sultana
             * 
             * */
            $scope.addStatus = function (imageList, requestFunction) {
                $scope.statusInfo.imageList = [];
                $scope.statusInfo.imageList = imageList;
                statusService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.statuses.push(data.status_info);
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
            $scope.addLike = function (userId,statusId) {
                statusService.addLike(userId, statusId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                    $scope.likeList.push(data.status_like_info);
                                    (value.likeStatus = "1");
                                    if (typeof value.likeCounter == "undefined") {
                                        (value.likeCounter = 1);
                                    }else{
                                       (value.likeCounter = value.likeCounter +1 );  
                                    }
                                    console.log(value);
                                }
                            }, $scope.statuses);

                        });
                return false;
            };
            /**
             * Status comment Add
             * 
             * */
            $scope.addComment = function (userId, statusId) {
                $scope.statusInfo.userId = userId;
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
                console.log($scope.sharedInfo);
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
