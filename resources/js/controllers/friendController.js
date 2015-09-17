angular.module('controllers.Friend', ['services.Friend']).
        controller('friendController', function ($scope, friendService) {

            $scope.testInfo = {};
//            $scope.testInfo.id = "10";
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
            

            $scope.testfunction = function (data, x) {
                console.log("Before callback");
                x(10);
//                alert("Call-testfunction: " + data);
                
            };
        });


