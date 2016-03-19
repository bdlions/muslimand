angular.module('services.Page', []).
        factory('pageService', function ($http, $location) {
            var pageService = {};
            var $app_name = "/muslimand";
              pageService.addPage = function (pageInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_page',
                    data: {
                        pageInfo: pageInfo
                    }
                });
            };
            
            return pageService;
        });