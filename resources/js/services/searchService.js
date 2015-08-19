angular.module('services.Search', []).
        factory('searchService', function ($http) {
            var searchService = {};
            
            
               searchService.getUsers = function (searchValue) {
                return $http({
                    method: 'post',
                    url: '../search/get_users',
                    data: {
                        searchValue: searchValue
                    },
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };
            
            
            return searchService;
        });