<div style="">
    <div id="add_about_own" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add About You</a>
            </div>
        </div>
    </div>
    <div id="about_own" class="display_hidden contact_background">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_about_own_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Add About You</span>
            </div>
            <div class="col-md-8">
                <textarea  id="about_add_id" class="form-control textarea_custom_style font_12px" placeholder="Add Something About You" ng-model="aboutInfo.about"></textarea>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-5">
                        <select class="form-control form_control_custom_style" name="control">
                            <option selected="1" value="0">Everyone</option>
                            <option value="1">Friends</option>
                            <option value="2">Friends of Friends</option>
                            <option value="3">Only Me</option>
                            <option value="4">Custom</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button id="about_add_id_" class="btn btn-xs form-control form_control_custom_style member_about_save_button" onform-control onclick="add_about('<?php echo $user_id; ?>')" style="background-color: #703684; color: #fff;">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style member_about_cancel_button cancel_about_own_window" style="background-color: #703684; color: #fff;">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        // About Own
        $("#add_about_own").on("click", function() {
            $("#add_about_own").hide();
            $("#about_own").show();
        });
        $(".cancel_about_own_window").on("click", function() {
            $("#about_own").hide();
            $("#add_about_own").show();
        });
    });

    function add_about(userId) {
        var about = $('#about_add_id').val();
        if (about.length == 0) {
            alert("Please Write About Yourself!");
            return;
        }
        angular.element($('#about_add_id_')).scope().addAbout(userId, function() {
            $('#aboutId').show();
            $("#add_about_own").show();
            $("#about_own").hide();
        });
    }

</script>
