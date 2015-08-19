angular.module('services.Photo', []).
        factory('photoService', function ($http) {
            var photoService = {};


            photoService.createAlbum = function (albumInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/create_album',
                    data: {
                        title: albumInfo.title,
                        description: albumInfo.description,
                    },
//                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };
            photoService.addPhoto = function (photoInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/photos_add',
                    data: {
                        albumId: photoInfo.albumId,
                        categoryId: photoInfo.categoryId,
                    },
                });
            };
            return photoService;
        });