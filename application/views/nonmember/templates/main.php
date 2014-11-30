<div class="container-fluid" style="color: #62C362">
    <div class="col-md-offset-9 col-md-3 form-group">
        <span style="font-size: 40px">Sign Up</span>
    </div>
    <div class="row form-group">
        <div class="col-md-7">
            <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/banner.png">
        </div>
        <div class="col-md-5" style="padding-left: 0px;">
            <?php echo form_open("auth/login", array('id' => '', 'class' => 'form-horizontal')); ?>
            <div class="row form-group">
                <label class="col-md-5 control-label">First name </label> 
                <div class="col-md-7">
                    <?php echo form_input($r_first_name + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Last name</label> 
                <div class="col-md-7">
                    <?php echo form_input($r_last_name + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Email</label> 
                <div class="col-md-7">
                    <?php echo form_input($r_email + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Password</label> 
                <div class="col-md-7">
                    <?php echo form_input($r_password + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-5 control-label">Confirm Password</label> 
                <div class="col-md-7">
                    <?php echo form_input($r_password_conf + array('class' => 'form-control')); ?>
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
                    <?php echo form_input($register_btn + array('class' => 'btn btn-success pull-right')); ?>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 form-group" style="padding: 0px">
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
                                                <div style="color: darkgreen; font-weight: bold; font-size: 8px; line-height: 10px">Nazrul Islam</div>
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