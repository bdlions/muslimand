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
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_address_window" aria-label="Close" onclick="close_window_5()"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Address</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" ng-model="addressInfo.address">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">City</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" ng-model="addressInfo.city">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Post Code</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" ng-model="addressInfo.postCode">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Zip</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" ng-model="addressInfo.zip">
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-offset-2 col-md-10">
                <div class="row form-group">
                    <div class="col-md-5">
                        <select class="form-control" name="control">
                            <option selected="1" value="0">Everyone</option>
                            <option value="1">Friends</option>
                            <option value="2">Friends of Friends</option>
                            <option value="3">Only Me</option>
                            <option value="4">Custom</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addAddress('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="form-control form_control_custom_style member_about_cancel_button cancel_address_window" >Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        // Address
        $("#add_address").on("click", function() {
            $("#add_address").hide();
            $("#address").show();
        });
        $(".cancel_address_window").on("click", function() {
            $("#address").hide();
            $("#add_address").show();
        });
    });
</script>