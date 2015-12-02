<div id="family_member_add_id" style="display: none;" class="carrer_bg">
    <div class="row form-group">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style family_member_close_id" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row padding_top_over_row form-group">
                <div class="col-md-12">
                    <label>Family Members</label>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Family Member</span>
                </div>
                <div class="col-md-2">
                    <span style="border: 1px solid lightgrey; padding: 10px 25px; vertical-align: top;"></span>
                </div>
                <div class="col-md-6">
                    <input class="form-control">
                </div>
            </div>
            
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
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
                    <button class="pull-right form-control form_control_custom_style member_about_save_button" style="background-color: #703684; color: white; margin-right: -15px;">Save Updates</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default form-control family_member_close_id" style="background-color: #703684; color: white">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<script>
    $(function () {
        $("#checkbox_id").prop("checked", true);
//        if($("checkbox_id").is(":checked")
        $("#checkbox_id").on("click", function () {
            $("#present").hide();
            $("#working_year").show();
        });

        $(".family_member_close_id").on("click", function(){
            $("#family_member_add_id").hide();
            $("#family_member_id").show();
        });
    });
   
</script>