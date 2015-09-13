angular.module('controllers.Friend', ['services.Friend']).
        controller('friendController', function ($scope, friendService) {

            $scope.friends = [];
            $scope.setFriendList = function (t) {
                $scope.friends = JSON.parse(t);
                console.log($scope.friends);
            };

            $scope.addFriend = function () {
                friendService.addFriend().
                        success(function (data, status, headers, config) {
                            $(".addFriendRequestId").hide();
                            $(".FriendRequestSentId").show();

                        });

            };
            
            $scope.testfunction = function (data) {
                alert("Call-testfunction: " + data);
                
            };
        });


