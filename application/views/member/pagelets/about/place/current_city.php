<script type="text/javascript">
    $(function () {
        $("#current_city_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_current_city',
                data: {
                    current_city: $("#current_city").val(),
                },
                success: function (data) {
                    $("#current_city_id").html(tmpl("tmpl_current_city", data.current_city));
                }
            });
        });
    });
</script>

<div id="c_city" style="display: none;">
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style" aria-label="Close" onclick="close_window_6()"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Current City</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($current_city + array('class' => 'form-control')); ?>
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
                    <?php echo form_input($current_city_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                    <!--<button class="btn btn-default pull-right form-control" style="background-color: #703684; color: white; margin-right: -15px;">Save Updates</button>-->
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
    function close_window_6() {
        $('#current_city').hide();
        $('#current_city_add').show();
    }
</script>