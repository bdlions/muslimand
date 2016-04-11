<div style="">
    <div id="subcategory_university" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a University</a>
            </div>
        </div>
    </div>
    <div id="university" style="display: none;" class="carrer_bg">
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
                        <input type="text" id="university_add_id" class="form-control form_control_custom_style" ng-model="universityInfo.university">
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
                                    <select class="form-control form_control_custom_style"  ng-options="year for year in yearList" ng-model="universityInfo.startDate">
                                        <option value="" selected>Select Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                to
                            </div>
                            <div class="col-md-5">
                                <div class="pages_type_add_form_input">
                                    <select class="form-control form_control_custom_style"  ng-options="year for year in yearList" ng-model="universityInfo.endDate">
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
                        <textarea type="text" class="form-control textarea_custom_style font_12px" ng-model="universityInfo.description"></textarea>
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
                                <button id="university_btn_id" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_university('<?php echo $user_id; ?>')">Save</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-xs form-control form_control_custom_style cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('#subcategory_university').on('click', function () {
            $('#subcategory_university').hide();
            $("#university").show();
        });
        $(".cancelling_btn").on("click", function () {
            $("#university").hide();
            $("#subcategory_university").show();
        });
    });

    function add_university(userId) {
        var university = $('#university_add_id').val();
        if (university.length == 0) {
            alert("Please Fill up University Name");
            return;
        }
        angular.element($('#university_btn_id')).scope().addUniversity(userId, function () {
            $("#university").hide();
            $("#subcategory_university").show();
            $("#uv_tmpl_id").show();
        });
    }
</script>