angular.module('controllers.Status', ['services.Status']).
        controller('statusController', function ($scope, statusService) {
            $scope.statuses = [];
//            $scope.statuses.comments = [];
            $scope.status = {};
            $scope.statusInfo = {};
            $scope.statusShareInfo = {};
//            $scope.statuses.comments = [];
            $scope.commentInfo = {};
            $scope.newsfeeds = [];
            $scope.likeList = [];
            $scope.CommentList = [];


            $scope.setStatus = function (t) {
                $scope.statuses = JSON.parse(t);
//                console.log($scope.statuses);
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
            $scope.addLike = function (statusId) {
                statusService.addLike(statusId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId) {
                                   $scope.likeList.push(data.status_like_info);
                                    (value.likeStatus = "1");
                                    (value.likeCounter = "1");
                                }
                            }, $scope.statuses);

                        });
                return false;
            };
            /**
             * Status comment Add
             * 
             * */
            $scope.addComment = function (statusId) {
                $scope.statusInfo.statusId = statusId;
                statusService.addComment($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.statuses, function (value, key) {
                                if (value.statusId == statusId ? value.commentList.push(data.status_comment_info) : "") {
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
            $scope.shareStatus = function (oldStatusInfo, requestFunction) {
                statusService.shareStatus(oldStatusInfo, $scope.statusShareInfo).
                        success(function (data, status, headers, config) {
                            $scope.statuses.push(data.status_info);
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
