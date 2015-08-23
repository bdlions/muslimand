angular.module('services.Landing', []).
        factory('landingService', function ($http) {
            var landingService = {};


//            photoService.createAlbum = function (albumInfo) {
//                return $http({
//                    method: 'post',
//                    url: '../photos/create_album',
//                    data: {
//                        title: albumInfo.title,
//                        description: albumInfo.description,
//                    },
//                });
//            };
//            photoService.addPhoto = function (photoInfo) {
//                return $http({
//                    method: 'post',
//                    url: '../photos/photos_add',
//                    data: {
//                        albumId: photoInfo.albumId,
//                        categoryId: photoInfo.categoryId,
//                    },
//                });
//            };
            return landingService;
        });