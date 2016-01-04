<div class="pagelet" style="border: 1px solid lightgray;">
    <div class="row" id="brif_work_id" style="display: none" >
        <div class="col-md-2">
            <img src="<?php echo base_url(); ?>resources/images/about_icons/work.png" width="20" height="20">
        </div>
        <div class="col-md-10">
            <span>Works at <a style="color: #3B59A9; font-size: 12;" href="#">{{overview.workPlace.company}}</a></span>
        </div>
    </div>
    <div class="row form-group"></div>
    <div class="row" id="brif_uv_id" style="display: none">
        <div class="col-md-2">
            <img src="<?php echo base_url(); ?>resources/images/about_icons/university.png" width="20" height="20">
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <span>Studied at <a style="color: #3B59A9; font-size: 12;" href="#">{{overview.university.university}}</a></span>
                </div>
                <div class="col-md-12">
                    <a style="color: black; font-size: 12; opacity: 0.6;" href="#">Attended from {{overview.university.startDate}} to {{overview.university.endDate}}</a></span>
                </div>  
            </div>
        </div>
    </div>
    <div class="row form-group"></div>
    <div class="row" id="brif_city_id" style="display: none">
        <div class="col-md-2">
            <img src="<?php echo base_url(); ?>resources/images/about_icons/livingPlace.png" width="20" height="20">
        </div>
        <div class="col-md-10">
            <span>Lives in <a style="color: #3B59A9; font-size: 12;" href="#">{{overview.city.cityName}}</a></span>
        </div>
    </div>
    <div class="row form-group"></div>
    <div class="row" id="brif_address_id" style="display: none">
        <div class="col-md-2">
            <img src="<?php echo base_url(); ?>resources/images/about_icons/about_box_4.png" width="20" height="20">
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <span>From <a style="color: #3B59A9; font-size: 12;" href="#">{{overview.address.city}}</a></span>
                </div>
                <div class="col-md-12">
                    <a style="color: black; font-size: 12; opacity: 0.6;" href="#">Born on {{overview.birthDate.birthDay}}-{{overview.birthDate.birthMonth}}-{{overview.birthDate.birthYear}}</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group"></div>
<!--    <div class="row">
        <div class="col-md-2">
            <img src="<?php echo base_url(); ?>resources/images/about_box_1.png"  width="20" height="20">
        </div>
        <div class="col-md-10">
            <span>Followed by <a style="color: #3B59A9; font-size: 12;" href="#">6 people</a></span>
        </div>
    </div>-->
</div>