<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir, Ridoy, Tanveer Ahmed, Rashida">
        <meta name="description" content="Social">
        <meta name="keywords" content=""/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/page.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.mCustomScrollbar.css"/>
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">

        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/headerContoller.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/Utils.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/headerService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/rightController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/rightService.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/headerApp.js "></script>

       <title><?php echo WEBSITE_TITLE?></title>
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
