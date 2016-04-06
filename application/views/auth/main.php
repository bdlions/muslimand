<style>
    .user_brief_card
    {
        border: 2px solid lightgray; 
        padding: 3px 2px;
        background-color: white;
    }
</style>
<div class="container" >
    <div class="row auth_login_body_adjust">
        <div class="col-md-6">
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="landingPageSlogan">Be a part of worldwide family, share life with us</p>
                </div>
            </div>
            <div id="page">
                <ul class="cb-slideshow bg_landing_ul" style="margin-top: 80px">
                    <li>
                        <span>Image 01</span>
                    </li>
                    <li>
                        <span>Image 02</span>
                    </li>
                    <li>
                        <span>Image 03</span>
                    </li>
                    <li>
                        <span>Image 04</span>
                    </li>
                    <li>
                        <span>Image 05</span>
                    </li>
                    <li>
                        <span>Image 06</span>
                    </li>
                </ul>
            </div>
            <!--<img class="img-responsive" src="<?php //echo base_url();    ?>resources/images/banner.png">-->
        </div>
        <div class="col-md-offset-1 col-md-5">
            <div class="pagelet_auth">
                <?php echo form_open("auth/login", array('id' => 'form_registration')); ?>
                <?php if (isset($message) && ($message != NULL)) {
                    ?>
                    <div class="alert alert-dismissible fadeOut" style="background-color: #703684;color: #ffffff">
                        <?php if (isset($success_image) && ($success_image != NULL)) { ?>
                            <img class="img-responsive" src="<?php echo $success_image; ?>">
                        <?php } ?>
                        <?php echo $message; ?>
                    </div>

                <?php } ?>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span class="sign_up_lebel">Sign Up</span>
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
                        <?php echo form_input($r_password_conf + array('class' => 'form-control', 'placeholder' => 'Confirm Password')); ?>
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
                            <?php echo form_dropdown('birthday_day', $date_list, "0", 'class=form-control id=birthday_day'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <?php echo form_dropdown('birthday_month', $month_list, "0", 'class=form-control id=birthday_month'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <?php echo form_dropdown('birthday_year', $year_list, "0", 'class=form-control id=birthday_year '); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Gender</label>
                        <?php echo form_dropdown('gender_id', $gender_list, 0, 'class=form-control id=gender_id'); ?>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Religion</label>
                        <?php echo form_dropdown('religion_list', $religion_list, '', 'class=form-control id=religion_list'); ?>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
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
                    <div class="col-md-12 col-sm-12 col-xs-12" >
                        <?php echo form_input($register_btn + array('class' => 'btn button-custom', 'style' => 'background-color: #703684; color: white')); ?>
                        <!--<button id="btnSubmit" type="submit" class="btn button-custom" style="background-color: #703684; color: white"><b>Sign Up</b></button>-->
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <div class="row form-group" style="margin-top: 15px!important; margin-bottom: 0px!important;" ng-app="app.Landing" ng-controller="landingController" ng-clock ng-init="setUserList(<?php echo htmlspecialchars(json_encode($user_list)); ?>)">
        <div ng-repeat="user in userList" class="col-md-1 col-sm-2 col-xs-6 form-group user_brief_card" style="padding-left: 3px; padding-right: 3px; cursor: pointer;">
            <a href="<?php echo base_url() ?>member/timeline/{{user.userId}}">
                <div id="brand" class="brand_single_image" >
                    <div class="brand_cover_single_image">
                        <div class="row">
                            <div class="col-md-12">
                                <img  style="height: 45px; width: 45px;" class="img_pad_mar_top_single_image" alt="" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>{{user.userId}}.jpg"  fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>40x40_{{user.gender.genderId}}.jpg" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="font_10px" style="margin-right: 8px; height: 40px; margin-top: 5px; word-break: keep-all;">{{user.firstName}} {{user.lastName}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img style="margin-top: -12px;" height="22" width="45" ng-src="<?php echo base_url() . COUNTRY_FLAG_IMAGE_PATH; ?>{{user.country.code}}.png">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="label_padding_top_single_image" >{{user.firstName}} {{user.lastName}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="font_11px">Profession:</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="professional_info inline_ellipsis" title="{{user.pSkill}}" data-placement="top" data-toggle="tooltip">{{user.pSkill}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="font_11px">Current City:</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="age_info font_10px inline_ellipsis" title="{{user.city}}" data-placement="top" data-toggle="tooltip">{{user.city}}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    $('#other_religion').on('click', function() {
        $('#religion').hide();
        $('#religion_input').show();
    });

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    $(function() {
        $("#register_btn").on("click", function() {
            var firstName = $("#r_first_name").val();
            var lastName = $("#r_last_name").val();
            var rEmail = $("#r_email").val();
            var varificationResult = validateEmail(rEmail);
            if (varificationResult == false) {
                alert("Please Enter a valid Email Address!");
                return false;
            }
            var rPassword = $("#r_password").val();
            var rPasswordConf = $("#r_password_conf").val();
            var gender = $("#gender_id").val();
            var day = $("#birthday_day").val();
            var month = $("#birthday_month").val();
            var year = $("#birthday_year").val();

            if (firstName == "") {
                alert("Frist Name is required !");
                return false;
            }
            if (lastName == "") {
                alert("Last Name is required !");
                return false;
            }
            if (rEmail == "") {
                alert("Email is required !");
                return false;
            }

            if (rPassword == "") {
                alert("Password is required !");
                return false;
            }
            if (rPasswordConf == "") {
                alert("Confirm Password is required !");
                return false;
            }
            if (rPassword != rPasswordConf) {
                alert("Passwords do not match !");
                return false;
            }

            if (gender == "" || gender == "0" || gender == 0) {
                alert("Gender is required !");
                return false;
            }
            if (day == "" || day == "0" || day == 0) {
                alert("Birth Day is required !");
                return false;
            }
            if (month == "" || month == "0" || month == 0) {
                alert("Birth Month is required !");
                return false;
            }
            if (year == "" || year == "0" || year == 0) {
                alert("Birth year is required !");
                return false;
            }
            $("#form_registration").submit();


        });
        $(".brand_single_image").mouseenter(function() {
            var brand_single_image = $(this);
            var brand_single_cover_image = $(this).find(".brand_cover_single_image");
            $(brand_single_image).show();
            $(brand_single_cover_image).hide();
        });
        $(".brand_single_image").mouseleave(function() {
            var brand_single_image = $(this);
            var brand_single_cover_image = $(this).find(".brand_cover_single_image");
            if ($(brand_single_cover_image).prop("style").display === "none") {
                $(brand_single_cover_image).show();
            }
        });
        $(".fadeOut").fadeOut(7000);
    });
</script>