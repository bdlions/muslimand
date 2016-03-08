<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir, Ridoy, Tanveer Ahmed, Rashida Sultana">
        <meta name="description" content="Social">
        <meta name="keywords" content=""/>
        <meta charset="UTF-8">
        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for AngularJS. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/photo.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/image-crop-styles.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/imageCrop.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.mCustomScrollbar.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/pictureflip.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.fileupload.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.fileupload-ui.css">
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/video.css"/>


        <!--<jQuer and Javascript>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.2.5.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-latest.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.pictureflip.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/lib/hash.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/moment.min.js"></script>



        <!--<angular>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular-animate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ui-bootstrap-tpls-0.13.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/elif.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>



      <!--<image upload>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/vendor/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/load-image.all.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-process.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-image.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ng-file-upload-shim.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ng-file-upload.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/ng-infinite-scroll.min.js"></script>



        <!--<angular controllers>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/imageUploadController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/imageCropController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/headerContoller.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/searchController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/rightController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/basicProfileController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/friendController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/messageController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/statusController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/photoController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/videoController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/Utils.js"></script>

        <!--<angular services>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/headerService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/searchService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/rightService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/basicProfileService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/friendService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/messageService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/statusService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/photoService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/videoService.js"></script>
        <!--<angular app's>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/headerApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/searchApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/memberProfileApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/basicProfileApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/friendApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/messageApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/statusApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/imageCropperApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/photoApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/videoApp.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image-crop.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-websocket.js"></script>

        <title><?php echo WEBSITE_TITLE ?></title>
    </head>
    <body ng-app="<?php echo $app; ?>">
        <div style="position: relative; background-color: #E9EAED;" >
            <div style="position: fixed; top: 0; width: 100%; z-index: 10000;">
                <div class="container-fluid"  style="background-color: #703684; color: white; height: 48px;">
                    <?php $this->load->view("member/sections/header_member"); ?>
                </div>
            </div>
        </div>
        <div class="padding_top"></div>
        <div class="container-fluid" style="background-color: #E9EAED;">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-offset-1 col-md-7 col-lg-offset-1 col-lg-7 ">
                    <?php echo $contents; ?>                            
                </div>
                <div class="col-xs-4 col-sm-4 col-md-offset-2 col-md-2 col-lg-offset-2 col-lg-2">
                    <div style="position: fixed; height: 300px">
                        <?php $this->load->view("member/sections/right_column_ticker_friends"); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
