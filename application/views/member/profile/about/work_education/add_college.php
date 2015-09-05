

<div id="college" class="carrer_bg" style="display: none;">
    <div class="row">
        <div class="col-md-offset-2 col-md-10">
            <div class="row form-group">
                <div class="col-md-offset-9 col-md-3">
                    <button style="border: 1px solid lightgray; padding: 5px;" type="button" class="close header_label_style college_area_hide" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <span class="subcategory_label_style">College</span>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" ng-model="collegeInfo.college ">
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
                    <textarea type="text" class="form-control" ng-model="collegeInfo.description"></textarea>
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
                            <button id="" class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addCollege('<?php echo $user_id; ?>')">Save</button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-default form-control college_area_hide" style="background-color: #703684; color: white">Cancel</button>
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
            
             $(".college_area_hide").on("click", function () {
                    $("#college").hide();
                    $("#subcategory_college").show();
                });
        </script>