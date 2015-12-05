 <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/chat_styles.css">
    <script>
        (function ($) {
            $(window).load(function () {
                $("#ticker_notification .ticker").mCustomScrollbar({
                    setHeight: 300,
                    theme: "dark-3"
                });
            });
        })(jQuery);
    </script>
    <script>
        (function ($) {
            $(window).load(function () {
                $("#ticker_friend .ticker").mCustomScrollbar({
                    setHeight: 300,
                    theme: "dark-3"
                });
            });
        })(jQuery);
    </script>
    <script type="text/javascript">
        $(function () {
            $(".chat_box_container").scrollTop($(".chat_box_container").height());


            $(".common_box").each(function () {
                $(this).click(function () {
                    $(this).css("background", "#842D80");
                    $(".common_box").not(this).css("background-color", "#703684");
                });
            });

            $(document).click(function (e) {
                if (!$(e.target).hasClass("common_box")
                        && $(e.target).parents(".common_box").length === 0)
                {
                    $(".common_box").css("background-color", "#703684");
                }
            });

            //        $(".common_box_header").each(function() {
            //            $(this).click(function() {
            //                var newElem = $(this).parent(".common_box").find(".chat_box_hidden_container");
            //                newElem.hide();
            //                $(this).css("background-color", "#703684");
            ////                $(this).find(".common_box_header").css("top","115%");
            ////                $(this).find(".common_box_header").css("bottom",$(window).height());
            //                //console.log($(window).scrollTop() + $(window).height());
            //            });
            //        });
        });
        function close_message_window_1() {
            $("#msg_window_1").hide();
        }
        function close_message_window_2() {
            $("#msg_window_2").hide();
        }
        function close_message_window_3() {
            $("#msg_window_3").hide();
        }
        function open_message_window_1() {
            $("#msg_window_3").show();
        }
        function open_message_window_2() {
            $("#msg_window_2").show();
        }
        function open_message_window_3() {
            $("#msg_window_1").show();
        }

        function onImageUnavailable(img) {
            var div = img.parentNode;
            var firstImage = img;
            var secondImage = div.getElementsByTagName('img')[1];
            firstImage.style.display = 'none';
            secondImage.style.visibility = 'visible';
            secondImage.style.height = '100%';
        }


        $(function () {
            angular.element($('#ticker_notification')).scope().getRecentActivities();
            angular.element($('#ticker_friend')).scope().getFriendList();
        });

    </script>

    <div id="ticker_notification" ng-controller="rightController" ng-cloak >
        <div class="ticker">
            <div class="ticker_friends message_friends_divider_full" ng-repeat="recentActivity in recentActivityList">
                <a  href="<?php echo base_url() ?>status/get_status_details/{{recentActivity.statusId}}">
                    <div class="row from-group">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <img  src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{recentActivity.userInfo.userId}}.jpg" width="30" height="30" onError="onImageUnavailable(this)">
                            <img style=" visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{recentActivity.genderId}}.jpg">
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <a  style="font-weight: bold;"><b>{{recentActivity.userInfo.firstName}}&nbsp;{{recentActivity.userInfo.lastName}}</b></a> 
                            <span ng-if="<?php echo POST_STATUS_BY_USER_AT_HIS_PROFILE_TYPE_ID; ?> == recentActivity.typeId">
                                update
                                <span ng-if="<?php echo Male; ?> == recentActivity.genderId">his</span>
                                <span ng-if="<?php echo Female; ?> == recentActivity.genderId">her</span>
                                status
                            </span>
                            <span ng-if="<?php echo CHANGE_PROFILE_PICTURE; ?> == recentActivity.typeId">
                                update profile picture 
                            </span>
                            <span ng-if="<?php echo CHANGE_COVER_PICTURE; ?> == recentActivity.typeId">
                                update cover picture 
                            </span>
                            <span ng-if="<?php echo COMMENTED_ON_ID; ?> == recentActivity.typeId">
                                commented on
                            </span>
                            <span ng-if="<?php echo LIKED_ON_ID; ?> == recentActivity.typeId">
                                liked 
                            </span>
                            <span ng-if="recentActivity.referenceUserInfo != null">
                                <a style="font-weight: bold;"> <span>{{recentActivity.referenceUserInfo.firstName}}&nbsp;{{recentActivity.referenceUserInfo.lastName}}</span></a>
                                status
                            </span>
                        </div>
                </a>
            </div>
        </div>
        <div class="ticker_friends message_friends_divider_others">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg"  width="30" height="30"> 
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <b>Jannatul Ferdaus</b></a> changed her profile pic.
                </div>
            </div>
        </div>
    </div>
</div>


