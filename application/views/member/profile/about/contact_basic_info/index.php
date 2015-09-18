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
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_mobile_phone"); ?>
        </div>
    </div>
    <!--Show updated mobile number-->
    <div id="mobile_phone_id" style="display: none">
        <div class="row form-group">
            <div class="col-md-4">
                Mobile Phones
            </div>
            <div class="col-md-8">
                <div class="row form-group" ng-repeat="phone in mobilePhones">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <span ng-bind="phone.phone"></span>
                                <?php // echo '{%= mobile_phone.phone%}' ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
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
                    <div class="col-md-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/contact_basic_info/add_email"); ?>
        </div>
    </div>
    <!--Show updated email-->
    <div id="email_id" style="display: none" >
        <div class="row form-group">
            <div class="col-md-4">
                Email
            </div>
            <div class="col-md-8">
                <div class="row" ng-repeat="email in emails">
                    <div class="col-md-6">
                        <span  ng-bind="email.email"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
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
            <div class="col-md-4">
                <div class="pull-right">
                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
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
                        <span ng-bind="birthDate.bd"></span>-<span ng-bind="birthDate.bm"></span>-<span ng-bind="birthDate.by"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
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
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
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
                        <span ng-bind="religion.tilte"></span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
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
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
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
            <?php $this->load->view("member/profile/about/contact_basic_info/add_language"); ?>
        </div>
    </div>
</div>

