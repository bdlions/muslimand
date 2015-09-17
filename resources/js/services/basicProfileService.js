angular.module('services.BasicProfile', []).
        factory('basicProfileService', ["$http", function ($http) {
                var basicProfileService = {};

//.............. about overview module..........................                
                basicProfileService.getOverviews = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_overview',
                        data: {
                            userId: userId,
                        },
                    });
                };

//.............. about Works and Education ..........................   
                basicProfileService.getWorksEducation = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_works_education',
                        data: {
                            userId: userId,
                        },
                    });
                };


                basicProfileService.addWorkPlace = function (workInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_work_place',
                        data: {
                            workInfo: workInfo
                        },
                    });
                };
                basicProfileService.editWorkPlace = function (workInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/edit_work_place',
                        data: {
                            workInfo: workInfo,
                        },
                    });
                };
                
                basicProfileService.deleteStatus = function (workPlaceId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/delete_work_place',
                        data: {
                            workPlaceId: workPlaceId,
                        },
                    });
                };
                
                
                basicProfileService.addPSkill = function (pSkillInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_professional_skill',
                        data: {
                            userId: pSkillInfo.userId,
                            pSkil: pSkillInfo.pSkil,
                        },
                    });
                };
                basicProfileService.addUniversity = function (UniversityInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_university',
                        data: {
                            userId: UniversityInfo.userId,
                            university: UniversityInfo.university,
                            description: UniversityInfo.description,
                        },
                    });
                };
                basicProfileService.addCollege = function (collegeInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_college',
                        data: {
                            userId: collegeInfo.userId,
                            college: collegeInfo.college,
                            description: collegeInfo.description,
                        },
                    });
                };
                basicProfileService.addSchool = function (schoolInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_school',
                        data: {
                            userId: schoolInfo.userId,
                            school: schoolInfo.school,
                            description: schoolInfo.description,
                        },
                    });
                };

//..................... About Places module................                

                basicProfileService.getCityTown = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_city_town',
                        data: {
                            userId: userId,
                        },
                    });
                };
                basicProfileService.addCurrentCity = function (currentCityInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_current_city',
                        data: {
                            userId: currentCityInfo.userId,
                            cityName: currentCityInfo.cityName,
                        },
                    });
                };
                basicProfileService.addHomeTown = function (homeTownInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_home_town',
                        data: {
                            userId: homeTownInfo.userId,
                            townName: homeTownInfo.townName,
                        },
                    });
                };



//.................. About Contact and Basic Info ...................
                basicProfileService.getContactBasicInfo = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_contact_basic_info',
                        data: {
                            userId: userId,
                        },
                    });
                };


                basicProfileService.addPhone = function (PhoneInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_mobile_phone',
                        data: {
                            userId: PhoneInfo.userId,
                            phone: PhoneInfo.phone,
                        },
                    });
                };
                basicProfileService.addAddress = function (addressInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_address',
                        data: {
                            userId: addressInfo.userId,
                            address: addressInfo.address,
                            city: addressInfo.city,
                            postCode: addressInfo.postCode,
                            zip: addressInfo.zip,
                        },
                    });
                };
                basicProfileService.addWebsite = function (websiteInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_website',
                        data: {
                            userId: websiteInfo.userId,
                            website: websiteInfo.website,
                        },
                    });
                };
                basicProfileService.addEmail = function (emailInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_email',
                        data: {
                            userId: emailInfo.userId,
                            email: emailInfo.email,
                        },
                    });
                };

//...................... About Family and relationship ..............
                basicProfileService.getFamilyRelation = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_family_relations',
                        data: {
                            userId: userId,
                        },
                    });
                };
                basicProfileService.addRStatus = function (rStatusInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_relationship_status',
                        data: {
                            userId: rStatusInfo.userId,
                            relationship: rStatusInfo.relationship,
                        },
                    });
                };
//................About Yourself.................................

                basicProfileService.getAboutFQuote = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_about_fquote',
                        data: {
                            userId: userId,
                        },
                    });
                };
                  basicProfileService.addAbout = function (aboutInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_about',
                        data: {
                            userId: aboutInfo.userId,
                            about: aboutInfo.about,
                        },
                    });
                };
                  basicProfileService.addFQuote = function (fQuoteInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_fquote',
                        data: {
                            userId: fQuoteInfo.userId,
                            fQuote: fQuoteInfo.fQuote,
                        },
                    });
                };
                return basicProfileService;
            }]);