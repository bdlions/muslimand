<div class="container-fluid" style="padding-top: 10px; background-color: #703684; color: white">
    <div class="row form-group">
        <?php echo form_open("auth/login"); ?>
        <div class="col-md-offset-1 col-md-3">
            <div class="pull-left" style="text-align: center" >

                <span style="font-size: 50px; line-height: 50px;">Muslimand</span>
                <br>Hello Muslims! Keep updated with Muslimand
            </div>
        </div>
        <div class="col-md-2">
            facebook tweeter
        </div>
        <div class="col-md-2">
<!--            <div class="">
                <label class="control-label">Email:</label> 
            </div>
                <?php echo form_input($identity + array('class' => '', 'style' => 'width: 100%')); ?>
            <div style="padding-top: 5px">
                 <input type="checkbox"> Remember me 
            </div>-->
            <label>Email:</label>
            <div><?php echo form_input($identity + array('style' => 'width: 100%')); ?></div>
            <div><input type="checkbox" style="vertical-align: top"> Remember me </div>

        </div>
        <div class="col-md-2">
<!--            <div class="form-group">
                <label class="control-label">Password:</label>
                <?php echo form_input($password + array('class' => 'form-control')); ?>
            </div>
            <div class="">                
             
                <a href="forgot_password" style="font-weight: bolder; color: white">Forgot password?</a>
            </div>
            
            -->
            <label>Password:</label>
            <div><?php echo form_input($password + array('style' => 'width: 100%')); ?></div>
            <div><a href="" style="color: white">Forgot password?</a></div>

        </div>
        <div class="col-md-1">
            <div class="" style="margin-top: 25px">                
                <?php echo form_input($login_btn + array('class' => 'pull-right', 'style' => 'width: 100%; border: 0px; padding: 3px; color: #703684')); ?>
                
            </div>
        </div>
       

        <?php echo form_close(); ?>
    </div>
</div>

