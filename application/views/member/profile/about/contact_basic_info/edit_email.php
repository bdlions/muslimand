<div  class="col-md-12 contact_background">
    <div class="row form-group">
        <div class="col-md-offset-9 col-md-3">
            <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_email_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Email</span>
        </div>
        <div class="col-md-8">
            <input type="text" id="email_edit_id" class="form-control" ng-model="email.email">
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
                    <button id="edit_email_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_email(angular.element(this).scope().email)">Save</button>
                </div>
                <div class="col-md-3">
                    <button class="form-control form_control_custom_style member_about_cancel_button cancel_mobile_window" >Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_email(emailInfo) {
        var emailId = emailInfo.id;
        if (emailInfo.email == "") {
            alert("Please Give Your Email ");
            return;
        }
        angular.element($('#edit_email_btn')).scope().editEmail(emailInfo, function () {
            $('#email_show_' + emailId).show();
            $('#email_edit_id_' + emailId).hide();
        });
    }
</script>