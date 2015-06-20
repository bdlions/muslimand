<style>
    .user_brief_card
    {
        border: 4px solid lightgray; 
        padding: 6px; 
        background-color: white;
    }
</style>
<div style=" padding-bottom: 45px;">
    <div class="container-fluid">
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row form-group">
            <div class="col-md-offset-1 col-md-5">
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="font-size: 25px; color: #703684; font-weight: bold;">Global Social Network for People</span>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/banner.png">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <?php echo form_open("auth/login"); ?>
                <?php if (isset($message) && ($message != NULL)): ?>
                <div class="alert alert-dismissible" style="background-color: #703684;color: #ffffff"><?php echo $message; ?></div>
                <?php endif; ?>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="font-size: 25px; color: #703684; font-weight: bold;">Sign Up</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 padding_style">
                        <?php echo form_input($r_first_name + array('class' => 'form-control', 'placeholder' => 'First Name')); ?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_input($r_last_name + array('class' => 'form-control', 'placeholder' => 'Last Name')); ?>
                    </div>
                </div>
                <div class="row form-group"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo form_input($r_email + array('class' => 'form-control', 'placeholder' => 'Email')); ?>
                    </div>
                </div>

                <div class="row form-group"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo form_input($r_password + array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                    </div>
                </div>
                <div class="row form-group"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo form_input($r_password_conf + array('class' => 'form-control', 'placeholder' => 'Re-peated password')); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <span style="color: #703684; font-size: 15px; font-weight: bold;">Birthday</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <?php echo form_dropdown('birthday_day', $date_list, 0, 'class=form-control id=birthday_day'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <?php echo form_dropdown('birthday_month', $month_list, 0, 'class=form-control id=birthday_month'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <?php echo form_dropdown('birthday_year', $year_list, 0, 'class=form-control id=birthday_year'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Gender</label>
                        <?php echo form_dropdown('gender_list', $gender_list, 0, 'class=form-control id=gender_id'); ?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Country</label>
                         <?php echo form_dropdown('country_list', $country_list, '', 'class=form-control id=country_list'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="color: black; font-size: 11px;">By clicking Sign Up, you agree to our <a href="<?php echo base_url() ?>footer/terms">Terms and Conditions</a></span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo form_input($register_btn + array('class' => 'btn button-custom', 'style' => 'background-color: #703684; color: white')); ?>
                        <!--<button id="btnSubmit" type="submit" class="btn button-custom" style="background-color: #703684; color: white"><b>Sign Up</b></button>-->
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; ">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="user_brief_card">
                                    <div class="row">
                                        <div class="col-md-7 col-xs-7" style="padding-right: 6px">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/face.jpg">
                                        </div>
                                        <div class="col-md-5 col-xs-5" style="padding-left: 0px">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="color: darkgreen; font-weight: bold; font-size: 8px; line-height: 10px">Nazrul Islam</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/flag.png">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="color: darkgreen; font-weight: bold; font-size: 8px; line-height: 10px">Nazrul Islam</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
            </div>
        </div>
    </div>
</div>