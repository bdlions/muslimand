<div class="row">
    <!--LEFT_COLUMN-->
    <div class="col-md-2">
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="100" height="100">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Mohammad Azhar Uddin</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a style="color: black; font-size: 12px;" href="#">Edit Profile</a>
            </div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">News Feed</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Messages</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Friends</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Blogs</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Pages</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Academy</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Library</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Fund Raising</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#"> Online Payment </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#"> Zakat </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <a style="color: black; font-size: 12px; font-weight: bold;" href="#">Shop </a>
            </div>
        </div>
        <div class="row form-group"></div>
    </div>
    <!--MIDDLE COLUMN-->
    <div class="col-md-7">
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