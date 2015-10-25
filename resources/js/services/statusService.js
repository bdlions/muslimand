angular.module('services.Status', []).
        factory('statusService', function ($http) {
            var statusService = {};


            statusService.addStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: '../status/add_status',
                    data: {
                        statusInfo: statusInfo

                    },
                });
            };
            //update status............    
            statusService.updateStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: '../status/update_status',
                    data: {
                        description: statusInfo.description,
                        statusId: statusInfo.statusId

                    },
                });
            };

            statusService.addLike = function (statusId) {
                return $http({
                    method: 'post',
                    url: '../status/add_status_like',
                    data: {
                        statusId: statusId,
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
                    url: '../status/add_status_comment',
                    data: {
                        statusId: statusInfo.statusId,
                        refUserId: "100105",
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
                    url: '../status/delete_status',
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
                    url: '../status/share_status',
                    data: {
                        oldStatusInfo: oldStatusInfo,
                        statusInfo: statusInfo
                    }
                });
            };


            statusService.getStatusLikeList = function (statusId) {
                return $http({
                    method: 'post',
                    url: '../status/get_status_likes',
                    data: {
                        statusId: statusId
                    },
                });
            };
            statusService.getStatusShareList = function (statusId) {
                return $http({
                    method: 'post',
                    url: '../status/get_status_shears',
                    data: {
                        statusId: statusId
                    },
                });
            };
            statusService.getStatusComments = function (statusId) {
                return $http({
                    method: 'post',
                    url: '../status/get_status_comments',
                    data: {
                        statusId: statusId
                    },
                });
            };
            return statusService;
        });