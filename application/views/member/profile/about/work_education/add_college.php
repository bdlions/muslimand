<div style="">
    <div id="subcategory_college" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a College</a>
            </div>
        </div>
    </div>
    <div id="college" class="carrer_bg" style="display: none;">
        <div class="row">
            <div class="col-md-12">
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
                        <input type="text" class="form-control form_control_custom_style" id="college_add_id" ng-model="collegeInfo.college">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Time Period</span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <select class="form-control form_control_custom_style"  ng-options="year for year in yearList" ng-model="collegeInfo.startDate">
                                    <option value="" selected>Select Year</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                to
                            </div>
                            <div class="col-md-5">
                                <select class="form-control form_control_custom_style"  ng-options="year for year in yearList" ng-model="collegeInfo.endDate">
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
                        <textarea type="text" class="form-control textarea_custom_style font_12px" ng-model="collegeInfo.description"></textarea>
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
                                <button id="save_college_btn" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_college('<?php echo $user_id; ?>')">Save</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-xs form-control form_control_custom_style college_area_hide" style="background-color: #703684; color: white">Cancel</button>
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
        $("#checkbox_id").prop("checked", true);
//        if($("checkbox_id").is(":checked")
        $("#checkbox_id").on("click", function() {
            $("#present").hide();
            $("#working_year").show();
        });

    });
    $("#subcategory_college").on('click', function() {
        $("#subcategory_college").hide();
        $("#college").show();
    });
    $(".college_area_hide").on("click", function() {
        $("#college").hide();
        $("#subcategory_college").show();
    });
    function add_college(userId) {
        var college = $('#college_add_id').val();
        if (college.length == 0) {
            alert("Please Fill up College Name");
            return;
        }
        angular.element($('#save_college_btn')).scope().addCollege(userId, function() {
            $("#college").hide();
            $("#subcategory_college").show();
            $("#college_tmpl_id").show();
        });
    }
</script>