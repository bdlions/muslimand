<div class="row form-group" id="mobile_phone_id" style="display: none">
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
<div class="row form-group" style="display: none" id="address_id">
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
<div class="row form-group" id="website_id" style="display: none">
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
<div class="row form-group" id="email_id" style="display: none" >
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
<div class="row form-group" id="birthday_id" style="display: none">
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
<div class="row form-group" id="genderId" style="display: none">
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
<div class="row form-group"  id="language_id" style="display: none">
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
<div class="row form-group" id="religion_id" style="display: none">
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
