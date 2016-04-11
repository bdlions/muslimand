<div style="">
    <div id="current_city_add" class="row">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Current City</a>
            </div>
        </div>
    </div>
    <div id="c_city" style="display: none;" class="carrer_bg">
        <div class="row">
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style current_city_close" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Current City</span>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="current_city_add_id" class="form-control form_control_custom_style" ng-model="currentCityInfo.cityName">
                    </div>
                </div>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <select class="form-control form_control_custom_style" name="control" disabled>
                            <option selected="1" value="0">Everyone</option>
                            <option value="1">Friends</option>
                            <option value="2">Friends of Friends</option>
                            <option value="3">Only Me</option>
                            <option value="4">Custom</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button  id="save_city_btn" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_current_city('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style current_city_close" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        //current city
        $('#current_city_add').on('click', function() {
            $('#current_city_add').hide();
            $('#c_city').show();
        });

        $(".current_city_close").on("click", function() {
            $("#c_city").hide();
            $('#current_city_add').show();
        });
    });

    function add_current_city(userId) {
        var cityName = $('#current_city_add_id').val();
        if (cityName.length == 0) {
            alert("Please Fill up City Name");
            return;
        }
        angular.element($('#save_city_btn')).scope().addCurrentCity(userId, function() {
            $('#current_city_id').show();
            $("#current_city_add").show();
            $("#c_city").hide();
        });
    }
</script>