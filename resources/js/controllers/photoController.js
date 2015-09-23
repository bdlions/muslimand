angular.module('controllers.Photo', ['services.Photo']).
        controller('photoController', function ($scope, photoService) {
            $scope.categoryList = [];
            $scope.albumList = [];
            $scope.userAlbums = [];
            $scope.albumInfo = {};
            $scope.photoInfo = {};

            $scope.setPhotoCategories = function (t) {
                $scope.categoryList = JSON.parse(t);
            };
            $scope.setAlbums = function (albumList) {
                $scope.albumList = JSON.parse(albumList);
            };
            $scope.setUserAlbumList = function (userAlbumList) {
                $scope.userAlbums = JSON.parse(userAlbumList);
            };

            $scope.getAlbum = function (userId) {

            };
//
//            $scope.getLatest = function (userId) {
//
//            };


            $scope.createAlbum = function (requestFunction) {
                photoService.createAlbum($scope.albumInfo).
                        success(function (data, status, headers, config) {
                            $scope.albumList.push(data.album_lsit);
                            $scope.albumInfo = "";
                            requestFunction();
                        });
            };

            $scope.editAlbum = function (albumId, albumInfo) {


            };

            $scope.deleteAlbum = function (albumId) {


            };

            $scope.addAlbumLike = function (likeInfo) {


            };

            $scope.deleteAlbumLike = function (albumId, likeId) {


            };

            $scope.addAlbumComment = function (commentInfo) {


            };

            $scope.editAlbumComment = function (commentInfo) {


            };

            $scope.deleteAlbumComment = function (albumId, commentId) {


            };

            $scope.AddAlbumShare = function (shareInfo) {


            };
            //.............................photo module...............
            $scope.getPhotos = function (userId) {

            };

            $scope.getPhoto = function (userId) {

            };

            $scope.addPhotos = function () {
                console.log($scope.photoInfo);
                photoService.addPhotos($scope.photoInfo).
                        success(function (data, status, headers, config) {
                            alert(data.message);
                        });
            };

            $scope.addPhotoLike = function (photoInfo) {

            };

            $scope.deletePhotoLike = function (photoInfo) {

            };

            $scope.addPhotoComment = function (photoCommentInfo) {

            };

            $scope.editPhotoComment = function (photoCommentInfo) {

            };

            $scope.deletePhotoComment = function (albumId, commentId) {

            };

            $scope.searchPhoto = function () {

            };


        });
