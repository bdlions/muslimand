<div style="">
    <div id="add_website" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Website</a>
            </div>
        </div>
    </div>
    <div id="website" class="display_hidden contact_background">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_website_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Website</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="website_add_id" ng-model="websiteInfo.website">
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
                        <button id="save_website_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="add_website('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="form-control form_control_custom_style member_about_cancel_button cancel_website_window" >Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // Website
        $("#add_website").on("click", function () {
            $("#add_website").hide();
            $("#website").show();
        });
        $(".cancel_website_window").on("click", function () {
            $("#website").hide();
            $("#add_website").show();
        });
    });
    function add_website(userId) {
        var website = $('#website_add_id').val();
        if (website.length == 0) {
            alert("Please Give Wibsite");
            return;
        }
        angular.element($('#save_website_btn')).scope().addWebsite(userId, function () {
            $('#website_id').show();
            $("#website").hide();
            $("#add_website").show();
        });
    }
</script>