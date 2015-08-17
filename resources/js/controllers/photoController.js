angular.module('controllers.Photo', ['services.Photo']).
        controller('photoController', function ($scope, photoService) {
            $scope.categories = [];
            $scope.albums = [];
            $scope.albumInfo = {};
            $scope.photoInfo = {};

            $scope.setPhotoCategories = function (t) {
                $scope.categories = JSON.parse(t);
                console.log($scope.categories);
            };
            $scope.setAlbums = function (albumList) {
                $scope.albums = JSON.parse(albumList);
                console.log($scope.albums);
            };

            $scope.createAlbum = function () {
                photoService.createAlbum($scope.albumInfo).
                        success(function (data, status, headers, config) {
                            $scope.albums.push(data.album_lsit);
                            $('#modal_create_album_box').modal('hide');
                            alert(data.message);
                        });
            };
            $scope.addPhoto = function () {
                console.log($scope.photoInfo);
                photoService.addPhoto($scope.photoInfo).
                        success(function (data, status, headers, config) {
                            alert(data.message);
                        });
            };

//            $scope.testController = function () {
//                console.log("test Controler");
//            };
        });
