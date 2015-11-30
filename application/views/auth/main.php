<script>


    function onImageUnavailable(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];

        firstImage.style.display = 'none';
        secondImage.style.visibility = 'visible';
        secondImage.style.height = '100%';
    }

</script>

<style>
    .user_brief_card
    {
        border: 2px solid lightgray; 
        padding: 3px 2px;
        background-color: white;
    }
</style>
<div style="padding-bottom: 45px;">
    <div class="container-fluid">
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row form-group">
            <div class="col-md-offset-1 col-md-5">
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p style="color: #703684; font: italic bold 20px Georgia, serif ;">Be a part of worldwide family, share life with us</p>
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
                            <?php echo form_dropdown('birthday_year', $year_list, "0", 'class=form-control id=birthday_year'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Gender</label>
                        <?php echo form_dropdown('gender_list', $gender_list, 0, 'class=form-control id=gender_id'); ?>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo form_input($register_btn + array('class' => 'btn button-custom', 'style' => 'background-color: #703684; color: white')); ?>
                        <!--<button id="btnSubmit" type="submit" class="btn button-custom" style="background-color: #703684; color: white"><b>Sign Up</b></button>-->
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="col-md-1"></div>
        </div>


        <!--        <div class="row form-group">
                    <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
        <?php //for ($i = 0; $i < 10; $i++) {  ?>
                        <div class="col-md-1 col-sm-2 col-xs-6 form-group user_brief_card" style="padding-left: 3px; padding-right: 3px; cursor: pointer;">
                            <div id="brand" class="brand_single_image">
                                <div class="brand_cover_single_image">
                                    <img height="45" width="45" class="img_pad_mar_top_single_image" src="<?php echo base_url(); ?>resources/images/face.jpg"><br>
                                    <p class="font_10px" style="margin-right: 8px;">Nazrul Islam</p>
                                    <img style="margin-top: -12px;" height="22" width="45" src="<?php echo base_url(); ?>resources/images/flag.png"><br>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="label_padding_top_single_image" >Nazrul Islam</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <ul style="margin: 0px; padding: 0px; padding-top: 5px; list-style-type: none;">
                                            <li style="padding: 2px 0px;" class="font_10px">Profession:
                                                <ul style="margin: 0px; padding: 0px; list-style-type: none;">
                                                    <li class="info_style_single_image">Doctor</li>
                                                </ul>
                                            </li>
                                            <li style="padding: 2px 0px;" class="font_10px">Age:
                                                <ul style="margin: 0px; padding: 0px; list-style-type: none;">
                                                    <li class="info_style_single_image ">30 Years</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-offset-1"></div>
                                </div>
                            </div>
                        </div>
        <?php //}  ?>
                    <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
                </div>-->

        <div class="row form-group" ng-app="app.Landing" ng-controller="landingController" ng-init="setUserList(<?php echo htmlspecialchars(json_encode($user_list)); ?>)">
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>


            <div ng-repeat="user in userList" class="col-md-1 col-sm-2 col-xs-6 form-group user_brief_card" style="padding-left: 3px; padding-right: 3px; cursor: pointer;">
                <a href="<?php echo base_url() ?>member/timeline/{{user.userId}}">
                    <div id="brand" class="brand_single_image" >
                        <div class="brand_cover_single_image">
                            <div class="row">
                                <div class="col-md-12">
                                    <img height="45" width="45" class="img_pad_mar_top_single_image" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40 ?> {{user.userId}}'.jpg" onError="onImageUnavailable(this)"/>
                                    <img style="visibility:hidden; height: 0px;"  src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>40x40_{{user.gender.genderId}}.jpg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="font_10px" style="margin-right: 8px; height: 40px; margin-top: 5px;">{{user.firstName}}&nbsp;{{user.lastName}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img style="margin-top: -12px;" height="22" width="45" src="<?php echo base_url() . COUNTRY_FLAG_IMAGE_PATH; ?>{{user.country.code}}.png">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="label_padding_top_single_image" >{{user.firstName}}&nbsp;{{user.lastName}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="padding: 2px 0px;" class="font_10px">Profession:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="info_style_single_image">Doctor</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="padding: 2px 0px;" class="font_10px">Age:</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="info_style_single_image">40 Years</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-offset-1"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
        </div>



    </div>
</div>

<script>
    $('#other_religion').on('click', function () {
        $('#religion').hide();
        $('#religion_input').show();
    });

    $(function () {
        $(".brand_single_image").mouseenter(function () {
            var brand_single_image = $(this);
            var brand_single_cover_image = $(this).find(".brand_cover_single_image");
            $(brand_single_image).show();
            $(brand_single_cover_image).hide();
        });
        $(".brand_single_image").mouseleave(function () {
            var brand_single_image = $(this);
            var brand_single_cover_image = $(this).find(".brand_cover_single_image");
            if ($(brand_single_cover_image).prop("style").display === "none") {
                $(brand_single_cover_image).show();
            }
        });
        $(".fadeOut").fadeOut(7000);
    });
</script>