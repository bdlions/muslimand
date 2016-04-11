<div style="">
    <div id="add_email" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Email</a>
            </div>
        </div>
    </div>
    <div id="email" class="display_hidden contact_background">
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
                <input type="text" id="email_add_id" class="form-control form_control_custom_style" ng-model="emailInfo.email">
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
                        <button id="save_email_btn" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_email('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style member_about_cancel_button cancel_email_window" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // Email
        $("#add_email").on("click", function () {
            $("#add_email").hide();
            $("#email").show();
        });
        $(".cancel_email_window").on("click", function () {
            $("#email").hide();
            $("#add_email").show();
        });
    });
    function add_email(userId) {
        var email = $('#email_add_id').val();
        if (email.length == 0) {
            alert("Please Give your Email");
            return;
        }
        angular.element($('#save_email_btn')).scope().addEmail(userId, function () {
            $('#email_id').show();
            $("#email").hide();
            $("#add_email").show();
        });
    }
</script>