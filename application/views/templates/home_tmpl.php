<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Social">
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir, Noor Alam, Tanveer, Rashida">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <meta name="keywords" content=""/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Muslimand</title>

        <link rel="stylesheet" type='text/css' href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>resources/css/styles.css'/>
        <link rel="stylesheet" type='text/css' href="<?php echo base_url(); ?>resources/css/template.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <style>
            html,
            body {
            margin:0;
            padding:0;
            height:100%;
            }
            #wrapper {
            min-height:100%;
            position:relative;
            }
            #header {
            }
            #content {
            padding-bottom:80px; /* Height of the footer element */
            }
            #footer {
            background-color: #fff;
            width:100%;
            height:80px;
            position:absolute;
            bottom:0;
            left:0;
            }
        </style>
    </head>
<!--        <body>
            <div id="wrapper">
                
            </div>
        </body>-->
    <body class="back">
        <div id="wrapper">
            <div style="background-color: #EDF0F5">
                <div id="header">
                    <?php $this->load->view("auth/sections/header_with_login"); ?>
                </div>
                <div id="content">
                    <?php echo $contents; ?>
                </div>
                <div id="footer">
                    <?php $this->load->view("auth/sections/footer"); ?>
                </div>
            </div>
        </div>
    </body>
</html>