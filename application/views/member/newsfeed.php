<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <title>Muslimand</title>
    </head>
    <body>

        <!--HEADER-->
        <?php $this->load->view("member/sections/header_member"); ?>

        <!--BODY-->
        <div class="container-fluid" style="background-color: #E9EAED">
            <div class="row">

                <!--LEFT_COLUMN-->
                <div class="col-md-offset-1 col-md-2">
                    <div class="row form-group"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <img  src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_8.jpg" width="40" height="40">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <a style=" color: black" href="#">Mohammad Rafique</a>
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
                    <div class=" row">
                        <div class=" col-md-12">
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_1.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: #3B59A9; font-size: 11px;" href="#"><b>Dr. Belal</b></a> shared a video.
                                </div>
                                <div class=" form-group"></div>
                            </div>
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: #3B59A9; font-size: 11px;" href="#"><b>Maria Islam</b></a> likes your photos. 
                                </div>
                                <div class=" form-group"></div>
                            </div>  
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_3.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: #3B59A9; font-size: 11px;" href="#"><b>Barak Obama</b></a> likes your photos. 
                                </div>
                                <div class=" form-group"></div>
                            </div>  
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: #3B59A9; font-size: 11px;" href="#"><b>Fatematul Kobra</b></a> likes your comments. 
                                </div>
                                <div class=" form-group"></div>
                            </div>  
                        </div>
                    </div>
                    <div class=" form-group"></div>
                    <div style="border-bottom: 2px solid lightgray"></div>
                    <!-- ChatBox-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row form-group"></div>

                            <!--CHATBOX_FRIENDS-->

                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_1.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#">Dr. Belal</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#"> Sharmin Akter</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#"> Mohammad Azhar Uddin</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#">Fatematul Kobra</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_3.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#">Barak Obama</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#">Jannatul Ferdaus</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: #3B59A9; font-size: 80%" href="#">Maria Islam</a>
                                </div>
                                <div class="form-group"></div>
                            </div>

                            <div class="row form-group"></div>
                        </div>
                    </div>
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


    </body>
</html>