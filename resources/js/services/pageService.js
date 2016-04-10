angular.module('services.Page', []).
        factory('pageService', function ($http, $location) {
            var pageService = {};
            var $app_name = "/muslimand";
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

            pageService.createAlbum = function (albumInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/create_album',
                    data: {
                        albumInfo: albumInfo
                    }
                });
            };

            pageService.addPhotos = function (photoInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/pages_photo_add',
                    data: {
                        photoInfo: photoInfo
                    }
                });
            };

            pageService.getPageAlbumList = function (pageId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_page_short_album_list',
                    data: {
                        pageId: pageId
                    }
                });
            };
            pageService.getPageAlbums = function (pageId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_page_album_list',
                    data: {
                        pageId: pageId
                    }
                });
            };

            pageService.getPageAlbum = function (albumId, pageId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_album',
                    data: {
                        albumId: albumId,
                        pageId: pageId
                    }
                });
            };

            pageService.getSliderAlbum = function (albumId, mappingId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_slider_album',
                    data: {
                        albumId: albumId,
                        mappingId: mappingId
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
            pageService.addInvitation = function (pageInfo, userInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_invitation',
                    data: {
                        pageInfo: pageInfo,
                        userInfo: userInfo
                    }
                });
            };
            pageService.joinPage = function (pageInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/join_page',
                    data: {
                        pageInfo: pageInfo,
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