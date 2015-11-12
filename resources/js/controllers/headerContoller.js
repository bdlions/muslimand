angular.module('controllers.Header', ['services.Header']).
        controller('headerController', function ($scope, headerService) {
            $scope.constants = {};
            $scope.counter = 0;
            $scope.generalNotification = {};
            $scope.allNotificationList = [];
            $scope.prndingFriends = [];
            $scope.url = "../";
            $scope.setConstants = function (t) {
                $scope.constants = JSON.parse(t);
                $scope.url = $scope.constants.base_url;
            };

            $scope.updateStatusGetFriendNotifications = function (counterValue, requestFunction) {
                headerService.updateStatusGetFriendNotifications(counterValue).
                        success(function (data, status, headers, config) {
                            $scope.prndingFriends = data.friend_list;
                            requestFunction();
                        });
            };

            $scope.setNotificationList = function (notificationList) {
                $scope.allNotificationList = JSON.parse(notificationList);
                console.log($scope.allNotificationList);
            };

            $scope.updateStatusGetGeneralNotifications = function (counterValue, requestFunction) {
                headerService.updateStatusGetGeneralNotifications(counterValue).
                        success(function (data, status, headers, config) {
                            $scope.generalNotification = data.general_notification;
                            console.log(data);
                            requestFunction();
                        });
            };

            $scope.approveRequest = function (friendId, reuestFunction) {
                headerService.approveRequest(friendId).
                        success(function (data, status, headers, config) {
//                            $scope.userRelation = data;
//                            angular.forEach($scope.prndingFriends, function (value, key) {
//                                if (value.userId == friendId) {
//                                    value.relationTypeId = data.status_type;
//                                }
//                            }, $scope.prndingFriends);
                            reuestFunction();
                        });
            };
            $scope.deleteRequest = function (friendId, reuestFunction) {
                headerService.deleteRequest(friendId).
                        success(function (data, status, headers, config) {
                            reuestFunction();
                        });
            };


        });
