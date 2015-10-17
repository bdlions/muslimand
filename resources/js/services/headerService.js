angular.module('services.Header', []).
        factory('headerService', function ($http) {
            var headerService = {};
            headerService.getPendingRequest = function (url) {
                return $http({
                    method: 'post',
                    url: url + 'friend/get_pending_list',
                    data: {
                    }
                });
            };


            return headerService;
        });