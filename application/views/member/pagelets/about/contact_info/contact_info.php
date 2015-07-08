<script src="<?php echo base_url(); ?>resources/bootstrap3/js/tmpl.js"></script>
<script type="text/javascript">
    $(function () {
        $("#mobile_phone_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_mobile_phone',
                data: {
                    mobile_phone: $("#bp_mobile_phone").val(),
                },
                success: function (data) {
                    $("#mobile_phone_id").html(tmpl("tmpl_mobile_phones", data.mobile_phone) + $("#mobile_phone_id").html());
                    $("#about_overview_phone").html(tmpl("tmpl_phone_for_overview", data.mobile_phone));
                    $("#mobile").hide();
                    $("#add_mobile").show();
                }
            });
        });
        $("#address_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_address',
                data: {
                    address: $("#bp_address").val(),
                    city: $("#address_city").val(),
                    post_code: $("#bp_post_code").val(),
                    zip: $("#bp_zip").val(),
                },
                success: function (data) {
                    $("#address_id").html(tmpl("tmpl_address", data.address) + $("#address_id").html());
                    $("#about_overview_address").html(tmpl("tmpl_address_for_overview", data.address));
                    $("#address").hide();
                    $("#add_address").show();
                }
            });
        });
        $("#wibesite_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_website',
                data: {
                    wibesite: $("#bp_wibesite").val(),
                },
                success: function (data) {
                    $("#website_id").html(tmpl("tmpl_website", data.website));
                    $("#about_overview_website").html(tmpl("tmpl_website_for_overview", data.website));
                    $("#website").hide();
                    $("#add_website").show();
                }
            });
        });
        $("#email_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_email',
                data: {
                    email: $("#bp_email").val(),
                },
                success: function (data) {
                    $("#email_id").html(tmpl("tmpl_emails", data.email));
                    $("#about_overview_email").html(tmpl("tmpl_email_for_overview", data.email));
                    $("#email").hide();
                    $("#add_email").show();
                }
            });
        });




    });
</script>




<div class="row">
    <div class="col-md-offset-1 col-md-11">
        <div class="row form-group">
            <div class="col-md-12">
                <label>Contact Information</label>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="add_mobile" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Mobile/Phone</a>
                </div>
            </div>
        </div>
        <div id="mobile" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Mobile or Phone</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_mobile_phone + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <?php echo form_input($mobile_phone_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_mobile_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_address" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Address</a>
                </div>
            </div>
        </div>
        <div id="address" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Address</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_address + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">City</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($address_city + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Post Code</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_post_code + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Zip</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_zip + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <?php echo form_input($address_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_address_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_website" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Website</a>
                </div>
            </div>
        </div>
        <div id="website" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Website</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_wibesite + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <?php echo form_input($wibesite_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_website_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_email" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Email</a>
                </div>
            </div>
        </div>
        <div id="email" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Email</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_email + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <?php echo form_input($email_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_email_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label>Basic Information</label>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="add_birth_day" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your BirthDay</a>
                </div>
            </div>
        </div>
        <div id="birth_day" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">BirthDay</span>
                </div>
                <div class="col-md-8">
                    <input class="form-control" placeholder="Add Your BirthDay">
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button class="pull-right form-control form_control_custom_style member_about_save_button">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_birth_day_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_gender" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Gender</a>
                </div>
            </div>
        </div>
        <div id="gender" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Gender</span>
                </div>
                <div class="col-md-8">
                    <input class="form-control" placeholder="Add Your Gender">
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button class="pull-right form-control form_control_custom_style member_about_save_button">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_gender_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_language" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Language</a>
                </div>
            </div>
        </div>
        <div id="language" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Language</span>
                </div>
                <div class="col-md-8">
                    <input class="form-control" placeholder="Add Your Language">
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button class="pull-right form-control form_control_custom_style member_about_save_button">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_language_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="add_religion" class="row form-group">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Religion</a>
                </div>
            </div>
        </div>
        <div id="religion" class="display_hidden contact_background">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Religion</span>
                </div>
                <div class="col-md-8">
                    <input class="form-control" placeholder="Add Your Religion">
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row form-group">
                        <div class="col-md-5">
                            <select class="form-control" name="control">
                                <option selected="1" value="0">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button class="pull-right form-control form_control_custom_style member_about_save_button">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_religion_window" class="form-control form_control_custom_style member_about_cancel_button" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $("#checkbox_id").prop("checked", true);
        $("#checkbox_id").on("click", function () {
            $("#present").hide();
            $("#working_year").show();
        });

        // Mobile Number
        $("#add_mobile").on("click", function () {
            $("#add_mobile").hide();
            $("#mobile").show();
        });
        $("#cancel_mobile_window").on("click", function () {
            $("#mobile").hide();
            $("#add_mobile").show();
        });

        // Address
        $("#add_address").on("click", function () {
            $("#add_address").hide();
            $("#address").show();
        });
        $("#cancel_address_window").on("click", function () {
            $("#address").hide();
            $("#add_address").show();
        });

        // Website
        $("#add_website").on("click", function () {
            $("#add_website").hide();
            $("#website").show();
        });
        $("#cancel_website_window").on("click", function () {
            $("#website").hide();
            $("#add_website").show();
        });

        // Email
        $("#add_email").on("click", function () {
            $("#add_email").hide();
            $("#email").show();
        });
        $("#cancel_email_window").on("click", function () {
            $("#email").hide();
            $("#add_email").show();
        });
        // Birth Day
        $("#add_birth_day").on("click", function () {
            $("#add_birth_day").hide();
            $("#birth_day").show();
        });
        $("#cancel_birth_day_window").on("click", function () {
            $("#birth_day").hide();
            $("#add_birth_day").show();
        });

        // Gender
        $("#add_gender").on("click", function () {
            $("#add_gender").hide();
            $("#gender").show();
        });
        $("#cancel_gender_window").on("click", function () {
            $("#gender").hide();
            $("#add_gender").show();
        });

        // Language
        $("#add_language").on("click", function () {
            $("#add_language").hide();
            $("#language").show();
        });
        $("#cancel_language_window").on("click", function () {
            $("#language").hide();
            $("#add_language").show();
        });

        // Religion
        $("#add_religion").on("click", function () {
            $("#add_religion").hide();
            $("#religion").show();
        });
        $("#cancel_religion_window").on("click", function () {
            $("#religion").hide();
            $("#add_religion").show();
        });

    });

</script>