<div id="work" style="display: none;" class="carrer_bg">
    <div class="row">
        <div class="col-md-12">
            <div class="row form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style cancelling_btn" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                    </div>
                </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Company</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="workInfo.company" ui-keydown="{esc: 'keyCallback($event)'}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Position</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="workInfo.position">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">City/Town</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="workInfo.city">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">Description</span>
                </div>
                <div class="col-md-8">
                    <textarea type="text" class="form-control" ng-model="workInfo.description"></textarea>
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
                    <button id="cancel_work_window" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addWorkPlace('<?php echo $user_id; ?>')">Save</button>
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