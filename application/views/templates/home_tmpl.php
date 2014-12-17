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
    </head>
    <body class="back">
        <?php $this->load->view("nonmember/sections/header_with_login"); ?>
        <?php echo $contents; ?>
        <?php $this->load->view("nonmember/sections/footer"); ?>
    </body>
</html>