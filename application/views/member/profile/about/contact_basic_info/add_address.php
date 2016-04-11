<div style="">
    <div id="add_address" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Address</a>
            </div>
        </div>
    </div>
    <div id="address" class="display_hidden contact_background">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_address_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Address</span>
            </div>
            <div class="col-md-8">
                <input type="text" id="address_add_id" class="form-control form_control_custom_style" ng-model="addressInfo.address">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">City</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control form_control_custom_style" ng-model="addressInfo.city">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Post Code</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control form_control_custom_style" ng-model="addressInfo.postCode">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Zip</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control form_control_custom_style" ng-model="addressInfo.zip">
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
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
                        <button id="save_address_btn" class="btn btn-xs button-custom form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_address('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style member_about_cancel_button cancel_address_window" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // Address
        $("#add_address").on("click", function () {
            $("#add_address").hide();
            $("#address").show();
        });
        $(".cancel_address_window").on("click", function () {
            $("#address").hide();
            $("#add_address").show();
        });
    });
    function add_address(userId) {
        var address = $('#address_add_id').val();
        if (address.length == 0) {
            alert("Please Give  your Address");
            return;
        }
        angular.element($('#save_address_btn')).scope().addAddress(userId, function () {
            $('#address_id').show();
            $("#address").hide();
            $("#add_address").show();
        }
        )
    }
    ;

</script>