<!--Chat box-->
<div ng-controller="messageController" ng-cloak >
    <div id="ticker_friend" >
        <div class="ticker">
            <div class="row">
                <div class="col-md-12">
                    <div class="ticker_friends message_friends_divider_full"  ng-repeat="friend in friendList" >
                        <div class="row" ng-click="getChatInitialInfo(friend)">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img class="img-responsive"  alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?> {{friend.userId}}.jpg" onError="onImageUnavailable(this)"/>
                                <img class="img-responsive" style="visibility:hidden;height: 0px;" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{friend.genderId}}.jpg">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <span class="ticker_vertical_font_align">{{friend.firstName}}&nbsp;{{friend.lastName}}</span>
                            </div>
                        </div> 
                    </div>
                    <div class="ticker_friends message_friends_divider_others">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_3.jpg"  width="30" height="30">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <span class="ticker_vertical_font_align">Barak Obama</span> 
                            </div>
                        </div>
                    </div>
                    <div class="ticker_friends message_friends_divider_others">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg"  width="30" height="30">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <span class="ticker_vertical_font_align">Jannatul Ferdaus</span> 
                            </div>
                        </div>
                    </div>
                    <div class="ticker_friends message_friends_divider_others">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg"  width="30" height="30">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <span class="ticker_vertical_font_align">Maria Islam</span> 
                            </div>
                        </div>
                    </div>
                    <div class="ticker_friends message_friends_divider_others">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_9.jpg"  width="30" height="30">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9">
                                <span class="ticker_vertical_font_align">John Ibrahim</span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--new chat box info-->
    <div  ng-init="getChatBoxes()" style="position: absolute; right: 100%; top: 11%; width: 400%; font-size: 10px;">
            <div ng-repeat="chatUserDetails in chatBoxes">
                <chat-box  ng-init="userId = chatUserDetails.userId"></chat-box>
            </div>
            <div class="row counterPosition" ng-if="miniBoxes.length > 0" style="right:{{chatUserDetails.rightPos}}px">
                <div class="col-md-12">
                    <div class="dropup pull-right" style="cursor: pointer;" >
                        <div role="presentation" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div  class="msg_box_counter" >{{ miniBoxes.length}}</div>
                            <img src="resources/images/comment_icon.png">
                        </div>
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenu2">
                            <div class="row" ng-repeat="chatUserDetails in miniBoxes">
                                <div class="col-md-10">
                                    <li class="MiniBoxesUser" ng-click="openMiniBoxesUser(chatUserDetails)"><a>{{chatUserDetails.firstName + " " + chatUserDetails.lastName}}</a></li>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="close" aria-label="Close" ng-click="removeMiniBoxesUser(item)" ><span aria-hidden="true">&times;</span></button>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>







