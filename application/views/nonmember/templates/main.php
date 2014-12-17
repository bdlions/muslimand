<div class="container-fluid" style="background-color: #EDF0F5">
    <div class="row form-group">
        <div class="col-md-12"></div>
    </div>
    <div class="row form-group">
        <div class="col-md-offset-7 col-md-5">
            <span style="font-size: 40px; color: #703684">Sign Up</span>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-offset-1 col-md-5">
            <img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>resources/images/banner.png">
        </div>
        <div class="col-md-offset-1 col-md-4">
            <?php echo form_open("auth/login", array('id' => '', 'class' => 'form-horizontal')); ?>
            <div class="row form-group">
                <div class="col-md-6">
                    <?php echo form_input($r_first_name + array('class' => 'form-control')); ?>
                </div>
                <div class="col-md-6">
                    <?php echo form_input($r_last_name + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-12">
                    <?php echo form_input($r_email + array('class' => 'form-control')); ?>
                </div>
            </div>
            
            <div class="row form-group"> 
                <div class="col-md-12">
                    <?php echo form_input($r_password + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-12">
                    <?php echo form_input($r_password_conf + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <select class="form-control">
                        <option class="">
                            Male
                        </option>
                        <option class="">
                            Female
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                   <select class="form-control">
                        <option class="form-control">
                            Australia 
                        </option>
                        <option class="form-control">
                            Bangladesh 
                        </option>
                    </select>
                </div>
                
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <?php echo form_input($register_btn + array('class' => 'btn pull-right', 'style' => 'color: white; background-color: #703684')); ?>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 form-group">
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; ">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="border: 4px solid lightgray; padding: 6px; background-color: white">
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
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
        </div>
    </div>
</div>