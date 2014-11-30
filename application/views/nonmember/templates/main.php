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
                    <input type="text" class="form-control" id="first_name" placeholder="Enter First Name">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Last name</label> 
                <div class="col-md-7">
                    <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Email</label> 
                <div class="col-md-7">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Password</label> 
                <div class="col-md-7">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Confirm Password</label> 
                <div class="col-md-7">
                    <input type="password" class="form-control" id="confirm_password" placeholder="Re-enter Password">
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