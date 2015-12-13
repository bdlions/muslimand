<div class="container-fluid" style="padding-top: 10px; margin-bottom: -6px; background-color: #703684; color: white">
    <div class="row">
        <?php echo form_open("auth/login"); ?>
        <div class="col-md-4">
            <div style="text-align: center; padding-top: 14px; padding-left: 110px;">
                <img class="img-circle" src="<?php echo base_url(); ?>resources/images/logo.png" style="margin: 0px 3px 20px 0px;">
                <img src="<?php echo base_url(); ?>resources/images/shadhiin.com.png" style="margin: 0px 10px 22px 0px; border-radius: 3px;">
            </div>
        </div>
        <div class="col-md-2 form-group" style="padding-top: 20px">
            <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/facebook.png" >
            <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/google.png" >
            <a href="<?php echo base_url().'auth/twitter'; ?>">
                <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/twitter.png" >
            </a>
            
            <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/linkedin.png" >
            <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/yahoo.png" >
            <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/live.png" >
        </div>
        <div class="col-md-2 col-xs-12 form-group">
            <!--<label>Email:</label>-->
            <div class="row">
                <div class="col-md-12">
                    <span>Email:</span>
                </div>  
                <div class="col-md-12">
                    <input id="identity" name="identity" type="email" class="" style="color: black; height: 22px; width: 100%;">
                </div>  
                <div class="col-md-12">
                    <input id="remember" name="remember" type="checkbox" >
                    <span style="line-height: 22px;">Remember me</span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <span>Password:</span>
                </div>
                <div class="col-md-12">
                    <input id="password" name="password" type ="password" class="" style="color: black; height: 22px;width: 100%;">
                </div>
                <div class="col-md-12">
                    <div style="margin-top: 2px;">
                        <a style="color:white;" href="<?php base_url()?>password_recover ">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-xs-12 form-group">
            <div class="margin_style" style="margin-top: 18px;">  
                <input id="login_btn" name="login_btn" type="submit" style="font-size: 10px; font-weight: normal; height: 20px; width: 100%; border: 0px; background-color: white; color: #703684;" value="Sign In"/>
            </div>  
        </div>
        <div class="col-md-offset-1"></div>
        <?php echo form_close(); ?>
    </div>
</div>

