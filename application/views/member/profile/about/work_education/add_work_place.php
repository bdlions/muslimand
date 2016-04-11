<div style="">
    <div id="subcategory_work" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a workplace</a>
            </div>
        </div>
    </div>
    <div id="work" style="display: none;" class="carrer_bg">
        <div class="row">
            <div class="col-md-12">
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
                        <input type="text" class="form-control form_control_custom_style" id="work_place_company" ng-model="workInfo.company">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Position</span>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control form_control_custom_style" ng-model="workInfo.position">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">City/Town</span>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control form_control_custom_style" ng-model="workInfo.city">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Description</span>
                    </div>
                    <div class="col-md-8">
                        <textarea type="text" class="form-control textarea_custom_style font_12px" ng-model="workInfo.description"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4">
                        <span class="subcategory_label_style">Time Period</span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="checkbox" id="checkbox_id">
                                <span style="vertical-align: top;">I currently work here</span>
                            </div>
                        </div>
                        <div class="row" id="add_year">
                            <div class="col-md-5">
                                <a id="working_year_add_from" class="achor_holder_style">Add Year</a>
                                <div id="working_year_option_from" style="display: none;">
                                    <div class="pages_type_add_form_input">
                                        <select class="form-control form_control_custom_style"  ng-options="year for year in yearList" ng-model="workInfo.startDate">
                                            <option value="" selected>Select Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1" >
                                to
                            </div>
                            <div class="col-md-5">
                                <div id="present">
                                    present
                                </div>
                                <a id="working_year_add_to" style="display: none;" class="achor_holder_style">Add Year</a>
                                <div id="working_year_to" style="display: none;">
                                    <div class="pages_type_add_form_input">
                                        <select class="form-control form_control_custom_style"  ng-options="year for year in yearList" ng-model="workInfo.endDate">
                                            <option value="" selected>Select Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagelet_divider"></div>
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
                        <button id="save_work_place_btn" class="btn btn-xs form-control form_control_custom_style" style="background-color: #703684; color: white" onclick="add_work_place('<?php echo $user_id; ?>')">Save</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs form-control form_control_custom_style cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("#checkbox_id").prop("checked", true);
        $("#checkbox_id").on("click", function() {
            if ($("#checkbox_id").is(':checked') === false) {
                $("#present").hide();
                $("#working_year_to").hide();
                $("#working_year_add_to").show();
            } else {
                $("#working_year_add_to").hide();
                $("#working_year_to").hide();
                $("#present").show();
            }
        });

        $('#subcategory_work').on('click', function() {
            $('#subcategory_work').hide();
            $('#work').show();
        });
        $("#working_year_add_to").on("click", function() {
            $("#working_year_add_to").hide();
            $("#working_year_to").show();
        });


        $(".cancelling_btn").on("click", function() {
            $("#work").hide();
            $("#subcategory_work").show();
        });
        $("#working_year_add_from").on("click", function() {
            $("#working_year_add_from").hide();
            $("#working_year_option_from").show();
        });
    });

    function add_work_place(userId) {
        var company = $('#work_place_company').val();
        if (company.length == 0) {
            alert("Company Is Required");
            return;
        }
        var cYear = null;

        if ($('input.checkbox_check').is(':checked')) {
            cYear = new Date().getFullYear().toString();
        }
        angular.element($('#save_work_place_btn')).scope().addWorkPlace(userId, cYear, function() {
            $("#work").hide();
            $("#subcategory_work").show();
            $("#work_place_tmpl_id").show();
        });
    }

</script>