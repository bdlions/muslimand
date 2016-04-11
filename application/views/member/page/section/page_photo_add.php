<div  ng-clock class="pagelet" style="margin-left: -15px;">
    <div class="row form-group">
        <div class="col-md-12">
            <span style="font-size: 20px; font-weight: bold;">Upload Photos</span>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <span style="font-size: 16px; font-weight: bold;">* Photo Album:</span><br>
            <select class="form-control"  ng-options="album.albumId as album.title for album in pageAlbumList" ng-model="photoInfo.albumId">
                <option value="" selected>Select Album</option>
            </select>
            <a style="text-decoration: none; cursor: pointer;"> <span id="createAlbumIdOnClick">(Create a New Photo Album)</span></a>
        </div>
    </div>
    <div class="row form-group padding_top_10px">
        <div class="col-md-12">
            <!--image upload  start...............-->
            <div id="fileupload" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" ng-init="setPath('<?php echo base_url(); ?>pages/image_upload')" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
                <div class="row fileupload-buttonbar">
                    <div class="col-md-10">
                        <span class="btn btn-sm btn-success fileinput-button" ng-class="{disabled: disabled}">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Add files...</span>
                            <input type="file" name="userfile" multiple ng-disabled="disabled">
                        </span>

                        <button type="button" class="btn btn-sm btn-danger cancel" data-ng-click="cancel()">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel files upload </span>
                        </button>
                        <!-- The global file processing state -->
                        <span class="fileupload-process"></span>
                    </div>
                    <!-- The global progress state -->
                    <div class="col-md-2 fade" data-ng-class="{in: active()}">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <div class="row"  data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                    <div class="col-md-4 " data-on="!!file.thumbnailUrl">
                        <div class="preview" data-file-upload-preview="file"></div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-sm btn-danger cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-sm btn-primary start" data-ng-click="submit()">
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>upload files</span>
                        </button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3 form-group" data-ng-repeat="file in queue">
                        <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img class="image-size" data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            You can upload a JPG, GIF or PNG file.<br>
            The file size limit is 2 Mb. If your upload does not work, try uploading a smaller picture. 
        </div>
    </div>
    <div class="row form-group padding_top_10px">
        <div class="col-md-4">
            <button class="btn btn-xs" id="add_photos_btn_id" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;"  onclick="add_photos()">Upload</button>
        </div>
    </div>
</div>        
<?php $this->load->view("member/page/section/modal_page_create_album"); ?>
<script type="text/javascript">
    function add_photos() {
        var pageId = '<?php echo $page_id; ?>';
        var image_list = [];
        image_list = get_image_list();
        angular.element($('#add_photos_btn_id')).scope().addPhotos(image_list, pageId, function (data) {
            if(data.status == "1"){
             window.location = '<?php echo base_url(); ?>pages/timeline/'+pageId;    
            }else{
                alert("Error! while uploading Images");
            }
        });
    }

    $(function () {
        $("#createAlbumIdOnClick").on("click", function () {
            $('#modal_page_create_album_box').modal('show');
        });
    });
</script>

<style>
    
    .ng-cloak {
    display: none;
}
.image-size {
    height: 100px;
    width: 100px;
}

</style>