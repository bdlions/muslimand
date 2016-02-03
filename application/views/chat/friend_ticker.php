
<div class="" id="testId">
    <div  class="msg_box common_box" style="right: {{chatUserDetails.rightPos}}px" >
        <div class="message_friends_divider_full common_box_header" style="border: none!important;">
            <div class="row">
                <div class="col-md-2">
                    <img class="img-responsive" style="margin-top: 6px;" src="<?php echo base_url(); ?>resources/images/online.png">
                </div>
                <div class="col-md-6">
                    <a class="msg_box_user_name" href='<?php echo base_url(); ?>member/timeline/{{userId}}'>{{chatUserDetails.firstName + " " + chatUserDetails.lastName}}</a>
                </div>
                <div class="col-md-2">
                    <!--<img class="img-responsive" style="margin-top: 3px; cursor: pointer" src="<?php //echo base_url();    ?>resources/images/settings.png">-->
                </div>
                <div class="col-md-2">
                    <button type="button" class="close close-custom" aria-label="Close" ng-click="removeUser(chatUserDetails)" ><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
        <div class="chat_box_hidden_container">
            <div class="message_friends_divider_others chat_box_container">
                <div ng-repeat="message in chatUserDetails.messages">
                    <div class="row" ng-if="message.senderInfo.userId == userInfo.userId">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="message_owner_style pull-right">
                                <a data-toggle="tooltip" data-placement="left" title="{{message.sentTime}}"> 
                                    <span  class="message_owner_content_style" >{{ message.message}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group" ng-if="message.senderInfo.userId !== userInfo.userId">
                        <div class="col-md-2">
                            <div class="pull-left">
                                <a data-toggle="tooltip" data-placement="right" title="{{message.sentTime}}"> 
                                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25 ?>25x25_{{message.senderInfo.genderId}}.jpg" class="img-circle" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25 ?>{{message.senderInfo.userId}}.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
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
                            <input  id="send_message_id" type="text" name="chatMessageDisplayer" class="chatting_input_area"  ng-model = "chatUserDetails.writtenMsg">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <form action="upload.php" method="post" style="margin-left: 14px; padding-top: 1px; margin-bottom: -1px;">
                            <label for="fileToUpload">
                                <img style="cursor: pointer;" src="<?php echo base_url(); ?>resources/images/camera.png"/>
                            </label>
                            <input type="File" name="fileToUpload" id="fileToUpload" class="hidden">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <img style="cursor: pointer; margin-left: -8px; padding-top: 2px;" src="<?php echo base_url(); ?>resources/images/emotion.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
