<div id="about_place" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">City/HomeTown</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/places/add_current_city"); ?>
        </div>
    </div>
    <!--Show updated current city-->
    <div id="current_city_id" style="display: none;">
        <div class="row form-group">
            <div class="col-md-2">
                <img class="pull-right" src="<?php echo base_url(); ?>resources/images/about_icons/livingPlace.png">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10">
                        <a href=""><span ng-bind="city.cityName"></span><span ng-bind="city.country.title"></span></a>
                    </div>
                    <div class="col-md-2"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_city_edit_place()" id="{{city.id}}">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_city_delete(this)" id="{{city.id}}">Delete</a></li>
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
    <div id="current_city_edit_id" style="display: none;">
        <?php $this->load->view("member/profile/about/places/edit_current_city"); ?>
    </div>

    <span ng-if="town != null"><div class="pagelet_divider"></div></span>
    <div class="row form-group"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/places/add_home_town"); ?>
        </div>
    </div>
    <!--Show updated home town-->
    <div id = "home_town_id" style="display: none">
        <div class="row form-group">
            <div class="col-md-2">
                <img class="pull-right" src="<?php echo base_url(); ?>resources/images/about_icons/home_town.png">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10">
                        <a href=""><span ng-bind="town.townName"></span>,<span ng-bind="town.country.title"></span></a>
                    </div>
                    <div class="col-md-2"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_h_town_edit_place()" id="{{town.id}}">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_h_town_delete(this)" id="{{town.id}}">Delete</a></li>
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
    <div id ="home_town_edit_id" style="display: none">
        <?php $this->load->view("member/profile/about/places/edit_home_town"); ?>
    </div>
</div>
<script type="text/javascript">
    function show_city_edit_place() {
        $('#current_city_id').hide();
        $('#current_city_edit_id').show();
    }
    function show_h_town_edit_place() {
        $('#home_town_id').hide();
        $('#home_town_edit_id').show();
    }
    function open_modal_city_delete(e) {
        var cCityId = $(e).attr('id');
        var selectionInfo = "Current City?";
        delete_confirmation(selectionInfo, function(response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deleteCurrentCity(cCityId, function() {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#current_city_id').hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
    function open_modal_h_town_delete(e) {
        var hTownId = $(e).attr('id');
        var selectionInfo = "Home Town?";
        delete_confirmation(selectionInfo, function(response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deleteHomeTown(hTownId, function() {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#home_town_id').hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
</script>
