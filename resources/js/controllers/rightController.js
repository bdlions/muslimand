angular.module('controllers.Right', ['services.Right']).
        controller('rightController', function ($scope, rightService) {
            $scope.chatUserList = [];

            $scope.getChatUserList = function (chatUserList) {
                $scope.chatUserList = chatUserList;
                console.log($scope.chatUserList);
            };

        });
