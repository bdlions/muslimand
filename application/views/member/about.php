<div ng-app="app.BasicProfile">
    <div ng-controller="basicProfileController">
        <div class="row">
            <div class="col-md-10">
                <?php $this->load->view("member/pagelets/timeline/profile_cover"); ?>
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
            <div class="col-md-2" style="border-left: 1px solid lightgray"></div>
        </div>
    </div>
</div>

<script>

//    $('#category_contact_info').on('click', function() {
//        $.ajax({
//            dataType: 'json',
//            type: "POST",
//            url: '<?php echo base_url(); ?>' + 'basic_profile/get_contact_basic_info',
//            data: {
//            },
//            success: function(data) {
//                if (data.basic_info != null) {
//                    if (typeof data.basic_info.basicInfo != "undefined") {
//                        $("#mobile_phone_id").html(tmpl("tmpl_mobile_phones", data.basic_info.basicInfo.mobilePhones));
//                        $("#address_id").html(tmpl("tmpl_address", data.basic_info.basicInfo.address));
//                        $("#website_id").html(tmpl("tmpl_website", data.basic_info.basicInfo.website));
//                        $("#email_id").html(tmpl("tmpl_emails", data.basic_info.basicInfo.emails));
//                        $("#birthday_id").html(tmpl("tmpl_birthday", data.basic_info.basicInfo.birthDate));
//                        $("#gender_id").html(tmpl("tmpl_gender", data.basic_info.basicInfo.gender));
//                        $("#language_id").html(tmpl("tmpl_language", data.basic_info.basicInfo.language));
//                        $("#religion_id").html(tmpl("tmpl_religion", data.basic_info.basicInfo.religions));
//                        $("#address_id").html(tmpl("tmpl_address", data.basic_info.basicInfo.addresses));
//                    }
//                }
//                $('#about_overview').hide();
//                $('#about_career').hide();
//                $('#place').hide();
//                $('#about_family_relation').hide();
//                $('#about_details').hide();
//                $('#mobile').hide();
//                $('#address').hide();
//                $('#website').hide();
//                $('#about_place').hide();
//                $('#current_city').hide();
//                $('#home_town').hide();
//                $('#email').hide();
//                $('#birth_day').hide();
//                $('#gender').hide();
//                $('#language').hide();
//                $('#religion').hide();
//                $('#about_contact_info').show();
//                $('#add_mobile').show();
//                $('#add_address').show();
//                $('#add_website').show();
//                $('#add_email').show();
//                $('#add_birth_day').show();
//                $('#add_gender').show();
//                $('#add_language').show();
//                $('#add_religion').show();
//            }
//        });
//    });
    $('#category_family_relation').on('click', function() {
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + 'basic_profile/get_family_relations',
            data: {
            },
            success: function(data) {
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
    $('#category_details').on('click', function() {
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

