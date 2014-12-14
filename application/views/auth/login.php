<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Muslimand
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
                                <label class="control-label">Email:</label> 
                                <?php echo form_input($identity + array('class' => 'form-control')); ?>
                            </div>
                            <div class="">
                                <input type="checkbox"> <label class="control-label"> Remember me</label> 
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
                       <div class="col-md-9">
                            <input type="text" class="form-control" id="first_name" placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="row form-group">
                         <div class="col-md-9">
                            <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="confirm_password" placeholder="Re-enter Password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-9">
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
                        <div class="col-md-offset-5 col-md-9">
                            <button type="submit" class="btn btn-success col-md-12" style="font-weight: bolder">SIGN UP</button> 
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
                <div class="col-md-12 form-group">



                    <?php for ($i = 0; $i < 12; $i++): ?>
                        <div class="col-md-1" style="padding-left: 0px">
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="border: 4px solid lightgray; padding: 6px">
                                        <div class="row">
                                            <div class="col-md-7" style="padding-right: 6px">
                                                <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/face.jpg">
                                            </div>
                                            <div class="col-md-5" style="padding-left: 0px">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="color: darkgreen; font-weight: bold; font-size: 8px; line-height: 10px">Tanveer Ahmed</div>
                                                        <!--                                                    <div style="font-size: 5px; line-height: 5px">Moderator</div>
                                                                                                            <div style="font-size: 5px; line-height: 7px">Bangladesh</div>-->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/flag.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>


                </div>
            </div>
        </div>
            
        <div style="border: 2px solid lightgray; width: 100%"></div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="padding: 20px 0px 0px 20px; color: #62C362">
                        About | Contact | Terms
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>