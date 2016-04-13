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
            $scope.userRelation = {};
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

            $scope.setUserRelation = function (userInfo) {
                $scope.userRelation = JSON.parse(userInfo);
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
                            if (typeof data.photo_list != "undefined") {
                                $scope.albumPhotoList = data.photo_list;
                            }
                            if (typeof data.album_info != "undefined") {
                                $scope.albumDetail = data.album_info;
                                if (typeof $scope.albumDetail.userInfo != "undefined" && $scope.albumDetail.userInfo != $scope.albumDetail.userId) {
                                    $scope.albumDetail.userInfo = JSON.parse($scope.albumDetail.userInfo);
                                } else {
                                    var  userInfo ={};
                                    userInfo.firstName = $scope.userRelation.profile_first_name;
                                    userInfo.lastName = $scope.userRelation.profile_last_name;
                                    userInfo.userId = $scope.userRelation.user_id;
                                    userInfo.genderId = $scope.userRelation.gender_id;
                                    $scope.albumDetail.userInfo = userInfo;
                                }
                                if (typeof $scope.albumDetail.commentList != "undefined") {
                                    angular.forEach($scope.albumDetail.commentList, function (comment, key) {
                                        comment.userInfo = JSON.parse(comment.userInfo);
                                        if (typeof comment.createdOn != "undefined") {
                                            if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                                comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                            } else {
                                                comment.createdOn = "1 see sgo";
                                            }
                                        }
                                    }, $scope.albumDetail.commentList);
                                }
                            }
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
                photoService.addAlbumLike(albumId, referenceId, mappingId, $scope.userRelation.your_gender_id).
                        success(function (data, status, headers, config) {
                            $scope.albumDetail.likeStatus = "1";
                            if (typeof $scope.albumDetail.likeCounter != "undefined") {
                                $scope.albumDetail.likeCounter + +1;
                            } else {
                                $scope.albumDetail.likeCounter = 1;
                            }
                            $scope.albumDetail.likeCounter
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
                $scope.albumCommentInfo.genderId = $scope.userRelation.your_gender_id;
                photoService.addAlbumComment($scope.albumCommentInfo).
                        success(function (data, status, headers, config) {
                            data.comment.createdOn = "1 see ago";
                            data.comment.userGenderId = $scope.userRelation.your_gender_id;
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
                                        if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                            comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        } else {
                                            comment.createdOn = "1 see ago";
                                        }
                                    }
                                }, data.comment_list);
                            }
                            $scope.albumDetail.commentList = data.comment_list;
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
            $scope.addPhotoLike = function (albumId, photoId, referenceId, requestFunction) {
                photoService.addPhotoLike(albumId, photoId, referenceId, $scope.userRelation.your_gender_id).
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
                photoService.addPhotoComment($scope.photoCommentInfo, $scope.userRelation.your_gender_id).
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
                                        if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                            comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                        } else {
                                            comment.createdOn = "1 see ago";
                                        }
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

            $scope.openTimelinePotoSlider = function (photoInfo) {
                var userInfo = {};
                userInfo.firstName = $scope.userRelation.profile_first_name;
                userInfo.lastName = $scope.userRelation.profile_last_name;
                userInfo.userId = $scope.userRelation.user_id;
                userInfo.genderId = $scope.userRelation.gender_id;
                $scope.openPhotoModal(photoInfo, userInfo);

            };

            $scope.openPhotoModal = function (photoInfo, userInfo) {
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
                                    photoInfo.userInfo = userInfo;

                                    if (typeof photoInfo.createdOn != "undefined") {
                                        if ($scope.userCurrentTimeStamp > photoInfo.createdOn) {
                                            photoInfo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photoInfo.createdOn);
                                        } else {
                                            photoInfo.createdOn = "1 see ago";
                                        }
                                    }
                                    if (typeof photoInfo.commentList != "undefined") {
                                        angular.forEach(photoInfo.commentList, function (comment, key) {
                                            comment.userInfo = JSON.parse(comment.userInfo);
                                            if (typeof comment.createdOn != "undefined") {
                                                if ($scope.userCurrentTimeStamp > comment.createdOn) {
                                                    comment.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, comment.createdOn);
                                                } else {
                                                    comment.createdOn = "1 see ago";
                                                }
                                            }
                                        });
                                    }
//
                                }, $scope.sliderImages);
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

        });
