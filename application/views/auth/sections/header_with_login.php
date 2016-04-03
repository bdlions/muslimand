<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="z-index: 999999; background-color: #703684; border-bottom: 1px solid #703684;">
    <div class="navbar-header" style="background-color: #703684">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#open-collapse"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
    </div>
    <div class="container landingImgHeader">
        <div class="collapse navbar-collapse" id="open-collapse">
            <div class="row">
                <?php echo form_open("auth/login"); ?>
                <div class="col-md-4">
                    <div class="loginPageLogo">
                        <img class="img-circle img-responsive login_logo_mg" src="<?php echo base_url(); ?>resources/images/logo.png">
                        <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/shadhiin.com.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4" style="padding-top: 20px">
        <!--                    <img style="padding: 2px; border-radius: 5px;"src="<?php //echo base_url();              ?>resources/images/logins/facebook.png" >
                            <img style="padding: 2px; border-radius: 5px;"src="<?php //echo base_url();              ?>resources/images/logins/google.png" >-->
                            <a href="<?php echo base_url() . 'auth/twitter'; ?>">
                                <img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/twitter.png" >
                            </a>
        <!--                    <img style="padding: 2px; border-radius: 5px;"src="<?php //echo base_url();              ?>resources/images/logins/linkedin.png" >
                            <img style="padding: 2px; border-radius: 5px;"src="<?php //echo base_url();              ?>resources/images/logins/yahoo.png" >
                            <img style="padding: 2px; border-radius: 5px;"src="<?php //echo base_url();              ?>resources/images/logins/live.png" >-->
                        </div>
                        <div class="col-md-6">
                            <table class="table login_form">
                                <tbody>
                                    <tr>
                                        <td >
                                            <span>Email:</span>
                                        </td>
                                        <td >
                                            <span>Password:</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="identity" name="identity" type="email" class="form-control auth_custom_form_control">
                                        </td>
                                        <td>
                                            <input id="password" name="password" type ="password" class="form-control auth_custom_form_control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="remember" name="remember" type="checkbox"  style="">
                                            <span >Remember me</span>
                                        </td>
                                        <td >
                                            <div style="margin-top: 2px;">
                                                <a style="color:white;" href="<?php base_url() ?>auth/password_recover ">Forgot your password?</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2">
                            <div class="margin_style" style="margin-top: 18px;">  
                                <input id="login_btn" class="form-group auth_sign_button" name="login_btn" type="submit" style="" value="Sign In"/>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</nav>