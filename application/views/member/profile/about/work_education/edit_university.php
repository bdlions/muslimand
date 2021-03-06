<div class="row">
    <div class="col-md-12">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancelling_btn" aria-label="Close" ><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">University</span>
            </div>
            <div class="col-md-8">
                <input type="text" id="university_add_id" class="form-control" ng-model="university.university">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Time Period</span>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <div class="pages_type_add_form_input">
                            <select class="form-control"  ng-options="year for year in yearList" ng-model="university.startDate">
                                <option value="" selected>Select Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        to
                    </div>
                    <div class="col-md-5">
                        <div class="pages_type_add_form_input">
                            <select class="form-control"  ng-options="year for year in yearList" ng-model="university.endDate">
                                <option value="" selected>Select Year</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Description</span>
            </div>
            <div class="col-md-8">
                <textarea type="text" class="form-control" ng-model="university.description"></textarea>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
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
                        <button id="edit_uv_btn_id" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_university(angular.element(this).scope().university)">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-default form-control cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_university(uvInfo) {
        var uvId = uvInfo.id;
        if (uvInfo.uni == "") {
            alert("Please Fill up University Name");
            return;
        }
        angular.element($('#edit_uv_btn_id')).scope().editUniversity(uvInfo, function () {
            $('#edit_university_' + uvId).hide();
            $('#uv_' + uvId).show();
        });
    }
</script>