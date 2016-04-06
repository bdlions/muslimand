<script>
    $(function() {
        $('#photo_sub').on('click', function() {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function() {
            $('.video_test').show();
        });
        $('#timeLineContent').show();
        $('#updateStatusPagelet').show();
        $('#aboutPageMenu').on('click', function() {
            $('#timeLineContent').hide();
            $('#updateStatusPagelet').hide();
            $('#pageAboutContent').show();
        });
        $('#timelinePageMenu').on('click', function() {
            $('#pageAboutContent').hide();
            $('#timeLineContent').show();
            $('#updateStatusPagelet').show();
        });
        $('#photoPageMenu').on('click', function() {
            $('#pageAboutContent').hide();
            $('#timeLineContent').hide();
            $('#updateStatusPagelet').hide();
        });
    });
</script>
<div ng-controller="pageController">
    <div ng-init="setPageInfo('<?php echo htmlspecialchars(json_encode($page_info)) ?>')">
        <div ng-init="setMemberInfo('<?php echo htmlspecialchars(json_encode($member_info)) ?>')">
            <?php $this->load->view("member/page/section/cover"); ?>

            <div class="row form-group">
                <div class="col-md-12">
                    <div style="margin-left: 15px;">
                        <div style="margin-right: 5px;">
                            <?php $this->load->view("member/page/section/top_menu_bar"); ?>
                        </div>
                        <?php $this->load->view("member/page/section/page_title"); ?>
                        

                        <div class="pagelet" style="margin-left: -15px;" ng-clock >
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <span style="font-size: 20px; font-weight: bold;">Upload Photos</span>
                                </div>
                            </div>
                            <div ng-init="setPhotoCategories(<?php echo htmlspecialchars(json_encode($category_list)); ?>)" >
                                <div class="row form-group">
                                    <div class="col-md-12" ng-init="setAlbums(<?php echo htmlspecialchars(json_encode($album_lsit)); ?>)">
                                        <span style="font-size: 16px; font-weight: bold;">* Photo Album:</span><br>
                                        <select class="form-control"  ng-options="album.albumId as album.title for album in albumList" ng-model="photoInfo.albumId">
                                            <option value="" selected>Select Album</option>
                                        </select>
                                        <a style="text-decoration: none; cursor: pointer;"> <span id="createAlbumIdOnClick">(Create a New Photo Album)</span></a>
                                    </div>
                                </div>
                                <div class="row form-group padding_top_10px">
                                    <div class="col-md-12">
                                        <span style="font-size: 16px; font-weight: bold;">* Category:</span><br>
                                        <select class="form-control"  ng-options="category.categoryId as category.title for category in categoryList" ng-model="photoInfo.categoryId">
                                            <option value="" selected>Select Category</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group padding_top_10px">
                                <div class="col-md-12">
                                    <span style="font-size: 16px; font-weight: bold;">Photo(s) Privacy: </span><br>
                                    <select class="form-control" name="control">
                                        <option value="0" selected="1">Everyone</option>
                                        <option value="1">Friends</option>
                                        <option value="2">Friends of Friends</option>
                                        <option value="3">Only Me</option>
                                        <option value="4">Custom</option>
                                    </select>
                                    Control who can see these photo(s). 
                                </div>
                            </div>
                            <div class="row form-group padding_top_10px">
                                <div class="col-md-12">
                                    <span style="font-size: 16px; font-weight: bold;">Comment Privacy: </span><br>
                                    <select class="form-control" name="control">
                                        <option value="0" selected="1">Everyone</option>
                                        <option value="1">Friends</option>
                                        <option value="2">Friends of Friends</option>
                                        <option value="3">Only Me</option>
                                        <option value="4">Custom</option>
                                    </select>
                                    Control who can comment on these photo(s).
                                </div>
                            </div>
                                <div class="row form-group padding_top_10px">
                                    <div class="col-md-12">
                                        image upload  start...............
                                        <div id="fileupload" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" ng-init="setPath('<?php echo base_url(); ?>photos/image_upload')" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
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
                                                     The global file processing state 
                                                    <span class="fileupload-process"></span>
                                                </div>
                                                 The global progress state 
                                                <div class="col-md-2 fade" data-ng-class="{in: active()}">
                                                     The global progress bar 
                                                    <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                                                     The extended global progress state 
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $this->load->view("member/page/section/modal_page_create_album"); ?>
<script type="text/javascript">
    function add_photos() {
        var image_list = [];
        image_list = get_image_list();
        angular.element($('#add_photos_btn_id')).scope().addPhotos(image_list, function() {
            window.location = '<?php echo base_url(); ?>member/newsfeed';
        });
    }

    $(function() {
        $("#createAlbumIdOnClick").on("click", function() {
            $('#modal_page_create_album_box').modal('show');
        });
    });
</script>






<script>
    $("#page_photo_button").click(function() {
        $("#page_photo_albums").hide();
        $("#page_random_photos").show();
    });
    $("#page_album_button").click(function() {
        $("#page_random_photos").hide();
        $("#page_photo_albums").show();
    });
    $(function() {
        var selector = '.page_photo_menu_list_inline a';
        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
    });

</script>

