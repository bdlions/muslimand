
<script>
    function approve_request(friendId) {
        angular.element($('#request_accept_id')).scope().approveRequest(friendId, function() {

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
<div class="profile_mrg">
    <div class="row">
        <div class="col-md-12">
            <!--cover picture-->
            <div ng-controller="ImageCopperController" style="position: relative; ">
                <div  ng-show="imageCropStep == 1" class="fileinput-cover-button">	
                    <?php if ($friend_id != "0" && $friend_id != $user_id) { ?>
                        <img class="img-responsive"  alt="" src="<?php echo base_url() . COVER_PICTURE_IMAGE_PATH . $friend_id . '.jpg?time=' . time(); ?>" onError="onImageUnavailable(this)"/>
                        <img class="img-responsive" style="visibility:hidden;height: 0px;" src="<?php echo base_url() ?>resources/images/cover.jpg">
                    <?php } else { ?>
                        <img class="img-responsive"  alt="" src="<?php echo base_url() . COVER_PICTURE_IMAGE_PATH . $user_id . '.jpg?time=' . time(); ?>" onError="onImageUnavailable(this)"/>
                        <img class="img-responsive" style="visibility:hidden;height: 0px;" src="<?php echo base_url() ?>resources/images/cover.jpg">
                        <input class="profile_cover_upload_input" style="z-index: 1005" type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)"/>
                        <div class="profile_cover_upload_img">
                            <img src="<?php echo base_url() ?>resources/images/upload_icon.png"/>
                            <span>Upload Cover Picture</span>
                        </div>
                    <?php } ?>
                </div>			
                <div style="position: relative; left: -13px; margin: 0 15px; right: 0; top: 0; width: 100%"  ng-show="imageCropStep == 2" >
                    <image-crop			 
                        data-height="272"
                        data-width="780"
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
            <div ng-controller="ImageCopperController" style="position: absolute; bottom: -15px; left: 25px; z-index: 1001;">
                <div ng-show="imageCropStep == 1" class="fileinput-button profile_picture timeline_profile_picture_custom">
                    <?php if ($friend_id != "0" && $friend_id != $user_id) { ?>
                        <img  alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150 . $friend_id . '.jpg?time=' . time(); ?>" onError="onImageUnavailable(this)"/>
                        <img style="visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150; ?>150x150.jpg" alt="">
                    <?php } else { ?>
                        <img  alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150 . $user_id . '.jpg?time=' . time(); ?>" onError="onImageUnavailable(this)"/>
                        <img style="visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W150_H150; ?>150x150.jpg" alt="">
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
                        padding="50"
                        max-size="1024"
                        imagepath = "<?php echo base_url(); ?>photos/add_profile_picture/"
                        reloadpath = "<?php echo base_url(); ?>member/timeline/"
                        ></image-crop>		   
                </div>
                <div ng-show="imageCropStep == 2">
                    <button class="btn btn-sm" style="position: absolute; bottom: 0; right: 45px; background-color: #999; color: #fff; width: 25%;" ng-click="initCrop = true">Crop</button>		
                    <button class="btn btn-sm" style="position: absolute; bottom: 0; left: 45px; background-color: #999; color: #fff; width: 28%; vertical-align: middle;" ng-click="clear()">Cancel</button>
                </div>		  
                <div  ng-show="imageCropStep == 3">
                    <div >
                        <img ng-src="{{result}}"/>
                    </div>
                </div>
            </div>

            <a class="timeline_profile_name" href="">
                Mohammad Azhar Uddin
            </a>

            <div ng-init="setUserRelation(<?php echo htmlspecialchars(json_encode($user_relation)); ?>)" >
                <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_NON_FRIEND_ID; ?>">
                    <button type="button" class=" button-custom" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%; z-index: 1001" ng-click="addFriend('<?php echo $friend_id; ?>')" >Add Friend</button>   

                </div>
                <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_FRIEND_ID ?>">
                    <!--<button type="button" class=" button-custom" style="position: absolute; bottom: 20px; right:  120px; font-size: 80%; z-index: 1001" ng-click="deleteRequest('<?php echo $friend_id; ?>')" >Un Friend</button>--> 
                    <button type="button" class=" button-custom" style="position: absolute; bottom: 20px; right:  160px; font-size: 80%" ng-click="" >Friend</button>
                </div>
                <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_PENDING_ID; ?> && userRelation.is_initiated == <?php echo REQUEST_RECEIVER; ?>">
                    <div class="dropdown dropdown_addFriend_style">
                        <button type="button" class="button-custom dropdown-toggle" ng-click="" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Response to Friend Request<span class="caret"></span></button>    
<!--                        <button type="button" class="button-custom dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                        </button>-->
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" onclick="approve_request('<?php echo $friend_id; ?>')">Confirm</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="deleteRequest('<?php echo $friend_id; ?>')">Delete Request</a></li>
                        </ul>
                    </div>
<!--                    <button id="request_accept_id" type="button" class=" button-custom  " style=" position: absolute; bottom: 20px; right:  160px; font-size: 80%; z-index: 1001" onclick="approve_request('<?php //echo $friend_id; ?>')">Confirm</button>    
                    <button type="button" class=" button-custom  " style=" position: absolute; bottom: 20px; right:  230px; font-size: 80%; z-index: 1001" ng-click="deleteRequest('<?php //echo $friend_id; ?>')">Delete Request</button>    -->
                </div>

                <div ng-if ="userRelation.relation_ship_status == <?php echo RELATION_TYPE_PENDING_ID; ?> && userRelation.is_initiated == <?php echo REQUEST_SENDER; ?>">
                    <!--<button type="button" class=" button-custom  " style=" position: absolute; bottom: 20px; right:  160px; font-size: 80%; z-index: 1001" ng-click="" >Friend Request Sent</button>-->    
                    <!--<button type="button" class="button-custom " style=" position: absolute; bottom: 20px; right:  300px; font-size: 80%; z-index: 1001" ng-click="deleteRequest('<?php echo $friend_id; ?>')" >Cancel Friend Request</button>-->    
                    <div class="dropdown dropdown_addFriend_style">
                        <button type="button" class="button-custom dropdown-toggle" ng-click="" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Sent Friend Request<span class="caret"></span></button>    
<!--                        <button type="button" class="button-custom dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                        </button>-->
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" ng-click="deleteRequest('<?php echo $friend_id; ?>')">Cancel Friend Request</a></li>
                        </ul>
                    </div>
                </div>

                <div ng-if ="userRelation.relation_ship_status == <?php echo YOUR_RELATION_TYPE_ID; ?>">
                    <button type="button" class="button-custom" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%; z-index: 1001">Update Info</button>
                    <button type="button" class="button-custom" style="position: absolute; bottom: 20px; right:  30px; font-size: 80%; z-index: 1001">View Activity Log</button>
                </div>
                <div ng-if ="userRelation.relation_ship_status != <?php echo YOUR_RELATION_TYPE_ID; ?>">
                    <button type="button" class="button-custom" style="position: absolute; bottom: 20px; right:  70px; font-size: 80%; z-index: 1001">Message</button>
                    <div class="dropdown dropdown_style">
                        <button type="button" class="button-custom dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Report</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" id="block_friend_id" href onclick="block_request('<?php echo $friend_id; ?>')">Block</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div style="background-color: whitesmoke; text-align: center;">
                <div class="btn-group" role="group" aria-label="...">
                    <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>member/timeline">Timeline</a>
                    <a class="btn btn-default get_over_view_class" style="font-size: 100%" onclick="getOverview('<?php echo $user_id; ?>')" href="<?php echo base_url(); ?>member/about">About</a>
                    <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>photos">Photo</a>
                    <a class="btn btn-default" style="font-size: 100%" href="<?php echo base_url(); ?>friend/get_friend_list/<?php echo $friend_id; ?>">Friends</a>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Groups</a></li>
                            <li><a href="#">Likes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function block_request(friendId) {
        angular.element($('#block_friend_id')).scope().blockRequest(friendId, function() {
            alert("user is blocked ");
        });


    }

</script>
