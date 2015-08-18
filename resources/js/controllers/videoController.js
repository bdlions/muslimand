angular.module('controllers.Video', ['services.Video']).
        controller('videoController', function ($scope, videoService) {
            $scope.categories = [];
            $scope.videoInfo = {};

            $scope.setVideoCategories = function (t) {
                $scope.categories = JSON.parse(t);
                console.log($scope.categories);
            };
            $scope.addVideo = function () {
                videoService.addVideo($scope.videoInfo).
                        success(function (data, status, headers, config) {
                            alert(data.message);
                        });
            };

//            $scope.testController = function () {
//                console.log("test Controler");
//            };
        });
