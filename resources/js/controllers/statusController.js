angular.module('controllers.Status', ['services.Status']).
        controller('statusController', function ($scope, statusService) {
            $scope.statuses = [];
            $scope.status = {};
            $scope.comments = [];
            $scope.statusInfo = {};
            $scope.commentInfo = {};
            $scope.newsfeeds = [];
            
            $scope.addStatus = function () {
                statusService.addStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            $scope.statuses.push(data);
                            $("#updateStatusPagelet").show();
                            $("#statusPostId").val('');
                        });
            };
            $scope.updateStatus = function () {
                statusService.updateStatus($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $("#updateStatus").hide();
                            $("#displayStatusId").show();
                            $scope.statuses.push(data);
                        });
            };
            
            $scope.addLike = function () {
                statusService.addLike().
                        success(function (data, status, headers, config) {
                            $("#statusLikeId").hide();
                            $("#statusUnLikeId").show();
//                            $scope.status = data;
                        });
                        return false;
            };
            $scope.addComment = function () {
                statusService.addComment($scope.statusInfo).
                        success(function (data, status, headers, config) {
                            $scope.comments.push(data);
                            $("#commentInputField").val('');
                        });
                        return false;
            };
            
            $scope.deleteStatus = function () {
                statusService.deleteStatus().
                        success(function (data, status, headers, config) {
                            $("#updateStatusPagelet").hide();
                            alert("Status Delete Successfully");
                        });
                        return false;
            };
            
            $scope.setNewsfeeds = function (t) {
                $scope.newsfeeds = JSON.parse(t);
                console.log($scope.newsfeeds);
//                  console.log(t);
            };
        });
