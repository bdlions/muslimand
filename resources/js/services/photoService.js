angular.module('services.Photo', []).
        factory('photoService', function ($http) {
            var photoService = {};



            photoService.getAllAlbums = function (userId) {
                return $http({
                    method: 'post',
                    url: '../photos/get_all_albums',
                    data: {
                        userId: userId
                    }
                });
            };
            photoService.getAlbum = function (albumId) {
                return $http({
                    method: 'post',
                    url: '../photos/get_album',
                    data: {
                        albumId: albumId
                    }
                });
            };

            photoService.createAlbum = function (albumInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/create_album',
                    data: {
                        albumInfo: albumInfo
                    }
                });
            };

            photoService.editAlbum = function (albumInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/edit_album',
                    data: {
                        albumInfo: albumInfo
                    }
                });
            };
            photoService.deleteAlbum = function (albumId) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_album',
                    data: {
                        albumId: albumId
                    }
                });
            };

            photoService.addAlbumLike = function (albumLikeInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/add_album_like',
                    data: {
                        albumLikeInfo: albumLikeInfo
                    }
                });
            };
            photoService.deleteAlbumLike = function (albumId, likeId) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_album_like',
                    data: {
                        albumId: albumId,
                        likeId: likeId
                    }
                });
            };
            photoService.addAlbumComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/add_album_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            photoService.editAlbumComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/edit_album_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            photoService.deleteAlbumComment = function (albumId, commentId) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_album_comment',
                    data: {
                        albumId: albumId,
                        commentId: commentId
                    }
                });
            };
            photoService.AddAlbumShare = function (shareInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_album_comment',
                    data: {
                        shareInfo: shareInfo
                    }
                });
            };
            //................................photo module............................

            photoService.getPhotos = function (albumId) {
                return $http({
                    method: 'post',
                    url: '../photos/get_photos',
                    data: {
                        albumId: albumId
                    }
                });
            };
            photoService.getPhoto = function (albumId, photoId) {
                return $http({
                    method: 'post',
                    url: '../photos/get_photo',
                    data: {
                        albumId: albumId,
                        photoId: photoId
                    }
                });
            };
            
            photoService.addPhotos = function (photoInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/add_photos',
                    data: {
                        photoInfo: photoInfo
                    }
                });
            };
            
            photoService.editPhoto = function (photoInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/edit_photo',
                    data: {
                        photoInfo: photoInfo
                    }
                });
            };
            photoService.deletePhoto = function (photoId) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_photo',
                    data: {
                        photoId: photoId
                    }
                });
            };

            photoService.addPhotoLike = function (photoLikeInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/add_photo_like',
                    data: {
                        photoLikeInfo: photoLikeInfo
                    }
                });
            };
            photoService.deletePhotoLike = function (photoId, likeId) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_photo_like',
                    data: {
                        photoId: photoId,
                        likeId: likeId
                    }
                });
            };
            photoService.addPhotoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/add_photo_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            photoService.editPhotoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/edit_photo_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            photoService.deletePhotoComment = function (photoId, commentId) {
                return $http({
                    method: 'post',
                    url: '../photos/delete_photo_comment',
                    data: {
                        photoId: photoId,
                        commentId: commentId
                    }
                });
            };
            photoService.AddPhotoShare = function (shareInfo) {
                return $http({
                    method: 'post',
                    url: '../photos/share_photo_comment',
                    data: {
                        shareInfo: shareInfo
                    }
                });
            };


            return photoService;
        });