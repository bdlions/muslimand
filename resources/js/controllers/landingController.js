angular.module('controllers.Landing', ['services.Landing']).
        controller('landingController', function ($scope, landingService) {
            $scope.dateList = [];
            $scope.monthList = [];
            $scope.yearList = [];
            $scope.genderList = [];
            $scope.religionList = [];
            $scope.countryList = [];
            $scope.userList = [];
            $scope.registrationInfo = {};
            $scope.photoInfo = {};


            $scope.setUserList = function (userList) {
                $scope.userList = JSON.parse(userList);
            };

            $scope.setBirthDay = function (dates) {
                $scope.dateList = JSON.parse(dates);
            };
            $scope.setBirthMonth = function (months) {
                $scope.monthList = JSON.parse(months);
            };
            $scope.setBirthYear = function (years) {
                $scope.yearList = JSON.parse(years);
            };
            $scope.setGender = function (genders) {
                $scope.genderList = JSON.parse(genders);
            };
            $scope.setReligion = function (religions) {
                $scope.religionList = JSON.parse(religions);
            };
            $scope.setCountry = function (countries) {
                $scope.countryList = JSON.parse(countries);
            };
            $scope.setAlbums = function (albumList) {
                $scope.albums = JSON.parse(albumList);
            };

            $scope.registration = function () {
            };


        });
