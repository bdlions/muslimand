angular.module('controllers.Search', ['services.Search']).
        controller('searchController', function ($scope, searchService) {
             $scope.searchValue ;
         
            $scope.getUsers = function () {
                searchService.getUsers($scope.searchValue).
                        success(function (data, status, headers, config) {
                        });
            };
         
         
        });
