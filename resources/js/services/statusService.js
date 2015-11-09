angular.module('services.Status', []).
        factory('statusService', function ($http) {
            var statusService = {};


            statusService.addStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/add_status',
                    data: {
                        statusInfo: statusInfo

                    },
                });
            };
            //update status............    
            statusService.updateStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: 'http://localhost/muslimand/status/update_status',
                    data: {
                        description: statusInfo.description,
                        statusId: statusInfo.statusId

                    },
                });
            };
            statusService.statusDetails = function (statusId) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/get_status_details',
                    data: {
                        statusId: statusId

                    },
                });
            };

            statusService.addLike = function (userId, statusId) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/add_status_like',
                    data: {
                        userId:userId,
                        statusId: statusId
                    },
                });
            };
            /*
             * comment Add 
             * 
             * **/

            statusService.addComment = function (statusInfo) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/add_status_comment',
                    data: {
                        statusId: statusInfo.statusId,
                        userId: statusInfo.userId,
                        description: statusInfo.commentDes
                    },
                });
            };
            /**
             * Delete status..
             * */
            statusService.deleteStatus = function (statusId) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/delete_status',
                    data: {
                        statusId: statusId
                    },
                });
            };
            /**
             * share status..
             * */
            statusService.shareStatus = function (oldStatusInfo, statusInfo) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/share_status',
                    data: {
                        oldStatusInfo: oldStatusInfo,
                        statusInfo: statusInfo
                    }
                });
            };


            statusService.getStatusLikeList = function (statusId) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/get_status_likes',
                    data: {
                        statusId: statusId
                    },
                });
            };
            statusService.getStatusShareList = function (statusId) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/get_status_shears',
                    data: {
                        statusId: statusId
                    },
                });
            };
            statusService.getStatusComments = function (statusId) {
                return $http({
                    method: 'post',
                    url:  'http://localhost/muslimand/status/get_status_comments',
                    data: {
                        statusId: statusId
                    },
                });
            };
            statusService.getProfileStatus = function (profileId) {
                return $http({
                    method: 'post',
                    url: 'http://localhost/muslimand/status/get_user_profile_status',
                    data: {
                        profileId: profileId
                    },
                });
            };
            return statusService;
        });