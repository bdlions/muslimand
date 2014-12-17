<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>

        <style>
            .main_wrapper {
                width: 100%;
                margin: 0 auto;

            }
            .top{ background-color : #703684 ;}
            .middle{ background-color:#EDF0F5 ;}
            .footer{background-color: #FFFFFF;}
        </style>

        <title>Muslimand</title>
    </head>
    <body>
        <div class="main_wrapper" id="top">
             <div class="container-fluid">
                <div class="row top" style="padding: 20px 0 20px 0;">
                    <div class="col-md-1 ">
                        <img style=" margin-left: 80px" src="images/car.jpg"  width="30" height="32">
                    </div>

                    <div class="col-md-5">
                        <input type ="text" class="form-control" style=" font-size: 120%"placeholder="Search for people, places and things">
                    </div>
                </div>
                <div class="row middle" style="margin: 0px 0px 30px 0px; padding: 30px 0 30px 0;">
                    <div class="col-md-offset-1 col-md-1">
                        <img src="images/car.jpg" alt="Smiley face" width="42" height="42">
                        <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name</a></br></br>
                        <a style=" color: black; font-size: 120%" href="http://localhost/BootstrapTraining/News_feed.php"> News Feed</a>
                    </div>
                    <div class="col-md-4">




                        <form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">

                            <div class="share">
                                <div class="arrow"></div>
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="fa fa-file"></i> Update Status</div>
                                    <div class="panel-body">
                                        <div class="">
                                            <textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <div class=" btn-group-sm">

                                                        <button type="button" class="btn-group"><i class="icon"></i>Tag</button>
                                                        <button type="button" class="btn-group"><i class="icon icon-map-maker"></i> Location</button>
                                                        <button type="button" class="btn-group"><i class="icon icon-picture"></i> Photo</button>
                                                        <button type="button" class="btn-group"><i class="icon"></i> Emotion</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="privacy" class="_42ft _4jy0 _11b _4jy3 _4jy1 selected _51sy_42ft _4jy0 _11b _4jy3 _4jy1 selected _51sy">
                                                        <option value="1" selected="selected">Public</option>
                                                        <option value="2">Friends</option>
                                                        <option value="3">Only me</option>
                                                    </select>                                    
                                                    <input name="submit" type="submit" style=" color: white; background-color: #703684" value="Post" class="_42ft _4jy0 _11b _4jy3 _4jy1 selected _51sy_42ft _4jy0 _11b _4jy3 _4jy1 selected _51sy">                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>



                    <div class="col-md-2" style=" background-color: white">
                        <p>How many request</p>
                        <hr>
                        <p>People You May Know</p>
                    </div>
                    <div class=" col-md-1" >
                        <
                    </div>
                    <div class="col-md-3">

                        <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php">Profile Name One hacked your profile</a></br>
                        <hr>
                        <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name Three likes your photos</a></br>
                        <hr>

                        <img src="images/car.jpg"  width="42" height="42">
                        <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name One</a></br>
                        <img src="images/car_1.jpg"  width="42" height="42">
                        <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name Two</a></br>
                        <img src="images/Food.jpg"  width="42" height="42">
                        <a style=" color: black" href="http://localhost/BootstrapTraining/News_feed.php"> Profile Name Three</a></br>
                    </div>

                </div>  

                <div class="row footer" style="padding: 20px 0 20px 180px; margin: -45px 0px 0px 0px; ">
                    <div class="col-md-12">


                        &COPY; All right reserved
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('.status').click(function () {
            $('.arrow').css("left", 0);
        });
        $('.photos').click(function () {
            $('.arrow').css("left", 146);
        });
    });
</script>