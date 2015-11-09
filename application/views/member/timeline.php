


<script type="text/javascript">
    $(function () {
        var profileId = '<?php echo $profile_id; ?>';
        if (profileId === "0") {
            profileId = '<?php echo $user_id; ?>' ;
        }
        angular.element($('#status_set_id')).scope().getProfileStatus(profileId);
    });
</script>



<!--LEFT_COLUMN
<!-- Cover Image -->
<div class="row form-group" ng-controller="friendController">
    <?php $this->load->view("member/timeline/profile_cover"); ?>
</div>
<div class="row">
    <div class="col-md-12">
        <?php $this->load->view("member/timeline/add_request"); ?>
    </div>
</div>
<div class="row form-group"></div>

<!--CARDS AFTER BANNER-->
<div class="row">
    <div class="col-md-5">
        <?php $this->load->view("member/timeline/brief_info"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/timeline/friend_list"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/timeline/photo_list"); ?>
    </div>
    <div class="col-md-7" ng-controller="statusController" id='status_set_id' >
            <?php $this->load->view("member/pagelets/updated_status"); ?>
        <?php // $this->load->view("member/timeline/post_status"); ?>
        <div class="row form-group"></div>
        <?php // $this->load->view("member/timeline/shared_link"); ?>
        <div class="row form-group"></div>
        <?php // $this->load->view("member/timeline/shared_status"); ?>
    </div>
</div>
<div class="row form-group"></div>

<!--RIGHT COLUMN (CHATBOX COLUMN)-->
<div class="col-md-2">
</div>
<!--</div>-->
<!--</div>-->
