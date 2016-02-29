
<script type="text/javascript">

    $(function() {
        var profileId = '<?php echo $profile_id; ?>';
        if (profileId === "0") {
            profileId = '<?php echo $user_id; ?>';
        }
        angular.element($('#brief_info_set')).scope().getOverview(profileId, function(data) {
            if (typeof data.workPlace !== "undefined") {
                $('#brif_work_id').show();
            }
            if (typeof data.university !== "undefined") {
                $('#brif_uv_id').show();
            }
            if (typeof data.city !== "undefined") {
                $('#brif_city_id').show();
            }

            if (typeof data.address !== "undefined") {
                $('#brif_address_id').show();
            }
        });
        angular.element($('#sort_friend_list_set_id')).scope().getFriendList(profileId);
        angular.element($('#photo_set_id')).scope().getUserAlbumList(profileId);

    });



</script>



<!-- Cover Image -->
<div class="row form-group" ng-controller="friendController" ng-cloak >
    <div class="col-md-12">
        <?php $this->load->view("member/timeline/profile_cover"); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php // $this->load->view("member/timeline/add_request"); ?>
    </div>
</div>
<div class="row form-group"></div>

<!--CARDS AFTER BANNER-->
<div class="row">
    <div class="col-md-5">
        <span ng-controller="basicProfileController" ng-cloak id="brief_info_set">
            <?php $this->load->view("member/timeline/brief_info"); ?>
        </span>
        <div class="row form-group"></div>
        <span ng-controller="friendController" ng-cloak id="sort_friend_list_set_id">
            <?php $this->load->view("member/timeline/friend_list"); ?>
        </span>
        <div class="row form-group"></div>
        <span ng-controller="photoController"  ng-cloak id="photo_set_id">
            <?php $this->load->view("member/timeline/photo_list"); ?>
        </span>
    </div>
    <div class="col-md-7" ng-controller="statusController"  ng-cloak id='status_set_id' ng-init="" >
        <?php $this->load->view("member/pagelets/post_status"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/updated_status"); ?>
    </div>
</div>


