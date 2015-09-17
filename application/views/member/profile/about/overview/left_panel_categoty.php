<div id="category_overview" class="row get_over_view_class" onclick="getOverview('<?php echo $user_id; ?>')">
    <div class="col-md-12" >
        <a style="color: black; text-decoration: none; cursor: pointer;" >Overview</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_career" class="row" onclick="getWorksEducation('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Works and Education</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_place" class="row" ng-click="getCityTown('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Places you've lived</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_contact_info" class="row" ng-click="getContactBasicInfo('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Contacts and Basic Info</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_family_relation" class="row" ng-click="getFamilyRelation('<?php echo $user_id; ?>')">
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
    function getOverview(userId) {
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
    function getWorksEducation(userId) {
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
    

</script>