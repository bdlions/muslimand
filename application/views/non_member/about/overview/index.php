<div id="about_overview" class="row">
    <div class="col-md-6">
        <div class="row form-group" id="about_overview_workplace" style="display:none">
            <div class="col-md-2">
                 <img src="<?php echo base_url(); ?>resources/images/about_icons/work.png">  
            </div>
            <div class="col-md-10">
                Works at <a href ><span ng-bind="overview.workPlace.company"></span></a>
            </div>
        </div>
<!--        <div class="row form-group" id="about_overview_add_work_place" onclick="getWorksEducation('<?php echo $user_id ;?>')">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add a workplace</a>
                </div>
            </div>
        </div>-->
        <!--<div class="pagelet_divider"></div>-->
        <div class="row form-group" id="about_overview_uiversity" style="display: none">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/university.png"> 
            </div>
            <div class="col-md-10">
                Studied at <a href="#"> <span ng-bind="overview.university.university"></span></a>
            </div>
        </div>
<!--        <div class="row form-group" id="about_overview_add_university" ng-click="getWorksEducation('<?php echo $user_id ;?>')">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your University</a>
                </div>
            </div>
        </div>-->
        <!--<div class="pagelet_divider"></div>-->
        <div class="row form-group" id="about_overview_city" style="display: none"> 
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/livingPlace.png">  
            </div>
            <div class="col-md-10">
                Lives in <a href="#"> <span ng-bind="overview.city.cityName"></span></a>
            </div>
        </div>
<!--        <div class="row form-group" id="about_overview_add_city"  ng-click="getCityTown('<?php echo $user_id ;?>')">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Current City</a>
                </div>
            </div>
        </div>-->
    </div>
    <div class="col-md-6">
        <div class="row form-group" id="about_overview_phone" style="display: none">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mobile_icon.png"  >  
            </div>
            <div class="col-md-10">
                <a href="#"><span ng-bind="overview.mobilePhone.phone"></span></a>
            </div>
        </div>
        <div class="row form-group" id="about_overview_email" style="display: none">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mail.png"  > 
            </div>
            <div class="col-md-10">
                <h6><span ng-bind="overview.email.email"></span></h6>
            </div>
        </div>
        <div class="row form-group" id="about_overview_address" style="display: none">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/address.png"  > 
            </div>
            <div class="col-md-10">
                <h6><span ng-bind="overview.address.postCode"></span>,<span ng-bind="overview.address.zip"></span>,<span ng-bind="overview.address.address"></span>,<span ng-bind="overview.address.city"></span></h6>
            </div>
        </div>
        <div class="row form-group" id="about_overview_website" style="display: none">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/website.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><span style="word-wrap: break-word;" ng-bind="overview.website.website"></span></a>
            </div>
        </div>
        <div class="row form-group" id="about_overview_birthDate" style="display: none">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/birth.png"  > 
            </div>
            <div class="col-md-10">
                <h6><span ng-bind="overview.birthDate.birthDay"></span>-<span ng-bind="overview.birthDate.birthMonth"></span>-<span ng-bind="overview.birthDate.birthYear"></span></h6>
            </div>
        </div>
    </div>
</div>

