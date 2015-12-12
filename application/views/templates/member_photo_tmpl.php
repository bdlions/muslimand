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


        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.pictureflip.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/lib/hash.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/vendor/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/load-image.all.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-process.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-image.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/Utils.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ng-file-upload-shim.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/ng-file-upload.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/photoController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/imageUploadController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/headerContoller.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/rightController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/rightService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/photoService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/headerService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/photoApp.js "></script>
        
        <title>Shadhiin.com</title>
    </head>
    <body ng-app="<?php echo $app; ?>">
        <div class="body_wrapper">
            <div class="header_wrapper">
                <div class="container-fluid container_wrapper">
                    <?php $this->load->view("member/sections/header_member"); ?>
                </div>
            </div>
        </div>
        <div class="padding_top"></div>
        <div class="container_background">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-1 col-md-9">
                        <?php echo $contents; ?>                            
                    </div>
                    <div class="col-md-2">
                        <div class="ticker_friends_wrapper">
                            <?php $this->load->view("member/sections/right_column_ticker_friends"); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer">
                            <?php $this->load->view("auth/sections/footer"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
