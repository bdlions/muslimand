angular.module('controllers.Video', ['services.Video']).
        controller('videoController', function ($scope, videoService) {
            $scope.categories = [];
            $scope.videoList = [];
            $scope.videoInfo = {};
            $scope.videoDetail = {};
            $scope.videoCommentInfo = {};
            $scope.sharedInfo = {};
            $scope.videoShareInfo = {};
            $scope.likeList = [];

            $scope.setVideoCategories = function (categoryList) {
                $scope.categories = JSON.parse(categoryList);
            };
            $scope.setVideos = function (videoList) {
                $scope.videoList = JSON.parse(videoList);
            };
            $scope.setVideoInfo = function (vedioInfo) {
                $scope.videoDetail = JSON.parse(vedioInfo);
            };
            $scope.addVideo = function (requestFunction) {
                videoService.addVideo($scope.videoInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };



            $scope.editVideo = function (videoId, videoInfo) {


            };

            $scope.deleteVideo = function (videoId, requestFunction) {
                videoService.deleteVideo(videoId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
                return false;
            };



//            $scope.deleteVideoLike = function (videoId, likeId) {
//
//
//            };

            $scope.addVideoLike = function (videoId, requestFunction) {
                videoService.addVideoLike(videoId).
                        success(function (data, status, headers, config) {
                            if ($scope.videoDetail.videoId === videoId) {
                                if (typeof $scope.videoDetail.likeStatus === "undefined") {
                                    $scope.videoDetail.likeStatus = "1";
                                }
                            }
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
                            if ($scope.videoDetail.videoId == videoId) {
                                if (typeof $scope.videoDetail.comment === "undefined") {
                                    $scope.videoDetail.comment = new Array();
                                }
                                $scope.videoDetail.comment.push(data.comment);
                            }
                            $scope.videoCommentInfo.comment = "";
                        });
                return false;
            };
            $scope.getVideoComments = function (videoId, requestFunction) {
                videoService.getVideoComments(videoId).
                        success(function (data, status, headers, config) {
                            if ($scope.videoDetail.videoId == videoId) {
                                $scope.videoDetail.comment = data.comment_list;
                                requestFunction();
                            }
                        });
                return false;
            };
            $scope.editVideoComment = function (commentInfo) {


            };

            $scope.deleteVideoComment = function (videoId, commentId) {


            };

            $scope.setSharedInfo = function (sharedInfo, requestFunction) {
                $scope.sharedInfo = sharedInfo;
                requestFunction();
            };

            $scope.shareVideo = function (requestFunction) {
                videoService.shareVideo($scope.sharedInfo, $scope.videoShareInfo).
                        success(function (data, status, headers, config) {
                            $scope.statuses.push(data.status_info);
                            $scope.videoShareInfo.description = "";
                            requestFunction();
                        });
            };

        });
