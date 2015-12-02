<div style="">
    <div id="add_favorite_quote" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Favorite Quote</a>
            </div>
        </div>
    </div>
    <div id="favorite_quote" class="display_hidden contact_background">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancel_favorite_quote_window" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Add Quote</span>
            </div>
            <div class="col-md-8">
                <textarea id="fv_quote" class="form-control" placeholder="Add Your Favorite Quote" ng-model="fQuoteInfo.fQuote"></textarea>
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
                        <button id="favorite_quote_save" class="pull-right form-control form_control_custom_style member_about_save_button" onclick="add_fQuote('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="form-control form_control_custom_style member_about_cancel_button cancel_favorite_quote_window" >Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // Favorite Quote
        $("#add_favorite_quote").on("click", function () {
            $("#add_favorite_quote").hide();
            $("#favorite_quote").show();
        });
        $(".cancel_favorite_quote_window").on("click", function () {
            $("#favorite_quote").hide();
            $("#add_favorite_quote").show();
        });
    });

    function add_fQuote(userId) {
        var about = $('#fv_quote').val();
        if (about.length == 0) {
            alert("Please Write Your favorite Quote!");
            return;
        }
        angular.element($('#favorite_quote_save')).scope().addFQuote(userId, function () {
            $('#fQuoteId').show();
            $("#add_favorite_quote").show();
            $("#favorite_quote").hide();
        });
    }

</script>

