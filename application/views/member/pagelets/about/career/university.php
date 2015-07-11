<script type="text/javascript">
    $(function () {
        $("#uv_update_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_university',
                data: {
                    bp_university: $("#bp_university").val(),
                    bp_university_des: $("#bp_university_des").val(),
                },
                success: function (data) {
                    $("#uv_tmpl_id").html(tmpl("tmpl_universities", data.university) + $("#uv_tmpl_id").html());
                    $("#about_overview_uiversity").html(tmpl("tmpl_uv_for_overview", data.university));
                    $("#university").hide();
                    $("#subcategory_university").show();
                }
            });
        });
    });
</script>


<div id="university" style="display: none;" class="carrer_bg">
    <div class="row">
        <div class="col-md-12">
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">University</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_university + array('class' => 'form-control')); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Time Period</span>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="achor_holder_style">Add Year</a>
                        </div>
                        <div class="col-md-2">
                            to
                        </div>
                        <div class="col-md-4">
                            <a class="achor_holder_style">Add Year</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="working_year" class="row" style="display: none">
                <div class="col-md-12">
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
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Description</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_textarea($bp_university_des + array('class' => 'form-control')); ?>
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
                            <?php echo form_input($uv_update_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                        </div>
                        <div class="col-md-3">
                            <button id="cancel_university_window" class="btn btn-default form-control" style="background-color: #703684; color: white">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $("#cancel_university_window").on("click", function () {
            $("#university").hide();
            $("#subcategory_university").show();
        });
    });
   
</script>