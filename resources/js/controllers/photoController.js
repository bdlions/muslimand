angular.module('controllers.Photo', ['services.Photo']).
        controller('photoController', function ($scope, $modal, photoService, utilsTimezone) {
            $scope.categoryList = [];
            $scope.albumList = [];
            $scope.albumPhotoList = [];
            $scope.photoInfoList = [];
            $scope.userAlbums = [];
            $scope.likeList = [];
            $scope.photolikeList = [];
            $scope.albumInfo = {};
            $scope.albumDetail = {};
            $scope.albumDetailList = [];
            $scope.timeLinePhotoList = [];
            $scope.photoInfo = {};
            $scope.albumCommentInfo = {};
            $scope.photoCommentInfo = {};
            $scope.albumSharedInfo = {};
            $scope.userCurrentTimeStamp = new Date().getTime() / 1000;
            $scope.setPhotoCategories = function (t) {
                $scope.categoryList = JSON.parse(t);
            };
            $scope.setAlbums = function (albumList) {
                var tempAlbum = [];
                tempAlbum = JSON.parse(albumList);
                angular.forEach(tempAlbum, function (value, key) {
                    if (value.albumId != "1" && value.albumId != "2" && value.albumId != "3") {
                        $scope.albumList.push(value);
                    }
                });
            };
            $scope.setUserAlbumList = function (userAlbumList) {
                $scope.userAlbums = JSON.parse(userAlbumList);

            };

            $scope.setPhotoInfo = function (photoInfo) {
                $scope.photoInfoList.push(JSON.parse(photoInfo));
            };
            $scope.setTimeLinePhotoList = function (photoList) {
                $scope.timeLinePhotoList = JSON.parse(photoList);
            };

            $scope.getUserAlbum = function (albumId, profileId, requestFunction) {
                photoService.getUserAlbum(albumId, profileId).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            if (typeof data.photo_list != "undefined") {
                                $scope.albumPhotoList = data.photo_list;

                            }
                            if (typeof data.album_info != "undefined") {
                                $scope.albumDetail = data.album_info;
                                if (typeof $scope.albumDetail.commentList != "undefined") {
                                    angular.forEach($scope.albumDetail.commentList, function (comment, key) {
                                        if (typeof comment.createdOn != "undefined") {
                                            comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        }
                                    }, $scope.albumDetail.commentList);
                                }
                            }
                            console.log($scope.albumDetail);
                            requestFunction();
                        });
            };
            $scope.getUserAlbumList = function (profileId) {
                photoService.getUserAlbumList(profileId).
                        success(function (data, status, headers, config) {
                            $scope.albumList = data.album_list;
                        });
            };
            $scope.getAlbumList = function (profileId, requestFunction) {
                photoService.getUserAlbumList(profileId).
                        success(function (data, status, headers, config) {
                            $scope.userAlbums = data.album_list;
                            requestFunction();
                        });
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
            $scope.addAlbumLike = function (albumInfo) {
                var albumId = albumInfo.albumId;
                var referenceId = albumInfo.referenceId;
                var mappingId = albumInfo.userId;
                photoService.addAlbumLike(albumId, referenceId, mappingId).
                        success(function (data, status, headers, config) {
                            $scope.albumDetail.likeStatus = "1";
                            $scope.likeList.push(data.like_info);
                        });
            };
            $scope.deleteAlbumLike = function (albumId, likeId) {


            };
            $scope.addAlbumComment = function (albumInfo) {
                var albumId = albumInfo.albumId;
                $scope.albumCommentInfo.albumId = albumInfo.albumId;
                $scope.albumCommentInfo.mappingId = albumInfo.userId;
                $scope.albumCommentInfo.referenceId = albumInfo.referenceId;
                photoService.addAlbumComment($scope.albumCommentInfo).
                        success(function (data, status, headers, config) {
                            data.comment.createdOn = "1 see ago";
                            if (typeof $scope.albumDetail.commentList == "undefined") {
                                $scope.albumDetail.commentList = new Array();
                            }
                            $scope.albumDetail.commentList.push(data.comment);
                            $scope.albumCommentInfo.comment = "";
                        });
                return false;
            };
            $scope.getAlbumComments = function (albumId, mappingId, requestFunction) {
                photoService.getAlbumComments(albumId, mappingId).
                        success(function (data, status, headers, config) {
                            if (typeof data.comment_list != "undefine") {
                                angular.forEach(data.comment_list, function (comment, key) {
                                    if (typeof comment.createdOn != "undefined") {
                                        comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                    }
                                }, data.comment_list);
                            }
                            $scope.albumDetail.commentList = data.comment_list;
                            console.log($scope.albumDetail);
                            $scope.albumCommentInfo.commentList = "";
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
            $scope.getNextPhoto = function (photoInfo, requestFunction) {
                var photoId = photoInfo.photoId;
                photoService.getNextPhoto(photoId).
                        success(function (data, status, headers, config) {
                            $scope.photoInfoList = data.photoInfo;
                            requestFunction();
                        });
            };
            $scope.cropPicture = function (imageInfo, requestFunction) {
                photoService.cropPicture(imageInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.addPhotos = function (imageList, requestFunction) {
                $scope.photoInfo.imageList = [];
                $scope.photoInfo.imageList = imageList;
                photoService.addPhotos($scope.photoInfo).
                        success(function (data, status, headers, config) {
                            requestFunction(data);
                        });
            };
            $scope.deletePhoto = function (photoInfo, requestFunction) {
                var albumId = photoInfo.albumId;
                var photoId = photoInfo.photoId;
                photoService.deletePhoto(albumId, photoId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.addPhotoLike = function (photoId, referenceId, requestFunction) {
                photoService.addPhotoLike(photoId, referenceId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.sliderImages, function (value, key) {
                                if (value.photoId == photoId) {
                                    (value.likeStatus = "1");
                                    if (typeof value.likeCounter == "undefined") {
                                        (value.likeCounter = 1);
                                    } else {
                                        (value.likeCounter = value.likeCounter + 1);
                                    }
                                }
                            }, $scope.sliderImages);
//                            $scope.photolikeList.push(data.like_info);
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
            $scope.addPhotoComment = function (photoInfo) {
                var photoId = $scope.photoCommentInfo.photoId = photoInfo.photoId;
                $scope.photoCommentInfo.referenceId = photoInfo.referenceId;
                $scope.photoCommentInfo.albumId = photoInfo.albumId;
                $scope.photoCommentInfo.userInfo = photoInfo.userInfo;
                photoService.addPhotoComment($scope.photoCommentInfo).
                        success(function (data, status, headers, config) {
                            data.comment.createdOn = "1 see ago";
                            angular.forEach($scope.sliderImages, function (value, key) {
                                if (value.photoId === photoId) {
                                    if (typeof value.commentList == "undefined") {
                                        value.commentList = new Array();
                                    }
                                    value.commentList.push(data.comment);
                                }
                            }, $scope.sliderImages);
                            $scope.photoCommentInfo.comment = "";
                        });
                return false;
            };
            $scope.getPhotoComments = function (photoId, requestFunction) {
                photoService.getPhotoComments(photoId).
                        success(function (data, status, headers, config) {
                            if (typeof data.comment_list != "undefined") {
                                angular.forEach(data.comment_list, function (comment, key) {
                                    if (typeof comment.createdOn != "undefined") {
                                        comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                    }
                                });
                            }
                            angular.forEach($scope.sliderImages, function (value, key) {
                                if (value.photoId == photoId ? value.commentList = data.comment_list : '') {
                                }
                            }, $scope.sliderImages);
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
            $scope.openPhotoModal = function (photoInfo) {
                var albumId = photoInfo.albumId;
                var mappingId = photoInfo.userId;
                var photoId = photoInfo.photoId;
                photoService.getSliderAlbum(albumId, mappingId).
                        success(function (data, status, headers, config) {
                            if (typeof data.photoList != "undefined") {
                                $scope.sliderImages = data.photoList;
                                angular.forEach($scope.sliderImages, function (photoInfo, key) {
                                    if (photoInfo.photoId == photoId) {
                                        photoInfo.active = true;
                                    }
                                    photoInfo.userInfo = data.userInfo;

                                    if (typeof photoInfo.createdOn != "undefined") {
                                        photoInfo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photoInfo.createdOn);
                                    }
                                    if (typeof photoInfo.commentList != "undefined") {
                                        angular.forEach(photoInfo.commentList, function (comment, key) {
                                            comment.userInfo = JSON.parse(comment.userInfo);
                                            if (typeof comment.createdOn != "undefined") {
                                                comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            }
                                        });
                                    }
//
                                }, $scope.sliderImages);
                                console.log($scope.sliderImages);
                                $scope.modalInstance = $modal.open({
                                    animation: true,
                                    templateUrl: 'template/slider_photo-modal.html',
                                    scope: $scope
                                });
                            }
                        });
            };
//            $scope.open = function (photoInfo) {
//                var indx = $scope.albumPhotoList.indexOf(photoInfo);
//                var photoId = photoInfo.photoId;
//                photoService.getPhotoInfo(photoId).
//                        success(function (data, status, headers, config) {
//                            if (typeof data.photo_info != "undefined") {
//                                var photo = data.photo_info;
//                                photo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photo.createdOn);
//                                photo.active = true;
//                                console.log(photo);
//                                $scope.albumPhotoList[indx] = photo;
//                                $scope.modalInstance = $modal.open({
//                                    animation: true,
//                                    templateUrl: 'template/pic-modal.html',
//                                    scope: $scope
//                                });
//                            }
//                        });
//            };
            $scope.ok = function () {
                $scope.modalInstance.close();
            };
            $scope.next = function () {
                alert("here");
                var newIndex = (self.getCurrentIndex() + 1) % slides.length;
                console.log("here");
            }

        });
