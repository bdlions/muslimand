angular.module('services.BasicProfile', []).
        factory('basicProfileService', ["$http", function ($http) {
                var basicProfileService = {};

                basicProfileService.getStudents = function () {
                    console.log("getStudents");
                };

//        studentService.getStudentById = function(){
//            console.log("dsjfksdf");
//        };
//        studentService.getStudentsByName = function(){
//            console.log("getStudentsByName");
//        };
                basicProfileService.addTestInfo = function (testArray) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/test_add',
                        data: {firstName: testArray.firstName,
                            lastName: testArray.lastName},
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    });
//            return $http.post('../basic_profile/test_add', {
//                firstName: testArray.firstName,
//                lastName: testArray.lastName,
//            });
                };


                basicProfileService.addWelcomeTest = function (login) {

                    return $http({
                        method: "post",
                        url: "welcome/post",
                        data: {
                            email: login.email,
                            name: login.name
                        },
//                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    });
//            console.log("hi");
//            return $http({
//                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
//                method: 'get',
//                url: 'welcome/post',
//                data: "x=1"
//              });
//              
//                return $http({
//                        method: "post",
//                        url: "welcome/post",
//                        params: {
//                            name: "alamgir"
//                        },
//                        data: {
//                            name: "sdkfjsldkfjsdklf sdklf"
//                        }
//                    });
//                    
//                    

//           return $http({
//                        method: "post",
//                        url: "../posttest",
//                        params: {
//                            name: "alamgir"
//                        },
//                        data: $.param({
//                            name: "sdkfjsldkfjsdklf sdklf"
//                        })
//                    });

//                    return $http.post('../posttest', {name: 1});
                };

                basicProfileService.getOverviews = function () {
                    return $http.post('../basic_profile/get_overview', {});
                };
                basicProfileService.setTest = function () {
                    return $http.post('../basic_profile/angular_test', {});
                };
                return basicProfileService;
            }]);