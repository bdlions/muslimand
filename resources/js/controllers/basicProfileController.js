angular.module('controllers.BasicProfile', ['services.BasicProfile']).
        controller('basicProfileController', function ($scope, basicProfileService) {
            $scope.yearList = [];
            $scope.overview = {};
            $scope.places = {};
            $scope.workPlaces = [];
            $scope.workInfo = {};
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

            // about  overview  ........................................      
            $scope.getOverview = function (userId, requestFunction) {
                basicProfileService.getOverviews(userId).
                        success(function (data, status, headers, config) {
                            if (data.workPlace !== "") {
                                $scope.overview.workPlace = data.workPlace;
                            }
                            if (data.university !== "") {
                                $scope.overview.university = data.university;
                            }
                            if (data.city !== "") {
                                $scope.overview.city = data.city;
                            }
                            if (data.mobilePhone !== "") {
                                $scope.overview.mobilePhone = data.mobilePhone;
                            }
                            if (data.email !== "") {
                                $scope.overview.email = data.email;
                            }
                            if (data.address !== "") {
                                $scope.overview.address = data.address;
                            }
                            if (data.website !== "") {
                                $scope.overview.website = data.website;
                            }
                            if (data.bDate !== "") {
                                $scope.overview.birthDate = data.bDate;
                            }
                            requestFunction(data)
                        });
            };

// works and education module...........................................
//.......................work Place...............
            $scope.getWorksEducation = function (userId, requestFunction) {
                basicProfileService.getWorksEducation(userId).
                        success(function (data, status, headers, config) {
                            $scope.yearList = data.year_list;
                            if (data.work_places != "") {
                                $scope.workPlaces = data.work_places;
                            }
                            if (data.p_skills != "") {
                                $scope.pSkills = data.p_skills;
                            }
                            if (data.universities != "") {
                                $scope.universities = data.universities;
                            }
                            if (data.colleges != "") {
                                $scope.colleges = data.colleges;
                            }
                            if (data.schools != "") {
                                $scope.schools = data.schools;
                            }
                            requestFunction(data);
                        });
            };
            $scope.addWorkPlace = function (userId, cYear, requestFunction) {
                if (cYear != null) {
                    $scope.workInfo.endDate = cYear;
                }
                $scope.workInfo.userId = userId;
                basicProfileService.addWorkPlace($scope.workInfo).
                        success(function (data, status, headers, config) {
                            $scope.workPlaces.push(data.work_place);
                            $scope.workInfo = "";
                            requestFunction();
                        });
            };
            $scope.editWorkPlace = function (workPlace, requestFunction) {
                basicProfileService.editWorkPlace(workPlace).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.deleteWorkPlace = function (workPlaceId, requestFunction) {
                basicProfileService.deleteWorkPlace(workPlaceId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };


            //...........pSkill.................................
            $scope.addPSkill = function (userId, requestFunction) {
                $scope.pSkillInfo.userId = userId;
                basicProfileService.addPSkill($scope.pSkillInfo).
                        success(function (data, status, headers, config) {
                            $scope.pSkills.push(data.p_skill)
                            $scope.pSkillInfo = "";
                            requestFunction();
                        });
            };
            $scope.editPSkill = function (pSkill, requestFunction) {
                basicProfileService.editPSkill(pSkill).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };

            $scope.deletePSkill = function (pSkillId, requestFunction) {
                basicProfileService.deletePSkill(pSkillId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };

//..........................University.......................
            $scope.addUniversity = function (userId, requestFunction) {
                $scope.universityInfo.userId = userId;
                basicProfileService.addUniversity($scope.universityInfo).
                        success(function (data, status, headers, config) {
                            $scope.universities.push(data.university)
                            $scope.universityInfo = "";
                            requestFunction();

                        });
            };
            $scope.editUniversity = function (uvInfo, requestFunction) {
                basicProfileService.editUniversity(uvInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };

            $scope.deleteUniversity = function (universityId, requestFunction) {
                basicProfileService.deleteUniversity(universityId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };
//.............................College....................
            $scope.addCollege = function (userId, requestFunction) {
                $scope.collegeInfo.userId = userId;
                basicProfileService.addCollege($scope.collegeInfo).
                        success(function (data, status, headers, config) {
                            $scope.colleges.push(data.college)
                            $scope.collegeInfo = "";
                            requestFunction();
                        });
            };

            $scope.editCollege = function (collegeInfo, requestFunction) {
                basicProfileService.editCollege(collegeInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.deleteCollege = function (collegeId, requestFunction) {
                basicProfileService.deleteCollege(collegeId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };
//.....................School..................................
            $scope.addSchool = function (userId, requestFunction) {
                $scope.schoolInfo.userId = userId;
                basicProfileService.addSchool($scope.schoolInfo).
                        success(function (data, status, headers, config) {
                            $scope.schools.push(data.school);
                            $scope.schoolInfo = "";
                            requestFunction();
                        });
            };

            $scope.editSchool = function (schoolInfo, requestFunction) {
                basicProfileService.editSchool(schoolInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.deleteSchool = function (schoolId, requestFunction) {
                basicProfileService.deleteSchool(schoolId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };

// .............. places module........................... 

            $scope.getCityTown = function (userId, requestFunction) {
                basicProfileService.getCityTown(userId).
                        success(function (data, status, headers, config) {
                            if (data.city_town.city != "") {
                                $scope.city = data.city_town.city;
                            }
                            if (data.city_town.town != "") {
                                $scope.town = data.city_town.town;
                            }
                            requestFunction(data);
                        });
            };

            $scope.addCurrentCity = function (userId, requestFunction) {
                $scope.currentCityInfo.userId = userId;
                basicProfileService.addCurrentCity($scope.currentCityInfo).
                        success(function (data, status, headers, config) {
                            $scope.city = data.current_city;
                            $scope.currentCityInfo = "";
                            requestFunction();
                        });
            };
            $scope.editCurrentCity = function (cityInfo, requestFunction) {
                basicProfileService.editCurrentCity(cityInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.deleteCurrentCity = function (cCityId, requestFunction) {
                basicProfileService.deleteCurrentCity(cCityId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };


            $scope.addHomeTown = function (userId, requestFunction) {
                $scope.homeTownInfo.userId = userId;
                basicProfileService.addHomeTown($scope.homeTownInfo).
                        success(function (data, status, headers, config) {
                            $scope.town = data.home_town;
                            $scope.homeTownInfo = "";
                            requestFunction();

                        });
            };
            $scope.editHomeTown = function (homeTownInfo, requestFunction) {
                basicProfileService.editHomeTown(homeTownInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };

            $scope.deleteHomeTown = function (hTownId, requestFunction) {
                basicProfileService.deleteHomeTown(hTownId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });

            };

//........... Contact and Basic Info module...........            

            $scope.getContactBasicInfo = function (userId, requestFunction) {
                basicProfileService.getContactBasicInfo(userId).
                        success(function (data, status, headers, config) {
                            if (data.basic_info !== "") {
                                if (data.basic_info.bInfo !== "") {
                                    if (data.basic_info.bInfo.mbs !== "") {
                                        $scope.mobilePhones = data.basic_info.bInfo.mobilePhones;
                                    }
                                    if (data.basic_info.bInfo.addresses !== "") {

                                        $scope.address = data.basic_info.bInfo.addresses;
                                    }
                                    if (data.basic_info.bInfo.website !== "") {
                                        $scope.website = data.basic_info.bInfo.website;
                                    }
                                    if (data.basic_info.bInfo.emails !== "") {
                                        $scope.emails = data.basic_info.bInfo.emails;
                                    }
                                    if (data.basic_info.bInfo.bDate !== "") {
                                        $scope.birthDate = data.basic_info.bInfo.bDate;
                                    }
                                    if (data.basic_info.bInfo.gender !== "") {
                                        $scope.gender = data.basic_info.bInfo.gender;
                                    }
                                    if (data.basic_info.bInfo.language !== "") {
                                        $scope.languages = data.basic_info.bInfo.language;
                                    }
                                    if (data.basic_info.bInfo.religions !== "") {
                                        $scope.religion = data.basic_info.bInfo.religions;
                                    }
                                }
                            }
                            requestFunction(data);
                        });

            };
            $scope.addPhone = function (userId, requestFunction) {
                $scope.PhoneInfo.userId = userId;
                basicProfileService.addPhone($scope.PhoneInfo).
                        success(function (data, status, headers, config) {
                            console.log(data);
                            $scope.mobilePhones.push(data.mobile_phone);
                            $scope.PhoneInfo = "";
                            requestFunction();
                        });
            };
            $scope.addAddress = function (userId) {
                $scope.addressInfo.userId = userId;
                basicProfileService.addAddress($scope.addressInfo).
                        success(function (data, status, headers, config) {
                            $('#address_id').show();
                            $scope.address = data.address;
                            $scope.addressInfo = "";
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
                            $scope.websiteInfo = "";
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
                            $scope.emailInfo = "";
                            $("#email").hide();
                            $("#add_email").show();
                        });
            };

//................ Family and Relation..............
            $scope.getFamilyRelation = function (userId, requestFunction) {
                basicProfileService.getFamilyRelation(userId).
                        success(function (data, status, headers, config) {
                            if (data.family_relations != "") {
                                if (data.family_relations.bInfo != "") {
                                    if (data.family_relations.bInfo.relationshipStatus != "") {
                                        $scope.rStatus = data.family_relations.bInfo.relationshipStatus;
                                    }
                                    if (data.family_relations.bInfo.familyMember != "") {
                                        $scope.fMemebers = data.family_relations.bInfo.familyMember;
                                    }
                                }
                            }
                            requestFunction(data);
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
                            $scope.rStatusInfo = "";

                            ;
                        });
            };
            //......................About Yourself....................

            $scope.getAboutFQuote = function (userId) {
                basicProfileService.getAboutFQuote(userId).
                        success(function (data, status, headers, config) {
                            if (data.about_fquote != "") {
                                if (data.about_fquote.about != "") {
                                    $('#aboutId').show();
                                    $scope.about = data.about_fquote.about;
                                    console.log($scope.about);
                                }
                                if (data.about_fquote.fQuote != "") {
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
                            $scope.aboutInfo = "";

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
                            $scope.fQuoteInfo = "";

                            ;
                        });
            };


        });
