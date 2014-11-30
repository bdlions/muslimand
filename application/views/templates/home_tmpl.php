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
    </head>
    <body class="back">
        <?php $this->load->view("templates/sections/header_with_login");?>
        <div class="container">
            <div class="row">
                <?php echo $contents; ?>
            </div>
        </div>
        <?php $this->load->view("templates/sections/footer");?>
    </body>
</html>