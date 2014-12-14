<div class="container-fluid form-group" style="padding-top: 10px; background-color: #62C362; color: white">
    <div class="row">
        <?php echo form_open("auth/login"); ?>
        <div class="col-md-4" style="text-align: center">
            <span style="font-size: 50px; line-height: 50px;">Muslimand</span>
            <br>Hello Muslims! Keep updated with Muslimand
        </div>
        <div class="col-md-3">
            facebook tweeter
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label class="control-label">Email:</label> 
                <?php echo form_input($identity + array('class' => 'form-control')); ?>
            </div>
            <div class="">
                <input type="checkbox"> <label class="control-label"> Remember me</label> 
            </div>

        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label class="control-label">Password:</label>
                <?php echo form_input($password + array('class' => 'form-control')); ?>
            </div>
            <div class="">                
             
                <a href="forgot_password" style="font-weight: bolder; color: white">Forgot password?</a>
            </div>
        </div>
        <div class="col-md-1">
            <div class="" style="margin-top: 25px">                
                <?php echo form_input($login_btn + array('class' => 'btn btn-success pull-right')); ?>
                
            </div>
        </div>
       

        <?php echo form_close(); ?>
    </div>
</div>

