<div style="">
    <div id="home_town_add" class="row">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your HomeTown</a>
            </div>
        </div>
    </div>
    <div id="h_town" style="display: none;" class="carrer_bg">
        <div class="row">
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style home_town_close" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Home Town</span>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="home_town_add_id" class="form-control form_control_custom_style" ng-model="homeTownInfo.townName">
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
                        <button id="save_home_town_btn" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_home_town('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style home_town_close" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        //home town
        $('#home_town_add').on('click', function () {
            $('#home_town_add').hide();
            $('#h_town').show();
        });
        $(".home_town_close").on("click", function () {
            $('#h_town').hide();
            $('#home_town_add').show();
        });
    });

    function add_home_town(userId) {
        var cityName = $('#home_town_add_id').val();
        if (cityName.length == 0) {
            alert("Please Fill up Home Town");
            return;
        }
        angular.element($('#save_home_town_btn')).scope().addHomeTown(userId, function () {
            $('#home_town_id').show();
            $("#home_town_add").show();
            $("#h_town").hide();
        });
    }
</script>