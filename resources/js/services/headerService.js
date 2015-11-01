angular.module('services.Header', []).
        factory('headerService', function ($http) {
            var headerService = {};
            headerService.updateStatusGetFriendNotifications = function (counterValue, url) {
                return $http({
                    method: 'post',
                    url: url + 'notification/update_status_get_friend_notification',
                    data: {
                        counterValue: counterValue
                    }
                });
            };
            headerService.updateStatusGetGeneralNotifications = function (counterValue, url) {
                return $http({
                    method: 'post',
                    url: url + 'notification/update_status_get_general_notifications',
                    data: {
                        counterValue: counterValue
                    }
                });
            };


            headerService.approveRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/approve_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            headerService.deleteRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/remove_friend_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            return headerService;
        });