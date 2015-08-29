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
            $scope.rStatus = {};
            $scope.rStatusInfo = {};
            $scope.fMemebers = [];
            $scope.about = {};
            $scope.aboutInfo = {};
            $scope.fQuote = {};
            $scope.fQuoteInfo = {};

            // about  overview  ................          
            $scope.getOverview = function (userId) {
                basicProfileService.getOverviews(userId).
                        success(function (data, status, headers, config) {
                            if(data.workPlace != null){
                                $('#about_overview_workplace').show();
                                  $scope.overview.workPlace = data.workPlace;
                            }
                            if(data.university != null){
                                $('#about_overview_uiversity').show();
                                  $scope.overview.university = data.university;
                            }
                            if(data.city != null){
                                $('#about_overview_city').show();
                                  $scope.overview.city = data.city;
                            }
                            if(data.mobilePhone != null){
                                $('#about_overview_phone').show();
                                  $scope.overview.mobilePhone = data.mobilePhone;
                            }
                            if(data.email != null){
                                $('#about_overview_email').show();
                                  $scope.overview.email = data.email;
                            }
                            if(data.address != null){
                                $('#about_overview_address').show();
                                  $scope.overview.address = data.address;
                            }
                            if(data.company != null){
                                $('#about_overview_company').show();
                                  $scope.overview.company = data.company;
                            }
                            if(data.website != null){
                                $('#about_overview_website').show();
                                  $scope.overview.website = data.website;
                            }
                            if(data.birthDate != null){
                                $('#about_overview_birthDate').show();
                                  $scope.overview.birthDate = data.birthDate;
                            }
                            $scope.overview = data;
                            $('#about_career').hide();
                            $('#about_place').hide();
                            $('#about_contact_info').hide();
                            $('#about_family_relation').hide();
                            $('#about_details').hide();
                            $('#about_overview').show();
                        });
            };

// works and education module...................

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


// .............. places module........................... 

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

//........... Contact and Basic Info module...........            

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

//................ Family and Relation..............
            $scope.getFamilyRelation = function (userId) {
                basicProfileService.getFamilyRelation(userId).
                        success(function (data, status, headers, config) {
                            if (data.family_relations.basicInfo != null) {
                                if (data.family_relations.basicInfo.relationshipStatus != null) {
                                    $('#relationship_add').show();
                                    $scope.rStatus = data.family_relations.basicInfo.relationshipStatus;
                                    console.log($scope.rStatus);
                                }
                                if (data.family_relations.basicInfo.familyMember != null) {
                                    $('#family_member_add').show();
                                    $scope.fMemebers = data.family_relations.basicInfo.familyMember;
                                }
                            }

                            $('#about_family_relation').show();
                            $('#about_overview').hide();
                            $('#about_career').hide();
                            $('#about_place').hide();
                            $('#about_contact_info').hide();
                            $('#about_details').hide();
                            $('#family_relation').hide();
                            $('#subcategory_family_relation').show();
                        });
            };
            $scope.addRStatus = function (userId) {
                $scope.rStatusInfo.userId = userId;
                basicProfileService.addRStatus($scope.rStatusInfo).
                        success(function (data, status, headers, config) {
                            $scope.rStatus = data.relation_Status;
                            $('#relationship_add').show();
                            $("#relationship_add_id").hide();
                            $("#relationship_id").show();
                            $scope.rStatusInfo = null;

                            ;
                        });
            };
            //......................About Yourself....................

            $scope.getAboutFQuote = function (userId) {
                basicProfileService.getAboutFQuote(userId).
                        success(function (data, status, headers, config) {
                            if (data.about_fquote != null) {
                                if (data.about_fquote.about != null) {
                                    $('#aboutId').show();
                                    $scope.about = data.about_fquote.about;
                                    console.log($scope.about);
                                }
                                if (data.about_fquote.fQuote != null) {
                                    $('#fQuoteId').show();
                                    $scope.fQuote = data.about_fquote.fQuote;
                                    console.log($scope.fQuote);
                                }
                            }
                            $('#about_overview').hide();
                            $('#about_career').hide();
                            $('#place').hide();
                            $('#about_contact_info').hide();
                            $('#about_family_relation').hide();
                            $("#about_own").hide();
                            $("#favorite_quote").hide();
                            $('#about_details').show();
                            $("#add_about_own").show();
                            $("#add_favorite_quote").show();

                        });
            };

            $scope.addAbout = function (userId) {
                $scope.aboutInfo.userId = userId;
                basicProfileService.addAbout($scope.aboutInfo).
                        success(function (data, status, headers, config) {
                            $scope.about = data.about;
                            $('#aboutId').show();
                            $("#add_about_own").show();
                            $("#about_own").hide();
                            $scope.aboutInfo = null;

                            ;
                        });
            };
            $scope.addFQuote = function (userId) {
                $scope.fQuoteInfo.userId = userId;
                basicProfileService.addFQuote($scope.fQuoteInfo).
                        success(function (data, status, headers, config) {
                            $scope.fQuote = data.f_quote;
                            $('#fQuoteId').show();
                            $("#add_favorite_quote").show();
                            $("#favorite_quote").hide();
                            $scope.fQuoteInfo = null;

                            ;
                        });
            };


        });
