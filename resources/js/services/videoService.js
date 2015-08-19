angular.module('services.Video', []).
        factory('videoService', function ($http) {
            var videoService = {};
            videoService.addVideo = function (videoInfo) {
                return $http({
                    method: 'post',
                    url: '../videos/video_add',
                    data: {
                        url: videoInfo.url,
                        categoryId: videoInfo.categoryId,
                    },
                });
            };


            return videoService;
        });