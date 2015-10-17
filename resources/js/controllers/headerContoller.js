angular.module('controllers.Header', ['services.Header']).
        controller('headerController', function ($scope, headerService) {
            $scope.constants = {};
            $scope.setConstants = function (t) {
                $scope.constants = JSON.parse(t);
                $scope.url = $scope.constants.base_url;
            };

            $scope.getPendingRequest = function (requestFunction) {
                headerService.getPendingRequest($scope.url).
                        success(function (data, status, headers, config) {
                            $scope.prndingFriends = data.friend_list;
                            requestFunction();
                        });
            };

        });
