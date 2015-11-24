<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.jscroll.min.js"></script>
<script type="text/javascript">
    function onImageUnavailable(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];

        firstImage.style.display = 'none';
        secondImage.style.visibility = 'visible';
        secondImage.style.height = '100%';
    }
    function onImageNotFound() {

    }

</script>

<div ng-controller="statusController" ng-init="setUserGender(<?php echo htmlspecialchars(json_encode($user_gender_id)); ?>)">
    <div class="row" ng-init="setUserCurrentTimeStamp(<?php echo htmlspecialchars(json_encode($user_current_time)); ?>)">
        <!--LEFT_COLUMN-->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-xs-12" class="newsfeed_profile_picture" style="margin-left: 0;">
                    <img class="img-circle"  alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100 . $user_id . '.jpg?time=' . time(); ?>" onError="onImageUnavailable(this)"/>
                    <img style="visibility:hidden; height: 0px;" class="img-circle" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>100x100_{{userGenderId}}.jpg?time=' . time()">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a style="color: black; font-size: 12px; font-weight: bold;" href="<?php echo base_url() ?>member/timeline"><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></a>
                </div>
            </div>
              <!--<textarea  ng-model="statusInfo.description" class="form-control form_control_custom_style textarea_custom_style"></textarea>-->
            <div class="row">
                <div class="col-xs-12">
                    <a style="color: black; font-size: 12px;" href="#">Edit Profile</a>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view("member/sections/menu/menu_link"); ?>
                </div>
            </div>
            <div class="row form-group"></div>
        </div>
        <!--MIDDLE COLUMN-->
        <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
            <div class="row form-group"></div>
            <?php $this->load->view("member/pagelets/post_status"); ?>
            <div class="row form-group"></div>
            <div ng-init="setStatus((<?php echo htmlspecialchars(json_encode($status_list)); ?>))">
                <?php $this->load->view("member/pagelets/updated_status"); ?>
            </div>
            <div class="row form-group"></div>
            <?php // $this->load->view("modal/modal_share_content"); ?>
            <div class="row form-group"></div>
            <?php // $this->load->view("member/pagelets/shared_link"); ?>
            <div class="row form-group"></div>
            <?php // $this->load->view("member/pagelets/shared_photo"); ?>
            <div class="row form-group"></div>
            <?php // $this->load->view("member/pagelets/shared_video"); ?>
            <div class="row form-group"></div>
            <?php // $this->load->view("member/pagelets/updated_profile_pic"); ?>
            <div class="row form-group"></div>
            <?php // $this->load->view("member/pagelets/shared_status"); ?>
            <div class="row form-group"></div>
        </div>
        <!--ADD COLUMN-->
    </div>
</div>
