<script type="text/javascript">
    $(function(){
        $("#ps_update_btn").on('click',function(){
              $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_professional_skill',
                data: { 
                    bp_profession_skill : $("#bp_profession_skill").val()
                },
                success: function(data) {
                    $("#p_skill_tmpl_id").html(tmpl("tmpl_p_skills", data.p_skill) + $("#p_skill_tmpl_id").html());
                    $("#professional_skill").hide();
                    $("#subcategory_professional_skill").show();
                }
            });
        });
    });
</script>
<div id="professional_skill" style="display: none;">
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style" aria-label="Close" onclick="close_window_2()"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Professional Skills</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($bp_profession_skill + array('class' => 'form-control'));?>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
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
                    <?php echo form_input($ps_update_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default form-control" style="background-color: #703684; color: white">Cancel</button>
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
    function close_window_2() {
        $('#professional_skill').hide();
        $('#subcategory_professional_skill').show();
    }
</script>