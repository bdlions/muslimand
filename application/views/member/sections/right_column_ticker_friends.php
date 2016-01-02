<script>
    $(function () {
        $(".chat_box_container").scrollTop(250);
    });
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
<script type="text/javascript">
    $(function () {
        $('.common_box').each(function () {
            $(this).click(function () {
                $(this).css("background-color", "#842D80");
                $('.common_box').not(this).css("background-color", "#703684");
            });
        });

        angular.element($('#ticker_notification')).scope().getRecentActivities();
        angular.element($('#ticker_friend')).scope().getFriendList();
    });

</script>


<!--<script>

    var mapId = '<?php echo $user_id; ?>';

    var socket = new WebSocket("ws://localhost:8089/" + mapId);

    socket.onmessage = function (event) {
        //alert("Received data from websocket: " + event.data);
        console.log("From server: " + event.data);
    }

    socket.onopen = function (event) {
        //var msg = "Hello World";
        //console.log("Sending to server: " + msg);
        //socket.send(msg);
    };

    socket.onclose = function (event) {
        alert("Web Socket closed");
    };

    function sendMessage(e) {
        alert("Hghh");
        var userId = document.getElementById("send_message_id").value;
        console.log(userId);
        var person = [];
        person[0] = "2";
        person[1] = "3";
        person[2] = "1";
        var msg = {'message': 'ddd', 'userIdList': person};
        socket.send(JSON.stringify(msg));
    }
//    var userId = document.getElementById("send_message_id").value;
//    alert(userId);
//    console.log(userId);
    $('#send_message_id').on("click", function () {
        alert("fd");
        var key = e.which;
        if (key == 13)  // the enter key code
        {
            $('input[name = butAssignProd]').click();
            return false;
        }
    });
</script>-->

<div id="ticker_notification" ng-controller="rightController" ng-cloak >
    <div class="ticker">
        <div class="ticker_friends message_friends_divider_full" ng-repeat="recentActivity in recentActivityList">
            <a  href="<?php echo base_url() ?>status/get_status_details/{{recentActivity.statusId}}">
                <div class="row from-group">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{recentActivity.genderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{recentActivity.userInfo.userId}}.jpg?time=<?php echo time(); ?>" width="30" height="30">
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
    <!--        <div class="ticker_friends message_friends_divider_others">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <img src="<?php //echo base_url();       ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg"  width="30" height="30"> 
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9">
                        <b>Jannatul Ferdaus</b></a> changed her profile pic.
                    </div>
                </div>
            </div>-->
</div>
</div>


<!--Chat box-->
<div ng-controller="messageController" ng-cloak ng-init="setUserId(('<?php echo $user_id; ?>'))">
    <div id="ticker_friend" >
        <div class="ticker">
            <div class="row">
                <div class="col-md-12">
                    <div class="ticker_friends message_friends_divider_full"  ng-repeat="friend in friendList" >
                        <div class="row" ng-click="getChatInitialInfo(friend)">
                            <div class="col-md-3">
                                <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{friend.genderId}}.jpg" class="img-responsive"  alt="" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>{{friend.userId}}.jpg"/>
                            </div>
                            <div class="col-md-7">
                                <span class="chatting_user_name" data-toggle="tooltip" data-placement="top" title="{{friend.firstName}}&nbsp;{{friend.lastName}}">{{friend.firstName + " " + friend.lastName}}</span>
                            </div>
                            <div class="col-md-2">
                                <div class="status online"> </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ChatBox Ticker-->
    <div  ng-init="getChatBoxes()" style="position: fixed; right: 0; bottom: 43%; font-size: 12px;">
        <div ng-repeat="chatUserDetails in chatBoxes">
            <chat-box  ng-init="userId = chatUserDetails.userId"></chat-box>
        </div>
        <div class="row counterPosition" ng-if="miniBoxes.length > 0" style="position: fixed; bottom: 0; right:{{chatUserDetails.rightPos}}px">
            <div class="col-md-12">
                <div class="dropup pull-right" style="cursor: pointer;" >
                    <div role="presentation" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div  class="msg_box_counter" >{{ miniBoxes.length}}</div>
                        <img src="<?php echo base_url() ?>resources/images/comment_icon.png">
                    </div>
                    <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenu2" style="min-width: 180px!important;">
                        <div class="row" ng-repeat="chatUserDetails in miniBoxes">
                            <div class="col-md-10">
                                <li class="MiniBoxesUser" ng-click="openMiniBoxesUser(chatUserDetails)"><a>{{chatUserDetails.firstName}}&nbsp;{{ chatUserDetails.lastName}}</a></li>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="close" aria-label="Close" ng-click="removeMiniBoxesUser(chatUserDetails)" ><span aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
