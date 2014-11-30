<div class="row form-group">
    <div class="col-md-12">
        <div class="container-fluid" style="padding-top: 10px; background-color: #62C362; color: white">
            <div class="row">
                <?php echo form_open("auth/login"); ?>
                <div class="col-md-4" style="text-align: center">
                    <span style="font-size: 50px">Muslimand</span>
                    <br>Hello Muslims! Keep updated with Muslimand
                </div>
                <div class="col-md-3">
                    facebook tweeter
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label class="control-label">Email/Username:</label> 
                        <?php echo form_input($identity + array('class' => 'form-control')); ?>
                    </div>
                    <div class="">
                        <input type="checkbox"> <label class="control-label"> Remember Me</label> 
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="">
                        <label class="control-label">Password:</label>
                        <?php echo form_input($password + array('class' => 'form-control')); ?>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-default pull-right col-md-3" style="font-size: 12px; font-weight: bolder; color: #62C362; line-height: 5px; margin-top: 5px">Log In</button>
                        <a href="forgot_password" style="font-weight: bolder; color: white">Forgot password?</a>
                    </div>
                </div>
                <div class="col-md-1"></div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>