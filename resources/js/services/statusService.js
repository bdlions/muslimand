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
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };
            statusService.updateStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: '../status/update_status',
                    data: {
                        description: statusInfo.description,
                        statusId: 1
//                        userId : userId,
//                        refId : refId
                    },
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };

            statusService.addLike = function () {
                return $http({
                    method: 'post',
                    url: '../status/add_status_like',
                    data: {
                        statusId: 1,
                        refUserId: "100105",
//                        refId: refId
                    },
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };
            statusService.addComment = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: '../status/add_status_comment',
                    data: {
                        statusId: 1,
                        refUserId: "100105",
                        description: statusInfo.commentDes
                    },
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };
            statusService.deleteStatus = function () {
                return $http({
                    method: 'post',
                    url: '../status/delete_status',
                    data: {
                        statusId: 1
                    },
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            };

            return statusService;
        });