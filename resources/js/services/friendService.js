angular.module('services.Friend', []).
        factory('friendService', function ($http) {
            var friendService = {};

            friendService.addFriend = function () {
                return $http({
                    method: 'post',
                    url: '../friend/add_friend',
                    data: {
                        userId: "100157",
                        friendId: "100105"
                    },
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };

            return friendService;
        });

   