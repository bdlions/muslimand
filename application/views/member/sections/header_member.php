<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/search_bar_style.css"/>
<?php $this->load->view("custom_typeahead/custom_typeahead"); ?>

<script type="text/javascript">
    $(function () {
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + "notification/get_notification_counter",
            success: function (data) {
                if (typeof data.user_initiation_info != 'undefined') {
                    if (typeof data.user_initiation_info.genderId != "undefiend") {
                        angular.element($('#set_user_initiation_info_id')).scope().setUserGender(data.user_initiation_info.genderId);
                    }
                    if (data.user_initiation_info.friend > 0) {
                        $("#follower_counter_div").show();
                        $("#follower_counter_div").val(data.user_initiation_info.friend);
                        $("#follower_counter_div").html(data.user_initiation_info.friend);
                    }
                    if (data.user_initiation_info.message > 0) {
//                        $("#message_counter_div").show();
//                        $("#message_counter_div").val(data.user_initiation_info.message);
//                        $("#message_counter_div").html(data.user_initiation_info.message);
                    }
                    if (data.user_initiation_info.general > 0) {
                        $("#general_notification_counter_div").show();
                        $("#general_notification_counter_div").val(data.user_initiation_info.general);
                        $("#general_notification_counter_div").html(data.user_initiation_info.general);
                    }
                    if (typeof data.user_initiation_info.userCurrentTimeStamp != "undefiend") {
                        angular.element($('#set_user_initiation_info_id')).scope().setUserCurrentTime(data.user_initiation_info.userCurrentTimeStamp);
                    }

                }
            }
        });
    });
</script>
<script>
    $(function () {
        //var title = $("#profile_name").attr("value");
        var title = $("#profile_name").text();
        var shortText = jQuery.trim(title).substring(0, 10)
                .split(" ").slice(0, -1).join(" ") + "...";
    });
</script>


<script>
    $(document).mouseup(function (e) {
        var fr_container = $("#mm_friend_request_box");
        var container = $("#mm_notification_box");
        var msg_container = $("#mm_message_box");
        var typeahead_container = $("#page_late_id");
        $("#typeahead").val("");
        if (!fr_container.is(e.target) && fr_container.has(e.target).length === 0) {
            fr_container.hide();
        }
        if (!msg_container.is(e.target) && msg_container.has(e.target).length === 0) {
            msg_container.hide();
        }
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
        if (!typeahead_container.is(e.target) && typeahead_container.has(e.target).length === 0) {
            typeahead_container.hide();
        }
    });

    function friend_toggle() {
        var counterValue = $("#follower_counter_div").val();
        angular.element($('#mm_friend_request_box')).scope().updateStatusGetFriendNotifications(counterValue, function () {
            $("#follower_counter_div").hide();
            $('#mm_friend_request_box').show();
        });
    }

    function msg_toggle() {
        window.location = '<?php echo base_url(); ?>member/messages';
//        $('#mm_message_box').show();
    }

    function notf_toggle() {
        var counterValue = $("#general_notification_counter_div").val();
        angular.element($('#mm_notification_box')).scope().updateStatusGetGeneralNotifications(counterValue, function () {
            $("#general_notification_counter_div").hide();
            $('#mm_notification_box').show();
        });
    }

    function onImageUnavailableHeader(img) {
        var span = img.parentNode;
        var firstImage = img;
        var secondImage = span.getElementsByTagName('img')[1];
        firstImage.style.display = 'none';
        secondImage.style.visibility = 'visible';
        secondImage.style.height = '25px';
        secondImage.style.width = '25px';
    }
</script>

<div class="row" id="set_user_initiation_info_id" style="padding-top: 11px;" ng-controller="headerController">
    <div class="col-md-offset-1 col-md-2">
        <a target="_self" href="<?php echo base_url(); ?>newsfeed"  class="display_inline">
            <img class="img-circle img-responsive" src="<?php echo base_url(); ?>resources/images/logo.png" style="width: 22px;">
            <img style="width: 100px;" src="<?php echo base_url(); ?>resources/images/shadhiin.png">
        </a>
    </div>
    <div class="col-md-4">
        <div class="input-group" style="margin-left: -20px;">
            <span class="input-group-addon" style="margin-bottom: 10px; padding: 3px 12px!important;"><i class="glyphicon glyphicon-search"></i></span>
            <input style="height: 26px; padding: 3px 8px!important; border-radius: 0;" id="typeahead" class="form-control" type="text" placeholder="Search for people and interests" />
            <?php $this->load->view("custom_typeahead/typeahead_tmpl"); ?>
        </div>
    </div>
    <div class="col-md-2 profile_picture">
        <a target="_self" style="text-decoration: none;" href="<?php echo base_url(); ?>timeline">
            <span style="cursor: pointer; color: #fff; font-size: 14px; font-weight: bold; vertical-align: middle;">
                <img  style="height: 25px; width: 25px;" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25; ?>25x25_{{userGenderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25 . $user_id . '.jpg'; ?>" />
                &nbsp; <span id="profile_name" style="text-decoration: none" ><?php echo $first_name; ?></span>
            </span>
        </a>
    </div>
    <div class="col-md-3" >
        <div id="mm_friend_request" style="position: relative" >
            <div class="notification_counter" id="follower_counter_div" style="display: none"></div>
            <a href="javascript:void(0)" onclick="friend_toggle()">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/friends.png">
            </a>
            <div id="mm_friend_request_box"> 
                <div id="pending_list">
                    <?php $this->load->view("member/pagelets/notification_friend_request"); ?>
                </div>
            </div>
        </div>

        <div id="mm_messages" style="position: relative" >
            <div class="notification_counter" id="message_counter_div" style="display: none"></div>
            <a href="javascript:void(0)" onclick="msg_toggle()">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/messages.png">
            </a>
            <div id="mm_message_box">
                <?php // $this->load->view("member/pagelets/notification_message"); ?>
            </div>
        </div>

        <div id="mm_notification" style="position: relative">
            <div class="notification_counter" id="general_notification_counter_div" style="display: none"></div>
            <a href="javascript:void(0)"  onclick="notf_toggle()">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/notifications.png">
            </a>
            <div id="mm_notification_box">
                <?php $this->load->view("member/pagelets/notification_notification"); ?>
            </div>
        </div>

        <div id="mm_setting" style="position: relative;">
            <a data-toggle="dropdown" id="dropdownMenuRight">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/menu.png">
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuRight">
                <li class="disabled" role="presentation">
                    <!--<a role="menuitem" tabindex="-1" href="<?php // echo base_url()  ?>member/account_settings">Account settings</a>-->
                    <a role="menuitem" tabindex="-1">Account settings</a>
                </li>
                <li class="disabled" role="presentation">
                    <a role="menuitem" tabindex="-1" >Privacy settings</a>
                    <!--<a role="menuitem" tabindex="-1" href="<?php // echo base_url()  ?>member/privacy_settings">Privacy settings</a>-->
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1"  id="user_log_out_id" onclick="updateOnlineStatusInactive()" >Log out</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    function updateOnlineStatusInactive() {
        angular.element($('#user_log_out_id')).scope().updateOnlineStatusInactive(function (data) {
            console.log(data);
            if (data.status != "0") {
                window.location = '<?php echo base_url() ?>auth/logout';
            }
        });
    }

</script>
