<style>
    /* Hide Angular JS elements before initializing */
    .ng-cloak {
        display: none;
    }
    .image-size {
        height: 100px;
        width: 100px;
    }
</style>
<div class="pagelet">
    <div class="row from-group" style="margin-bottom: 3px;">
        <div id="status" class="col-xs-2 col-sm-2 col-md-2"><span class="status_label_style">Status</span></div>
        <div id="photo" class="col-xs-2 col-sm-2 col-md-2"><span class="status_label_style">Photo</span></div>
        <!--<div id="link" class="col-xs-2 col-sm-2 col-md-2"><span class="status_label_style">Link</span></div>-->
    </div>
    <div id="photo_details" style="display: none;">
        <div id="fileupload" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" ng-init="setPath('<?php echo base_url(); ?>status/image_upload')" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
            <div class="row fileupload-buttonbar">
                <div class="col-md-10">
                    <span style="margin-top: 10px;" class="btn button-custom  fileinput-button" ng-class="{disabled: disabled}">
                        <span >Add photos</span>
                        <input type="file" name="userfile" multiple ng-disabled="disabled">
                    </span>
                </div>
                <!-- The global progress state -->
                <div class="col-md-2 fade" data-ng-class="{in: active()}">
                    <!-- The global progress bar -->
                    <div class="progress progress_custom progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <div class="row form-group"  data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                <div class="col-md-6" data-on="!file.thumbnailUrl">
                    <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>
                        <img style="margin-left: 6px;" class="image-size" data-ng-src="{{file.thumbnailUrl}}" alt="">
                    </a>
                    <div class="preview" data-file-upload-preview="file"></div>
                </div>
                <div class="col-md-3" style="margin-top: 20px;">
                    <button type="button" class="button-custom start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
                        <span>Upload</span>
                    </button>
                </div>
                <div class="col-md-3" style="margin-top: 20px;">
                    <button type="button" class="button-custom cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                        <span>Cancel</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="link_details" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <input id="http" class="form-control" type="text" placeholder="http://">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 12px">Paste a link you would like to share. </span>
            </div>
        </div>
    </div>
    <div id="category_status" class="row form-group">
        <div class="col-md-12">
            <textarea id="statusPostId" ng-model="statusInfo.description" class="form-control textarea_custom_style" placeholder="What's on Your Mind?"></textarea>
        </div>
    </div>
    <div id="status_privacy" style="display: none;">
        <div class="row" style="line-height: 20px;">
            <div class="col-md-5">
                <!--<img src="<?php echo base_url(); ?>resources/images/add_img_place_ppl.PNG">-->
            </div>
            <div class="col-md-4">
                <select class="form-control form_control_custom_style" name="control">
                    <option selected="1" value="0">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn button-custom pull-right" id="save_status_id" style="background-color: #703684; color: white" onclick="add_status()">Post</button>
            </div>
        </div>
    </div>
</div>

<script>
    function add_status() {
        var profileId = '<?php if (isset($profile_id)) { echo $profile_id; }; ?>';
        if (profileId === "0") {
            profileId = '<?php echo $user_id; ?>';
        }

        var profileUserInfo = [];
        profileUserInfo['profileId'] = profileId;
        profileUserInfo['profileFirstName'] = '<?php if (isset($profile_first_name)) { echo $profile_first_name; }; ?>';
        profileUserInfo['profileLastName'] = '<?php if (isset($profile_last_name)) { echo $profile_last_name; }; ?>';
        var image_list = [];
        image_list = get_image_list();
        var description = $('#statusPostId').val();
        if(description == "" && image_list.length == 0 ){
            alert("Please Write Something  or attach photo to update your status !!!");
            return;
        }
        if(image_list.length != 0){
            for(var i = 0; image_list.length > i; i++){
                console.log(image_list[i]);
            }
        }
        angular.element($('#save_status_id')).scope().addStatus(image_list, profileUserInfo, function () {
            
            $("#updateStatusPagelet").show();
            $("#photo_details").hide();
            $("#statusPostId").val('');
            image_list = null;
            clear_image();
        });
    }
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