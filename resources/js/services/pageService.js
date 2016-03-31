angular.module('services.Page', []).
        factory('pageService', function ($http, $location) {
            var pageService = {};
            var $app_name = "/shadhiin";
            pageService.addPage = function (pageInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_page',
                    data: {
                        pageInfo: pageInfo
                    }
                });
            };
            pageService.updatePage = function (pageInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/update_page',
                    data: {
                        pageInfo: pageInfo
                    }
                });
            };
            //...................members.............................................................
            pageService.getInviteFriendList = function (pageId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_invite_friend_list',
                    data: {
                        pageId: pageId
                    }
                });
            };
            pageService.addInvitation = function (pageId, userInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_invitation',
                    data: {
                        pageId: pageId,
                        userInfo: userInfo
                    }
                });
            };
            pageService.joinPage = function (pageId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/join_page',
                    data: {
                        pageId: pageId,
                    }
                });
            };
            pageService.leaveMembership = function (pageId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/leave_membership',
                    data: {
                        pageId: pageId,
                    }
                });
            };

            //................................ststus................................

            pageService.addStatus = function (statusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_status',
                    data: {
                        statusInfo: statusInfo,
                    }
                });
            };
            return pageService;
        });