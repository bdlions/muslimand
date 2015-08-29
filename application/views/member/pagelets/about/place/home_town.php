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
                    <input type="text" class="form-control" ng-model="homeTownInfo.townName">
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
                    <button class="btn btn-default form-control" style="background-color: #703684; color: white" ng-click="addHomeTown('<?php echo $user_id ;?>')">Save</button>
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
        $("#checkbox_id").on("click", function () {
            $("#present").hide();
            $("#working_year").show();
        });

    });

</script>