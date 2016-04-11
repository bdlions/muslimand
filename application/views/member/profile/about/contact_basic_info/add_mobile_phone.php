<div style="">
    <div id="add_mobile" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Mobile/Phone</a>
            </div>
        </div>
    </div>
    <div id="mobile" class="display_hidden contact_background">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_mobile_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Mobile or Phone</span>
            </div>
            <div class="col-md-8">
                <input type="text" id="phone_add_id" class="form-control form_control_custom_style" ng-model="phoneInfo.phone">
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-offset-2 col-md-10">
                <div class="row form-group">
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
                        <button id="save_mobile_btn" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_phone('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style member_about_cancel_button cancel_mobile_window" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // Mobile Number
        $("#add_mobile").on("click", function () {
            $("#add_mobile").hide();
            $("#mobile").show();
        });
        $(".cancel_mobile_window").on("click", function () {
            $("#mobile").hide();
            $("#add_mobile").show();
        });
    });
    function add_phone(userId) {
        var phone = $('#phone_add_id').val();
        if (phone.length == 0) {
            alert("Please Fill up Phone number");
            return;
        }
        angular.element($('#save_mobile_btn')).scope().addPhone(userId, function () {
            $('#mobile_phone_id').show();
            $("#mobile").hide();
            $("#add_mobile").show();
        });
    }
</script>