<div class="pagelet">
    <div class="row form-group">
        <div id="status" class="col-xs-2 col-sm-2"><span class="status_label_style">Status</span></div>
        <div id="photo" class="col-xs-2 col-sm-2"><span class="status_label_style">Photo</span></div>
        <div id="link" class="col-xs-2 col-sm-2"><span class="status_label_style">Link</span></div>
    </div>
    <div id="photo_details" style="display: none;">
        <div class="row">
            <div class="col-md-6">
                <input type="file" name="image[]" size="30">
            </div>
            <div class="col-md-offset-6"></div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 12px">Select a photo to upload</span>
            </div>
        </div>
    </div>
    <div id="link_details" style="display: none;">
        <div class="row">
            <div class="col-md-10">
                <input id="http" class="form-control" type="text" placeholder="http://">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 12px">Paste a link you would like to share. </span>
            </div>
        </div>
    </div>
    <div id="category_status" class="row form-group">
        <div class="col-md-12">
            <div class="form-control" style="overflow: hidden; min-height: 66px; padding: 0px; margin: 0px;">
                <div contenteditable="true" placeholder="Share Your Status" style="overflow-x: hidden; overflow-y: scroll; min-height: 66px; margin-right: -30px">
                </div>
            </div>
        </div>
    </div>


    <div id="status_privacy" style="display: none;">
        <div class="row" style="line-height: 20px;">
            <div class="col-xs-5">
                <!--<img src="<?php echo base_url(); ?>resources/images/add_img_place_ppl.PNG">-->
            </div>
            <div class="col-xs-4">
                <select class="form-control" name="control">
                    <option selected="1" value="0">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
            </div>
            <div class="col-xs-3">
                <button class="btn btn-default pull-right form-control" style="background-color: #703684; color: white">Post</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#category_status').on('click', function () {
        $('#status_privacy').hide();
        $('#status_privacy').show();
        $('#status').css("font-weight", "bold");
        $('#photo').css("font-weight", "normal");
        $('#link').css("font-weight", "normal");
    });

    $('#status').on('click', function () {
        $('#status_privacy').hide();
        $('#photo_details').hide();
        $('#link_details').hide();
        $('#status_privacy').show();
        $('#status').css("font-weight", "bold");
        $('#photo').css("font-weight", "normal");
        $('#link').css("font-weight", "normal");
        $('#category_status').on('click', function () {
            $('#status').css("font-weight", "bold");
            $('#photo').css("font-weight", "normal");
            $('#link').css("font-weight", "normal");
        });
    });

    $('#photo').on('click', function () {
        $('#status_privacy').hide();
        $('#link_details').hide();
        $('#status_privacy').show();
        $('#photo_details').show();
        $('#photo').css("font-weight", "bold");
        $('#status').css("font-weight", "normal");
        $('#link').css("font-weight", "normal");
        $('#category_status').on('click', function () {
            $('#photo').css("font-weight", "bold");
            $('#status').css("font-weight", "normal");
            $('#link').css("font-weight", "normal");
        });
    });

    $('#link').on('click', function () {
        $('#settings').hide();
        $('#photo_details').hide();
        $('#settings').show();
        $('#link_details').show();
        $('#link').css("font-weight", "bold");
        $('#photo').css("font-weight", "normal");
        $('#status').css("font-weight", "normal");
        $('#category_status').on('click', function () {
            $('#link').css("font-weight", "bold");
            $('#photo').css("font-weight", "normal");
            $('#status').css("font-weight", "normal");
        });
        $('#http').on('click', function () {
            $('#status_privacy').show();
            
        });
    });
</script>