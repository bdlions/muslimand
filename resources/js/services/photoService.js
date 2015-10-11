angular.module('services.Photo', []).
        factory('photoService', function ($http) {
            var photoService = {};



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

            photoService.addAlbumLike = function (albumId) {
                return $http({
                    method: 'post',
                    url: '../../photos/add_album_like',
                    data: {
                        albumId: albumId
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
            photoService.getAlbumLikeList = function (albumId) {
                return $http({
                    method: 'post',
                    url: '../../photos/get_album_like_list',
                    data: {
                        albumId: albumId,
                    }
                });
            };

            photoService.addAlbumComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../../photos/add_album_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            photoService.getAlbumComments = function (albumId) {
                return $http({
                    method: 'post',
                    url: '../../photos/get_album_comments',
                    data: {
                        albumId: albumId
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
            photoService.cropPicture = function (imageInfo) {
                console.log(imageInfo);
                return $http({
                    method: 'post',
                    url: '../../photos/crop_picture',
                    data: {
                        x:imageInfo.x,
                        y:imageInfo.y,
                        w:imageInfo.w,
                        h:imageInfo.h,
                        src:imageInfo.src,
                        src_w:imageInfo.src_w,
                        src_h:imageInfo.src_h,
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
            photoService.deletePhoto = function (albumId,photoId) {
                return $http({
                    method: 'post',
                    url: '../../photos/delete_photo',
                    data: {
                        albumId: albumId,
                        photoId: photoId
                    }
                });
            };

            photoService.addPhotoLike = function (photoId) {
                return $http({
                    method: 'post',
                    url: '../../photos/add_photo_like',
                    data: {
                        photoId: photoId
                    }
                });
            };
            photoService.getPhotoLikeList = function (photoId) {
                return $http({
                    method: 'post',
                    url: '../../photos/get_photo_like_list',
                    data: {
                        photoId: photoId,
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
                    url: '../../photos/add_photo_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            photoService.getPhotoComments = function (photoId) {
                return $http({
                    method: 'post',
                    url: '../../photos/get_photo_comments',
                    data: {
                        photoId: photoId
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