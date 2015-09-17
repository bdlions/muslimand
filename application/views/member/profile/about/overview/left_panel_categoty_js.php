
<script type="text/javascript">
    function get_overview(userId) {
        angular.element($('.get_over_view_class')).scope().getOverview(userId, function (data) {
            if (data.workPlace != "") {
                $('#about_overview_workplace').show();
            }
            if (data.university != "") {
                $('#about_overview_uiversity').show();
            }
            if (data.city != "") {
                $('#about_overview_city').show();
            }
            if (data.mobilePhone != "") {
                $('#about_overview_phone').show();
            }
            if (data.email != "") {
                $('#about_overview_email').show();
            }
            if (data.address != "") {
                $('#about_overview_address').show();
            }
            if (data.website != "") {
                $('#about_overview_website').show();
            }
            if (data.birthDate != "") {
                $('#about_overview_birthDate').show();
            }
            $('#about_career').hide();
            $('#about_place').hide();
            $('#about_contact_info').hide();
            $('#about_family_relation').hide();
            $('#about_details').hide();
        });
    }
    function get_works_education(userId) {
        angular.element($('#category_overview')).scope().getWorksEducation(userId, function (data) {
            if (data.work_places != "") {
                $('#work_place_tmpl_id').show();
            }
            if (data.p_skills != "") {
                $('#p_skill_tmpl_id').show();
            }
            if (data.universities != "") {
                $('#uv_tmpl_id').show();
            }
            if (data.colleges != "") {
                $('#college_tmpl_id').show();
            }
            if (data.schools != "") {
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
    }

    function get_city_town(userId) {
        angular.element($('#category_place')).scope().getCityTown(userId, function (data) {
            if (typeof data.city_town.city != "undefined") {
                $('#current_city_id').show();
            }
            if (typeof data.city_town.town != "undefined") {
                $('#home_town_id').show();
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

    }
    function get_contact_basic_info(userId) {
        angular.element($('#category_contact_info')).scope().getContactBasicInfo(userId, function (data) {
            if (data.basic_info != "") {
                if (data.basic_info.basicInfo != "") {
                    if (data.basic_info.basicInfo.mobilePhones != "") {
                        $('#mobile_phone_id').show();
                    }
                    if (data.basic_info.basicInfo.addresses != "") {

                        $('#address_id').show();
                    }
                    if (data.basic_info.basicInfo.website != "") {
                        $('#website_id').show();
                    }
                    if (data.basic_info.basicInfo.emails != "") {
                        $('#email_id').show();
                    }
                    if (data.basic_info.basicInfo.birthDate != "") {
                        $('#birthday_id').show();
                    }
                    if (data.basic_info.basicInfo.gender != "") {
                        $('#genderId').show();
                    }
                    if (data.basic_info.basicInfo.language != "") {
                        $('#language_id').show();
                    }
                    if (data.basic_info.basicInfo.religions != "") {
                        $('#religion_id').show();
                    }
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

    }

</script>