<!-- Chat msg box -->
<div style="position: absolute; right: 100%; top: 115%; width: 400%; font-size: 10px;">
    <div class="row" style="position: relative; margin: 5px;">
        <div class="col-md-4">
            <div id="msg_window_1" class="msg_box_1 style_left_box common_box" style="display: none;">
                <div class="message_friends_divider_full common_box_header">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img-responsive" style="margin-top: 5px;" src="<?php echo base_url() ?>resources/images/online.png">
                        </div>
                        <div class="col-md-6">
                            <a style="color:#fff; vertical-align: middle;" href="<?php echo base_url(); ?>member/profile">Dr. Belal</a>
                        </div>
                        <div class="col-md-2">
                            <img class="img-responsive" style="margin-top: 3px; cursor: pointer" src="<?php echo base_url() ?>resources/images/settings.png">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="close" aria-label="Close" onclick="close_message_window_1()"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
                <div class="chat_box_hidden_container">
                    <div class="message_friends_divider_others chat_box_container" style="height: 150px; width: 100%; overflow-y: scroll; overflow-x: hidden; background-color: #fff;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">Hello, Mr. Belal. Myself Azhar. How are you? </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">Hi. I'm fine. How are you?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_friend_style pull-left">
                                    <span class="message_friend_content_style">Fine. Are you a doctor?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_friend_style pull-left">
                                    <span class="message_friend_content_style">Yes, I am a professor of doctor. And you?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">I'm web a designer & software Engineer of Sampan-IT </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="textarea_background_style">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="col-md-12"><textarea class="chatting_textarea_box_1" rows="1"></textarea></div>
                            </div>
                            <div class="col-md-2">
                                <form action="upload.php" method="post" style="margin-left: 5px; ">
                                    <label for="fileToUpload">
                                        <img style="cursor: pointer;" src="<?php echo base_url() ?>resources/images/camera.png" />
                                    </label>
                                    <input type="File" name="fileToUpload" id="fileToUpload" class="hidden">
                                </form>
                            </div>
                            <div class="col-md-2">
                                <img style="cursor: pointer; margin-left: -12px; " src="<?php echo base_url() ?>resources/images/emotion.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="msg_window_2" class="msg_box_2 style_middle_box common_box" style="display: none;">
                <div class="message_friends_divider_full common_box_header">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img-responsive" style="margin-top: 5px;" src="<?php echo base_url() ?>resources/images/online.png">
                        </div>
                        <div class="col-md-6">
                            <a style="color:#fff; vertical-align: middle;" href="<?php echo base_url(); ?>member/profile">Sharmin Akter</a>
                        </div>
                        <div class="col-md-2">
                            <img class="img-responsive" style="margin-top: 3px; cursor: pointer" src="<?php echo base_url() ?>resources/images/settings.png">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="close" aria-label="Close" onclick="close_message_window_2()"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
                <div class="chat_box_hidden_container">
                    <div class="message_friends_divider_others chat_box_container" style="height: 150px; width: 100%; overflow-y: scroll; overflow-x: hidden; background-color: #fff;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">Hi, Sharmin!!! How are you? Myself Azhar.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">Hello. I'm fine. What about you?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_friend_style pull-left">
                                    <span class="message_friend_content_style">Going well. Are you a student?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_friend_style pull-left">
                                    <span class="message_friend_content_style">Yap. BBA 8th Semester, ABC University. You?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">I'm web a designer & software Engineer of Sampan-IT </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="textarea_background_style">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="col-md-12"><textarea class="chatting_textarea_box_2" rows="1"></textarea></div>
                            </div>
                            <div class="col-md-2">
                                <form action="upload.php" method="post" style="margin-left: 5px; ">
                                    <label for="fileToUpload">
                                        <img style="cursor: pointer;" src="<?php echo base_url() ?>resources/images/camera.png" />
                                    </label>
                                    <input type="File" name="fileToUpload" id="fileToUpload" class="hidden">
                                </form>
                            </div>
                            <div class="col-md-2">
                                <img style="cursor: pointer; margin-left: -12px; " src="<?php echo base_url() ?>resources/images/emotion.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="msg_window_3" class="msg_box_3 common_box" style="display: none;">
                <div class="message_friends_divider_full common_box_header">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img-responsive" style="margin-top: 5px;" src="<?php echo base_url() ?>resources/images/online.png">
                        </div>
                        <div class="col-md-6">
                            <a style="color:#fff; vertical-align: middle;" href="<?php echo base_url(); ?>member/profile">Mohammad Rafique</a>
                        </div>
                        <div class="col-md-2">
                            <img class="img-responsive" style="margin-top: 3px; cursor: pointer" src="<?php echo base_url() ?>resources/images/settings.png">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="close" aria-label="Close" onclick="close_message_window_3()"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
                <div class="chat_box_hidden_container">
                    <div class="message_friends_divider_others chat_box_container" style="height: 150px; width: 100%; overflow-y: scroll; overflow-x: hidden; background-color: #fff;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">As salamualaikum, Rafique vai. How are you? Myself Mohammad Azhar Uddin.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">Walaikum as salam. I'm fine. What about you?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_friend_style pull-left">
                                    <span class="message_friend_content_style">Alhamdulillah. What are you doing by profession?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_friend_style pull-left">
                                    <span class="message_friend_content_style">I am a professor of X College . What are you doing?</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="message_owner_style pull-right">
                                    <span class="message_owner_content_style">I'm web a designer & software Engineer of Sampan-IT </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="textarea_background_style">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="col-md-12"><textarea class="chatting_textarea_box_3" rows="1"></textarea></div>
                            </div>
                            <div class="col-md-2">
                                <form action="upload.php" method="post" style="margin-left: 5px; ">
                                    <label for="fileToUpload">
                                        <img style="cursor: pointer;" src="<?php echo base_url() ?>resources/images/camera.png" />
                                    </label>
                                    <input type="File" name="fileToUpload" id="fileToUpload" class="hidden">
                                </form>
                            </div>
                            <div class="col-md-2">
                                <img style="cursor: pointer; margin-left: -12px; " src="<?php echo base_url() ?>resources/images/emotion.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="position: absolute; margin: 5px; top: 198px; left: -25px; background-color: #E5E5E5; padding: 5px 0; ">
        <div class="col-md-12">
            <div class="dropup pull-right" style="cursor: pointer;">
                <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="msg_box_counter" id="msg_box_counter_div" style="">15</div>
                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png">
                </div>
                <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenu2">
                    <li><a href="#">Nazmul Hasan</a></li>
                    <li><a href="#">Alamgir Kabir</a></li>
                    <li><a href="#">Sharmi Akter</a></li>
                    <li><a href="#">Mohammad Ashraful</a></li>
                    <li><a href="#">Mohammad Abdullah Ibn Abdur Razzaque</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

