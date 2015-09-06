angular.module('services.Status', []).
        factory('statusService', function ($http) {
            var statusService = {};


            statusService.addStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: '../status/add_status',
                    data: {
                        description: statusInfo.description
//                        statusType: statusTypeId,
//                        userId : userId,
//                        refId : refId
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
//                        userId : userId,
//                        refId : refId
                    },
                });
            };

            statusService.addLike = function (statusId) {
                return $http({
                    method: 'post',
                    url: '../status/add_status_like',
                    data: {
                        statusId: statusId,
//                        refUserId: "100105",
//                        refId: refId
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

            return statusService;
        });