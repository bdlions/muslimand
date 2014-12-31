

<div class="row">
    <div class="col-md-offset-2 col-md-8">
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
        <?php echo form_open("auth/forgot_password"); ?>

        <div class="row form-group">
            <label class="col-md-2" class="control-label">Email</label>
            <div class="col-md-6">
                <input type="email" class="form-control" id="email" placeholder="Enter Email Address">  
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2" class="control-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" id="password" placeholder="Enter your password">  
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-offset-4 col-md-4">
                <button class="btn btn-success form-control">Log In</button>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-offset-4 col-md-4">
                <a href="">Forget Password?</a>
                <!--<button class="btn btn-success form-control">Log In</button>-->
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>      