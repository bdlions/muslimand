angular.module('services.BasicProfile', []).
        factory('basicProfileService', ["$http", function ($http) {
                var basicProfileService = {};
                basicProfileService.getOverviews = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_overview',
                        data: {
                            userId: userId,
                        },
                    });
                };
                basicProfileService.getWorksEducation = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_works_education',
                        data: {
                            userId: userId,
                        },
                    });
                };
                basicProfileService.getCityTown = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_city_town',
                        data: {
                            userId: userId,
                        },
                    });
                };
                basicProfileService.getContactBasicInfo = function (userId) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/get_contact_basic_info',
                        data: {
                            userId: userId,
                        },
                    });
                };

                basicProfileService.addWorkPlace = function (WorkInfo) {
                    return $http({
                        method: 'post',
                        url: '../basic_profile/add_work_place',
                        data: {
                            userId: WorkInfo.userId,
                            company: WorkInfo.company,
                            position: WorkInfo.position,
                            city: WorkInfo.city,
                            description: WorkInfo.description,
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
                return basicProfileService;
            }]);