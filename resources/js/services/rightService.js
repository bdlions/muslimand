angular.module('services.Right', []).
        factory('rightService', function ($http, $location) {
            var rightService = {};
             var $app_name = "/muslimand";
           
             rightService.getRecentActivities = function () {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_recent_activities',
                    data: {
                    }
                });
            };

            return rightService;
        });