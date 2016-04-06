<div class="row" style="margin-bottom: 1px;">
    <div class="col-md-12">
        <div ng-controller="ImageCopperController" ng-clock style="position: relative; left: 0px; z-index: 1001;">
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
            <div ng-show="imageCropStep == 2" class="zoom_disable">
                <image-crop			 
                    data-height="272"
                    data-width="760"
                    data-shape="square"
                    data-step="imageCropStep"
                    src="imgSrc"
                    data-result="result"
                    data-result-blob="resultBlob"
                    crop="initCrop"
                    padding="0"
                    max-size="1012"
                    imagepath="<?php echo base_url(); ?>pages/add_cover_picture/<?php echo $page_id ?>"
                    reloadpath = ""
                    ></image-crop>	   
            </div>
            <div ng-show="imageCropStep == 2">
                <button class="btn btn-sm" style="position: absolute; bottom: 0; right: 300px; bottom: 30px; background-color: #999; color: #fff;"  ng-click="initCrop = true">Crop</button>		
                <button class="btn btn-sm" style="position: absolute; bottom: 0; left: 300px; bottom: 30px; background-color: #999; color: #fff; vertical-align: middle;" ng-click="clear()">Cancel</button>
            </div>		  
            <div  ng-show="imageCropStep == 3">
                <div >
                    <img ng-src="{{result}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="position: absolute; right: 20px;">
    <div class="col-md-12">
        <div class="pull-right" style="margin-right: 10px;">
            <ul class="nav nav_page_custom nav-pills pull-right">
                <li ng-if="memberInfo.memberShipStatus == '<?php echo PAGE_MEMBER_STATUS_ID_LIKED ?>'" id="" class="dropdown" style="position: relative; top: -35px; left: 0; z-index: 1001; font-weight: bold;">
                    <a  data-toggle="dropdown">
                        <button class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0;"> Joined <b class="caret" style="margin-left: -8px!important;"></b></button></a>
                    <ul class="dropdown-menu dropdown_menu_custom_page" id="menu1">
                        <li><a ng-click="leaveMembership('<?php echo $page_id; ?>')">Disjoin this page</a></li>
                        <li><hr></li>
<!--                        <li>
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
                        </li>-->
                    </ul>
                </li>
                <li id=""  ng-if="memberInfo.memberShipStatus != '<?php echo PAGE_MEMBER_STATUS_ID_LIKED ?>'" class="dropdown" style="position: relative; top: -35px;  z-index: 1001; font-weight: bold;">
                    <a  data-toggle="dropdown"   ng-click="joinPage('<?php echo $page_id; ?>')"> <button class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0;"> Join</button></a>
                </li>
                <li class="dropdown" style="position: relative; top: -35px;  z-index: 1001; font-weight: bold;">
                    <a ><button onclick="open_modal_page_invitation()" id="friend_list_invitation_id" class="button-custom glyphicon glyphicon-star" style="margin: 0 3px 3px 0;"> Invite </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    function open_modal_page_invitation() {
        var pageId = '<?php echo $page_id; ?>'
        angular.element($('#friend_list_invitation_id')).scope().getInviteFriendList(pageId, function () {
        $('#modal_page_invitation').modal('show');
        });
    }
</script>
<?php $this->load->view("member/page/section/modal_page_invitation"); ?>
