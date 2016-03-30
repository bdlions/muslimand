<div class="pagelet form-group">
    <div class="row">
        <div class="col-md-12">
            <div ng-controller="ImageCopperController" ng-clock style="position: relative; z-index: 1001;">
                <div ng-show="imageCropStep == 1" class="img-circle fileinput-button profile_picture timeline_profile_picture_custom" style="height: 150px!important; width: 150px!important; margin-left: 60px;">
                    <span ng-if="PageBasicInfo.referenceInfo.userId != '<?php echo $user_id; ?>'">
                        <img class="cursor_holder_style img-circle" fallback-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W150_H150; ?>01.jpg" ng-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W150_H150 . $page_id . '.jpg'; ?>" />
                    </span>
                    <span ng-if="PageBasicInfo.referenceInfo.userId == '<?php echo $user_id; ?>'">
                        <img class="cursor_holder_style img-circle" fallback-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W150_H150; ?>01.jpg" ng-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W150_H150 . $page_id . '.jpg'; ?>" />
                        <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
                        <img style="position: absolute; z-index: 99999; cursor: pointer; height: 22px; width: 22px;" src="<?php echo base_url(); ?>resources/images/camera.png">
                        <span style="font-size: 10px; color: #fff; text-align: center;">Upload From Computer</span>
                    </span>

                </div>	
                <div ng-show="imageCropStep == 2">
                    <image-crop			 
                        data-height="150"
                        data-width="150"
                        data-shape="square"
                        data-step="imageCropStep"
                        src="imgSrc"
                        data-result="result"
                        data-result-blob="resultBlob"
                        crop="initCrop"
                        padding="0"
                        max-size="1012"
                        imagepath = "<?php echo base_url(); ?>pages/add_profile_picture/<?php echo $page_id; ?>"
                        reloadpath = ""
                        ></image-crop>		   
                </div>
                <div ng-show="imageCropStep == 2">
                    <button class="btn btn-xs" style="position: absolute; bottom: 0; right: 45px; background-color: #999; color: #fff; width: 25%;"  ng-click="initCrop = true">Crop</button>		
                    <button class="btn btn-xs" style="position: absolute; bottom: 0; left: 45px; background-color: #999; color: #fff; width: 28%; vertical-align: middle;" ng-click="clear()">Cancel</button>
                </div>		  
                <div  ng-show="imageCropStep == 3">
                    <div >
                        <img ng-src="{{result}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pagelet form-group" >
    <div class="row">
        <div class="col-md-12">
            <label> {{memberInfo.counter}}people likes this</label>
        </div>
    </div>
</div>
<div class="form-group">
    <?php $this->load->view("member/page/brief_info"); ?>
</div>
<div class="form-group">
    <?php $this->load->view("member/page/photo_list"); ?>
</div>