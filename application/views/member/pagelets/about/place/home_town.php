<script type="text/javascript">
    $(function () {
        $("#home_town_btn").on('click', function () {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>' + 'basic_profile/add_home_town',
                data: {
                    home_town: $("#home_town").val(),
                },
                success: function (data) {
                    $("#home_town_id").html(tmpl("tmpl_home_town", data.home_town));
                    $("#home_town_add").show();
                    $("#h_town").hide();
                }
            });
        });
    });
</script>
<div id="h_town" style="display: none;" class="carrer_bg">
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style home_town_close" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Home Town</span>
                </div>
                <div class="col-md-8">
                    <?php echo form_input($home_town + array('class' => 'form-control')); ?>
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
                    <?php echo form_input($home_town_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default form-control home_town_close" style="background-color: #703684; color: white">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $(".home_town_close").on("click", function () {
            $('#h_town').hide();
            $('#home_town_add').show();
        });
        $("#checkbox_id").prop("checked", true);
//        if($("checkbox_id").is(":checked")
        $("#checkbox_id").on("click", function () {
            $("#present").hide();
            $("#working_year").show();
        });

    });

</script>