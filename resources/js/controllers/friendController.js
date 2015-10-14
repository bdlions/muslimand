angular.module('controllers.Friend', ['services.Friend']).
        controller('friendController', function ($scope, friendService) {
            $scope.friends = [];
            $scope.prndingFriends = [];
            $scope.userRelation = {};
            $scope.constants = {};
            $scope.statusTypeFriend = "";
            $scope.url = "../../";
            $scope.setFriendList = function (t) {
                $scope.friends = JSON.parse(t);
            };

            $scope.setUserRelation = function (t) {
                $scope.userRelation = JSON.parse(t);
            };
            $scope.setConstants = function (t) {
                $scope.constants = JSON.parse(t);
                $scope.url = $scope.constants.base_url;
            };

            $scope.getPendingRequest = function (requestFunction) {
                friendService.getPendingRequest($scope.url).
                        success(function (data, status, headers, config) {
                            $scope.prndingFriends = data.friend_list;
                            requestFunction();
                        });
            };
            $scope.blockRequest = function (friendId, requestFunction) {
                var statusType = $scope.userRelation.relation_ship_status;
                friendService.blockRequest(friendId, statusType, $scope.url).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };



            $scope.addFriend = function (friendId) {
                friendService.addFriend(friendId, $scope.url).
                        success(function (data, status, headers, config) {
                            $scope.userRelation = data;
                        });
            };
            $scope.approveRequest = function (friendId, reuestFunction) {
                friendService.approveRequest(friendId, $scope.url).
                        success(function (data, status, headers, config) {
                            $scope.userRelation = data;
                            angular.forEach($scope.prndingFriends, function (value, key) {
                                if (value.userId == friendId) {
                                    value.relationTypeId = data.status_type;
                                }
                            }, $scope.prndingFriends);
                            reuestFunction();
                        });
            };
            $scope.deleteRequest = function (friendId) {
                friendService.deleteRequest(friendId, $scope.url).
                        success(function (data, status, headers, config) {
                            $scope.userRelation = data;
                        });
            };

        });


