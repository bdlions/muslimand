<div ng-app="app.Photo">
    <div class="row form-group"></div>
    <div class="row">
        <div class="col-md-10">
            <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
            <a  class="anchor_property_change" href="<?php echo base_url(); ?>photos/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <span style="font-size: 20px; font-weight: bold;">Upload Photos</span>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div ng-controller="photoController"  ng-init="setPhotoCategories(<?php echo htmlspecialchars(json_encode($category_list)); ?>)" >
                <div class="row">
                    <div class="col-md-4" ng-init="setAlbums(<?php echo htmlspecialchars(json_encode($album_lsit)); ?>)">
                        <span style="font-size: 16px; font-weight: bold;">* Photo Album:</span><br>
                        <select class="form-control"  ng-options="album.albumId as album.title for album in albumList" ng-model="photoInfo.albumId">
                            <option value="" selected>Select Album</option>
                        </select>
                        <a style="text-decoration: none; cursor: pointer;"> <span id="createAlbumIdOnClick">(Create a New Photo Album)</span></a>
                    </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="row form-group"></div>

                <div class="row">
                    <div class="col-md-4">
                        <span style="font-size: 16px; font-weight: bold;">* Category:</span><br>
                        <select class="form-control"  ng-options="category.categoryId as category.title for category in categoryList" ng-model="photoInfo.categoryId">
                            <option value="" selected>Select Category</option>
                        </select>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6"></div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6"></div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-6" ng-controller="imageUploadController">
                    <form name="form">
                        <input type="file" accept="image/*" image="image"/>
                        <!--<img ng-show="image" ng-src="{{image.url}}" type="{{image.file.type}}" />-->
                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-12">
                    You can upload a JPG, GIF or PNG file.<br>
                    The file size limit is 2 Mb. If your upload does not work, try uploading a smaller picture. 
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-xs" id="add_photos_btn" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;"  ng-click="addPhotos()">Upload</button>
                </div>
                <div class="col-md-8"></div>
            </div>

            <div class="row form-group"></div>
            <div class="row form-group"></div>
            <div class="row form-group"></div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <?php $this->load->view("member/photo/modal_create_album"); ?>
</div>
<script type="text/javascript">
    $(function () {
        $("#createAlbumIdOnClick").on("click", function () {
            $('#modal_create_album_box').modal('show');
        });
    });

</script>