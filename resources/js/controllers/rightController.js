angular.module('controllers.Right', ['services.Right']).
        controller('rightController', function ($scope, rightService) {
            $scope.chatUserList = [];
            $scope.recentActivityList = [];

            $scope.getChatUserList = function (chatUserList) {
                $scope.chatUserList = chatUserList;
                console.log($scope.chatUserList);
            };
            
             $scope.getRecentActivities = function () {
                rightService.getRecentActivities().
                        success(function (data, status, headers, config) {
                           $scope.recentActivityList = data;
                            console.log($scope.recentActivityList);
                        });
            };
            

        });
