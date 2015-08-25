angular.module('controllers.BasicProfile', ['services.BasicProfile']).
        controller('basicProfileController', function ($scope, basicProfileService) {
            $scope.overview = {};
            $scope.places = {};
            $scope.workPlaces = [];
            $scope.WorkInfo = {};
            $scope.pSkillInfo = {};
            $scope.universityInfo = {};
            $scope.collegeInfo = {};
            $scope.schoolInfo = {};
            $scope.currentCityInfo = {};
            $scope.homeTownInfo = {};
            $scope.universities = [];
            $scope.colleges = [];
            $scope.schools = [];
            $scope.pSkills = [];
            $scope.mobilePhones = [];
            $scope.address = {};
            $scope.addressInfo = {};
            $scope.websiteInfo = {};
            $scope.emails = [];
            $scope.languages = [];
            $scope.religion = {};
            $scope.city = {};
            $scope.birthDate = {};
            $scope.gender = {};
            $scope.website = {};
            $scope.town = {};
            $scope.getOverview = function (userId) {
                basicProfileService.getOverviews(userId).
                        success(function (data, status, headers, config) {
                            $scope.overview = data;
                            $('#about_career').hide();
                            $('#about_place').hide();
                            $('#about_contact_info').hide();
                            $('#about_family_relation').hide();
                            $('#about_details').hide();
                            $('#about_overview').show();
                        });
            };

            $scope.getWorksEducation = function (userId) {
                basicProfileService.getWorksEducation(userId).
                        success(function (data, status, headers, config) {
                            if (data.work_places != null) {
                                $scope.workPlaces = data.work_places;
                                $('#work_place_tmpl_id').show();
                            }
                            if (data.p_skills != null) {
                                $scope.pSkills = data.p_skills;
                                $('#p_skill_tmpl_id').show();
                            }
                            if (data.universities != null) {
                                $scope.universities = data.universities;
                                $('#uv_tmpl_id').show();
                            }
                            if (data.colleges != null) {
                                $scope.colleges = data.colleges;
                                $('#college_tmpl_id').show();
                            }
                            if (data.schools != null) {
                                $scope.schools = data.schools;
                                $('#school_tmpl_id').show();
                            }
                            $('#about_overview').hide();
                            $('#about_place').hide();
                            $('#about_contact_info').hide();
                            $('#about_family_relation').hide();
                            $('#about_details').hide();
                            $('#work').hide();
                            $('#professional_skill').hide();
                            $('#university').hide();
                            $('#college').hide();
                            $('#school').hide();
                            $('#about_career').show();
                            $('#subcategory_work').show();
                            $('#subcategory_professional_skill').show();
                            $('#subcategory_university').show();
                            $("#subcategory_college").show();
                            $('#subcategory_school').show();
                        });
            };

            $scope.getCityTown = function (userId) {
                basicProfileService.getCityTown(userId).
                        success(function (data, status, headers, config) {
                            if (data.city_town.city != null) {
                                $('#current_city_id').show();
                                $scope.city = data.city_town.city;
                            }
                            if (data.city_town.town != null) {
                                $('#home_town_id').show();
                                $scope.town = data.city_town.town;
                            }
                            $('#about_overview').hide();
                            $('#about_career').hide();
                            $('#about_contact_info').hide();
                            $('#about_family_relation').hide();
                            $('#about_details').hide();
                            $('#place').hide();
                            $('#about_place').show();
                            $('#subcategory_place').show();
                        });
            };

            $scope.getContactBasicInfo = function (userId) {
                basicProfileService.getContactBasicInfo(userId).
                        success(function (data, status, headers, config) {
                            if (data.basic_info.basicInfo != null) {
                                if (data.basic_info.basicInfo.mobilePhones != null) {
                                    $('#mobile_phone_id').show();
                                    $scope.mobilePhones = data.basic_info.basicInfo.mobilePhones;
                                }
                                if (data.basic_info.basicInfo.addresses != null) {

                                    $('#address_id').show();
                                    $scope.address = data.basic_info.basicInfo.addresses;
                                }
                                if (data.basic_info.basicInfo.website != null) {
                                    $('#website_id').show();
                                    $scope.website = data.basic_info.basicInfo.website;
                                }
                                if (data.basic_info.basicInfo.emails != null) {
                                    $('#email_id').show();
                                    $scope.emails = data.basic_info.basicInfo.emails;
                                }
                                if (data.basic_info.basicInfo.birthDate != null) {
                                    $('#birthday_id').show();
                                    $scope.birthDate = data.basic_info.basicInfo.birthDate;
                                }
                                if (data.basic_info.basicInfo.gender != null) {
                                    $scope.gender = data.basic_info.basicInfo.gender;
                                    $('#genderId').show();
                                    console.log($scope.gender);
                                }
                                if (data.basic_info.basicInfo.language != null) {
                                    $('#language_id').show();
                                    $scope.languages = data.basic_info.basicInfo.language;
                                }
                                if (data.basic_info.basicInfo.religions != null) {
                                    $('#religion_id').show();
                                    $scope.religion = data.basic_info.basicInfo.religions;
                                }
                            }
                            $('#about_overview').hide();
                            $('#about_career').hide();
                            $('#place').hide();
                            $('#about_family_relation').hide();
                            $('#about_details').hide();
                            $('#mobile').hide();
                            $('#address').hide();
                            $('#website').hide();
                            $('#about_place').hide();
                            $('#current_city').hide();
                            $('#home_town').hide();
                            $('#email').hide();
                            $('#birth_day').hide();
                            $('#gender').hide();
                            $('#language').hide();
                            $('#religion').hide();
                            $('#about_contact_info').show();
                            $('#add_mobile').show();
                            $('#add_address').show();
                            $('#add_website').show();
                            $('#add_email').show();
                            $('#add_birth_day').show();
                            $('#add_gender').show();
                            $('#add_language').show();
                            $('#add_religion').show();

                        });

            };
//            get_contact_basic_info

            $scope.addWorkPlace = function (userId) {
                $scope.workInfo.userId = userId;
                basicProfileService.addWorkPlace($scope.workInfo).
                        success(function (data, status, headers, config) {
                            $scope.workPlaces.push(data.work_place)
                            $scope.workInfo = null;
                            $("#work").hide();
                            $("#subcategory_work").show();
                        });
            };
            $scope.addPSkill = function (userId) {
                $scope.pSkillInfo.userId = userId;
                basicProfileService.addPSkill($scope.pSkillInfo).
                        success(function (data, status, headers, config) {
                            $scope.pSkills.push(data.p_skill)
                            $scope.pSkillInfo = null;
                            $("#professional_skill").hide();
                            $("#subcategory_professional_skill").show();
                        });
            };
            $scope.addUniversity = function (userId) {
                $scope.universityInfo.userId = userId;
                basicProfileService.addUniversity($scope.universityInfo).
                        success(function (data, status, headers, config) {
                            $scope.universities.push(data.university)
                            $scope.universityInfo = null;
                            $("#university").hide();
                            $("#subcategory_university").show();
                        });
            };
            $scope.addCollege = function (userId) {
                $scope.collegeInfo.userId = userId;
                basicProfileService.addCollege($scope.collegeInfo).
                        success(function (data, status, headers, config) {
                            $scope.colleges.push(data.college)
                            $scope.collegeInfo = null;
                            $("#college").hide();
                            $("#subcategory_college").show();
                        });
            };
            $scope.addSchool = function (userId) {
                $scope.schoolInfo.userId = userId;
                basicProfileService.addSchool($scope.schoolInfo).
                        success(function (data, status, headers, config) {
                            $scope.schools.push(data.school);
                            $scope.schoolInfo = null;
                            $("#school").hide();
                            $("#subcategory_school").show();
                        });
            };
            $scope.addCurrentCity = function (userId) {
                $scope.currentCityInfo.userId = userId;
                basicProfileService.addCurrentCity($scope.currentCityInfo).
                        success(function (data, status, headers, config) {
                            $scope.city = data.current_city;
                            $scope.currentCityInfo = null;
                            $('#current_city_id').show();
                            $("#current_city_add").show();
                            $("#c_city").hide();
                        });
            };
            $scope.addHomeTown = function (userId) {
                $scope.homeTownInfo.userId = userId;
                basicProfileService.addHomeTown($scope.homeTownInfo).
                        success(function (data, status, headers, config) {
                            $scope.town = data.home_town;
                            $scope.homeTownInfo = null;
                            $('#home_town_id').show();
                            $("#home_town_add").show();
                            $("#h_town").hide();
                        });
            };
            $scope.addPhone = function (userId) {
                $scope.PhoneInfo.userId = userId;
                basicProfileService.addPhone($scope.PhoneInfo).
                        success(function (data, status, headers, config) {
                            $scope.mobilePhones.push(data.mobile_phone);
                            $scope.PhoneInfo = null;
                            $('#mobile_phone_id').show();
                            $("#mobile").hide();
                            $("#add_mobile").show();
                        });
            };
            $scope.addAddress = function (userId) {
                $scope.addressInfo.userId = userId;
                basicProfileService.addAddress($scope.addressInfo).
                        success(function (data, status, headers, config) {
                            $('#address_id').show();
                            $scope.address = data.address;
                            $scope.addressInfo = null;
                            $("#address").hide();
                            $("#add_address").show();
                        });
            };
            $scope.addWebsite = function (userId) {
                $scope.websiteInfo.userId = userId;
                basicProfileService.addWebsite($scope.websiteInfo).
                        success(function (data, status, headers, config) {
                            $('#website_id').show();
                            $scope.website = data.website;
                            $scope.websiteInfo = null;
                            $("#website").hide();
                            $("#add_website").show();
                        });
            };
            $scope.addEmail = function (userId) {
                $scope.emailInfo.userId = userId;
                basicProfileService.addEmail($scope.emailInfo).
                        success(function (data, status, headers, config) {
                            $('#email_id').show();
                            $scope.emails.push(data.email);
                            $scope.emailInfo = null;
                            $("#email").hide();
                            $("#add_email").show();
                        });
            };
        });
