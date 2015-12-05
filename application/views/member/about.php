<script type="text/javascript">

    $(function () {
        var profileId = '<?php echo $profile_id; ?>';
        if (profileId === "0") {
            profileId = '<?php echo $user_id; ?>';
        }
        angular.element($('#about_overview_')).scope().getOverview(profileId, function (data) {
             $('#about_overview').show();
            if (typeof data.workPlace != "undefined") {
                $('#about_overview_workplace').show();
            }
            if (typeof data.university != "undefined") {
                $('#about_overview_uiversity').show();
            }
            if (typeof data.city != "undefined") {
                $('#about_overview_city').show();
            }
            if (typeof data.mobilePhone != "undefined") {
                $('#about_overview_phone').show();
            }
            if (typeof data.emails != "undefined") {
                $('#about_overview_email').show();
            }
            if (typeof data.address != "undefined") {
                $('#about_overview_address').show();
            }
            if (typeof data.website != "undefined") {
                $('#about_overview_website').show();
            }
            if (typeof data.birthDate != "undefined") {
                $('#about_overview_birthDate').show();
            }

            $('#about_overview').show();
            $('#about_career').hide();
            $('#about_place').hide();
            $('#about_contact_info').hide();
            $('#about_family_relation').hide();
            $('#about_details').hide();
        });

    });



</script>


<div ng-app="app.BasicProfile">
    <div ng-controller="basicProfileController" ng-clock id="about_overview_" ng-init="setUserId(('<?php echo $user_id; ?>'))">
        <div class="row"  ng-init="setProfileId(('<?php echo $profile_id; ?>'))">
            <div class="col-md-12">
                <?php $this->load->view("member/timeline/profile_cover"); ?>
                <div class="row form-group"></div>
                <div class="pagelet">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/about_icons/about.png">   
                        </div>
                        <div class="col-md-11">
                            <div style="font-size: 20px;">About</div>  
                        </div>
                    </div>
                </div>
                <div class="pagelet">
                    <div class="row">
                        <div class="col-md-4" style="border-right: 1px solid lightgray;">
                            <div class="pagelet">
                                <?php $this->load->view("member/profile/about/overview/left_panel_categoty"); ?>
                            </div>
                        </div> 
                        <div class="col-md-8">
                            <div class="pagelet">
                                <a href="profile/about/details/index.php"></a>
                                <?php $this->load->view("member/profile/about/overview/index"); ?>
                                <?php $this->load->view("member/profile/about/work_education/index"); ?>
                                <?php $this->load->view("member/profile/about/places/index"); ?>
                                <?php $this->load->view("member/profile/about/contact_basic_info/index"); ?>
                                <?php $this->load->view("member/profile/about/family_relationship/index"); ?>
                                <?php $this->load->view("member/profile/about/details/index"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


