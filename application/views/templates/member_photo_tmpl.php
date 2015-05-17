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
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/modernizr.2.5.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/lib/hash.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/photo.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <title>Muslimand</title>
    </head>

    <body>
        <div class="body_wrapper">
            <div class="header_wrapper">
                <div class="container_wrapper">
                    <div class="container-fluid">
                        <?php $this->load->view("member/sections/header_member"); ?>
                    </div>
                </div>
            </div>
            <div class="Padding_top"></div>
            <div class="container-fluid">
                <div class="container_background">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-9">
                            <?php echo $contents; ?>                            
                        </div>
                        <div class="col-md-2">
                            <div class="ticker_friends_wrapper">
                                <?php //$this->load->view("member/sections/right_column_ticker_friends"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div id="footer">
                                <?php $this->load->view("auth/sections/footer"); ?>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row form-group"></div>
                    <div class="row form-group"></div>
                </div>
            </div>
        </div>
    </body>
</html>
