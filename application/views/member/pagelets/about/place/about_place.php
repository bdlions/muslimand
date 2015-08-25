<div id="about_place" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">City/HomeTown</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div>
        <div id="current_city_add" class="row">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your Current City</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/pagelets/about/place/current_city"); ?>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div>
        <div id="home_town_add" class="row">
            <div class="col-md-12">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                    <a class="holder_style">Add Your HomeTown</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/pagelets/about/place/home_town"); ?>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id = "current_city_id" style="display: none">
          <div class="row form-group">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/dhaka.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="city.cityName"></span><span ng-bind="city.country.title"></span></a>
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
                <div class="row">
                    <div class="col-md-12">
                        Current City
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id = "home_town_id" style="display: none">
        <div class="row form-group">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/dhaka.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="town.townName"></span>,<span ng-bind="town.country.title"></span></a>
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
                <div class="row">
                    <div class="col-md-12">
                        Home Town
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<script>
    $(function () {
        $('#current_city_add').on('click', function () {
            $('#current_city_add').hide();
            $('#c_city').show();
        });
    });
    $('#home_town_add').on('click', function () {
        $('#home_town_add').hide();
        $('#h_town').show();
    });

</script>