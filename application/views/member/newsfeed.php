<div class="container-fluid" style="background-color: #E9EAED">
    <div class="row">

        <!--LEFT_COLUMN-->
        <div class="col-md-offset-1 col-md-2">
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-3">
                    <img  src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="40" height="40">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <a style=" color: black" href="#">Mohammad Azhar Uddin</a>
                        </div>
                        <div class="col-md-12">
                            <a style=" color: black" href="#">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> News Feed</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Messages</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Friends</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Blogs</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Pages</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Academy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Library</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Fund Raising</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Online Payment </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#"> Zakat </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a style=" color: black;" href="#">Shop </a>
                </div>
            </div>
            <div class="row form-group"></div>
        </div>
        
        <!--MIDDLE COLUMN-->
        <div class="col-md-5">
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

        <!--CHATBOX COLUMN-->
        <div class="col-md-offset-2 col-md-2" style="border-left: 1px solid lightgray">

            <!--CHATBOX_UPDATES-->
            <?php $this->load->view("member/sections/right_column_ticker_friends"); ?>
        </div>
    </div>


</div>

<!--FOOTER-->
<!--        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div style="padding: 20px 0px 0px 0px; color: #703684">
                        About | Contact | Terms
                    </div>
                </div>
            </div>
        </div>-->



