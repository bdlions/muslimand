angular.module('services.BasicProfile', []).
        factory('basicProfileService', ["$http", function ($http) {
                var basicProfileService = {};
                basicProfileService.getOverviews = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_overview',
                        data: {
                            userId: userId,
                        },
                    });
                };
                basicProfileService.getWorksEducation = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_works_education',
                        data: {
                            userId: userId,
                        },
                    });
                };
                return basicProfileService;
            }]);