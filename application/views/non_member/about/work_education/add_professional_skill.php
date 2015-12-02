<div style="">
    <div id="subcategory_professional_skill" class="row form-group" >
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Professional Skills</a>
            </div>
        </div>
    </div>
    <div id="professional_skill" style="display: none;" class="carrer_bg">
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
                        <input type="text" id="p_skill_id" class="form-control" ng-model="pSkillInfo.pSkill">
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
                        <button id="save_p_skill_btn" class="btn btn-default form-control" style="background-color: #703684; color: white" onclick="add_s_skill('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-default form-control cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('#subcategory_professional_skill').on('click', function () {
            $('#subcategory_professional_skill').hide();
            $('#professional_skill').show();
        });
        $(".cancelling_btn").on("click", function () {
            $("#professional_skill").hide();
            $("#subcategory_professional_skill").show();
        });
    });
    function add_s_skill(userId) {
        var pSkill = $('#p_skill_id').val();
        if (pSkill.length == 0) {
            alert("Please Fill up Professional Field");
            return;
        }
        angular.element($('#save_p_skill_btn')).scope().addPSkill(userId, function () {
            $("#professional_skill").hide();
            $("#subcategory_professional_skill").show();
            $("#p_skill_tmpl_id").show();
        });


    }

</script>