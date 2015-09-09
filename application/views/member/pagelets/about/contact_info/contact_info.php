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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_mobile_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Mobile or Phone</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="PhoneInfo.phone">
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
                            <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addPhone('<?php echo $user_id; ?>')">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_mobile_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_address_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Address</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="addressInfo.address">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">City</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="addressInfo.city">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Post Code</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="addressInfo.postCode">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Zip</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="addressInfo.zip">
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
                            <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addAddress('<?php echo $user_id; ?>')">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_address_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_website_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Website</span>
                </div>
                <div class="col-md-8">
                      <input type="text" class="form-control" ng-model="websiteInfo.website">
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
                             <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addWebsite('<?php echo $user_id; ?>')">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_website_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_email_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Email</span>
                </div>
                <div class="col-md-8">
                     <input type="text" class="form-control" ng-model="emailInfo.email">
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
                            <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addEmail('<?php echo $user_id; ?>')">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_email_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_birth_day_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">BirthDay</span>
                </div>
                <div class="col-md-8">
                     <div class="row form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                        <input class="form-control" placeholder="Day">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <input class="form-control" placeholder="Month">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="pages_type_add_form_input">
                            <input class="form-control" placeholder="Year">
                        </div>
                    </div>
                </div>
                    
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
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_birth_day_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_gender_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Gender</span>
                </div>
                <div class="col-md-8">
                    <select id="gender_id" class="form-control" name="gender_list">
                        <option selected="selected" value="0">Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
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
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_gender_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_language_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
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
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_language_window" >Cancel</button>
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
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_mobile_window cancel_religion_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Religion</span>
                </div>
                <div class="col-md-8">
                    <select id="religion_options" class="form-control">
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
                            <button class="form-control form_control_custom_style member_about_cancel_button cancel_religion_window" >Cancel</button>
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
        $(".cancel_mobile_window").on("click", function () {
            $("#mobile").hide();
            $("#add_mobile").show();
        });

        // Address
        $("#add_address").on("click", function () {
            $("#add_address").hide();
            $("#address").show();
        });
        $(".cancel_address_window").on("click", function () {
            $("#address").hide();
            $("#add_address").show();
        });

        // Website
        $("#add_website").on("click", function () {
            $("#add_website").hide();
            $("#website").show();
        });
        $(".cancel_website_window").on("click", function () {
            $("#website").hide();
            $("#add_website").show();
        });

        // Email
        $("#add_email").on("click", function () {
            $("#add_email").hide();
            $("#email").show();
        });
        $(".cancel_email_window").on("click", function () {
            $("#email").hide();
            $("#add_email").show();
        });
        // Birth Day
        $("#add_birth_day").on("click", function () {
            $("#add_birth_day").hide();
            $("#birth_day").show();
        });
        $(".cancel_birth_day_window").on("click", function () {
            $("#birth_day").hide();
            $("#add_birth_day").show();
        });

        // Gender
        $("#add_gender").on("click", function () {
            $("#add_gender").hide();
            $("#gender").show();
        });
        $(".cancel_gender_window").on("click", function () {
            $("#gender").hide();
            $("#add_gender").show();
        });

        // Language
        $("#add_language").on("click", function () {
            $("#add_language").hide();
            $("#language").show();
        });
        $(".cancel_language_window").on("click", function () {
            $("#language").hide();
            $("#add_language").show();
        });

        // Religion
        $("#add_religion").on("click", function () {
            $("#add_religion").hide();
            $("#religion").show();
        });
        $(".cancel_religion_window").on("click", function () {
            $("#religion").hide();
            $('#religion_input').hide();
            $("#add_religion").show();
            $('#religion_options').show();
        });
        $('#other_religion').on('click', function () {
            $('#religion_options').hide();
            $('#religion_input').show();
        });
    });

</script>