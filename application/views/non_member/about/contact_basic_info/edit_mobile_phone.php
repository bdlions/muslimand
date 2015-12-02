
<div class="row form-group">
    <div class="col-md-4">
        <span class="subcategory_label_style">Mobile or Phone</span>
    </div>
    <div class="col-md-8">
        <input type="text" id="phone_edit_id" class="form-control" ng-model="phone.phone">
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
                <button id="edit_mobile_phone_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_mobile_phone(angular.element(this).scope().phone)">Save</button>
            </div>
            <div class="col-md-3">
                <button class="form-control form_control_custom_style member_about_cancel_button cancel_mobile_window" >Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_mobile_phone(mobilePhoneInfo) {
        var mobilePId = mobilePhoneInfo.id;
        if (mobilePhoneInfo.phone == "") {
            alert("Please Give Phone number");
            return;
        }
        angular.element($('#edit_mobile_phone_btn')).scope().editMobilePhone(mobilePhoneInfo, function () {
           $('#mobile_phone_' + mobilePId).show();
           $('#edit_mobile_phone_' + mobilePId).hide();
        });
    }
</script>	