
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/search_bar_style.css"/>
<?php $this->load->view("custom_typeahead/custom_typeahead"); ?>

<script type="text/javascript">
    $(function () {
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>' + "notification/get_notification_counter",
            success: function (data) {
                if (data.notification_counters.friend > 0) {
                    $("#follower_counter_div").show();
                    $("#follower_counter_div").val(data.notification_counters.friend);
                    $("#follower_counter_div").html(data.notification_counters.friend);
                }
                if (data.notification_counters.message > 0) {
                    $("#message_counter_div").show();
                    $("#message_counter_div").val(data.notification_counters.message);
                    $("#message_counter_div").html(data.notification_counters.message);
                }
                if (data.notification_counters.general > 0) {
                    $("#general_notification_counter_div").show();
                    $("#general_notification_counter_div").val(data.notification_counters.general);
                    $("#general_notification_counter_div").html(data.notification_counters.general);
                }

            }
        });
    });
</script>

<div class="row" style="padding-top: 15px;">
    <div class="col-xs-2  col-sm-2 col-md-offset-1 col-md-1 form-group">
        <a href="<?php echo base_url(); ?>member/newsfeed">
            <img style="border-radius: 3px;"src="<?php echo base_url(); ?>resources/images/logo.png" height="30" width="30">
        </a>
    </div>
    <div class="col-xs-10 col-sm-4 col-md-4 form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input id="typeahead" class="form-control" type="text" placeholder="Search for people and interests" />
            <?php $this->load->view("custom_typeahead/typeahead_tmpl"); ?>
        </div>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-offset-1 col-md-2 form-group profile_picture">
        <a href="<?php echo base_url(); ?>member/timeline">
            <span style="cursor: pointer; color: #fff; font-size: 14px; font-weight: bold; vertical-align: middle;">
                <img style="height: 25px; width: 25px;" alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25 . $user_id . '.jpg?time=' . time(); ?>" onError="onImageUnavailableHeader(this)"/>
                <img style="visibility:hidden;" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25; ?>25x25.jpg">
                &nbsp; <span id="profile_name" style="text-decoration: none" ><?php echo $first_name; ?></span>
            </span>
        </a>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3" >
        <div id="mm_friend_request" style="position: relative" >
            <div class="notification_counter" id="follower_counter_div" style="display: none"></div>
            <a href="javascript:void(0)" onclick="friend_toggle()">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/friends.png">
            </a>
            <div>
                <div id="mm_friend_request_box"> 
                    <div id="pending_list">
                        <?php $this->load->view("member/pagelets/notification_friend_request"); ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="mm_messages" style="position: relative" >
            <div class="notification_counter" id="message_counter_div" style="display: none"></div>
            <a href="javascript:void(0)" onclick="msg_toggle()">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/messages.png">
            </a>
            <div id="mm_message_box">
                <?php $this->load->view("member/pagelets/notification_message"); ?>
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
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="<?php echo base_url() ?>member/account_settings">Account settings</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="<?php echo base_url() ?>member/privacy_settings">Privacy settings</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="<?php echo base_url() ?>auth/logout">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</div>

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
            $('#mm_friend_request_box').show();
        });
    }

    function msg_toggle() {



        $('#mm_message_box').show();
    }

    function notf_toggle() {
        var counterValue = $("#general_notification_counter_div").val();
        angular.element($('#mm_friend_request_box')).scope().updateStatusGetGeneralNotifications(counterValue, function () {
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
<style>
    #mm_notification_box, #mm_message_box, #mm_friend_request_box{
        display: none;
        width: 400px;
        position: absolute;
        top: 40px;
        right: 1px;
        border: 1px solid darkgray;
        border-radius: 4px;
        box-shadow: 0 0 6px #491249;
        background-color: white;
        color: black;
    }
</style>