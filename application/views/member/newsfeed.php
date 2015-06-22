<div class="row">
    <!--LEFT_COLUMN-->
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-xs-12">
                <img class="img-circle" src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="100" height="100">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Mohammad Azhar Uddin</a>
            </div>
        </div>
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
    <div class="col-md-7 col-xs-12 col-sm-12 col-lg-7">
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/post_status"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/shared_status"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/shared_link"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/shared_photo"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/shared_video"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/updated_profile_pic"); ?>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/updated_status"); ?>
        <div class="row form-group"></div>
    </div>
    <!--ADD COLUMN-->
    <div class="col-md-3"></div>
</div>