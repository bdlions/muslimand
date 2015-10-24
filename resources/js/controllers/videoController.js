angular.module('controllers.Video', ['services.Video']).
        controller('videoController', function ($scope, videoService) {
            $scope.categories = [];
            $scope.videoList = [];
            $scope.videoInfo = {};
            $scope.videoDetail = {};
            $scope.videoCommentInfo = {};
            $scope.likeList = [];

            $scope.setVideoCategories = function (categoryList) {
                $scope.categories = JSON.parse(categoryList);
//                console.log($scope.categories);
            };
            $scope.setVideos = function (videoList) {
                $scope.videoList = JSON.parse(videoList);
//                console.log($scope.videoList);
            };
            $scope.setVideoInfo = function (vedioInfo) {
                $scope.videoDetail = JSON.parse(vedioInfo);
                console.log($scope.videoDetail);
            };
            $scope.addVideo = function (requestFunction) {
                videoService.addVideo($scope.videoInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };



            $scope.editVideo = function (videoId, videoInfo) {


            };

            $scope.deleteVideo = function (videoId) {


            };



            $scope.deleteVideoLike = function (videoId, likeId) {


            };

            $scope.addVideoLike = function (videoId, requestFunction) {
                videoService.addVideoLike(videoId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.vudeoDetail, function (value, key) {
                                if (value.videoId == videoId) {
                                    if (typeof value.likeStatus === "undefined") {
                                        value.likeStatus = "1";
                                    }
                                }
                            }, $scope.vudeoDetail);
                            $scope.likeList.push(data.like_info);
                            requestFunction();
                        });
            };


            $scope.getVideoLikeList = function (videoId, requestFunction) {
                videoService.getVideoLikeList(videoId).
                        success(function (data, status, headers, config) {
                            $scope.likeList = data.like_list;
                            requestFunction();
                        });
                return false;
            };

            $scope.addVideoComment = function (videoId) {
                $scope.videoCommentInfo.videoId = videoId;
                videoService.addVideoComment($scope.videoCommentInfo).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.vudeoDetail, function (value, key) {
                                if (value.videoId == videoId) {
                                    if (typeof value.comment === "undefined") {
                                        value.comment = new Array();

                                    }
                                    value.comment.push(data.comment);
                                }
                            }, $scope.vudeoDetail);
                            $scope.videoCommentInfo.comment = "";
                        });
                return false;
            };
            $scope.getVideoComments = function (videoId, requestFunction) {
                videoService.getVideoComments(videoId).
                        success(function (data, status, headers, config) {
                            angular.forEach($scope.vudeoDetail, function (value, key) {
                                if (value.videoId == videoId ? value.comment = data.comment_list : '') {
                                }
                            }, $scope.vudeoDetail);
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
                videoService.AddVideoShare($scope.videoSharedInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };
//            $scope.testController = function () {
//                console.log("test Controler");
//            };
        });
