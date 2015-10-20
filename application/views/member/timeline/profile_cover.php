
<script>
    function approve_request(friendId) {
        angular.element($('#request_accept_id')).scope().approveRequest(friendId, function () {

        });
    }

</script>
<div class="row">
    <div class="col-md-12">
        <div style="position: relative;">
              <img src="<?php echo base_url() ?>resources/images/car.jpg" width="100%" height="250">
            <div ng-controller="ImageCopperController" style="position: absolute; top: 20px; left: 10px; z-index: 101 ">
                <div  ng-show="imageCropStep == 1" class="btn btn-success fileinput-button" >		
                    <!--<img src="<?php echo base_url() ?>resources/images/car.jpg" width="100%" height="250">-->
                            <!--<img src="<?php // echo base_url()   ?>resources/images/add_photo_album.jpg" alt="">-->
                    upload cover picture
                    <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
                </div>			
                <div ng-show="imageCropStep == 2">
                    <image-crop			 
                        data-height="250"
                        data-width="600"
                        data-shape="square"
                        data-step="imageCropStep"
                        src="imgSrc"
                        data-result="result"
                        data-result-blob="resultBlob"
                        crop="initCrop"
                        padding="50"
                        max-size="1024"
                        ></image-crop>		   
                </div>

                <div ng-show="imageCropStep == 2">
                    <br/>
                    <button ng-click="clear()">Cancel</button>
                    <button ng-click="initCrop = true">Crop</button>		
                </div>		  
                <div ng-show="imageCropStep == 3">
                    <img ng-src="{{result}}"></img>
                    <button onclick="cover_picture_upload(angular.element(this).scope().result)">Save</button>	
                    <button ng-click="clear()">Clear</button>	
                </div>
            </div>
            <?php // $this->load->view("member/timeline/add_cover_photo"); ?>
            <!--<a class="profilePicThumb" href="#">-->
            <div ng-controller="ImageCopperController" style="border: 2px solid whitesmoke; position: absolute; bottom: 1px; left: 1px;">
                <div ng-show="imageCropStep == 1" class="fileinput-button">
                    <img id="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100 . $user_id . '.jpg'; ?>"   /> 
                    <img src="<?php echo base_url() ?>resources/images/add_photo_album.jpg" alt="">
                    <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
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
                        padding="100"
                        max-size="1024"
                        ></image-crop>		   
                </div>
                <div ng-show="imageCropStep == 2">
                    <br/>
                    <button ng-click="clear()">Cancel</button>
                    <button ng-click="initCrop = true">Crop</button>		
                </div>		  
                <div  ng-show="imageCropStep == 3">
                    <div >
                        <img ng-src="{{result}}"></img>
                    </div>
                    <button onclick="imageUpload(angular.element(this).scope().result)">Save</button>	
                    <!--<button ng-click="clear()">Clear</button>-->	
                </div>
            </div>
            <!--<img style="border: 6px solid whitesmoke; position: absolute; bottom: 1px; left: 1px;" class=" img-circle profilePic img" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="160px" height="160px">-->
            <!--</a>-->
            <a style="position: absolute; bottom: 2px; left: 190px; color: white;"class="btn" href="">
                <b>Mohammad Azhar Uddin</b>
            </a>
            <div ng-init="setUserRelation(<?php echo htmlspecialchars(json_encode($user_relation)); ?>)" >
                <div ng-if ="userRelation.relation_ship_status == constants.non_friend_relation_type_id">
                    <button type="button" class=" btn btn-default" style="position: absolute; bottom: 20px; right:  160px; font-size: 80%" ng-click="addFriend('<?php echo $friend_id; ?>')" >Add Friend</button>   
                </div>
                <div ng-if ="userRelation.relation_ship_status == constants.friend_relation_type_id">
                    <button type="button" class=" btn btn-default" style="position: absolute; bottom: 20px; right:  160px; font-size: 80%" ng-click="" >Friend</button>
                </div>
                <div ng-if ="userRelation.relation_ship_status == constants.pending_relation_type_id && userRelation.is_initiated == constants.request_sender">
                    <button id="request_accept_id" type="button" class=" btn btn-default  " style=" position: absolute; bottom: 20px; right:  160px; font-size: 80%" onclick="approve_request('<?php echo $friend_id; ?>')">Confirm</button>    
                    <button type="button" class=" btn btn-default  " style=" position: absolute; bottom: 20px; right:  230px; font-size: 80%" ng-click="deleteRequest('<?php echo $friend_id; ?>')">Delete Request</button>    
                </div>

                <div ng-if ="userRelation.relation_ship_status == constants.pending_relation_type_id && userRelation.is_initiated == constants.request_receiver">
                    <button type="button" class=" btn btn-default  " style=" position: absolute; bottom: 20px; right:  160px; font-size: 80%" ng-click="" >Friend Request Sent</button>    
                    <button type="button" class=" btn btn-default  " style=" position: absolute; bottom: 20px; right:  300px; font-size: 80%" ng-click="deleteRequest('<?php echo $friend_id; ?>')" >Cancel Friend Request</button>    

                </div>

                <div ng-if ="userRelation.relation_ship_status == constants.your_relation_type_id">
                    <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%">Update Info</button>
                    <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  20px; font-size: 80%">View Activity Log</button>
                </div>
                <div ng-if ="userRelation.relation_ship_status != constants.your_relation_type_id">
                    <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  80px; font-size: 80%">Message</button>
                    <div class="dropdown dropdown_style">
                        <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
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
            <div style="background-color: whitesmoke">
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

    <script>
        function block_request(friendId) {
            angular.element($('#block_friend_id')).scope().blockRequest(friendId, function () {
                alert("user is blocked ");
            });


        }
        function imageUpload(imageData) {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>photos/add_profile_picture/',
                data: {
                    imageData: imageData
                },
                success: function (data) {
                    window.location = '<?php echo base_url(); ?>member/newsfeed';
                }
            });
        }
        function cover_picture_upload(imageData) {
            $.ajax({
                dataType: 'json',
                type: "POST",
                url: '<?php echo base_url(); ?>photos/add_cover_picture/',
                data: {
                    imageData: imageData
                },
                success: function (data) {
                    window.location = '<?php echo base_url(); ?>member/newsfeed';
                }
            });
        }

    </script>
