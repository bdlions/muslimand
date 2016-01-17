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
        
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <link rel="stylesheet" href="resources/css/jquery.navgoco.css"/>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="resources/js/jquery.navgoco.js"></script>
        
        <title><?php echo WEBSITE_TITLE?></title>
    </head>

    <body>
        <div style="position: relative; background-color: #E9EAED">
            <div style="position: fixed; top: 0; width: 100%; z-index: 20; box-shadow: 0 4px 4px -2px gray;">
                <div class="container-fluid"  style="background-color: #703684; color: white; padding: 0 15px">
                    <?php $this->load->view("auth/sections/header_with_logo"); ?>
                </div>
            </div>
        </div>
        <div style="padding-top: 60px"></div>
        <div class="container-fluid" style="background-color: #E9EAED;">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="row padding_top_over_row_70px">
                        <div class="col-md-12">
                            <div class="text_center font_25px pagelet_title">Welcome Admin</div>
                        </div>
                    </div>
                    <?php echo $contents; ?>                            
                </div>
                <div class="col-md-offset-1"></div>
            </div>
        </div>
    </body>
</html>
