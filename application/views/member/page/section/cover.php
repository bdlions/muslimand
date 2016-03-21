<div class="row" style="margin-bottom: 1px;">
    <div class="col-md-12">
        <div ng-controller="ImageCopperController" ng-clock style="position: absolute; left: 15px; z-index: 1001;">
            <div  ng-show="imageCropStep == 1" class="fileinput-cover-button">
                <span ng-if="PageBasicInfo.referenceInfo.userId != '<?php echo $user_id; ?>'">
                    <img class="img-responsive" fallback-src="<?php echo base_url() ?>resources/images/pages/cover_picture/01.jpg"  ng-src="<?php echo base_url() . PAGE_COVER_PICTURE_IMAGE_PATH . $page_id . '.jpg'; ?>"/>
                </span>
                <span ng-if="PageBasicInfo.referenceInfo.userId == '<?php echo $user_id; ?>'">
                    <img class="img-responsive" fallback-src="<?php echo base_url() ?>resources/images/pages/cover_picture/01.jpg"  ng-src="<?php echo base_url() . PAGE_COVER_PICTURE_IMAGE_PATH . $page_id . '.jpg'; ?>" />
                    <input class="profile_cover_upload_input" style="z-index: 1005" type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)"/>
                    <div class="profile_cover_upload_img">
                        <img ng-src="<?php echo base_url() ?>resources/images/upload_icon.png"/>
                        <span>Upload Cover Picture</span>
                    </div>
                </span>
            </div>	
            <div ng-show="imageCropStep == 2">
                <image-crop			 
                    data-height="200"
                    data-width="500"
                    data-shape="square"
                    data-step="imageCropStep"
                    src="imgSrc"
                    data-result="result"
                    data-result-blob="resultBlob"
                    crop="initCrop"
                    padding="0"
                    max-size="1012"
                    imagepath="<?php echo base_url(); ?>pages/add_cover_picture/<?php echo $page_id?>"
                    reloadpath = ""
                    ></image-crop>	   
            </div>
            <div ng-show="imageCropStep == 2">
                <button class="btn btn-sm" style="position: absolute; bottom: 0; right: 45px; background-color: #999; color: #fff; width: 25%;"  ng-click="initCrop = true">Crop</button>		
                <button class="btn btn-sm" style="position: absolute; bottom: 0; left: 45px; background-color: #999; color: #fff; width: 28%; vertical-align: middle;" ng-click="clear()">Cancel</button>
            </div>		  
            <div  ng-show="imageCropStep == 3">
                <div >
                    <img ng-src="{{result}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="pull-right" style="margin-right: 10px;">
            <ul class="nav nav_page_custom nav-pills pull-right">
                <li id="joined_page_content_id_01" class="dropdown" style="position: relative; top: -35px; left: 0; z-index: 1001; font-weight: bold; display: none;">
                    <a  data-toggle="dropdown">
                        <button class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0;"> Joined <b class="caret" style="margin-left: -8px!important;"></b></button></a>
                    <ul class="dropdown-menu dropdown_menu_custom_page" id="menu1">
                        <li><a id="disjoin_page_id_01">Disjoin this page</a></li>
                        <li><hr></li>
                        <li>
                            <a><label>Posts in News Feed</label><br>
                                <select class="form-control form_control_custom_style">
                                    <option >Default</option>
                                    <option >Never</option>
                                </select>
                            </a>
                        </li>
                        <li><a><label>Notifications</label><br>
                                <select class="form-control form_control_custom_style">
                                    <option >All</option>
                                    <option >Only Posts</option>
                                    <option >Only Photos</option>
                                    <option >Only Videos</option>
                                </select>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="join_page_id_01" class="dropdown" style="position: relative; top: -35px;  z-index: 1001; font-weight: bold;">
                    <a  data-toggle="dropdown"><button class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0;"> Join</button></a>
                </li>
                <li class="dropdown" style="position: relative; top: -35px;  z-index: 1001; font-weight: bold;">
                    <a ><button onclick="open_modal_page_invitation()" class="button-custom glyphicon glyphicon-star" style="margin: 0 3px 3px 0;"> Invite </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
//    $('#join_page_id_01').on('click', function() {
//        $('#join_page_id_01').hide();
//        $('#joined_page_content_id_01').show();
//    });
//    $('#disjoin_page_id_01').on('click', function() {
//        $('#joined_page_content_id_01').hide();
//        $('#join_page_id_01').show();
//    });
</script>
<?php // $this->load->view("modal/modal_page_invitation"); ?>
