<div style="">
    <div class="row padding_top_over_row">
        <div class="col-md-offset-2 col-md-8" style="background-color: #fff; margin-bottom: 20px; padding: 4%; border-radius: 4px;">
            <div class="row form-group">
                <div class="col-md-12">
                <span style="font-size: 30px">Forgot Password?</span>
                </div>
            </div>  
            <?php if (isset($message) && ($message != NULL)): ?>
                <div class="alert alert-danger alert-dismissible"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php echo form_open("auth/forgot_password", array('class' => 'form-horizontal')); ?>
            <div class="row form-group">  
                <div class="col-md-12">
                    Select a security question from below:
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <select class="form-control">
                        <option>What is your home town?</option>
                    </select>
                </div>
            </div>
            <div class="row form-group padding_top_30px">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="email" placeholder="Enter answer">  
                </div>
            </div>
            <div class="row form-group">  
                <div class="col-md-12"></div>
            </div>
            <div class="row form-group">  
                <div class="col-md-12"></div>
            </div>

            <div class="row form-group">  
                <div class="col-md-6">
                    Please enter your Email so we can send you an email to reset your password.
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2">
                    <label class="control-label">Email</label>
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control" id="email" placeholder="Enter email address">  
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-offset-3 col-md-3">
                    <button type="submit" name="submit_button" class="button-custom" style="float: right; background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Reset Password</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>