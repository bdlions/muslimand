<div class="">
    <div  class="msg_box style_left_box common_box" style="right:{{chatUserDetails.rightPos}}px" >
        <div class="message_friends_divider_full common_box_header">
            <div class="row">
                <div class="col-md-2">
                    <img class="img-responsive" style="margin-top: 3px;" src="<?php echo base_url(); ?>resources/images/online.png">
                </div>
                <div class="col-md-6">
                    <a style="color:#fff; vertical-align: middle;" href="">{{chatUserDetails.firstName + " " + chatUserDetails.lastName}}</a>
                </div>
                <div class="col-md-2">
                    <img class="img-responsive" style="margin-top: 3px; cursor: pointer" src="<?php echo base_url(); ?>resources/images/settings.png">
                </div>
                <div class="col-md-2">
                    <button type="button" class="close" aria-label="Close" ng-click="removeUser(chatUserDetails)" ><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
        <div class="chat_box_hidden_container">
            <div class="message_friends_divider_others chat_box_container" style="height: 150px; width: 100%; overflow-y: scroll; overflow-x: hidden; background-color: #fff;">
                <div ng-repeat="message in chatUserDetails.messages">
                    <div class="row" ng-if="message.senderInfo.userId == userInfo.userId">
                        <div class="col-md-12">
                            <div class="message_owner_style pull-right">
                                <span  class="message_owner_content_style" >{{ message.message}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" ng-if="message.senderInfo.userId !== userInfo.userId">
                        <div class="col-md-12">
                            <div class="message_friend_style pull-left">
                                <span class="message_friend_content_style" >{{  message.message}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="textarea_background_style">
                <div class="row" >
                    <div class="col-md-8" >
                        <form ng-submit="sendMessage(chatUserDetails)" >
                            <input type="text" name="chatMessageDisplayer" class="chatting_input_area"  ng-model = "chatUserDetails.writtenMsg">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <form action="upload.php" method="post" style="margin-left: 5px; margin-top: 5px;">
                            <label for="fileToUpload">
                                <img style="cursor: pointer;" src="<?php echo base_url(); ?>resources/images/camera.png"/>
                            </label>
                            <input type="File" name="fileToUpload" id="fileToUpload" class="hidden">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <img style="cursor: pointer; margin-left: -12px; margin-top: 5px;" src="<?php echo base_url(); ?>resources/images/emotion.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 