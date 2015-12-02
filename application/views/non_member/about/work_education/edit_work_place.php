<div class="col-md-12" >
    <div class="row form-group">
        <div class="col-md-offset-9 col-md-3">
            <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancelling_btn" aria-label="Close" ><span aria-hidden="true">&times;</span></button>   
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Company</span>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" ng-model="workPlace.company">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Position</span>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" ng-model="workPlace.position">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">City/Town</span>
        </div>
        <div class="col-md-8">
            <input type="text" class="form-control" ng-model="workPlace.city">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Description</span>
        </div>
        <div class="col-md-8">
            <textarea type="text" class="form-control" ng-model="workPlace.description"></textarea>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            <span class="subcategory_label_style">Time Period</span>
        </div>
        <div class="col-md-8">
            <div class="row" id="add_year">
                <div class="col-md-5">
                    <div class="pages_type_add_form_input">
                        <select class="form-control"  ng-options="year for year in yearList" ng-model="workPlace.startDate">
                            <option value="" selected>Select Year</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1" >
                    to
                </div>
                <div class="col-md-5">
                    <div class="pages_type_add_form_input">
                        <select class="form-control"  ng-options="year for year in yearList" ng-model="workPlace.endDate">
                            <option value="" selected>Select Year</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
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
            <input type="submit" id="work_place_update_btn" value="Save" class=" button-custom form-control btn-primary" onclick="edit_work_place(angular.element(this).scope().workPlace)">
        </div>
        <div class="col-md-3">
            <button class="btn btn-default form-control cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_work_place(workPlace) {
        var workPlaceId = workPlace.id;
        if (workPlace.cmp == "") {
            alert("Please fill up Company ");
            return;
        }
        angular.element($('#work_place_update_btn')).scope().editWorkPlace(workPlace, function () {
            $('#work_place_' + workPlaceId).show();
            $('#edit_work_' + workPlaceId).hide();
        });
    }
</script>