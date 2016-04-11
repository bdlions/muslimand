<div class="row">
    <div class="col-md-offset-2 col-md-10">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style home_town_close" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Home Town</span>
            </div>
            <div class="col-md-8">
                <input type="text" id="home_town_edit_id" class="form-control" ng-model="town.townName">
            </div>
        </div>
    </div>
</div>
<div class="pagelet_divider"></div>
<div class="row">
    <div class="col-md-offset-2 col-md-10">
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
                <button id="edit_h_town_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_home_town(angular.element(this).scope().town)">Save</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-default form-control home_town_close" style="background-color: #703684; color: white">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_home_town(homeTownInfo) {
        if (homeTownInfo.clg == "") {
            alert("Please fill up Home Town ");
            return;
        }
        angular.element($('#edit_college_btn')).scope().editHomeTown(homeTownInfo, function () {
            $('#home_town_id').show();
            $('#home_town_edit_id').hide();
        });
    }
</script>	