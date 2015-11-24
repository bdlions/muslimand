angular.module('controllers.Header', ['services.Header', 'services.Timezone']).
        controller('headerController', function ($scope, headerService, utilsTimezone) {
            $scope.constants = {};
            $scope.counter = 0;
            $scope.generalNotifications = [];
            $scope.allNotificationList = [];
            $scope.friendNotifications = [];
            $scope.url = "../";
            $scope.userCurrentTimeStamp = 0;
            $scope.setConstants = function (t) {
                $scope.constants = JSON.parse(t);
                $scope.url = $scope.constants.base_url;
            };

            $scope.updateStatusGetFriendNotifications = function (counterValue, requestFunction) {
                headerService.updateStatusGetFriendNotifications(counterValue).
                        success(function (data, status, headers, config) {
                            $scope.friendNotifications = data.friend_list;
                            console.log($scope.friendNotifications);
                            requestFunction();
                        });
            };

            $scope.setNotificationList = function (notificationList) {
                $scope.allNotificationList = JSON.parse(notificationList);
//                console.log($scope.allNotificationList);
            };


            $scope.getStatusInformation = function () {
                angular.forEach($scope.statuses, function (status, key) {
                    if (typeof status.timeDiff == "undefined") {
                        status.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, status.createdOn);
                    } else {
                        status.timeDiff = "1sec ago ";
                    }

                }, $scope.statuses);
            }

            $scope.setUserCurrentTime = function (userCurrentTimeStamp) {
                $scope.userCurrentTimeStamp = userCurrentTimeStamp;

            };

            $scope.updateStatusGetGeneralNotifications = function (counterValue, requestFunction) {
                headerService.updateStatusGetGeneralNotifications(counterValue).
                        success(function (data, status, headers, config) {
                            $scope.generalNotifications = data.general_notification.generalNotifications;
                            angular.forEach($scope.generalNotifications, function (notification, key) {
                                console.log(notification.createdOn);
                                if (typeof notification.timeDiff == "undefined") {
                                    notification.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, notification.createdOn);
                                } else {
                                    notification.timeDiff = "1sec ago ";
                                }
                            }, $scope.generalNotifications);
                            console.log($scope.generalNotifications);
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
