angular.module('services.Friend', []).
        factory('friendService', function ($http) {
            var friendService = {};

            friendService.addFriend = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/add_friend',
                    data: {
                        friendId: friendId
                    }
                });
            };

            friendService.blockRequest = function (friendId, statusType, url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/block_request',
                    data: {
                        friendId: friendId,
                        statusType: statusType
                    }
                });
            };
            friendService.getPendingRequest = function (url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/get_pending_list',
                    data: {
                    }
                });
            };
            friendService.approveRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/approve_request',
                    data: {
                        friendId: friendId
                    }
                });
            };
            friendService.deleteRequest = function (friendId, url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/delete_request',
                    data: {
                        friendId: friendId
                    }
                });
            };

            return friendService;
        });

   