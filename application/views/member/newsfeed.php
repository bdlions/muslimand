<div class="row">
    <!--LEFT_COLUMN-->
    <div class="col-xs-2">
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
                <ul class="video_ul">
                    <a href="<?php echo base_url(); ?>member/newsfeed"><li>News Feed</li></a>
                    <a href="<?php echo base_url(); ?>member/messages"><li>Messages</li></a>
                    <a href="<?php echo base_url(); ?>member/friends"><li>Friends</li></a>
                    <a href="#"><li>Photos</li></a>
                    <a href="<?php echo base_url(); ?>videos/"><li>Videos</li></a>
                    <a href="#"><li>Blogs</li></a>
                    <a href="#"><li>Pages</li></a>
                    <a href="#"><li>Academy</li></a>
                    <a href="#"><li>Library</li></a>
                    <a href="#"><li>Fund Raising</li></a>
                    <a href="#"><li>Online Payment</li></a>
                    <a href="#"><li>Zakat</li></a>
                    <a href="#"><li>Shop</li></a>
                </ul>
            </div>
        </div>
        <div class="row form-group"></div>
    </div>
    <!--MIDDLE COLUMN-->
    <div class="col-xs-7">
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
    <div class="col-xs-3"></div>
</div>