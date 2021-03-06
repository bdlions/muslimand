<div id="relationship_add_id" style="display: none;" class="carrer_bg">
    <div class="row form-group">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style relationship_close_id" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row padding_top_over_row form-group">
                <div class="col-md-12">
                    <label>Relationship</label>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Relationship</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="rStatusInfo.relationship">
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
                    <button class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addRStatus('<?php echo $user_id ;?>')">Save</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default form-control relationship_close_id" style="background-color: #703684; color: white">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<script>
    $(function () {
       
         $(".relationship_close_id").on("click", function () {
            $("#relationship_add_id").hide();
            $("#relationship_id").show();
        });
        $("#checkbox_id").prop("checked", true);
//        if($("checkbox_id").is(":checked")
        $("#checkbox_id").on("click", function () {
            $("#present").hide();
            $("#working_year").show();
        });

    });
</script>