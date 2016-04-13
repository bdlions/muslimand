

angular.module('controllers.Friend', ['services.Friend']).
        controller('friendController', function($scope, friendService) {
            $scope.friendCounter = 0;
            $scope.friends = [];
            $scope.prndingFriends = [];
            $scope.userGenderId = "";
            $scope.userRelation = {};
            $scope.constants = {};
            $scope.statusTypeFriend = "";
            $scope.url = "../../";
            $scope.setFriendList = function(t) {
                $scope.friends = JSON.parse(t);
            };

            $scope.setUserRelation = function(userRelation) {
                $scope.userRelation = JSON.parse(userRelation);
                $scope.userGenderId = $scope.userRelation.gender_id;
            };

            $scope.getFriendList = function(profileId) {
                friendService.getFriendList(profileId).
                        success(function(data, status, headers, config) {
                            $scope.friends = data.friend_list;
                                $scope.friendCounter = $scope.friends.length;
                        });
            };
            $scope.getPendingRequest = function(requestFunction) {
                friendService.getPendingRequest($scope.url).
                        success(function(data, status, headers, config) {
                            $scope.prndingFriends = data.friend_list;
                            requestFunction();
                        });
            };
            $scope.blockRequest = function(friendId, requestFunction) {
                var statusType = $scope.userRelation.relation_ship_status;
                friendService.blockRequest(friendId, statusType, $scope.url).
                        success(function(data, status, headers, config) {
                            requestFunction();
                        });
            };



            $scope.addFriend = function(friendId) {
                friendService.addFriend(friendId, $scope.url).
                        success(function(data, status, headers, config) {
                            $scope.userRelation.is_initiated = data.is_initiated;
                            $scope.userRelation.relation_ship_status = data.relation_ship_status;
//                            $scope.userRelation = data;
                        });
            };
            $scope.approveRequest = function(friendId, reuestFunction) {
                friendService.approveRequest(friendId, $scope.url).
                        success(function(data, status, headers, config) {
                            $scope.userRelation = data;
                            angular.forEach($scope.prndingFriends, function(value, key) {
                                if (value.userId == friendId) {
                                    value.relationTypeId = data.status_type;
                                }
                            }, $scope.prndingFriends);
                            reuestFunction();
                        });
            };
            $scope.deleteRequest = function(friendId) {
                friendService.deleteRequest(friendId, $scope.url).
                        success(function(data, status, headers, config) {
                            $scope.userRelation = data;
                        });
            };
            //needed to change
            $scope.imageCropStep = 1;
            $scope.fileChanged = function(e) {
                var files = e.target.files;

                var fileReader = new FileReader();
                fileReader.readAsDataURL(files[0]);

                fileReader.onload = function(e) {
                    $scope.imgSrc = this.result;
                    $scope.$apply();
                };

            };
            $scope.clear = function() {
                $scope.imageCropStep = 1;
                delete $scope.imgSrc;
                delete $scope.result;
                delete $scope.resultBlob;
            };

        });


