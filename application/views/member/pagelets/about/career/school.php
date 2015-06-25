<script type="text/javascript">
    $(function(){
        $("#school_update_btn").on('click',function(){
              $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_school',
                data: { 
                    bp_school : $("#bp_school").val(),
                    bp_school_dec : $("#bp_school_dec").val(),
                },
                success: function(data) {
                    $("#school_tmpl_id").html(tmpl("tmpl_schools", data.school) + $("#school_tmpl_id").html());
                    $("#school").hide();
                    $("#subcategory_school").show();
                }
            });
        });
    });
</script>
<div id="school" style="display: none;">
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style" aria-label="Close" onclick="close_window_5()"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">School</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_school + array('class' => 'form-control')); ?>
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
                    <?php echo form_textarea($bp_school_dec + array('class' => 'form-control'));?>
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
                            <?php echo form_input($school_update_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                            <!--<button class="btn btn-default pull-right form-control" style="background-color: #703684; color: white; margin-right: -15px;">Save Updates</button>-->
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-default form-control" style="background-color: #703684; color: white">Cancel</button>
                        </div>
                    </div>
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

    });
    function close_window_5() {
        $('#school').hide();
        $('#subcategory_school').show();
    }
</script>