<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Language Processing
        </title>        
        <!-- Bootstrap -->
        <link rel="stylesheet" type='text/css' href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>resources/css/styles.css'/>
        <link rel="stylesheet" type='text/css' href="<?php echo base_url(); ?>resources/css/template.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">
            <?php if (isset($message) && ($message != NULL)): ?>
            <div class="alert alert-danger alert-dismissible"><?php echo $message; ?></div>
            <?php endif; ?>
            <div class="row">
                <?php echo form_open("auth/login"); ?>
                <div class="col-md-4">
                    <span style="font-size: x-large"><?php echo lang('login_heading'); ?></span>
            <p><?php echo lang('login_subheading'); ?></p>
                </div>
                <div class="col-md-2">
                    asd
                </div>
                <div class="col-md-3">
                    <?php echo lang('login_identity_label', 'identity'); ?>
                    <?php echo form_input($identity); ?>
                </div>
                <div class="col-md-3">
                    <?php echo lang('login_password_label', 'password'); ?>
                    <?php echo form_input($password); ?>
                    <?php echo lang('login_remember_label', 'remember'); ?>
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                    <?php echo form_submit('submit', lang('login_submit_btn')); ?>
                    <a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="row">
                <div class="col-md-8">
                    asda
                </div>
                <div class="col-md-4">
                    asdasd
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">asd</div>
                <div class="col-md-2">asd</div>
                <div class="col-md-2">zxcz</div>
                <div class="col-md-2"> zxc</div>
                <div class="col-md-2">zzXczxc </div>
                <div class="col-md-2">asdasd</div>
            </div>
        </div>
    </body>
</html>