<div style="">
    <div class="row padding_top_over_row" style="margin-left: 10px;">
        <div class="col-md-offset-1 col-md-10">
            <div class="row form-group">
                <span style="font-size: 30px">Wrong password</span>
            </div>  
            <?php if (isset($message) && ($message != NULL)): ?>
                <div class="alert alert-danger alert-dismissible"><?php echo $message; ?></div>
            <?php endif; ?>
            <div class="row form-group">  
                <div class="col-md-12">
                    Please Re-enter your Password
                </div>
            </div>
            <?php echo form_open("auth/login"); ?>

            <div class="row form-group">
                <label class="col-md-2" class="control-label">Email</label>
                <div class="col-md-6">
                    <?php echo form_input($identity + array('class' => 'form-control', 'placeholder' => 'Enter Email Address')); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2" class="control-label">Password</label>
                <div class="col-md-6">
                    <?php echo form_input($password + array('class' => 'form-control', 'placeholder' => 'Enter your password')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-offset-6 col-md-2">
                    <?php echo form_input($login_btn + array('class' => 'btn button-custom pull-right', 'style' => 'background-color: #703684; color: white')); ?>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>