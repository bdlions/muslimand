<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir, Noor Alam, Tanveer, Rashida">
        <meta name="description" content="Social">
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/template.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/landingBanner.css"/>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/landingController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/landingService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/landingApp.js "></script>
        
        
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.custom.86080.js "></script>
        
        <title><?php echo WEBSITE_TITLE; ?></title>
    </head>
    <body>
        <div style="position: relative; z-index: 9999999!important;" >
            <div style="position: fixed; top: 0; width: 100%;">
                <div class="container-fluid"  style="background-color: #703684; color: white;">
                    <?php $this->load->view("auth/sections/header_with_login"); ?>
                </div>
            </div>
        </div>
        <div class="padding_top"></div>
        <div>
            <?php echo $contents; ?>                            
        </div>
        <div id="footer">
            <?php $this->load->view("auth/sections/non_member_footer"); ?>
        </div>
<!--        <div id="wrapper">
            <div id="header">
                <?php //$this->load->view("auth/sections/header_with_login"); ?>
            </div>
            <div style="background-color: #EDF0F5;">
                <div class="container-fluid">
                    <?php //echo $contents; ?>
                </div>
            </div>
            <div id="footer">
                <?php //$this->load->view("auth/sections/footer"); ?>
            </div>
        </div>-->
    </body>
</html>