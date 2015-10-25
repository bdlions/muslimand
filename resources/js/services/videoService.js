angular.module('services.Video', []).
        factory('videoService', function ($http) {
            var videoService = {};
            videoService.addVideo = function (videoInfo) {
                return $http({
                    method: 'post',
                    url: '../videos/add_video',
                    data: {
                        videoInfo: videoInfo
                    }
                });
            };
            videoService.deleteVideo = function (videoId) {
                return $http({
                    method: 'post',
                    url: '../../videos/delete_video',
                    data: {
                        videoId: videoId
                    }
                });
            };

            videoService.addVideoLike = function (videoId) {
                return $http({
                    method: 'post',
                    url: '../../videos/add_video_like',
                    data: {
                        videoId: videoId
                    }
                });
            };
            videoService.deleteVideoLike = function (videoId, likeId) {
                return $http({
                    method: 'post',
                    url: '../videos/delete_video_like',
                    data: {
                        videoId: videoId,
                        likeId: likeId
                    }
                });
            };
            videoService.getVideoLikeList = function (videoId) {
                return $http({
                    method: 'post',
                    url: '../../videos/get_video_like_list',
                    data: {
                        videoId: videoId,
                    }
                });
            };

            videoService.addVideoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../../videos/add_video_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            videoService.getVideoComments = function (videoId) {
                return $http({
                    method: 'post',
                    url: '../../videos/get_video_comments',
                    data: {
                        videoId: videoId
                    }
                });
            };
            videoService.editVideoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: '../videos/edit_video_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            videoService.deleteVideoComment = function (videoId, commentId) {
                return $http({
                    method: 'post',
                    url: '../videos/delete_video_comment',
                    data: {
                        videoId: videoId,
                        commentId: commentId
                    }
                });
            };
            videoService.shareVideo = function (oldStatusInfo, shareInfo) {
                return $http({
                    method: 'post',
                    url: '../videos/share_video',
                    data: {
                        oldStatusInfo: oldStatusInfo,
                        shareInfo: shareInfo
                    }
                });
            };

            return videoService;
        });