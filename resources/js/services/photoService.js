angular.module('services.Photo', []).
        factory('photoService', function ($http, $location) {
            var photoService = {};
            var $app_name = "/muslimand";



            photoService.getUserAlbumList = function (profileId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_user_short_album_list',
                    data: {
                        profileId: profileId
                    }
                });
            };
            photoService.getUserAlbum = function (albumId, profileId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_album',
                    data: {
                        albumId: albumId,
                        profileId: profileId
                    }
                });
            };
            photoService.getAlbum = function (albumId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_album',
                    data: {
                        albumId: albumId
                    }
                });
            };
            photoService.getSliderAlbum = function (albumId, mappingId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_slider_album',
                    data: {
                        albumId: albumId,
                        mappingId: mappingId
                    }
                });
            };

            photoService.createAlbum = function (albumInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/create_album',
                    data: {
                        albumInfo: albumInfo
                    }
                });
            };

            photoService.editAlbum = function (albumInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/edit_album',
                    data: {
                        albumInfo: albumInfo
                    }
                });
            };
            photoService.deleteAlbum = function (albumId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_album',
                    data: {
                        albumId: albumId
                    }
                });
            };

            photoService.addAlbumLike = function (albumId, referenceId, mappingId, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_album_like',
                    data: {
                        albumId: albumId,
                        referenceId: referenceId,
                        mappingId: mappingId,
                        genderId: genderId
                    }
                });
            };
            photoService.deleteAlbumLike = function (albumId, likeId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_album_like',
                    data: {
                        albumId: albumId,
                        likeId: likeId
                    }
                });
            };
            photoService.getAlbumLikeList = function (albumId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_album_like_list',
                    data: {
                        albumId: albumId,
                    }
                });
            };

            photoService.addAlbumComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_album_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            photoService.getAlbumComments = function (albumId, mappingId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_album_comments',
                    data: {
                        albumId: albumId,
                        mappingId: mappingId
                    }
                });
            };
            photoService.editAlbumComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/edit_album_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            photoService.deleteAlbumComment = function (albumId, commentId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_album_comment',
                    data: {
                        albumId: albumId,
                        commentId: commentId
                    }
                });
            };
            photoService.AddAlbumShare = function (shareInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_album_comment',
                    data: {
                        shareInfo: shareInfo
                    }
                });
            };
            //................................photo module............................

            photoService.getPhotos = function (albumId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_photos',
                    data: {
                        albumId: albumId
                    }
                });
            };
            photoService.getPhoto = function (albumId, photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_photo',
                    data: {
                        albumId: albumId,
                        photoId: photoId
                    }
                });
            };
            photoService.getPhotoInfo = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_photo_info',
                    data: {
                        photoId: photoId
                    }
                });
            };
            photoService.cropPicture = function (imageInfo) {
                console.log(imageInfo);
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/crop_add_profile_picture',
                    data: {
                        x: imageInfo.x,
                        y: imageInfo.y,
                        w: imageInfo.w,
                        h: imageInfo.h,
                        src: imageInfo.src,
                        src_w: imageInfo.src_w,
                        src_h: imageInfo.src_h,
                    }
                });
            };

            photoService.addPhotos = function (photoInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_photos',
                    data: {
                        photoInfo: photoInfo
                    }
                });
            };

            photoService.editPhoto = function (photoInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/edit_photo',
                    data: {
                        photoInfo: photoInfo
                    }
                });
            };
            photoService.deletePhoto = function (albumId, photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_photo',
                    data: {
                        albumId: albumId,
                        photoId: photoId
                    }
                });
            };

            photoService.addPhotoLike = function (albumId, photoId, referenceId, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_photo_like',
                    data: {
                        albumId: albumId,
                        photoId: photoId,
                        referenceId: referenceId,
                        genderId: genderId
                    }
                });
            };
            photoService.getPhotoLikeList = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_photo_like_list',
                    data: {
                        photoId: photoId,
                    }
                });
            };

            photoService.deletePhotoLike = function (photoId, likeId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_photo_like',
                    data: {
                        photoId: photoId,
                        likeId: likeId
                    }
                });
            };
            photoService.addPhotoComment = function (commentInfo, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_photo_comment',
                    data: {
                        commentInfo: commentInfo,
                        genderId: genderId
                    }
                });
            };

            photoService.getPhotoComments = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_photo_comments',
                    data: {
                        photoId: photoId
                    }
                });
            };
            photoService.editPhotoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/edit_photo_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            photoService.deletePhotoComment = function (photoId, commentId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/delete_photo_comment',
                    data: {
                        photoId: photoId,
                        commentId: commentId
                    }
                });
            };
            photoService.AddPhotoShare = function (shareInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/share_photo_comment',
                    data: {
                        shareInfo: shareInfo
                    }
                });
            };


            return photoService;
        });