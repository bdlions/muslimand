<!--<script type="text/x-tmpl" id="tmpl_overview">
    {% var i=0, overview = ((o instanceof Array) ? o[i++] : o); %}
    {% while(overview){ %}
        <div id="about_overview" class="row">
    <div class="col-md-6">
            <div class="row form-group" id="about_overview_company">
                <div class="col-md-2">
                    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
                </div>
                <div class="col-md-10">
                    Works at <a href="#"><?php echo '{%= overview.workPlace.company %}' ?></a>
                </div>
            </div>
        <div class="pagelet_divider"></div>
        <div id="about_overview_uiversity">
            <div class="row form-group">
                <div class="col-md-2">
                    <img src="<?php echo base_url(); ?>resources/images/Food.jpg"  width="40" height="40"> 
                </div>
                <div class="col-md-10">
                    Studied at <a href="#"> <?php echo '{%= overview.university.university %}' ?></a>
                </div>
            </div>
        </div>

        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Lives in <a href="#"><?php echo '{%= overview.city.cityName %}' ?></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mobile_icon.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><?php echo '{%= overview.mobilePhone.phone %}' ?></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mail.png"  > 
            </div>
            <div class="col-md-10">
                <h6><?php echo '{%= overview.email.email %}' ?></h6>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/address.png"  > 
            </div>
            <div class="col-md-10">
                <h6><?php echo '{%= overview.address.postCode %}' ?>,<?php echo '{%= overview.address.zip %}' ?>,<?php echo '{%= overview.address.address %}' ?>,<?php echo '{%= overview.address.city %}' ?></h6>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/messenger.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><?php // echo $company->company;  ?></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/website.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><?php echo '{%= overview.website.website %}' ?></a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/birth.png"  > 
            </div>
            <div class="col-md-10">
                <h6><?php echo '{%= overview.birthDate.birthDay %}' ?>-<?php echo '{%= overview.birthDate.birthMonth %}' ?>-<?php echo '{%= overview.birthDate.birthYear %}' ?></h6>
            </div>
        </div>
    </div>
</div>
        
         {% overview = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}

</script>-->
<!--<div id="about_overview"></div>-->

<script type="text/x-tmpl" id="tmpl_work_for_overview"> 
    {% var i=0, workplace_company = ((o instanceof Array) ? o[i++] : o); %}
    <div class="row form-group">
    <div class="col-md-2">
    <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
    </div>
    <div class="col-md-10">
    Works at <a href=""><?php echo'{%= workplace_company.company %}' ?></a>
    </div>
    </div>

</script>
<script type="text/x-tmpl" id="tmpl_uv_for_overview">
{% var i=0, university = ((o instanceof Array) ? o[i++] : o); %}
           <div class="row form-group">
                <div class="col-md-2">
                    <img src="<?php echo base_url(); ?>resources/images/Food.jpg"  width="40" height="40"> 
                </div>
                <div class="col-md-10">
                    Studied at <a href=""><?php echo '{%= university.university%}' ?></a>
                </div>
            </div>
    
</script>
<script type="text/x-tmpl" id="tmpl_location_for_overview">
      {% var i=0, city = ((o instanceof Array) ? o[i++] : o); %}
<div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Lives in <a href="#"><?php echo '{%=city.cityName %}' ?></a>
            </div>
        </div>

    
</script>

<script type="text/x-tmpl" id="tmpl_phone_for_overview">
     {% var i=0, mobilePhone = ((o instanceof Array) ? o[i++] : o); %}
<div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mobile_icon.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><?php echo '{%= mobilePhone.phone %}' ?></a>
            </div>
        </div>
</script>
<script type="text/x-tmpl" id="tmpl_email_for_overview">
  {% var i=0, email = ((o instanceof Array) ? o[i++] : o); %}  
<div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/mail.png"  > 
            </div>
            <div class="col-md-10">
                <h6><?php echo '{%= email.email %}' ?></h6>
            </div>
        </div>
</script>
<script type="text/x-tmpl" id="tmpl_address_for_overview">
     {% var i=0, address = ((o instanceof Array) ? o[i++] : o); %} 
 <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/address.png"  > 
            </div>
            <div class="col-md-10">
                <h6><?php echo '{%= address.postCode %}' ?>,<?php echo '{%= address.zip %}' ?>,<?php echo '{%= address.address %}' ?>,<?php echo '{%= address.city %}' ?></h6>
            </div>
        </div>
</script>
<script type="text/x-tmpl" id="tmpl_website_for_overview">
    {% var i=0, website = ((o instanceof Array) ? o[i++] : o); %} 
 <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/website.png"  > 
            </div>
            <div class="col-md-10">
                <a href="#"><?php echo '{%= website.website %}' ?></a>
            </div>
        </div>
</script>
<script type="text/x-tmpl" id="tmpl_birthdate_for_overview">
 {% var i=0, birthDate = ((o instanceof Array) ? o[i++] : o); %}   
 <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/about_icons/birth.png"  > 
            </div>
            <div class="col-md-10">
                <h6><?php echo '{%= birthDate.birthDay %}' ?>-<?php echo '{%= birthDate.birthMonth %}' ?>-<?php echo '{%= birthDate.birthYear %}' ?></h6>
            </div>
        </div>
</script>

<div id="about_overview" class="row">
    <div class="col-md-6">
        <div  id="about_overview_company">

        </div>
        <div class="pagelet_divider"></div>
        <div id="about_overview_uiversity">

        </div>

        <div class="pagelet_divider"></div>
        <div  id="about_overview_location">

        </div>
    </div>
    <div class="col-md-6">
        <div  id="about_overview_phone">

        </div>
        <div  id="about_overview_email">

        </div>
        <div  id="about_overview_address">

        </div>
        
        <div  id="about_overview_website">

        </div>
        <div  id="about_overview_birthdate">

        </div>
    </div>
</div>