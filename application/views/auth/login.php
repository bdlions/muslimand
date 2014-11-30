<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Language Processing
        </title>        
        <!-- Bootstrap -->
        <link rel="stylesheet" type='text/css' href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>resources/css/styles.css'/>
        <link rel="stylesheet" type='text/css' href="<?php echo base_url(); ?>resources/css/template.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php if (isset($message) && ($message != NULL)): ?>
            <div class="alert alert-danger alert-dismissible"><?php echo $message; ?></div>
        <?php endif; ?>
        <div class="row form-group">
            <div class="col-md-12">
                <div class="container-fluid" style="padding-top: 20px; background-color: #62C362; color: white">
                    <div class="row">
                        <?php echo form_open("auth/login"); ?>
                        <div class="col-md-4" style="text-align: center">
                            <span style="font-size: 50px">Muslimand</span>
                            <p>Hello Muslims! Keep updated with Muslimand</p>
                        </div>
                        <div class="col-md-2">
                            facebook tweeter
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Email/Username:</label> 
                                <?php echo form_input($identity + array('class' => 'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <input type="checkbox"> <label class="control-label"> Remember Me</label> 
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Password:</label>
                                <?php echo form_input($password + array('class' => 'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default pull-right col-md-5">Log In</button>
                                <a href="forgot_password" style="font-weight: bolder; color: white"><?php echo lang('login_forgot_password'); ?></a>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="color: #62C362">
            <div class="col-md-offset-9 col-md-3 form-group">
                <span style="font-size: 40px">Sign Up</span>
            </div>
            <div class="row form-group">
                <div class="col-md-offset-1 col-md-6">
                    <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/banner.png">
                </div>
                <div class="col-md-4" style="padding-left: 0px;">
                    <?php echo form_open("auth/login", array('id' => '', 'class' => 'form-horizontal')); ?>
                    <div class="row form-group">
                        <label class="col-md-5 control-label">First name </label> 
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="first_name" placeholder="Enter First_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-5 control-label">Last name</label> 
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="last_name" placeholder="Enter Last_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-5 control-label">Email</label> 
                        <div class="col-md-7">
                            <input type="email" class="form-control" id="email" placeholder="Enter email_address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-5 control-label">Password</label> 
                        <div class="col-md-7">
                            <input type="password" class="form-control" id="password" placeholder="Re-enter password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-5 control-label">Confirm Password</label> 
                        <div class="col-md-7">
                            <input type="password" class="form-control" id="confirm_password" placeholder="Re-enter password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-5 control-label">Gender</label> 
                        <div class="col-md-7">
                            <select class="form-control">
                                <option class="form-control">
                                    Male
                                </option>
                                <option class="form-control">
                                    Female
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-offset-5 col-md-7">
                            <button type="submit" class="btn btn-success col-md-12">SIGN UP</button> 
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-md-1">

                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2">kamal</div>
                    <div class="col-md-2">kamal</div>
                    <div class="col-md-2">kamal</div>
                    <div class="col-md-2">kamal</div>
                    <div class="col-md-2">kamal</div>
                    <div class="col-md-2">kamal</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding: 0px;">
                    <div style="border: 6px solid lightgray; padding: 10px 0px 10px 0px">
                        <div class="row">
                            <div class="col-md-7">
                                <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/banner.png">
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12" style="padding: 5px;">
                                        NAME
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="padding: 5px;">
                                        <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/banner.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>