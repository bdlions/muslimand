angular.module('controllers.Photo', ['services.Photo']).
        controller('photoController', function ($scope, photoService) {
            $scope.categoryList = [];
            $scope.albumList = [];
            $scope.albumPhotoList = [];
            $scope.photoInfoList = [];
            $scope.userAlbums = [];
            $scope.albumlikeList = [];
            $scope.albumInfo = {};
            $scope.albumDetail = {};
            $scope.photoInfo = {};
            $scope.albumCommentInfo = {};
            $scope.photoCommentInfo = {};

            $scope.setPhotoCategories = function (t) {
                $scope.categoryList = JSON.parse(t);
            };
            $scope.setAlbums = function (albumList) {
                $scope.albumList = JSON.parse(albumList);
            };
            $scope.setUserAlbumList = function (userAlbumList) {
                $scope.userAlbums = JSON.parse(userAlbumList);
            };

            $scope.setAlbumInfo = function (albumInfo) {
                $scope.albumDetail = JSON.parse(albumInfo);
                console.log($scope.albumDetail);
            };
            $scope.setAlbumPhotoList = function (photoList) {
                $scope.albumPhotoList = JSON.parse(photoList);
            };
            $scope.setPhotoInfo = function (photoInfo) {
                $scope.photoInfoList.push(JSON.parse(photoInfo));
                console.log($scope.photoInfoList);
            };



            $scope.getAlbumLikeList = function (albumId, requestFunction) {
                photoService.getAlbumLikeList(albumId).
                        success(function (data, status, headers, config) {
                            $scope.albumlikeList.push(data.album_lsit);
                            requestFunction();
                        });
                return false;
            };
            $scope.createAlbum = function (requestFunction) {
                photoService.createAlbum($scope.albumInfo).
                        success(function (data, status, headers, config) {
                            $scope.albumList.push(data.album_lsit);
                            $scope.albumInfo = "";
                            requestFunction();
                        });
                return false;
            };

            $scope.editAlbum = function (albumId, albumInfo) {


            };

            $scope.deleteAlbum = function (albumId) {


            };

            $scope.addAlbumLike = function (albumId, requestFunction) {
                photoService.addAlbumLike($scope.albumId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };


            $scope.deleteAlbumLike = function (albumId, likeId) {


            };

            $scope.addAlbumComment = function (albumId) {
                $scope.albumCommentInfo.albumId = albumId;
                photoService.addAlbumComment($scope.albumCommentInfo).
                        success(function (data, status, headers, config) {
                            if ($scope.albumDetail.albumId === albumId) {
                                $scope.albumDetail.comment.push(data.comment);
                            }
                            $scope.albumCommentInfo = "";
                        });
                return false;
            };

            $scope.editAlbumComment = function (commentInfo) {


            };

            $scope.deleteAlbumComment = function (albumId, commentId) {


            };

            $scope.AddAlbumShare = function (shareInfo) {


            };
            //.............................photo module...............
            $scope.getPhotos = function (userId) {

            };

            $scope.getPhoto = function (userId) {

            };

            $scope.addPhotos = function () {
                console.log($scope.photoInfo);
                photoService.addPhotos($scope.photoInfo).
                        success(function (data, status, headers, config) {
                            alert(data.message);
                        });
                return false;
            };

            $scope.addPhotoLike = function (photoInfo) {


            };
            $scope.addPhotoLike = function (photoId, requestFunction) {
                photoService.addPhotoLike(photoId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
                return false;
            };

            $scope.deletePhotoLike = function (photoInfo) {

            };

            $scope.addPhotoComment = function (photoId) {
                $scope.photoCommentInfo.photoId = photoId;
                photoService.addPhotoComment($scope.photoCommentInfo).
                        success(function (data, status, headers, config) {
                            $scope.photoCommentInfo = "";
                            angular.forEach($scope.photoInfoList, function (value, key) {
                                if (value.photoId == photoId) {
                                    if(value.comment=== "undefined" ? value.comment.push(new Array()) :value.comment.push(data.comment)){
                                        
                                    }
                                }
                            }, $scope.photoInfoList);

                        });
                return false;
            };

            $scope.editPhotoComment = function (photoCommentInfo) {

            };

            $scope.deletePhotoComment = function (albumId, commentId) {

            };

            $scope.searchPhoto = function () {

            };


        });
