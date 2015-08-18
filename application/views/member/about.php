<link href="<?php echo base_url(); ?>resources/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<div class="row">
    <div class="col-md-10">
        <?php $this->load->view("member/timeline"); ?>
        <div class="row form-group"></div>
        <div class="pagelet">
            <div class="row">
                <div class="col-md-1">
                    <div class="row form-group"></div>
                    <img src="<?php echo base_url(); ?>resources/images/about.png"  width="28" height="28">   
                </div>
                <div class="col-md-11">
                    <span style="font-size: 35px;">About</span>  
                </div>
            </div>
        </div>
        <div class="pagelet">
            <div class="row">
                <div class="col-md-4" style="border-right: 1px solid lightgray;">
                    <div class="pagelet">
                        <?php $this->load->view("member/pagelets/about/about_categoty"); ?>
                    </div>
                </div> 
                <div class="col-md-8">
                    <div class="pagelet">
                        <?php $this->load->view("member/pagelets/about/about_overview"); ?>
                        <?php $this->load->view("member/pagelets/about/career/about_career"); ?>
                        <?php $this->load->view("member/pagelets/about/place/about_place"); ?>
                        <?php $this->load->view("member/pagelets/about/contact_info/about_contact_info"); ?>
                        <?php $this->load->view("member/pagelets/about/family_relation/about_family_relation"); ?>
                        <?php $this->load->view("member/pagelets/about/details/about_details"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2" style="border-left: 1px solid lightgray">
    </div>
    <div class="row form-group"></div>
</div>

<script>
            $('#category_overview').on('click', function () {
    $.ajax({
    dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + 'basic_profile/get_overview',
            data: {
            },
            success: function (data) {
            $("#about_overview_company").html(tmpl("tmpl_work_for_overview", data.workPlace));
                    $("#about_overview_uiversity").html(tmpl("tmpl_uv_for_overview", data.university));
                    $("#about_overview_location").html(tmpl("tmpl_location_for_overview", data.city));
                    $("#about_overview_phone").html(tmpl("tmpl_phone_for_overview", data.mobilePhone));
                    $("#about_overview_email").html(tmpl("tmpl_email_for_overview", data.email));
                    $("#about_overview_address").html(tmpl("tmpl_address_for_overview", data.address));
                    $("#about_overview_website").html(tmpl("tmpl_website_for_overview", data.website));
                    $("#about_overview_birthdate").html(tmpl("tmpl_birthdate_for_overview", data.birthDate));
                    $('#about_career').hide();
                    $('#about_place').hide();
                    $('#about_contact_info').hide();
                    $('#about_family_relation').hide();
                    $('#about_details').hide();
                    $('#about_overview').show();
            }
    });
    });
            $('#category_career').on('click', function () {
    $.ajax({
    dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + 'basic_profile/get_works_education',
            data: {
            },
            success: function (data) {
            $("#work_place_tmpl_id").html(tmpl("tmpl_work_places", data.work_places));
                    $("#p_skill_tmpl_id").html(tmpl("tmpl_p_skills", data.p_skills));
                    $("#uv_tmpl_id").html(tmpl("tmpl_universities", data.universities));
                    $("#college_tmpl_id").html(tmpl("tmpl_colleges", data.colleges));
                    $("#school_tmpl_id").html(tmpl("tmpl_schools", data.schools));
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
            }
    });
    });
            $('#category_place').on('click', function () {
    $.ajax({
    dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + 'basic_profile/get_city_town',
            data: {
            },
            success: function (data) {
            if (data.city_town != null) {
            if (typeof data.city_town.basicInfo != "undefined") {
            $("#current_city_id").html(tmpl("tmpl_current_city", data.city_town.basicInfo.city));
                    $("#home_town_id").html(tmpl("tmpl_home_town", data.city_town.basicInfo.town));
            }
            }
            $('#about_overview').hide();
                    $('#about_career').hide();
                    $('#about_contact_info').hide();
                    $('#about_family_relation').hide();
                    $('#about_details').hide();
                    $('#place').hide();
                    $('#about_place').show();
                    $('#subcategory_place').show();
            }
    });
    });
            $('#category_contact_info').on('click', function () {
    $.ajax({
    dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + 'basic_profile/get_contact_basic_info',
            data: {
            },
            success: function (data) {
            if (data.basic_info != null) {
            if (typeof data.basic_info.basicInfo != "undefined") {
            $("#mobile_phone_id").html(tmpl("tmpl_mobile_phones", data.basic_info.basicInfo.mobilePhones));
                    $("#address_id").html(tmpl("tmpl_address", data.basic_info.basicInfo.address));
                    $("#website_id").html(tmpl("tmpl_website", data.basic_info.basicInfo.website));
                    $("#email_id").html(tmpl("tmpl_emails", data.basic_info.basicInfo.emails));
                    $("#birthday_id").html(tmpl("tmpl_birthday", data.basic_info.basicInfo.birthDate));
                    $("#gender_id").html(tmpl("tmpl_gender", data.basic_info.basicInfo.gender));
                    $("#language_id").html(tmpl("tmpl_language", data.basic_info.basicInfo.language));
                    $("#religion_id").html(tmpl("tmpl_religion", data.basic_info.basicInfo.religions));
                    $("#address_id").html(tmpl("tmpl_address", data.basic_info.basicInfo.addresses));
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
            }
    });
    });
            $('#category_family_relation').on('click', function () {
    $.ajax({
    dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + 'basic_profile/get_family_relations',
            data: {
            },
            success: function (data) {
            if (data.family_relations != null) {
            if (typeof data.family_relations.basicInfo != "undefined") {
            $("#relationship_add").html(tmpl("tmpl_relationship_status", data.family_relations.basicInfo.relationshipStatus));
                    $("#family_member_add").html(tmpl("tmpl_family_members", data.family_relations.basicInfo.familyMember));
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
            }
    });
    });
            $('#category_details').on('click', function () {
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
</script>

