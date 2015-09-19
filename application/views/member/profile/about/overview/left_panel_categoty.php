<div id="category_overview" class="row get_over_view_class" onclick="get_overview('<?php echo $user_id; ?>')">
    <div class="col-md-12" >
        <a style="color: black; text-decoration: none; cursor: pointer;" >Overview</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_career" class="row" onclick="get_works_education('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Works and Education</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_place" class="row" onclick="get_city_town('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Places you've lived</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_contact_info" class="row" onclick="get_contact_basic_info('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Contacts and Basic Info</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_family_relation" class="row" onclick="get_family_relation('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Relationship</a>
        <!--<a style="color: black; text-decoration: none; cursor: pointer;" > Family and Relationships</a>-->
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_details" class="row" ng-click="getAboutFQuote('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Details About You</a>
    </div>
</div>
<script type="text/javascript">
    function get_family_relation(userId) {
        angular.element($('#category_family_relation')).scope().getFamilyRelation(userId, function (data) {
            if (typeof data.family_relations != "undefined") {
                if (typeof data.basic_info.bInfo != "undefined") {
                    if (typeof data.family_relations.bInfo.relationshipStatus != "undefined") {
                        $('#relationship_add').show();
                    }
                    if (typeof data.family_relations.bInfo.familyMember != "undefined") {
                        $('#family_member_add').show();
                    }
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

    }

</script>

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
            if (typeof data.work_places != "undefined") {
                $('#work_place_tmpl_id').show();
            }
            if (typeof data.p_skills != "undefined") {
                $('#p_skill_tmpl_id').show();
            }
            if (typeof data.universities != "undefined") {
                $('#uv_tmpl_id').show();
            }
            if (typeof data.colleges != "undefined") {
                $('#college_tmpl_id').show();
            }
            if (typeof data.schools != "undefined") {
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
            $('#about_details').hide();
            $('#h_town_edit_place_id').hide();
            $('#place').hide();
            $('#about_place').show();
            $('#subcategory_place').show();
        });

    }
    function get_contact_basic_info(userId) {
        angular.element($('#category_contact_info')).scope().getContactBasicInfo(userId, function (data) {
            if (typeof data.basic_info !== "undefined") {
                if (typeof data.basic_info !== "undefined") {
                    if (typeof data.basic_info.mobile_phones !== "undefined") {
                        $('#mobile_phone_id').show();
                    }
                    if (typeof data.basic_info.addresses !== "undefined") {

                        $('#address_id').show();
                    }
                    if (typeof data.basic_info.website !== "undefined") {
                        $('#website_id').show();
                    }
                    if (typeof data.basic_info.emails !== "undefined") {
                        $('#email_id').show();
                    }
                    if (typeof data.basic_info.birth_date !== "undefined") {
                        $('#birthday_id').show();
                    }
                    if (typeof data.basic_info.gender !== "undefined") {
                        $('#genderId').show();
                    }
                    if (typeof data.basic_info.language !== "undefined") {
                        $('#language_id').show();
                    }
                    if (typeof data.basic_info.religions !== "undefined") {
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