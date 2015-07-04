<script type="text/x-tmpl" id="tmpl_mobile_phones">
    {% var i=0, mobile_phone = ((o instanceof Array) ? o[i++] : o); %}
    {% while(mobile_phone){ %}
    <div class="row form-group">

    <div class="col-md-4">
    <div class="row">
    <div class="col-md-12">
    <?php echo '{%= mobile_phone.phone%}' ?>
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

    {% mobile_phone = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_address">
    {% var i=0, address = ((o instanceof Array) ? o[i++] : o); %}
    {% while(address){ %}
    <div class="row">
    <div class="col-md-6">
    <div class="row">
    <div class="col-md-12">
    <?php echo '{%= address.postCode%}' ?>, <?php echo '{%= address.zip%}' ?>, <?php echo '{%= address.address%}' ?>, <?php echo '{%= address.city%}' ?>. 
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
    {% address = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_website">
    {% var i=0, basic_info = ((o instanceof Array) ? o[i++] : o); %}
    {% while(basic_info){ %}
    <div class="col-md-4">
    Website
    </div>
    <div class="col-md-4">
    <div class="row">
    <div class="col-md-12">
    <?php echo '{%= basic_info.website%}' ?>
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
    {% basic_info = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_emails">
    {% var i=0, email = ((o instanceof Array) ? o[i++] : o); %}
    {% while(email){ %}
    <div class="row">
    <div class="col-md-6">
    <?php echo '{%= email.email%}' ?>
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

    {% email = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_birthday">
    {% var i=0, basic_info = ((o instanceof Array) ? o[i++] : o); %}
    {% while(basic_info){ %}
    <div class="row">
    <div class="col-md-6">
    <?php echo '{%= basic_info.birthDay%}' ?>-<?php echo '{%= basic_info.birthMonth%}' ?>-<?php echo '{%= basic_info.birthYear%}' ?>
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

    {% basic_info = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_gender">
    {% var i=0, gender = ((o instanceof Array) ? o[i++] : o); %}
    {% while(gender){ %}
    <div class="row">
    <div class="col-md-4">
    <div class="row">
    <div class="col-md-12">
    <?php echo '{%= gender.title %}' ?>
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
    {% gender = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_language">
    {% var i=0, language = ((o instanceof Array) ? o[i++] : o); %}
    {% while(language){ %}
    <div class="row">
    <div class="col-md-6">
<?php echo '{%= language.language %}' ?>
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
    {% language = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_religion">
    {% var i=0, relition = ((o instanceof Array) ? o[i++] : o); %}
    {% while(relition){ %}
    <div class="row">
            <div class="col-md-6">
<?php echo '{%= relition.title %}' ?> Islam
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
    {% relition = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>


<div class="row form-group">
    <div class="col-md-4">
        Mobile Phones
    </div>
    <div class="col-md-8">
        <div id="mobile_phone_id">
        </div>  
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4">
        Address
    </div>
    <div class="col-md-8">
        <div id="address_id">
        </div> 
    </div>
</div>
<div class="row form-group">
    <div id="website_id" ></div>
</div>
<div class="row form-group">
    <div class="col-md-4">
        Email
    </div>
    <div class="col-md-8">
        <div id="email_id" ></div>
    </div>

</div>
<div class="row form-group">
    <div class="col-md-4">
        BirthDay
    </div>
    <div class="col-md-8">
        <div id="birthday_id"></div>

    </div>
</div>
<div class="row form-group">
    <div class="col-md-4">
        Gender
    </div>
    <div class="col-md-8">
        <div id="gender_id" ></div>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4">
        Languages
    </div>
    <div class="col-md-8">
        <div id="language_id" ></div>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-4">
        Religion
    </div>
    <div class="col-md-8">
        <div id="religion_id" ></div>
    </div>
</div>