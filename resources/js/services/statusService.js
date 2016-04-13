angular.module('services.Status', []).
        factory('statusService', function ($http, $location) {
           var $app_name = "/muslimand";

            var statusService = {};


            statusService.getSliderPhotoList = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_slider_photos',
                    data: {
                        referenceId: statusId

                    }
                });
            };
            statusService.getSliderPagePhotoList = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_slider_photos',
                    data: {
                        referenceId: statusId

                    }
                });
            };

            statusService.addPhotoLike = function (photoId, referenceId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_photo_like',
                    data: {
                        photoId: photoId,
                        referenceId: referenceId
                    }
                });
            };
            statusService.addPagePhotoLike = function (photoId, referenceId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_photo_like',
                    data: {
                        photoId: photoId,
                        referenceId: referenceId
                    }
                });
            };
            statusService.addMPhotoLike = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_m_photo_like',
                    data: {
                        photoId: photoId
                    }
                });
            };
            statusService.addPageMPhotoLike = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_m_photo_like',
                    data: {
                        photoId: photoId
                    }
                });
            };
            statusService.addStatus = function (statusInfo, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status',
                    data: {
                        statusInfo: statusInfo,
                        genderId: genderId

                    }
                });
            };
            //update status............    
            statusService.updateStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/update_status',
                    data: {
                        description: statusInfo.description,
                        statusId: statusInfo.statusId

                    },
                });
            };
            statusService.statusDetails = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_status_details',
                    data: {
                        statusId: statusId

                    }
                });
            };
            statusService.getStatusList = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_status_list',
                    data: {
                        statusInfo: statusInfo
                    }
                });
            };
            statusService.getPageStatusList = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_page_profile_status',
                    data: {
                        statusInfo: statusInfo
                    }
                });
            };

            statusService.addLike = function (status) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status_like',
                    data: {
                        status: status
                    }
                });
            };
            statusService.addStatusCommentLike = function (statusId, commentId, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status_comment_like',
                    data: {
                        statusId: statusId,
                        commentId: commentId,
                        genderId: genderId
                    }
                });
            };
            /*
             * comment Add 
             * 
             * **/

            statusService.addComment = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status_comment',
                    data: {
                        statusInfo: statusInfo,
                    },
                });
            };

            statusService.addPhotoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/add_photo_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            statusService.addPagePhotoComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_photo_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };

            statusService.getPhotoComments = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/photos/get_photo_comments',
                    data: {
                        photoId: photoId
                    }
                });
            };
            /**
             * Delete status..
             * */
            statusService.deleteStatus = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/delete_status',
                    data: {
                        statusId: statusId
                    }
                });
            };
            /**
             * share status..
             * */
            statusService.shareStatus = function (oldStatusInfo, statusInfo, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/share_status',
                    data: {
                        oldStatusInfo: oldStatusInfo,
                        statusInfo: statusInfo,
                        genderId:genderId
                    }
                });
            };


            statusService.getStatusLikeList = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_status_likes',
                    data: {
                        statusId: statusId
                    }
                });
            };
            statusService.getStatusShareList = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_status_shears',
                    data: {
                        statusId: statusId
                    }
                });
            };
            statusService.getStatusComments = function (statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_status_comments',
                    data: {
                        statusId: statusId
                    }
                });
            };
            statusService.updateStatusComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/update_status_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            statusService.deleteStatusComment = function (statusId, commentId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/delete_status_comment',
                    data: {
                        statusId: statusId,
                        commentId: commentId
                    }
                });
            };
            statusService.getStatusCommentLikeList = function (statusId, commentId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_status_comment_like_list',
                    data: {
                        statusId: statusId,
                        commentId: commentId
                    }
                });
            };
            statusService.getProfileStatus = function (profileId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_user_profile_status',
                    data: {
                        profileId: profileId
                    }
                });
            };
            statusService.getphotoInfo = function () {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/get_photo_info',
                    data: {
                    }
                });
            };
            return statusService;
        });