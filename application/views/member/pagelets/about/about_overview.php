<div id="about_overview" class="row">
    <div class="col-md-6">
        <?php 
               $work_places = json_decode($basic_info['work_places']);
               $universities = json_decode($basic_info['universities']);
               $colleges = json_decode($basic_info['colleges']);
               $work_place_counter = count($work_places)-1;
               $university = count($universities)-1;
               $company  = $work_places[$work_place_counter];
               $uv = $universities[$university];
 
        ?>
        <div id="about_overview_add_tmpl">
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Works at <a href="#"><?php echo $company->company; ?></a>
            </div>
        </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/Food.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Studied at <a href="#"> <?php echo $uv->university; ?></a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Lives in <a href="#">Dhaka, Bangladesh </a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mobile_icon.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#">01XXX XXX XXX </a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mail.png"  > 
            </div>
            <div class="col-md-10">
                <h6>mail@muslimand.com </h6>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/address.png"  > 
            </div>
            <div class="col-md-10">
                <h6>168, Shanti Niketon </h6>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/massenger.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><?php echo $company->company; ?></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/website.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#">http://www.muslimand.com/ </a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/birth.png"  > 
            </div>
            <div class="col-md-10">
                <h6>January 1,1990 </h6>
            </div>
        </div>
    </div>
</div>