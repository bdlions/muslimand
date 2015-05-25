<script src="<?php echo base_url(); ?>resources/bootstrap3/js/tmpl.js"></script>
<script type="text/javascript">
    $(function() {
        $("#work_update_btn").on('click', function() {
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
                success: function(data) {
                    $("#work_places_tmpl_add").html(tmpl("tmpl_work_place_added", data.basic_info) + $("#work_place").html());
                    $("#about_overview_add_tmpl").html(tmpl("tmpl_work_for_overview", data.basic_info));
                    $("#work").hide();
                    $("#subcategory_work").show();
                }
            });
        });
    });
</script>
<script type="text/x-tmpl" id="tmpl_work_place_added">
{% var i=0, workplace_list = ((o instanceof Array) ? o[i++] : o); %}
                    <div class="row form-group">
                    <div class="col-md-2">
                        <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-8">
                                <a href=""><?php echo'{%= workplace_list.company %}'?></a>
                            </div>
                            <div class="col-md-4">
                                <div class="pull-right">
                                    <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                December 1, 2014 to present ·<?php echo'{%= workplace_list.city %}'?>, Bangladesh
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                http://sampan-it.com/
                            </div>
                        </div>
                    </div>
                </div>
</script>
<script type="text/x-tmpl" id="tmpl_work_for_overview"> 
    {% var i=0, workplace_company = ((o instanceof Array) ? o[i++] : o); %}
    <div class="row form-group">
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>resources/images/car.jpg"  width="40" height="40"> 
            </div>
            <div class="col-md-10">
                Works at <a href=""><?php echo'{%= workplace_company.company %}'?></a>
            </div>
        </div>
    
</script>
<!--<div id="test">
    <div> test</div>
</div>-->
<div id="work" style="display: none;">
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style" aria-label="Close" onclick="close_window_1()"><span aria-hidden="true">&times;</span></button>   
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
                        <div class="col-md-4">
                            <a class="achor_holder_style">Add Year</a>
                        </div>
                        <div class="col-md-1" >
                            to
                        </div>
                        <div class="col-md-6" id="present">
                            present
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
                    <?php echo form_input($work_update_btn + array('class' => 'btn button-default pull-right form-control', 'style' => 'background-color: #703684; color: white; margin-right: -15px')); ?>
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
    $(function() {
        $("#checkbox_id").prop("checked", true);
//        if($("checkbox_id").is(":checked")
        $("#checkbox_id").on("click", function() {
            $("#present").hide();
            $("#working_year").show();
        });

    });
    function close_window_1() {
        $('#work').hide();
        $('#subcategory_work').show();
    }
</script>