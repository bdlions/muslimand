
<div id="professional_skill" style="display: none;" class="carrer_bg">
    <div class="row">
        <div class="col-md-12">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Professional Skills</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="pSkillInfo.pSkil">
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
                    <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addPSkill(<?php echo htmlspecialchars(json_encode($user_id)); ?>)">Save</button>
                </div>
                <div class="col-md-3">
                    <button id="cancel_professional_skill_window" class="btn btn-default form-control" style="background-color: #703684; color: white">Cancel</button>
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

        $("#cancel_professional_skill_window").on("click", function () {
            $("#professional_skill").hide();
            $("#subcategory_professional_skill").show();
        });
    });
    
</script>