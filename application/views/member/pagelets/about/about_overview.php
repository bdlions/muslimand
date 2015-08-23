<div id="about_overview" class="row">
    <div class="col-md-6">
        <div class="row form-group" id="about_overview_company">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">

                Works at <a href ><span ng-bind="overview.workPlace.company"></span></a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="about_overview_uiversity">
            <div class="row form-group">
                <div class="col-md-2">
                    <img src="<?php echo base_url(); ?>resources/images/Food.jpg"  width="40" height="40"> 
                </div>
                <div class="col-md-10">
                    Studied at <a href="#"> <span ng-bind="overview.university.university"></span></a>
                </div>
            </div>
        </div>

        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Lives in <a href="#"> <span ng-bind="overview.city.cityName"></span></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mobile_icon.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><span ng-bind="overview.mobilePhone.phone"></span></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mail.png"  > 
            </div>
            <div class="col-md-10">
                <h6><span ng-bind="overview.email.email"></span></h6>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/address.png"  > 
            </div>
            <div class="col-md-10">
                <h6><span ng-bind="overview.address.postCode"></span>,<span ng-bind="overview.address.zip"></span>,<span ng-bind="overview.address.address"></span>,<span ng-bind="overview.address.city"></span></h6>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/messenger.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><span ng-bind="overview.company.company"></span></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/website.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><span ng-bind="overview.website.website"></span></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/birth.png"  > 
            </div>
            <div class="col-md-10">
                <h6><span ng-bind="overview.birthDate.birthDay"></span>-<span ng-bind="overview.birthDate.birthMonth"></span>-<span ng-bind="overview.birthDate.birthYear"></span></h6>
            </div>
        </div>
    </div>
</div>
