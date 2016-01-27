<div class="container-fluid" style="padding-top: 10px; background-color: #703684; color: white">
    <div class="row form-group">
        <?php echo form_open("auth/login"); ?>
        <div class="col-md-offset-1 col-md-3">
            <div class="pull-left" style="text-align: center" >
                <img src="<?php echo base_url();?>resources/images/logo.png" height="50px" width="50px" style="margin: -30px 10px 0px 0px; ">
                <span style="font-size: 50px; line-height: 55px;">Muslimand</span>
                <!--<br>Hello Muslims! Keep updated with Muslimand-->
            </div>
        </div>
        <div class="col-md-2" style="padding: 15px 0px 0px 0px">
            <img src="<?php echo base_url();?>resources/images/logins/facebook.png" >
            <img src="<?php echo base_url();?>resources/images/logins/google.png" >
            <img src="<?php echo base_url();?>resources/images/logins/twitter.png" >
            <img src="<?php echo base_url();?>resources/images/logins/linkedin.png" >
            <img src="<?php echo base_url();?>resources/images/logins/yahoo.png" >
            <img src="<?php echo base_url();?>resources/images/logins/live.png" >
        </div>
        <div class="col-md-2">
            Email:
            <!--<label>Email:</label>-->
            <div style="color: #703684"><?php echo form_input($identity + array('style' => 'width: 100%')); ?></div>
            <div><input type="checkbox" name="remember" style="vertical-align: top"> Remember me </div>
        </div>
        <div class="col-md-2">
            Password:
            <!--<label>Password:</label>-->
            <div style="color: #703684"><?php echo form_input($password + array('style' => 'width: 100%')); ?></div>
            <div><a href="" style="color: white">Forgot password?</a></div>
        </div>
        <div class="col-md-1">
            <div class="" style="margin-top: 20px">                
                <?php echo form_input($login_btn + array('class' => 'pull-right', 'style' => 'width: 100%; border: 0px; padding: 3px; color: #703684')); ?>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

