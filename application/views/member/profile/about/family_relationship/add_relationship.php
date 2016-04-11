<div style="">
    <div class="row">
        <div class="col-md-12" id="relationship_id">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add your Relationship</a>
            </div>
        </div>
    </div>
    <div id="relationship_add_id" style="display: none;" class="carrer_bg">
        <div class="row form-group">
            <div class="col-md-offset-1 col-md-11">
                <div class="row form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style relationship_close_id" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                    </div>
                </div>
                <div class="pagelet_divider"></div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Relationship</span>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control form_control_custom_style"  ng-options="relation for relation in relationShipList" ng-model="rStatusInfo.relationship">
                            <option value="" selected>---</option>
                        </select>
                <!--<input type="text" class="form-control form_control_custom_style" ng-model="rStatusInfo.relationship">-->
                    </div>
                </div>
                <div class="pagelet_divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
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
                                <button class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" ng-click="addRStatus('<?php echo $user_id; ?>')">Save</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-xs form-control form_control_custom_style relationship_close_id" style="background-color: #703684; color: white">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        //relationship status
        $("#relationship_id").on("click", function() {
            $("#relationship_id").hide();
            $("#relationship_add_id").show();
        });
        $(".relationship_close_id").on("click", function() {
            $("#relationship_add_id").hide();
            $("#relationship_id").show();
        });
    });
</script>