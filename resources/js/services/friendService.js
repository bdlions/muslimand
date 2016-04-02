angular.module('services.Friend', []).
        factory('friendService', function ($http, $location) {
            var friendService = {};
            var $app_name = "/muslimand";
            friendService.getFriendList = function (profileId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name +'/friend/get_short_friend_list',
                    data: {
                        profileId: profileId
                    }
                });
            };


            friendService.addFriend = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/friend/add_friend',
                    data: {
                        friendId: friendId
                    }
                });
            };

            friendService.blockRequest = function (friendId, statusType, url) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/block_request',
                    data: {
                        friendId: friendId,
                        statusType: statusType
                    }
                });
            };
            friendService.getPendingRequest = function (url) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/get_pending_list',
                    data: {
                    }
                });
            };
            friendService.approveRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/approve_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            friendService.deleteRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/remove_friend_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            friendService.deleteRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name  + '/friend/remove_friend_request',
                    data: {
                        friendId: friendId
                    }
                });
            };

            return friendService;
        });

   