<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir, Ridoy, Tanveer Ahmed, Rashida">
        <meta name="description" content="Social">
        <meta name="keywords" content=""/>
        <meta charset="UTF-8">
        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for AngularJS. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/photo.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/pictureflip.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.mCustomScrollbar.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.fileupload.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.fileupload-ui.css">


        <!--<jQuer and Javascript>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.2.5.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-latest.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.pictureflip.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/lib/hash.js"></script>
        <!--<angular>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular-animate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ui-bootstrap-tpls-0.13.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/elif.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!--<image upload>-->
        <script src="<?php echo base_url(); ?>resources/js/image/vendor/jquery.ui.widget.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/load-image.all.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-process.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-image.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ng-file-upload-shim.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ng-file-upload.min.js"></script>

        <!--<angular Controllers Services and Apps>-->        
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/imageUploadController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/statusController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/headerContoller.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/headerService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/statusService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/statusApp.js "></script>
        <title>Muslimand</title>
    </head>

    <body ng-app="<?php echo $app; ?>">
        <div style="position: relative; background-color: #E9EAED" >
            <div style="position: fixed; top: 0; width: 100%; z-index: 20; box-shadow: 0 4px 4px -2px gray;">
                <div class="container-fluid"  style="background-color: #703684; color: white; padding: 6px 9px">
                    <?php $this->load->view("member/sections/header_member"); ?>
                </div>
            </div>
        </div>
        <div style="padding-top: 70px"></div>
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
        <?php $this->load->view("common/common_delete_confirmation_modal"); ?>
    </body>
</html>