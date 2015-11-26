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
            $scope.userGenderId ="" ;

            $scope.setUserRelation = function (userRelation) {
                $scope.userRelation = JSON.parse(userRelation);
                $scope.userGenderId = $scope.userRelation.gender_id;
            };

            // about  overview  ........................................      
            $scope.getOverview = function (userId, requestFunction) {
                basicProfileService.getOverviews(userId).
                        success(function (data, status, headers, config) {
                            if (data.workPlace !== "undefined") {
                                $scope.overview.workPlace = data.workPlace;
                            }
                            if (data.university !== "undefined") {
                                $scope.overview.university = data.university;
                            }
                            if (data.city !== "undefined") {
                                $scope.overview.city = data.city;
                            }
                            if (data.mobilePhone !== "undefined") {
                                $scope.overview.mobilePhone = data.mobilePhone;
                            }
                            if (data.email !== "undefined") {
                                $scope.overview.email = data.email;
                            }
                            if (data.address !== "undefined") {
                                $scope.overview.address = data.address;
                            }
                            if (data.website !== "undefined") {
                                $scope.overview.website = data.website;
                            }
                            if (data.bDate !== "undefined") {
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
                            if (data.work_places != "undefined") {
                                $scope.workPlaces = data.work_places;
                            }
                            if (data.p_skills != "undefined") {
                                $scope.pSkills = data.p_skills;
                            }
                            if (data.universities != "undefined") {
                                $scope.universities = data.universities;
                            }
                            if (data.colleges != "undefined") {
                                $scope.colleges = data.colleges;
                            }
                            if (data.schools != "undefined") {
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
                            if (data.city_town.city != "undefined") {
                                $scope.city = data.city_town.city;
                            }
                            if (data.city_town.town != "undefined") {
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
                            if (data.basic_info !== "undefined") {
                                if (data.basic_info !== "undefined") {

                                    if (typeof data.basic_info.mobile_phones !== "undefined") {
                                        $scope.mobilePhones = data.basic_info.mobile_phones;
                                    }
                                    if (data.basic_info.addresses !== "undefined") {

                                        $scope.address = data.basic_info.addresses;
                                    }
                                    if (data.basic_info.website !== "undefined") {
                                        $scope.website = data.basic_info.website;
                                    }
                                    if (data.basic_info.emails !== "undefined") {
                                        $scope.emails = data.basic_info.emails;
                                    }
                                    if (data.basic_info.birth_date !== "undefined") {
                                        $scope.birthDate = data.basic_info.birth_date;
                                    }
                                    if (data.basic_info.gender !== "undefined") {
                                        $scope.gender = data.basic_info.gender;
                                    }
                                    if (data.basic_info.language !== "undefined") {
                                        $scope.languages = data.basic_info.language;
                                    }
                                    if (data.basic_info.religions !== "undefined") {
                                        $scope.religion = data.basic_info.religions;
                                    }
                                }
                            }
                            requestFunction(data);
                        });

            };
            $scope.addPhone = function (userId, requestFunction) {
                $scope.phoneInfo.userId = userId;
                basicProfileService.addPhone($scope.phoneInfo).
                        success(function (data, status, headers, config) {
                            $scope.mobilePhones.push(data.mobile_phone);
                            $scope.phoneInfo = "";
                            requestFunction();
                        });
            };

            $scope.editMobilePhone = function (phoneInfo, requestFunction) {
                console.log(phoneInfo);
                basicProfileService.editMobilePhone(phoneInfo).
                        success(function (data, status, headers, config) {
                            $scope.phoneInfo = "";
                            requestFunction();
                        });
            };

            $scope.deleteMobilePhone = function (phoneId, requestFunction) {
                basicProfileService.deleteMobilePhone(phoneId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };

            $scope.addAddress = function (userId, requestFunction) {
                $scope.addressInfo.userId = userId;
                basicProfileService.addAddress($scope.addressInfo).
                        success(function (data, status, headers, config) {
                            $scope.address = data.address;
                            $scope.addressInfo = "";
                            requestFunction();
                        });
            };
            $scope.editAddress = function (addressInfo, requestFunction) {
                basicProfileService.editAddress(addressInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };

            $scope.deleteAddress = function (addressId, requestFunction) {
                basicProfileService.deleteAddress(addressId).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };

            $scope.addWebsite = function (userId, requestFunction) {
                $scope.websiteInfo.userId = userId;
                basicProfileService.addWebsite($scope.websiteInfo).
                        success(function (data, status, headers, config) {
                            $scope.website = data.website;
                            $scope.websiteInfo = "";
                            requestFunction();
                        });
            };
            $scope.editWebsite = function (websiteInfo, requestFunction) {
                basicProfileService.editWebsite(websiteInfo).
                        success(function (data, status, headers, config) {
                            requestFunction();
                        });
            };
            $scope.deleteWebsite = function (websiteId, requestFunction) {
                basicProfileService.deleteWebsite(websiteId).
                        success(function (data, status, headers, config) {
                            requestFunction();
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
                            if (data.family_relations != "undefined") {
                                if (data.family_relations.bInfo != "undefined") {
                                    if (data.family_relations.bInfo.relationshipStatus != "undefined") {
                                        $scope.rStatus = data.family_relations.bInfo.relationshipStatus;
                                    }
                                    if (data.family_relations.bInfo.familyMember != "undefined") {
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
                            if (data.about_fquote != "undefined") {
                                if (data.about_fquote.about != "undefined") {
                                    $('#aboutId').show();
                                    $scope.about = data.about_fquote.about;
                                    console.log($scope.about);
                                }
                                if (data.about_fquote.fQuote != "undefined") {
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
