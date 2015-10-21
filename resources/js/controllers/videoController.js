angular.module('controllers.Video', ['services.Video']).
        controller('videoController', function ($scope, videoService) {
            $scope.categories = [];
            $scope.videoInfo = {};

            $scope.setVideoCategories = function (t) {
                $scope.categories = JSON.parse(t);
                console.log($scope.categories);
            };
            $scope.addVideo = function () {
                videoService.addVideo($scope.videoInfo).
                        success(function (data, status, headers, config) {
                            alert(data.message);
                        });
            };



            $scope.editVideo = function (videoId, videoInfo) {


            };

            $scope.deleteVideo = function (videoId) {


            };



            $scope.deleteVideoLike = function (videoId, likeId) {


            };

            $scope.addVideoLike = function (videoId, requestFunction) {
                photoService.addVideoLike(videoId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.videoDetailList, function (value, key) {
                                if (value.videoId == videoId) {
                                    if (typeof value.likeStatus === "undefined") {
                                        value.likeStatus = "1";
                                    }
                                }
                            }, $scope.videoDetailList);
                            $scope.likeList.push(data.like_info);
                            requestFunction();
                        });
            };


            $scope.getVideoLikeList = function (videoId, requestFunction) {
                photoService.getVideoLikeList(videoId).
                        success(function (data, status, headers, config) {
                            $scope.likeList = data.like_list;
                            requestFunction();
                        });
                return false;
            };

            $scope.addVideoComment = function (videoId) {
                $scope.videoCommentInfo.videoId = videoId;
                photoService.addVideoComment($scope.videoCommentInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.videoDetailList, function (value, key) {
                                if (value.videoId == videoId) {
                                    if (typeof value.comment === "undefined") {
                                        value.comment = new Array();

                                    }
                                    value.comment.push(data.comment);
                                }
                            }, $scope.videoDetailList);
                            $scope.videoCommentInfo.comment = "";
                        });
                return false;
            };
            $scope.getVideoComments = function (videoId, requestFunction) {
                photoService.getVideoComments(videoId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.videoDetailList, function (value, key) {
                                if (value.videoId == videoId ? value.comment = data.comment_list : '') {
                                }
                            }, $scope.videoDetailList);
                            $scope.videoCommentInfo.comment = "";
                            requestFunction();
                        });
                return false;

            };
            $scope.editVideoComment = function (commentInfo) {


            };

            $scope.deleteVideoComment = function (videoId, commentId) {


            };

            $scope.AddVideoShare = function (videoId, requestFunction) {
                $scope.videoSharedInfo.videoId = videoId;
                photoService.AddVideoShare($scope.videoSharedInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };
//            $scope.testController = function () {
//                console.log("test Controler");
//            };
        });
