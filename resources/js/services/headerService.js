angular.module('services.Header', []).
        factory('headerService', function ($http, $location) {
            var headerService = {};
            var $app_name = "/muslimand";
            headerService.updateStatusGetFriendNotifications = function (counterValue) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/notification/update_status_get_friend_notification',
                    data: {
                        counterValue: counterValue
                    }
                });
            };
            headerService.updateStatusGetGeneralNotifications = function (counterValue) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/notification/update_status_get_general_notifications',
                    data: {
                        counterValue: counterValue
                    }
                });
            };


            headerService.approveRequest = function (friendId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/approve_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            headerService.updateOnlineStatusInactive = function () {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/update_online_status',
                    data: {
                    }
                });
            };
            headerService.deleteRequest = function (friendId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/remove_friend_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            return headerService;
        });