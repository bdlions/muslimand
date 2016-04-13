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
//.....................
            pageService.addAlbumLike = function (albumId, referenceId, mappingId, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_album_like',
                    data: {
                        albumId: albumId,
                        referenceId: referenceId,
                        mappingId: mappingId,
                        genderId: genderId
                    }
                });
            };

            pageService.addAlbumComment = function (commentInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_album_comment',
                    data: {
                        commentInfo: commentInfo
                    }
                });
            };
            pageService.getAlbumComments = function (albumId, mappingId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_album_comments',
                    data: {
                        albumId: albumId,
                        mappingId: mappingId
                    }
                });
            };
            pageService.getAlbumLikeList = function (albumId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_album_like_list',
                    data: {
                        albumId: albumId,
                    }
                });
            };
            pageService.addPhotoLike = function (albumId,photoId, referenceId, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_photo_like',
                    data: {
                        albumId: albumId,
                        photoId: photoId,
                        referenceId: referenceId,
                        genderId: genderId
                    }
                });
            };
            pageService.addPhotoComment = function (commentInfo, genderId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/add_photo_comment',
                    data: {
                        commentInfo: commentInfo,
                        genderId: genderId
                    }
                });
            };
            pageService.getPhotoComments = function (photoId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/pages/get_photo_comments',
                    data: {
                        photoId: photoId
                    }
                });
            };
            //........................
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