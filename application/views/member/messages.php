<script>
    function onImageUnavailable(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];
        firstImage.style.display = 'none';
        secondImage.style.visibility = 'visible';
        secondImage.style.height = '100%';
    }
</script>
<script>
    (function($) {
        $(window).load(function() {
            $("#full_msg_box_container .ticker").mCustomScrollbar({
                setHeight: 300,
                theme: "dark-3"
            });
        });
    })(jQuery);
</script>
<div class="row" ng-controller="messageController" ng-cloak  ng-init="setMessageSummery('<?php echo htmlspecialchars(json_encode($message_summery_list)); ?>')">
    <div class="col-md-12">
        <div class="pagelet">
            <div class="padding_top_10px"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="message_text">
                                <span style="font-weight: bold;">Inbox</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="message_text">
                                <span style="font-weight: bold;">Other</span>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-6">
                            <div class="btn-group">
                                <button class="button-custom btn-xs dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button">
                                    More <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Unread</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <a style="color: black; font-weight: bold; font-size: 18px;" href="#">Mohammad Azhar Uddin</a>
                        </div>
                        <div class="col-md-6">
                            <div class="dropdown pull-right">
                                <button class="button-custom dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Action
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Block Messages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="pagelet">
            <div class="padding_top_10px"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="pagelet">
                        <div class="row">
                            <div class="col-md-12">
                                <input type ="text" class="form-control" placeholder="Search a chatting friend">
                            </div>  
                        </div>  
                    </div>
                    <div class="pagelet message_friends_box" ng-repeat="messageSummery in messageSummeryList">
                        <div class="row" ng-click="getMessageList(messageSummery.groupId)"> 

                            <div class="col-md-3"> 
                                <span ng-repeat= "userInfo in messageSummery.userList" >
                                    <span ng-if="userInfo.userId != '<?php echo $user_id; ?>'">
                                        <img src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{userInfo.userId}}.jpg" width="30" height="30" onError="onImageUnavailable(this)"> 
                                        <img style="visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{userInfo.genderId}}.jpg">
                                    </span>
                                </span>
                            </div>
                            <div class="col-md-9"> 
                                <span ng-repeat= "userInfo in messageSummery.userList" >
                                    <span ng-if="userInfo.userId != '<?php echo $user_id; ?>'">
                                        <span style="font-weight: bold;">{{userInfo.firstName}} &nbsp; {{userInfo.lastName}}</span> 
                                    </span>
                                </span>
                                {{messageSummery.latestMessage}}
                            </div>
                        </div>
                    </div>
                    <div class="pagelet message_friends_box">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg"  width="30" height="30"> 
                            </div>
                            <div class="col-md-9">
                                <span style="font-weight: bold;">Maria Islam</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="border_without_bottom padding_top_5px">
                        <div class="row" ng-repeat="messageInfo in messageInformation.messages">
                            <div class="user_comment">
                                <div class="col-md-1">
                                    <img src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{messageInfo.senderInfo.userId}}.jpg"> 
                                    <!--<img src="<?php // echo base_url() . PROFILE_PICTURE_PATH_W30_H30;  ?>{{messageInfo.senderInfo.userId}}.jpg" width="30" height="30" onError="onImageUnavailable(this)">--> 
                                    <img style="visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{messageInfo.senderInfo.genderId}}.jpg">
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a style="font-weight: bold;" href="#">{{messageInfo.senderInfo.firstName}} &nbsp;{{messageInfo.senderInfo.lastName}}</a>
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span>{{messageInfo.message}}</span>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    24/12, 11.15pm
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message_friends_divider_others">
                        <div class="row">
                            <div class="col-md-12"> 
                                <form  ng-submit="addMessage(messageInformation.groupId)">
                                    <input type ="text" class="form-control textarea-custom" placeholder="Write a reply" ng-model="userMessage.message" />
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="user_comment">
                                    <button class="button-custom" type="button">Add files</button>
                                    <button class="button-custom" type="button">Add photos</button>
                                </div>
                            </div>  
                            <div class="col-md-4">
                                <div class="message_text user_comment">
                                    <span style="font-weight: bold;">Press Ender to Send</span>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
