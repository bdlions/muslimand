

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="row form-group">
            <span style="font-size: 30px">Forgot Password?</span>
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
                <button class="btn btn-danger form-control" type="submit" name="submit_button">Reset Password</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>      