angular.module('controllers.BasicProfile', ['services.BasicProfile']).
        controller('basicProfileController', function ($scope, basicProfileService) {
//        $scope.basicProfileOverview = [];
            $scope.test = {};
            $scope.testArray = {};
            $scope.test1 = [];
            $scope.login = [];
            $scope.workPlace = {};
            $scope.university = {};
            $scope.city = {};
            $scope.mobilePhone = {};

            $scope.submitTestIddnfo = function () {
                console.log($scope.testArray);
                basicProfileService.addTestInfo($scope.testArray).
                        success(function (data, status, headers, config) {
//                        
//                        $scope.test1.push(data);
                            console.log(data);
                        });
            };
//            $scope.setOverviews = function (t) {
//                var result = JSON.parse(t);
//                $scope.workPlace = result.workPlace;
//                $scope.university = result.university;
//                $scope.city = result.city;
//                console.log($scope.city);
//            };

            $scope.overviewClick = function () {
                basicProfileService.getOverviews().
                        success(function (data, status, headers, config) {
                            $scope.workPlace = data.workPlace;
                            $scope.university = data.university;
                            $scope.city = data.city;
//                            return $scope;
//                            console.log(data);
                        });
            };

            $scope.angularTest = function () {
                basicProfileService.setTest().
                        success(function (data, status, headers, config) {
                            $scope.test = data;
                            $scope.test1 = data.lastName;
                            console.log(data.lastName);
                        });
            };

            $scope.addWelcomeTest = function () {
                basicProfileService.addWelcomeTest($scope.login).
                        success(function (data, status, headers, config) {
                            console.log(data);

                        });
            }
        });
