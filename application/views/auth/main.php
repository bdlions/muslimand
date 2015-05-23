<div style=" padding-bottom: 45px;">
    <div class="container-fluid">
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row form-group">
            <div class="col-md-offset-1 col-md-5">
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="font-size: 28px; color: #703684; font-weight: bold;">Global Social Network for People</span>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div style="padding-top: 40px;" class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/banner.png">
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="font-size: 25px; color: #703684; font-weight: bold;">Sign Up</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 padding_style">
                        <input type ="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type ="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <div class="row form-group"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type ="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="row form-group"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type ="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="row form-group"> 
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type ="password" class="form-control" placeholder="Re-peated password">
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
                            <select name="day" class="form-control">
                                <option value="">Day</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo "<option value='{$i}'>{$i}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <select name="month" class="form-control">
                                <option selected="1"value="0">Month</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <select name="year" class="form-control">
                                <option value="">Year</option>
                                <?php
                                for ($j = 1900; $j <= 2015; $j++) {
                                    echo"<option value='{$j}'>{$j}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Gender</label>
                        <select class="form-control">
                            <option >
                                Male
                            </option>
                            <option >
                                Female
                            </option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Religion</label>
                        <select id="religion" class="form-control">
                            <option >
                                Islam
                            </option>
                            <option >
                                Hinduism
                            </option>
                            <option >
                                Buddhism
                            </option>
                            <option >
                                Christianity
                            </option>
                            <option id="other_religion">
                                Other
                            </option>
                        </select>
                        <input style="display: none;" placeholder="Write Your Religion" id="religion_input" class="form-control">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <label style="color: #703684; font-size: 15px; font-weight: bold;">Country</label>
                        <select class="form-control">
                            <option >
                                Australia 
                            </option>
                            <option >
                                Bangladesh 
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span style="color: black; font-size: 11px;">By clicking Sign Up, you agree to our <a href="<?php echo base_url() ?>footer/terms">Terms and Conditions</a></span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button id="btnSubmit" type="submit" class="btn button-custom" style="background-color: #703684; color: white"><b>Sign Up</b></button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row form-group">
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
            <?php for ($i = 0; $i < 10; $i++) { ?>
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
            <?php } ?>
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
        </div>
    </div>
</div>
</div>
<script>
    $('#other_religion').on('click', function () {
        $('#religion').hide();
        $('#religion_input').show();
    });

    $(function () {
        $(".brand_cover_single_image").mouseover(function () {
            $(".brand_cover_single_image").show();
            $(this).hide();
        });
    });
</script>