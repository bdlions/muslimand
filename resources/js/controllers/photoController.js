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
            };
            $scope.setTimeLinePhotoList = function (photoList) {
                $scope.timeLinePhotoList = JSON.parse(photoList);
                console.log($scope.timeLinePhotoList);
            };
            $scope.getAlbumList = function (requestFunction) {
                photoService.getAlbumList().
                        success(function (data, status, headers, config) {
                            console.log(data);
                            $scope.userAlbums = data.album_list;
                            console.log($scope.userAlbums);
                            requestFunction();
                        });
            };
            $scope.getUserAlbumList = function (profileId) {
                photoService.getUserAlbumList(profileId).
                        success(function (data, status, headers, config) {
                            $scope.albumList = data.album_list;
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
            $scope.addAlbumLike = function (albumId, requestFunction) {
                photoService.addAlbumLike(albumId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.albumDetailList, function (value, key) {
                                if (value.albumId == albumId) {
                                    if (typeof value.likeStatus === "undefined") {
                                        value.likeStatus = "1";
                                    }
                                }
                            }, $scope.albumDetailList);
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
                            $scope.albumCommentInfo.comment = "";
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
                            console.log(data);
                            angular.forEach($scope.albumPhotoList, function (value, key) {
                                if (value.photoId == photoId) {
                                    (value.likeStatus = "1");
                                    if (typeof value.likeCounter == "undefined") {
                                        (value.likeCounter = 1);
                                    } else {
                                        (value.likeCounter = value.likeCounter + 1);
                                    }
                                }
                            }, $scope.photoInfoList);
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
            $scope.addPhotoComment = function (photoInfo) {
                var photoId = $scope.photoCommentInfo.photoId = photoInfo.photoId;
                $scope.photoCommentInfo.referenceId = photoInfo.referenceId;
                $scope.photoCommentInfo.userInfo = photoInfo.userInfo;
                photoService.addPhotoComment($scope.photoCommentInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.albumPhotoList, function (value, key) {
                                if (value.photoId === photoId) {
                                    if (typeof value.comment == "undefined") {
                                        value.comment = new Array();
                                    }
                                    value.comment.push(data.comment);
                                }
                            }, $scope.albumPhotoList);
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
            $scope.photos = [
                {"image": "http://localhost/muslimand/resources/images/profile_picture/150x150/7OdqKzxmuakkpRq.jpg", "name": "Cat on Fence"},
                {"image": "http://localhost/muslimand/resources/images/cover_picture/9Ixsx2qFkzWEliG.jpg", "name": "Cat in Sun"},
                {"image": "http://localhost/muslimand/resources/images/photos/albums/user_album/12743937_2380336878651567_1331589904391873430_n1.jpg", "name": "Blue Eyed Cat"},
                {"image": "http://localhost/muslimand/resources/images/photos/albums/user_album/12705447_932543446831073_8553385767911857321_n.jpg", "name": "Blue Eyed Cat"},
                {"image": "http://localhost/muslimand/resources/images/profile_picture/150x150/t87sqMzqcM86ee2.jpg", "name": "Patchy Cat"},
            ];
            $scope.openTimeLineModal = function (photoInfo) {
                var indx = $scope.timeLinePhotoList.indexOf(photoInfo);
                photoInfo.active = true;
                $scope.albumPhotoList[indx] = photoInfo;
                $scope.modalInstance = $modal.open({
                    animation: true,
                    templateUrl: 'template/timeline_pic-modal',
                    scope: $scope,
                });
            };
            $scope.open = function (photoInfo) {
                var indx = $scope.albumPhotoList.indexOf(photoInfo);
                var photoId = photoInfo.photoId;
                photoService.getPhotoInfo(photoId).
                        success(function (data, status, headers, config) {
                            if (typeof data.photo_info != "undefined") {
                                var photo = data.photo_info;
                                photo.createdOn = utilsTimezone.convertTime($scope.userCurrentTimeStamp, photo.createdOn);
                                photo.active = true;
                                console.log(photo);
                                $scope.albumPhotoList[indx] = photo;
                                $scope.modalInstance = $modal.open({
                                    animation: true,
                                    templateUrl: 'template/pic-modal.html',
                                    scope: $scope
                                });
                            }
                        });
            };
            $scope.ok = function () {
                $scope.modalInstance.close();
            };
            $scope.next = function () {
                alert("here");
                var newIndex = (self.getCurrentIndex() + 1) % slides.length;
                console.log("here");
            }

        });
