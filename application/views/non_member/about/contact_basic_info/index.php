<div id="about_contact_info" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Contact & Basic Info</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
            <label>Contact Information</label>
        </div>
    </div>
    <span ng-if="mobilePhones != null"><div class="pagelet_divider"></div></span>
    <div class="row form-group" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_mobile_phone"); ?>
        </div>
    </div>
    <!--Show updated mobile number-->
    <div id="mobile_phone_id" style="display: none">
        <div class="row form-group"  ng-repeat="phone in mobilePhones">
            <div id="mobile_phone_{{phone.id}}">
                <div class="col-md-4">
                    Mobile Phones
                </div>
                <div class="col-md-8" >
                    <div class="row form-group">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <span ng-bind="phone.phone"></span>
                                    <?php // echo '{%= mobile_phone.phone%}' ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
                            <div class="pull-right">
                                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_mobile_edit_place(this)" id="{{phone.id}}">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_delete_mobile_phone(this)" id="{{phone.id}}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edit_mobile_phone_{{phone.id}}" style="display: none">
                <?php $this->load->view("member/profile/about/contact_basic_info/edit_mobile_phone"); ?>
            </div>
        </div>
    </div>
     <span ng-if="address != null"><div class="pagelet_divider"></div></span>
    <div class="row form-group" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_address"); ?>
        </div>
    </div>
    <!--Show updated address-->
    <div id="address_id" style="display: none">
        <div class="row form-group">
            <div class="col-md-4">
                Address
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <span ng-bind="address.address"></span>,<span ng-bind="address.city"></span>,<span ng-bind="address.zip"></span>,<span ng-bind="address.postCode"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_address_edit_place(this)" id="{{address.id}}">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_delete_address(this)" id="{{address.id}}">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="edit_address_id" style="display: none">
        <?php $this->load->view("member/profile/about/contact_basic_info/edit_address"); ?>
    </div>

    <span ng-if="emails != null"><div class="pagelet_divider"></div></span>
    <div class="row form-group" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_email"); ?>
        </div>
    </div>
    <!--Show updated email-->
    <div id="email_id" style="display: none" >
        <div class="row form-group"  ng-repeat="email in emails">
            <div id="email_show_{{email.id}}"> 
                <div class="col-md-4">
                    Email
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <span  ng-bind="email.email"></span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
                            <div class="pull-right">
                                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_email_edit_place(this)" id="{{email.id}}">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_delete_emails(this)" id="{{email.id}}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="email_edit_id_{{email.id}}" style="display: none">
                <?php $this->load->view("member/profile/about/contact_basic_info/edit_email"); ?>
            </div>
        </div>
    </div>




    <span ng-if="website != null"><div class="pagelet_divider"></div></span>
    <div class="row form-group">
        <div class="col-md-12" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_website"); ?>
        </div>
    </div>
    <!--Show updated website-->
    <div id="website_id" style="display: none">
        <div class="row form-group">
            <div class="col-md-4">
                Website
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <span ng-bind="website.website"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <div class="col-md-4" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
                <div class="pull-right">
                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_website_edit_place(this)" id="{{website.id}}">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_delete_website(this)" id="{{website.id}}">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="website_edit_id" style="display: none">
        <?php $this->load->view("member/profile/about/contact_basic_info/edit_website"); ?>
    </div>
    <span ng-if="birthDate != null"><div class="pagelet_divider"></div></span>
    <div class="row form-group">
        <div class="col-md-12">
            <label>Basic Information</label>
        </div>
    </div>
    <div class="pagelet_divider"></div>

    <!--Show updated birthDay-->
    <div id="birthday_id">
        <div class="row form-group">
            <div class="col-md-4">
                BirthDay
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <span ng-bind="birthDate.birthDay"></span>-<span ng-bind="birthDate.birthMonth"></span>-<span ng-bind="birthDate.birthYear"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <!--                        <div class="pull-right">
                                                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagelet_divider"></div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/edit_birth_date"); ?>
        </div>
    </div>
    <!--Show updated gender-->
    <div id="genderId">
        <div class="row form-group">
            <div class="col-md-4">
                Gender 
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <span ng-bind="gender.title"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-4 col-md-4">
                        <!--                        <div class="pull-right">
                                                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagelet_divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/edit_gender"); ?>
        </div>
    </div>
    <!--Show updated religion-->
    <div id="religion_id" >
        <div class="row form-group">
            <div class="col-md-4">
                Religion
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <span ng-bind="religion.title"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <!--                        <div class="pull-right">
                                                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagelet_divider"></div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/edit_religion"); ?>
        </div>
    </div>
    <!--Show updated languages-->
    <div id="language_id" style="display: none">
        <div class="row form-group">
            <div class="col-md-4">
                Languages
            </div>
            <div class="col-md-8">
                <div class="row" ng-repeat="language in languages">
                    <div class="col-md-6">
                        <span ng-bind="language.language"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <!--                        <div class="pull-right">
                                                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagelet_divider"></div>
            </div>
        </div>
    </div>
    <div class="row form-group"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_language"); ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    function show_mobile_edit_place(e) {
        var mobilePId = $(e).attr('id');
        $('#mobile_phone_' + mobilePId).hide();
        $('#edit_mobile_phone_' + mobilePId).show();
    }
    function show_address_edit_place(e) {
        $('#address_id').hide();
        $('#edit_address_id').show();
    }
    function show_website_edit_place(e) {
        $('#website_id').hide();
        $('#website_edit_id').show();
    }
    function show_email_edit_place(e) {
        var emailId = $(e).attr('id');
        $('#email_id').show();
        $('#email_show_' + emailId).hide();
        $('#email_edit_id_' + emailId).show();
    }
    function open_modal_delete_mobile_phone(e) {
        var mobilePId = $(e).attr('id');
        var selectionInfo = " Mobile Phone ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "<?php echo MODAL_DELETE_YES; ?>") {
                angular.element($('#delete_content_btn')).scope().deleteMobilePhone(mobilePId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#mobile_phone_' + mobilePId).hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
    function open_modal_delete_address(e) {
        var addressId = $(e).attr('id');
        var selectionInfo = " Address ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "<?php echo MODAL_DELETE_YES; ?>") {
                angular.element($('#delete_content_btn')).scope().deleteAddress(addressId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#address_id').hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
    function open_modal_delete_website(e) {
        var websiteId = $(e).attr('id');
        var selectionInfo = " Website ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "<?php echo MODAL_DELETE_YES; ?>") {
                angular.element($('#delete_content_btn')).scope().deleteWebsite(websiteId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#website_id').hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
</script>