<script>
    function approve_request(friendId) {
        angular.element($('#request_accept_id')).scope().approveRequest(friendId, function () {

        });
    }
    function onImageUnavailable(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];

        firstImage.style.display = 'none';
//        div.className='fileinput-cover-button';

        secondImage.style.visibility = 'visible';
        secondImage.style.height = '100%';
    }

</script>
<script>
    function block_request(friendId) {
        angular.element($('#block_friend_id')).scope().blockRequest(friendId, function () {
            alert("user is blocked ");
        });
    }

</script>
<div class="profile_mrg">
    <div class="row">
        <div class="col-md-12">
            <!--cover picture-->
            <div ng-controller="ImageCopperController" style="position: relative;">
                <div  ng-show="imageCropStep == 1" class="fileinput-cover-button">	
                    <?php if ($profile_id != "0" && $profile_id != $user_id) { ?>
                        <img class="img-responsive" fallback-src="<?php echo base_url() ?>resources/images/cover.jpg"  ng-src="<?php echo base_url() . COVER_PICTURE_IMAGE_PATH . $profile_id . '.jpg';  ?>"/>
                    <?php } else { ?>
                        <img class="img-responsive" fallback-src="<?php echo base_url() ?>resources/images/cover.jpg"  ng-src="<?php echo base_url() . COVER_PICTURE_IMAGE_PATH . $user_id . '.jpg'; ?>" />
                        <input class="profile_cover_upload_input" style="z-index: 1005" type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)"/>
                        <div class="profile_cover_upload_img">
                            <img ng-src="<?php echo base_url() ?>resources/images/upload_icon.png"/>
                            <span>Upload Cover Picture</span>
                        </div>
                    <?php } ?>
                </div>			
                <div style="position: relative; left: -16px; margin: 0 15px; right: 0; top: 0; width: 100%"  ng-show="imageCropStep == 2" class="zoom_disable">
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
                        imagepath="<?php echo base_url(); ?>photos/add_cover_picture/"
                        reloadpath = "<?php echo base_url(); ?>member/timeline/"
                        ></image-crop>		   
                </div>
                <div ng-show="imageCropStep == 2" >
                    <button class="btn btn-sm" style="position: absolute; bottom: 0; left: 42%; bottom: 35px; background-color: #999; color: #fff; z-index: 1001"  ng-click="clear()">Cancel</button>
                    <button class="btn btn-sm" style="position: absolute; bottom: 0; right: 42%; bottom: 35px; background-color: #999; color: #fff; z-index: 1001" ng-click="initCrop = true">Crop</button>		
                </div>		  
                <div ng-show="imageCropStep == 3" >
                    <img style="position: relative; left: -13px; margin: 0 15px; right: 0; top: 0; width: 100%" ng-src="{{result}}"/>
                </div>
            </div>

            <!--profile picture-->
            <!--<div ng-controller="ImageCopperController" ng-clock style="position: absolute; bottom: -15px; left: 25px; z-index: 1001;">-->
            <div ng-controller="ImageCopperController" ng-clock style="position: absolute; bottom: 0; left: 15px; z-index: 1001;">
                <div ng-show="imageCropStep == 1" class="img-circle fileinput-button profile_picture timeline_profile_picture_custom" style="height: 150px!important; width: 150px!important;">
                    <?php if ($profile_id != "0" && $profile_id != $user_id) { ?>
                        <img  class="cursor_holder_style" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150; ?>150x150_{{userGenderId}}.jpg" alt="" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150 . $profile_id . '.jpg'; ?>" />
                    <?php } else { ?>
                        <img  class="cursor_holder_style" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150; ?>150x150_{{userGenderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150 . $user_id . '.jpg'; ?>" />
                        <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
                    <?php } ?>
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
                        imagepath = "<?php echo base_url(); ?>photos/add_profile_picture/"
                        reloadpath = "<?php echo base_url(); ?>member/timeline/"
                        ></image-crop>		   
                </div>
                <div ng-show="imageCropStep == 2">
                    <button class="btn btn-xs" style="position: absolute; bottom: 0; right: 15px; background-color: #999; color: #fff;" ng-click="initCrop = true">Crop</button>		
                    <button class="btn btn-xs" style="position: absolute; bottom: 0; left: 15px; background-color: #999; color: #fff; vertical-align: middle;" ng-click="clear()">Cancel</button>
                </div>		  
                <div  ng-show="imageCropStep == 3">
                    <div >
                        <img ng-src="{{result}}"/>
                    </div>
                </div>
            </div>
            <span ng-init="setUserRelation(<?php echo htmlspecialchars(json_encode($user_relation)); ?>)">
                <a class="timeline_profile_name ">
                    <span ng-bind="userRelation.profile_first_name"></span>
                    <span ng-bind="userRelation.profile_last_name"></span>
                </a>
                <div> 
                    <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_NON_FRIEND_ID; ?>">
                        <button type="button" class=" button-custom" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%; z-index: 1001" ng-click="addFriend('<?php echo $profile_id; ?>')" >Add Friend</button>   
                    </div>
                    <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_FRIEND_ID ?>">
                        <div class="dropdown dropdown_addFriend_style">
                            <button type="button" class="button-custom dropdown-toggle" ng-click="" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Friend <span class="caret"></span></button>    
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="deleteRequest('<?php echo $profile_id; ?>')" >Un Friend</a></li>
                            </ul>
                        </div>
                    </div>
                    <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_PENDING_ID; ?> && userRelation.is_initiated == <?php echo REQUEST_RECEIVER; ?>">
                        <div class="dropdown dropdown_addFriend_style">
                            <button type="button" class="button-custom dropdown-toggle" ng-click="" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Response to Friend Request<span class="caret"></span></button>    
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" id="request_accept_id" onclick="approve_request('<?php echo $profile_id; ?>')">Confirm</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="deleteRequest('<?php echo $profile_id; ?>')">Delete Request</a></li>
                            </ul>
                        </div>
                    </div>
                    <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_PENDING_ID; ?> && userRelation.is_initiated == <?php echo REQUEST_SENDER; ?>">
                        <div class="dropdown dropdown_addFriend_style">
                            <button type="button" class="button-custom dropdown-toggle" ng-click="" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Sent Friend Request<span class="caret"></span></button>    
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="deleteRequest('<?php echo $profile_id; ?>')">Cancel Friend Request</a></li>
                            </ul>
                        </div>
                    </div>
                    <div ng-if ="userRelation.relation_ship_status == <?php echo YOUR_RELATION_TYPE_ID; ?>">
<!--                        <button type="button" class="button-custom" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%; z-index: 1001">Update Info</button>
                        <button type="button" class="button-custom" style="position: absolute; bottom: 20px; right:  30px; font-size: 80%; z-index: 1001">View Activity Log</button>-->
                    </div>
                    <div ng-if ="userRelation.relation_ship_status != <?php echo YOUR_RELATION_TYPE_ID; ?>">
                        <div ng-controller="messageController">
                            <button type="button" class="button-custom" style="position: absolute; bottom: 20px; right:  70px; font-size: 80%; z-index: 1001" ng-click="getChatInitialFromMessage(<?php echo htmlspecialchars(json_encode($user_relation)); ?>)">Message</button>
                        </div>
                        <div class="dropdown dropdown_style">
                            <button type="button" class="button-custom dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li  class="disabled" role="presentation"><a role="menuitem" tabindex="-1" href="#">Report</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" id="block_profile_id" href onclick="block_request('<?php echo $profile_id; ?>')">Block</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--<div style="background-color: whitesmoke; text-align: center;">-->
            <div style="background-color: whitesmoke;">
                <div class="btn-group" role="group" aria-label="...">

                    <?php if ($profile_id != "0") { ?>
                        <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>member/timeline/<?php echo $profile_id; ?>">Timeline</a>
                        <a class="btn btn-default get_over_view_class" style="font-size: 100%"  href="<?php echo base_url(); ?>member/about/<?php echo $profile_id?>">About</a>
                        <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>photos/get_home_photos/<?php echo $profile_id; ?>">Photo</a>
                        <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>friend/get_friend_list/<?php echo $profile_id; ?>">Friends</a>
                    <?php } else { ?>
                        <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>member/timeline">Timeline</a>
                        <a class="btn btn-default get_over_view_class" style="font-size: 100%"  href="<?php echo base_url(); ?>member/about">About</a>
                        <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>photos/get_home_photos">Photo</a>
                        <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>friend/get_friend_list">Friends</a>
                    <?php } ?>
<!--                    <div class="btn-group" role="group">
                        <button style="font-size: 100%" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Groups</a></li>
                            <li><a href="#">Likes</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

