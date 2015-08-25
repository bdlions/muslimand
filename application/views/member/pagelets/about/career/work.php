<script src="<?php echo base_url(); ?>resources/bootstrap3/js/tmpl.js"></script>
<script type="text/javascript">
    $(function () {
        $("#work_update_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_work_place',
                data: {
                    bp_company: $("#bp_company").val(),
                    bp_position: $("#bp_position").val(),
                    bp_city: $("#bp_city").val(),
                    bp_work_description: $("#bp_work_description").val()
                },
                success: function (data) {
                    $("#work_place_tmpl_id").html(tmpl("tmpl_work_places", data.work_place) + $("#work_place_tmpl_id").html());
                    $("#about_overview_company").html(tmpl("tmpl_work_for_overview", data.work_place));
                    $("#work").hide();
                    $("#subcategory_work").show();
                }
            });
        });
    });
</script>

<div id="work" style="display: none;" class="carrer_bg">
    <div class="row">
        <div class="col-md-12">
            <div class="row form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancelling_btn" aria-label="Close" onclick="close_window_5()"><span aria-hidden="true">&times;</span></button>   
                    </div>
                </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Company</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_company + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Position</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_position + array('class' => 'form-control')); ?>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">City/Town</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_city + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Description</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_textarea($bp_work_description + array('class' => 'form-control')); ?>
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
                                    <select name="year" class="form-control">
                                        <option value="">Year</option>
                                        <?php
                                        for ($j = 1985; $j <= 2015; $j++) {
                                            echo"<option value='{$j}'>{$j}</option>";
                                        }
                                        ?>
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
                                    <select name="year" class="form-control">
                                        <option value="">Year</option>
                                        <?php
                                        for ($j = 1985; $j <= 2015; $j++) {
                                            echo"<option value='{$j}'>{$j}</option>";
                                        }
                                        ?>
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
                    <select class="form-control" name="control">
                        <option selected="1" value="0">Everyone</option>
                        <option value="1">Friends</option>
                        <option value="2">Friends of Friends</option>
                        <option value="3">Only Me</option>
                        <option value="4">Custom</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <?php echo form_input($work_update_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default form-control cancelling_btn" style="background-color: #703684; color: white">Cancel</button>
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
            if($("#checkbox_id").is(':checked') == false){
                console.log("Hello");
            }else{
                
            }
            $("#present").hide();
            $("#working_year_to").hide();
            $("#working_year_add_to").show();
        });
        $("#working_year_add_to").on("click", function () {
            $("#working_year_add_to").hide();
            $("#working_year_to").show();
        });


        $(".cancelling_btn").on("click", function () {
            $("#work").hide();
            $("#subcategory_work").show();
        });
        $("#working_year_add_from").on("click", function () {
            $("#working_year_add_from").hide();
            $("#working_year_option_from").show();
        });
    });

</script>