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
        
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/landingController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/landingService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/landingApp.js "></script>
        <title>Sadiik.com</title>
    </head>
    <body class="back">
        <div id="wrapper">
            <div id="header">
                <?php $this->load->view("auth/sections/header_with_login"); ?>
            </div>
            <div style="background-color: #EDF0F5;">
                <div class="container-fluid">
                    <?php echo $contents; ?>
                </div>
            </div>
            <div id="footer">
                <?php $this->load->view("auth/sections/footer"); ?>
            </div>
        </div>
    </body>
</html>