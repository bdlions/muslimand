angular.module('services.BasicProfile', []).
        factory('basicProfileService', function ($http, $location) {
            var basicProfileService = {};
            var $app_name = "/muslimand";

//.............. about overview module..........................                
            basicProfileService.getOverviews = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/get_overview',
                    data: {
                        userId: userId
                    }
                });
            };

//.............. about Works and Education ..........................   
            basicProfileService.getWorksEducation = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/get_works_education',
                    data: {
                        userId: userId
                    }
                });
            };

//.........................Work and Education.............................
            basicProfileService.addWorkPlace = function (workInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_work_place',
                    data: {
                        workInfo: workInfo
                    },
                });
            };
            basicProfileService.editWorkPlace = function (workInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_work_place',
                    data: {
                        workInfo: workInfo,
                    },
                });
            };

            basicProfileService.deleteWorkPlace = function (workPlaceId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_work_place',
                    data: {
                        workPlaceId: workPlaceId,
                    },
                });
            };

//............................Professional Skill..............
            basicProfileService.addPSkill = function (pSkillInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_professional_skill',
                    data: {
                        pSkillInfo: pSkillInfo
                    },
                });
            };

            basicProfileService.editPSkill = function (pSkill) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_professional_skill',
                    data: {
                        pSkill: pSkill,
                    },
                });
            };

            basicProfileService.deletePSkill = function (pSkillId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_p_skill',
                    data: {
                        pSkillId: pSkillId,
                    },
                });
            };
//................................University..............................
            basicProfileService.addUniversity = function (universityInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_university',
                    data: {
                        universityInfo: universityInfo
                    },
                });
            };

            basicProfileService.editUniversity = function (uvInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_university',
                    data: {
                        uvInfo: uvInfo,
                    },
                });
            };
            basicProfileService.deleteUniversity = function (universityId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_university',
                    data: {
                        universityId: universityId,
                    },
                });
            };
            //...................................College............................

            basicProfileService.addCollege = function (collegeInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_college',
                    data: {
                        collegeInfo: collegeInfo
                    },
                });
            };
            basicProfileService.editCollege = function (collegeInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_college',
                    data: {
                        collegeInfo: collegeInfo,
                    },
                });
            };
            basicProfileService.deleteCollege = function (collegeId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_college',
                    data: {
                        collegeId: collegeId,
                    },
                });
            };
//..............................School.................................
            basicProfileService.addSchool = function (schoolInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_school',
                    data: {
                        schoolInfo: schoolInfo
                    },
                });
            };
            basicProfileService.editSchool = function (schoolInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_school',
                    data: {
                        schoolInfo: schoolInfo,
                    },
                });
            };
            basicProfileService.deleteSchool = function (schoolId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_school',
                    data: {
                        schoolId: schoolId,
                    },
                });
            };
//..................... About Places module................                

            basicProfileService.getCityTown = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/get_city_town',
                    data: {
                        userId: userId,
                    },
                });
            };
            basicProfileService.addCurrentCity = function (currentCityInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_current_city',
                    data: {
                        currentCityInfo: currentCityInfo
                    },
                });
            };
            basicProfileService.editCurrentCity = function (cityInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_current_city',
                    data: {
                        cityInfo: cityInfo
                    }
                });
            };
            basicProfileService.deleteCurrentCity = function (cCityId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_current_city',
                    data: {
                        cCityId: cCityId
                    }
                });
            };
            basicProfileService.addHomeTown = function (homeTownInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_home_town',
                    data: {
                        homeTownInfo: homeTownInfo
                    }
                });
            };
            basicProfileService.editHomeTown = function (homeTownInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_home_town',
                    data: {
                        homeTownInfo: homeTownInfo
                    },
                });
            };
            basicProfileService.deleteHomeTown = function (hTownId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_home_town',
                    data: {
                        hTownId: hTownId
                    }
                });
            };


//.................. About Contact and Basic Info ...................
            basicProfileService.getContactBasicInfo = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/get_contact_basic_info',
                    data: {
                        userId: userId
                    }
                });
            };


            basicProfileService.addPhone = function (phoneInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_mobile_phone',
                    data: {
                        phoneInfo: phoneInfo
                    }
                });
            };
            basicProfileService.editMobilePhone = function (phoneInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_mobile_phone',
                    data: {
                        phoneInfo: phoneInfo
                    }
                });
            };
            basicProfileService.deleteMobilePhone = function (phoneId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_mobile_phone',
                    data: {
                        phoneId: phoneId
                    }
                });
            };
            basicProfileService.addAddress = function (addressInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_address',
                    data: {
                        addressInfo: addressInfo
                    },
                });
            };
            basicProfileService.editAddress = function (addressInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_address',
                    data: {
                        addressInfo: addressInfo
                    },
                });
            };
            basicProfileService.deleteAddress = function (addressId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_address',
                    data: {
                        addressId: addressId
                    },
                });
            };
            basicProfileService.addWebsite = function (websiteInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_website',
                    data: {
                        websiteInfo: websiteInfo
                    },
                });
            };
            basicProfileService.editWebsite = function (websiteInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_website',
                    data: {
                        websiteInfo: websiteInfo
                    },
                });
            };
            basicProfileService.deleteWebsite = function (websiteId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_website',
                    data: {
                        websiteId: websiteId
                    },
                });
            };
            basicProfileService.addEmail = function (emailInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_email',
                    data: {
                        emailInfo: emailInfo
                    },
                });
            };
            basicProfileService.editEmail = function (emailInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_email',
                    data: {
                        emailInfo: emailInfo
                    },
                });
            };
            basicProfileService.deleteEmail = function (emailId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/delete_email',
                    data: {
                        emailId: emailId
                    },
                });
            };

//...................... About Family and relationship ..............
            basicProfileService.getFamilyRelation = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/get_family_relations',
                    data: {
                        userId: userId,
                    },
                });
            };
            basicProfileService.addRStatus = function (rStatusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_relationship_status',
                    data: {
                        userId: rStatusInfo.userId,
                        relationship: rStatusInfo.relationship,
                    },
                });
            };
            basicProfileService.editRStatus = function (rStatusInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/edit_relationship_status',
                    data: {
                        rStatusInfo: rStatusInfo,
                    },
                });
            };
//................About Yourself.................................

            basicProfileService.getAboutFQuote = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/get_about_fquote',
                    data: {
                        userId: userId,
                    },
                });
            };
            basicProfileService.addAbout = function (aboutInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_about',
                    data: {
                        userId: aboutInfo.userId,
                        about: aboutInfo.about,
                    },
                });
            };
            basicProfileService.addFQuote = function (fQuoteInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/basic_profile/add_fquote',
                    data: {
                        userId: fQuoteInfo.userId,
                        fQuote: fQuoteInfo.fQuote,
                    },
                });
            };
            return basicProfileService;
        });