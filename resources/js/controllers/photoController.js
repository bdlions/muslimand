angular.module('controllers.Photo', ['services.Photo']).
        controller('photoController', function ($scope, photoService) {
            $scope.categories = [];
            $scope.albums = [];
            $scope.albumInfo = {};
            $scope.photoInfo = {};

            $scope.setPhotoCategories = function (t) {
                $scope.categories = JSON.parse(t);
            };
            $scope.setAlbums = function (albumList) {
                $scope.albums = JSON.parse(albumList);
            };



            $scope.getAllAlbums = function (userId) {

            };

            $scope.getAlbum = function (userId) {

            };
//
//            $scope.getLatest = function (userId) {
//
//            };


            $scope.createAlbum = function () {
                photoService.createAlbum($scope.albumInfo).
                        success(function (data, status, headers, config) {
                            $scope.albums.push(data.album_lsit);
                            $('#modal_create_album_box').modal('hide');
                            alert(data.message);
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

            $scope.addPhoto = function () {
                photoService.addPhoto($scope.photoInfo).
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
