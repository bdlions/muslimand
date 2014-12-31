
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/bootstrap.min.css"/>
        <!--<link rel="stylesheet" href="css/my_css.css"/>-->
        <!--<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>resources/css/jquery-ui.css">
        <script src="<?php echo base_url() ?>resources/js/jquery-ui.js"></script>
        <style>
            .main_wrapper {
                width: 100%;
                margin: 0 auto;

            }
            .top{ background-color : #703684 ;}
            .middle{ background-color:#EDF0F5 ;}
            .footer{background-color: #FFFFFF;}
            a:link{
                color: yellow;
                text-decoration: none;
            }
            a:visited{
                color: violet;
                text-decoration: none;
            }
            a:hover{
                color: green;
                text-decoration: underline;
            }
            a:active{
                color: pink;
                text-decoration: underline;
            }
        </style>
        <title>Profile Name</title>
    </head>
    <body>
        <!--HEADER-->
        <?php $this->load->view("member/sections/header_member"); ?>

        <!--BODY-->
        <div class="container-fluid" style="background-color: #E9EAED">
            <div class="row">

                <!--LEFT_COLUMN-->
                <div class="col-md-offset-1 col-md-8">
                    <div class="row form-group"></div>


                    <!-- Cover Image -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="profilePicThumb" href="#">
                                <img style="position: absolute; bottom: -20px; left: 15px; "class="profilePic img" src="<?php echo base_url() ?>resources/images/Food.jpg" width="160px" height="160px">
                            </a>
                            <a  style="position: absolute; bottom: 2px; left: 180px; color: white;"class="btn" href=""><b>Mohammad Azhar Uddin</b></a>
                            <button type="button" class="btn btn-default" style="position: absolute; top: 10px; left: 20px; font-size: 80%">Upload cover photo</button>
                            <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%">Update Info</button>
                            <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  20px; font-size: 80%">View Activity Log</button>
                            <img src="<?php echo base_url() ?>resources/images/car.jpg" style="margin-left: -15px;"width="104%" height="52%">
                        </div>

                        <!-- Dropdown Menu --> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="coverBorder" >
                                    <div class="btn-group" role="group" aria-label="..." style="position: relative; left: 175px;">
                                        <button type="button" class="btn btn-default" style="font-size: 100%">Timeline</button>
                                        <button type="button" class="btn btn-default" style="font-size: 100%">About</button>
                                        <button type="button" class="btn btn-default" style="font-size: 100%">Photo</button>
                                        <button type="button" class="btn btn-default" style="font-size: 100%">Friends</button>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                More
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Groups</a></li>
                                                <li><a href="#">Likes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="row form-group"></div>

                    <!--CARDS AFTER BANNER-->
                    <div class="row">
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-7">

                            <div class="row form-group"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="background-color: #F6F7F8; padding: 15px">
                                        <div class="row">
                                            <div class="col-md-4">Update Status</div>
                                            <div class="col-md-8">Photo</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row form-group"></div>
                                                <textarea class="form-control" placeholder="What's on your mind ?"></textarea>
                                                <div class="row form-group"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <img src="<?php echo base_url(); ?>resources/images/add_img_place_ppl.PNG">
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-info pull-right form-control">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group"></div>



                            <div class="pagelet">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo base_url() ?>resources/images/car.jpg" alt="Smiley face" width="40" height="40">
                                        <a style="color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a>
                                    </div>
                                </div>
                                <div class="row form-group"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        Charidik e adhar oshlil kalo
                                        srostha'r kache minotei dekhao ektu alo....
                                    </div>
                                </div>
                            </div>
                            <div class="pagelet">
                                60 people like this.
                                <div class="pagelet_divider"></div>
                                <div class="user_comment">
                                    <img src="<?php echo base_url() ?>resources/images/car.jpg" alt="Smiley face" width="40" height="40">
                                    <a style="color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a>
                                </div>
                                <div class="user_comment">
                                    <img src="<?php echo base_url() ?>resources/images/car.jpg" alt="Smiley face" width="40" height="40">
                                    <a style="color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a>
                                </div>
                                <div class="user_comment">
                                    <img src="images/car.jpg" alt="Smiley face" width="40" height="40">
                                    <a style="color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a>
                                </div>
                                <div class="user_comment">
                                    <img src="<?php echo base_url() ?>resources/images/car.jpg" alt="Smiley face" width="40" height="40">
                                    <a style="color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group"></div>
                </div>

                <!--CHATBOX COLUMN-->
                <div class="col-md-offset-1 col-md-2" style="border-left: 1px solid lightgray">

                    <!--CHATBOX_UPDATES-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url() ?>resources/images/car.jpg"  width="30" height="30"> 
                                </div>
                                <div class="col-md-9">
                                    <a style="color: black; font-size: 11px;" href="#"><b>Profile Name One</b> hacked your profile</a> 
                                </div>
                                <div class="form-group"></div>
                            </div>
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url() ?>resources/images/car.jpg"  width="30" height="30"> 
                                </div>
                                <div class="col-md-9">
                                    <a style="color: black; font-size: 11px;" href="#"><b>Profile Name Three</b> likes your photos</a> 
                                </div>
                                <div class="form-group"></div>
                            </div>  
                        </div>
                        <div class="form-group"></div>
                    </div>


                    <!-- ChatBox-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row form-group"></div>

                            <!--CHATBOX_FRIENDS-->
                            <div class="row">
                                <div class="form-group"></div>
                                <div class="col-md-3">
                                    <img src="images/car.jpg"  width="30" height="30">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: black; font-size: 80%" href="#"> Profile Name One</a>
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


<!--    </body>












    <body>
        <div class="main_wrapper top">
            <div class="container-fluid">

                 Middle 
                <div class="row middle">

                     Cover 
                    <div class="col-md-7" style="background-color: white; position: relative; border: 1px solid #DCDCDC;">

                         Cover Image 
                        <div class="row">

                            <div class="col-md-12">
                                <a id="u_jsonp_12_6" class="profilePicThumb" rel="theater" href="#">
                                    <img style="position: absolute; bottom: -20px; left: 15px; "class="profilePic img" src="<?php echo base_url() ?>resources/images/Food.jpg" width="160px" height="160px">
                                    <button type="button" class="btn btn-default" style="position: absolute; bottom: 2px; left: 30px; font-size: 80%">Upload profile picture</button>
                                </a>
                                <a  style="position: absolute; bottom: 2px; left: 180px;"class="btn" href=""><b>Profile Name</b></a>
                                <button type="button" class="btn btn-default" style="position: absolute; top: 10px; left: 20px; font-size: 80%">Upload cover photo</button>
                                <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%">Update Info</button>
                                <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  20px; font-size: 80%">View Activity Log</button>
                                <img src="<?php echo base_url() ?>resources/images/car.jpg" style="margin-left: -15px;"width="104%" height="52%">
                            </div>


                             Dropdown Menu  
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coverBorder" >
                                        <div class="btn-group" role="group" aria-label="..." style="position: relative; left: 175px;">
                                            <button type="button" class="btn btn-default" style="font-size: 100%">Timeline</button>
                                            <button type="button" class="btn btn-default" style="font-size: 100%">About</button>
                                            <button type="button" class="btn btn-default" style="font-size: 100%">Photo</button>
                                            <button type="button" class="btn btn-default" style="font-size: 100%">Friends</button>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    More
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Groups</a></li>
                                                    <li><a href="#">Likes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                         status update
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group"></div>
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-8">
                                        <div class="form-group"></div>
                                        <p>
                                            In the end, it's not going to matter how many breaths you took, but how many moments took your breath away
                                            - shing xiong    
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                     Advertisement Section 
                    <div class="col-md-2">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <ul style="list-style-type: none">
                                    <li><a style="color: black" href="#">Recent</li></a>
                                    <li><a style="color: black" href="#">2014</li></a>
                                    <li><a style="color: black" href="#">2013</li></a>
                                    <li><a style="color: black" href="#">2012</li></a>
                                    <li><a style="color: black" href="#">2011</li></a>
                                    <li><a style="color: black" href="#">2010</li></a>
                                    <li><a style="color: black" href="#">Born</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2" style="position: relative; width: 200px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <img src="<?php echo base_url() ?>resources/images/car.jpg"  width="30" height="30"> 
                                        </div>
                                        <div class="col-md-9">
                                            <a style="color: black; font-size: 11px;" href="#"><b>Profile Name One</b> hacked your profile</a> 
                                        </div>
                                    </div>  
                                    <div class="form-group"></div>
                                </div>
                                <div class="row">
                                    <div class="form-group"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <img src="<?php echo base_url() ?>resources/images/car.jpg"  width="30" height="30"> 
                                        </div>
                                        <div class="col-md-9">
                                            <a style="color: black; font-size: 11px;" href="#"><b>Profile Name Three</b> likes your photos</a> 
                                        </div>
                                    </div>  
                                    <div class="form-group"></div>
                                </div>  
                            </div>
                            <div class="form-group"></div>
                        </div>


                         Chat Box
                        <div class="row">
                            <div class="form-group"></div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <img src="<?php echo base_url() ?>resources/images/car.jpg"  width="30" height="30">
                                        </div>
                                        <div class="col-md-9">
                                            <a style="color: black; font-size: 80%" href="#"> Profile Name One</a>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                </div>
                                <div class="row">
                                    <div class="form-group"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <img src="<?php echo base_url() ?>resources/images/Food.jpg"  width="30" height="30">
                                        </div>
                                        <div class="col-md-9">
                                            <a style="color: black; font-size: 80%" href="#"> Profile Name One</a>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                </div>
                                <div class="row">
                                    <div class="form-group"></div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <img src="<?php echo base_url() ?>resources/images/car.jpg"  width="30" height="30">
                                        </div>
                                        <div class="col-md-9">
                                            <a style="color: black; font-size: 80%" href="#"> Profile Name One</a>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             Footer
                        <div class="row footer" style="padding: 20px 0 20px 180px; margin: 45px 0px 0px 0px; ">
                            <div class="col-md-12">
                                &COPY; All right reserved
                            </div>
                        </div>
        </div>
    </div>
</body>-->
</html>
