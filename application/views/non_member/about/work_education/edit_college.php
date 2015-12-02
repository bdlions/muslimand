<div class="row">
    <div class="col-md-offset-2 col-md-10">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style college_area_hide" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">College</span>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="college_add_id" ng-model="college.college">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Time Period</span>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control"  ng-options="year for year in yearList" ng-model="college.startDate">
                            <option value="" selected>Select Year</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        to
                    </div>
                    <div class="col-md-4">
                        <select class="form-control"  ng-options="year for year in yearList" ng-model="college.endDate">
                            <option value="" selected>Select Year</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Description</span>
            </div>
            <div class="col-md-8">
                <textarea type="text" class="form-control" ng-model="college.description"></textarea>
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
                        <button id="edit_college_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_college(angular.element(this).scope().college)">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-default form-control college_area_hide" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_college(collegeInfo) {
        var collegeId = collegeInfo.id;
        if (collegeInfo.clg == "") {
            alert("Please fill up College Name ");
            return;
        }
        angular.element($('#edit_college_btn')).scope().editCollege(collegeInfo, function () {
            $('#college_' + collegeId).show();
            $('#edit_college_' + collegeId).hide();
        });
    }
</script>