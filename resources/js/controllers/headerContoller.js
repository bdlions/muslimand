angular.module('controllers.Header', ['services.Header', 'services.Timezone']).
        controller('headerController', function ($scope, headerService, utilsTimezone) {
            $scope.constants = {};
            $scope.counter = 0;
            $scope.generalNotifications = [];
            $scope.allNotificationList = [];
            $scope.friendNotifications = [];
            $scope.userCurrentTimeStamp = new Date().getTime() / 1000;
            $scope.userGenderId = "";

            $scope.setUserCurrentTime = function (userCurrentTimeStamp) {
                $scope.userCurrentTimeStamp = userCurrentTimeStamp;

            };

            $scope.updateStatusGetFriendNotifications = function (counterValue, requestFunction) {
                headerService.updateStatusGetFriendNotifications(counterValue).
                        success(function (data, status, headers, config) {
                            $scope.friendNotifications = data.friend_notification_list;
                            requestFunction();
                        });
            };
            $scope.updateOnlineStatusInactive = function (requestFunction) {
                headerService.updateOnlineStatusInactive().
                        success(function (data, status, headers, config) {
                            requestFunction(data);
                        });
            };

            $scope.setNotificationList = function (notificationList) {
                $scope.allNotificationList = JSON.parse(notificationList);
                angular.forEach($scope.allNotificationList, function (notification, key) {
                    var userList = new Array();
                    userList = notification.notification.userList;
                    notification.notification.userList.reverse();
                    if (typeof notification.notification.timeDiff == "undefined") {
                        notification.notification.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, notification.notification.createdOn);
                    }
                }, $scope.allNotificationList);

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


            $scope.setUserGender = function (genderId) {
                $scope.userGenderId = genderId;

            };

            $scope.updateStatusGetGeneralNotifications = function (counterValue, requestFunction) {
                headerService.updateStatusGetGeneralNotifications(counterValue).
                        success(function (data, status, headers, config) {
                            if (data.general_notification != null) {
                                angular.forEach(data.general_notification, function (notification, key) {
                                    var notificationInfo = {};
                                    notificationInfo = notification.notification
                                    var userList = new Array();
                                    userList = notificationInfo.userList;
                                    notificationInfo.userList.reverse();
                                    if (typeof notificationInfo.timeDiff == "undefined") {
                                        notificationInfo.timeDiff = utilsTimezone.convertTime($scope.userCurrentTimeStamp, notificationInfo.modifiedOn);
                                    } else {
                                        notificationInfo.timeDiff = "1sec ago ";
                                    }
                                    notificationInfo.genderId = notification.genderId;
                                    $scope.generalNotifications.push(notificationInfo);
                                });
                            }
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
