angular.module('controllers.BasicProfile', ['services.BasicProfile']).
        controller('basicProfileController', function ($scope, basicProfileService) {
            $scope.overview = {};
            $scope.workPlaces = {};
            $scope.universities = {};
            $scope.colleges = {};
            $scope.schools = {};
            $scope.pSkills = {};
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
                            if(data.work_places != null){
                                 $scope.workPlaces = data.work_places;
                                $('#work_place_tmpl_id').show(); 
                            }
                            if(data.p_skills != null){
                                 $scope.pSkills = data.p_skills;
                                $('#p_skill_tmpl_id').show(); 
                            }
                            if(data.universities != null){
                                 $scope.universities = data.universities;
                                $('#uv_tmpl_id').show(); 
                            }
                            if(data.colleges != null){
                                 $scope.colleges = data.colleges;
                                $('#college_tmpl_id').show(); 
                            }
                            if(data.schools != null){
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
        });
