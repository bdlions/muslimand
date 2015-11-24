angular.module('services.Status', []).
        factory('statusService', function ($http, $location) {
            var $app_name = "/muslimand";
            var statusService = {};
           

            statusService.addStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status',
                    data: {
                        statusInfo: statusInfo

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

            statusService.addLike = function (userId, statusId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status_like',
                    data: {
                        userId: userId,
                        statusId: statusId
                    }
                });
            };
            statusService.addStatusCommentLike = function (statusId, commentId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/add_status_comment_like',
                    data: {
                        statusId: statusId,
                        commentId: commentId
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
            statusService.shareStatus = function (oldStatusInfo, statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/status/share_status',
                    data: {
                        oldStatusInfo: oldStatusInfo,
                        statusInfo: statusInfo
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
            return statusService;
        });