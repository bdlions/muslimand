<div style="">
    <div id="add_language" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Language</a>
            </div>
        </div>
    </div>
    <div id="language" class="display_hidden contact_background">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_language_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Language</span>
            </div>
            <div class="col-md-8">
                <input class="form-control form_control_custom_style" placeholder="">
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
                        <button class="btn btn-xs form-control form_control_custom_style member_about_save_button" style="background-color: #703684; color: #fff;">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style member_about_cancel_button cancel_language_window" style="background-color: #703684; color: #fff;">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        // Language
        $("#add_language").on("click", function() {
            $("#add_language").hide();
            $("#language").show();
        });
        $(".cancel_language_window").on("click", function() {
            $("#language").hide();
            $("#add_language").show();
        });
    });

</script>