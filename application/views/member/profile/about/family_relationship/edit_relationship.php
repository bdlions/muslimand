<div class="row form-group carrer_bg">
    <div class="col-md-offset-1 col-md-11">
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
                <select class="form-control form_control_custom_style" ng-options="relation for relation in relationShipList" ng-model="rStatus.relationshipStatus">
                    <option value="" selected>---</option>
                </select>
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
                        <button  id="rStatus_update_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_r_status(angular.element(this).scope().rStatus)">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-default form-control relationship_close_id" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function edit_r_status(rStatus) {
        angular.element($('#rStatus_update_btn')).scope().editRStatus(rStatus, function() {
            $('#relationship_add').show();
            $('#edit_relation_status').hide();
        });
    }


</script>
