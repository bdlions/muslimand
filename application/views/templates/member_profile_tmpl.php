<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir, Ridoy, Tanveer Ahmed, Rashida Sultana">
        <meta name="description" content="Social">
        <meta name="keywords" content=""/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/basicProfileController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/basicProfileService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/basicProfileApp.js "></script>
        <title>Muslimand</title>
    </head>

    <body>
        <div style="position: relative; background-color: #E9EAED">
            <div style="position: fixed; top: 0; width: 100%; z-index: 20; box-shadow: 0 4px 4px -2px gray;">
                <div class="container-fluid"  style="background-color: #703684; color: white; padding: 6px 9px">
                    <?php $this->load->view("member/sections/header_member"); ?>
                </div>
            </div>
            <div style="padding-top: 70px"></div>
            <div class="container-fluid" style="background-color: #E9EAED;">
                <div class="row">
                    <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-9 col-lg-offset-1 col-lg-9 ">
                        <?php echo $contents; ?>                            
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
                        <div style="position: fixed; right: 0; top: 60px; z-index: 19; height: 90%;">
                            <?php // $this->load->view("member/sections/right_column_ticker_friends"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
