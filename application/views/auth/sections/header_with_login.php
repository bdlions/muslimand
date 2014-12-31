<div class="container-fluid" style="padding-top: 10px; background-color: #703684; color: white">
    <div class="row form-group">
        <?php echo form_open("auth/login"); ?>
        <div class="col-md-offset-1 col-md-3">
            <div class="pull-left" style="text-align: center; padding-top: 10px;">
                <img height="32px" width="32px"src="<?php echo base_url(); ?>resources/images/logo.png" height="32px" width="32px" style="margin: 0px 10px 15px 0px;">
                <span style="font-size: 35px; line-height: 40px; "><b>Muslimand</b></span>
                <!--<br>Hello Muslims! Keep updated with Muslimand-->
            </div>
        </div>
        <div class="col-md-2" style="padding-top: 20px">
            <img style="width: 22px; height: 22px;"src="<?php echo base_url(); ?>resources/images/logins/facebook.png" >
            <img style="width: 22px; height: 22px;"src="<?php echo base_url(); ?>resources/images/logins/google.png" >
            <img style="width: 22px; height: 22px;"src="<?php echo base_url(); ?>resources/images/logins/twitter.png" >
            <img style="width: 22px; height: 22px;"src="<?php echo base_url(); ?>resources/images/logins/linkedin.png" >
            <img style="width: 22px; height: 22px;"src="<?php echo base_url(); ?>resources/images/logins/yahoo.png" >
            <img style="width: 22px; height: 22px;"src="<?php echo base_url(); ?>resources/images/logins/live.png" >
        </div>
        <div class="col-md-2">
            <!--<label>Email:</label>-->
            <div class="row">
                <div class="col-md-12">
                    <span>Email:</span>
                </div>  
                <div class="col-md-12">
                    <input type="email" class="" style="color: black; height: 20px; width: 100%;">
                </div>  
                <div class="col-md-12">
                    <input type="checkbox">
                    <span style="line-height: 22px;">Remember me</span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12">
                    <span>Password:</span>
                </div>

                <div class="col-md-12">
                    <input type ="password" class="" style="color: black; height: 20px;width: 100%;">
                </div>
                <div class="col-md-12">
                    <a style="color:white;" href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="" style="margin-top: 21px; margin-right: 16px;">  
                <button type="submit" class="pull-right" style="font-size: 10px; font-weight: normal; height: 20px; width: 100%; border: 0px; padding: 3px; background-color: white; color: #703684">Sign In</button>
            </div>  
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

