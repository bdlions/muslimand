
<div id="address" class="contact_background">
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
            <input type="text" id="address_add_id" class="form-control" ng-model="address.address">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">City</span>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" ng-model="address.city">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Post Code</span>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" ng-model="address.postCode">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Zip</span>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" ng-model="address.zip">
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-5">
                    <select class="form-control" name="control" disabled>
                        <option selected="1" value="0">Everyone</option>
                        <option value="1">Friends</option>
                        <option value="2">Friends of Friends</option>
                        <option value="3">Only Me</option>
                        <option value="4">Custom</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button id="edit_address_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_address(angular.element(this).scope().address)">Save</button>
                </div>
                <div class="col-md-3">
                    <button class="form-control form_control_custom_style member_about_cancel_button cancel_address_window" >Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_address(addressInfo) {
        if (addressInfo.address == "") {
            alert("Give you address Please ");
            return;
        }
        angular.element($('#edit_address_btn')).scope().editAddress(addressInfo, function () {
            $('#address_id').show();
            $('#edit_address_id').hide();
        });
    }
</script>