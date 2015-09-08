angular.module('controllers.Status', ['services.Status']).
        controller('statusController', function ($scope, statusService) {
            $scope.statuses = [];
//            $scope.statuses.comments = [];
            $scope.status = {};
            $scope.statusInfo = {};
//            $scope.statuses.comments = [];
            $scope.commentInfo = {};
            $scope.newsfeeds = [];

//            var values = {name: 'misko', gender: 'male'};
//            var log = [];
//            angular.forEach(values, function (value, key) {
//                if(value == 'misko'){
//                this.push(key + ': ' + value);
//                }
//            }, log);
//            console.log(log);

            /**
             * Add user status 
             * @Author Rashida Sultana
             * 
             * */
            $scope.addStatus = function () {
                statusService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.statuses.push(data.status_info);
                            $("#updateStatusPagelet").show();
                            $("#statusPostId").val('');
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
                                    (value.likeList.push(data.status_like_info));
                                    $("#statusLike" + statusId).hide();
                                    $("#statusUnLike" + statusId).show();
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
                            $("#commentInputField" + statusId).val('');
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

            $scope.setNewsfeeds = function (t) {
                $scope.newsfeeds = JSON.parse(t);
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
