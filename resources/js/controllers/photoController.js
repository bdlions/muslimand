angular.module('controllers.Photo', ['services.Photo']).
        controller('photoController', function ($scope, photoService) {
            $scope.categoryList = [];
            $scope.albumList = [];
            $scope.albumPhotoList = [];
            $scope.photoInfoList = [];
            $scope.userAlbums = [];
            $scope.likeList = [];
            $scope.photolikeList = [];
            $scope.albumInfo = {};
            $scope.albumDetailList = [];
            $scope.photoInfo = {};
            $scope.albumCommentInfo = {};
            $scope.photoCommentInfo = {};
            $scope.albumSharedInfo = {};

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
                $scope.albumDetailList.push(JSON.parse(albumInfo));
            };
            $scope.setAlbumPhotoList = function (photoList) {
                $scope.albumPhotoList = JSON.parse(photoList);
            };
            $scope.setPhotoInfo = function (photoInfo) {
                $scope.photoInfoList.push(JSON.parse(photoInfo));
//                console.log($scope.photoInfoList);
            };

            $scope.getAlbumLikeList = function (albumId, requestFunction) {
                photoService.getAlbumLikeList(albumId).
                        success(function (data, status, headers, config) {
                            $scope.likeList = data.like_list;
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
                photoService.addAlbumLike(albumId).
                        success(function (data, status, headers, config) {
                            $scope.likeList.push(data.like_info);
                            requestFunction();
                        });
            };


            $scope.deleteAlbumLike = function (albumId, likeId) {


            };

            $scope.addAlbumComment = function (albumId) {
                $scope.albumCommentInfo.albumId = albumId;
                photoService.addAlbumComment($scope.albumCommentInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.albumDetailList, function (value, key) {
                                if (value.albumId == albumId) {
                                    if (typeof value.comment === "undefined") {
                                        value.comment = new Array();

                                    }
                                    value.comment.push(data.comment);
                                }
                            }, $scope.albumDetailList);
                            $scope.albumCommentInfo = "";
                        });
                return false;
            };
            $scope.getAlbumComments = function (albumId, requestFunction) {
                photoService.getAlbumComments(albumId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.albumDetailList, function (value, key) {
                                if (value.albumId == albumId ? value.comment = data.comment_list : '') {
                                }
                            }, $scope.albumDetailList);
                            $scope.albumCommentInfo.comment = "";
                            requestFunction();
                        });
                return false;

            };
            $scope.editAlbumComment = function (commentInfo) {


            };

            $scope.deleteAlbumComment = function (albumId, commentId) {


            };

            $scope.AddAlbumShare = function (albumId, requestFunction) {
                $scope.albumSharedInfo.albumId = albumId;
                photoService.AddAlbumShare($scope.albumSharedInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };


            //.............................photo module...............
            $scope.getPhotos = function (userId) {

            };

            $scope.getPhoto = function (userId) {

            };

            $scope.addPhotos = function (imageList, requestFunction) {
                $scope.photoInfo.imageList = [];
                $scope.photoInfo.imageList = imageList;
                photoService.addPhotos($scope.photoInfo).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            requestFunction();
                        });
            };

            $scope.addPhotoLike = function (photoInfo) {


            };
            $scope.addPhotoLike = function (photoId, requestFunction) {
                photoService.addPhotoLike(photoId).
                        success(function (data, status, headers, config) {
                            $scope.photolikeList.push(data.like_info);
                            requestFunction();
                        });
                return false;
            };
            $scope.getPhotoLikeList = function (photoId, requestFunction) {
                photoService.getPhotoLikeList(photoId).
                        success(function (data, status, headers, config) {
                            $scope.likeList = data.like_list;
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
                            angular.forEach($scope.photoInfoList, function (value, key) {
                                if (value.photoId === photoId) {
                                    if (typeof value.comment == "undefined") {
                                        value.comment = new Array();
                                    }
                                    value.comment.push(data.comment);
                                }
                            }, $scope.photoInfoList);
                            $scope.photoCommentInfo.comment = "";
                        });
                return false;
            };


            $scope.getPhotoComments = function (photoId, requestFunction) {
                photoService.getPhotoComments(photoId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.photoInfoList, function (value, key) {
                                if (value.photoId == photoId ? value.comment = data.comment_list : '') {
                                }
                            }, $scope.photoInfoList);
                            $scope.photoCommentInfo.comment = "";
                            requestFunction();
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
