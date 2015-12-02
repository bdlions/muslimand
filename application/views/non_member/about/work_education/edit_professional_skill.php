<div class="row">
    <div class="col-md-12">
        <div class="row form-group">
            <div class="col-md-offset-9 col-md-3">
                <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancelling_btn" aria-label="Close" ><span aria-hidden="true">&times;</span></button>   
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span class="subcategory_label_style">Professional Skills</span>
            </div>
            <div class="col-md-8">
                <input type="text" id="p_skill_{{pSkill.id}}" class="form-control" ng-model="pSkill.pSkill">
            </div>
        </div>
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
                <button id="edit_p_skill_btn_id" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="edit_p_skill(angular.element(this).scope().pSkill)">Save</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-default form-control cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function edit_p_skill(pSkillInfo) {
        var pSkillId = pSkillInfo.id;
        if (pSkillInfo.ps == "") {
            alert("Please Fill up Professional Field");
            return;
        }
        angular.element($('#edit_p_skill_btn_id')).scope().editPSkill(pSkillInfo, function () {
            $('#p_skill_' + pSkillId).show();
            $('#edit_p_skill_' + pSkillId).hide();
        });
    }
</script>