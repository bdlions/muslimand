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
                        <div class="col-md-12">
                            <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/car.jpg" alt="Smiley face" width="100" height="100">
                            <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a>
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
                </div>


                <!--CHATBOX COLUMN-->
                <div class="col-md-offset-2 col-md-2" style="border-left: 1px solid lightgray">

                    <!--CHATBOX_UPDATES-->
                    <div class=" row">
                        <div class=" col-md-12">
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: black; font-size: 11px;" href="#"><b>Profile Name One</b> hacked your profile</a> 
                                </div>
                                <div class=" form-group"></div>
                            </div>
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: black; font-size: 11px;" href="#"><b>Profile Name Three</b> likes your photos</a> 
                                </div>
                                <div class=" form-group"></div>
                            </div>  
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: black; font-size: 11px;" href="#"><b>Profile Name Three</b> likes your photos</a> 
                                </div>
                                <div class=" form-group"></div>
                            </div>  
                            <div class=" row">
                                <div class=" form-group"></div>
                                <div class=" col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="30" height="30"> 
                                </div>
                                <div class=" col-md-9">
                                    <a style=" color: black; font-size: 11px;" href="#"><b>Profile Name Three</b> likes your photos</a> 
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
                            <?php for ($i = 0; $i<10; $i++){?>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: black; font-size: 80%" href="#"> Profile Name One</a>
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <?php }?>
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