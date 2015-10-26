
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/search_bar_style.css"/>
<?php $this->load->view("custom_typeahead/custom_typeahead"); ?>

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
                <img style="height: 25px; width: 25px;" alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25 . $user_id . '.jpg'; ?>" onError="this.style.display = 'none'; this.parentNode.className='profile_picture'; this.parentNode.getElementsByTagName('img')[1].style.visibility='visible'; "/>
                <img style="height: 25px; width: 25px; visibility:hidden; height: 0 ;" src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg">
                &nbsp; <span id="profile_name" style="text-decoration: none" >Mohammad</span>
            </span>
        </a>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3">
        <div id="mm_friend_request" style="position: relative" >
            <div ng-controller="headerController" ng-init="setConstants(<?php echo htmlspecialchars(json_encode($constants)); ?>)">
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
        </div>

        <div id="mm_messages" style="position: relative" onclick="msg_toggle()">
            <a href="javascript:void(0)">
                <img src="<?php echo base_url(); ?>resources/images/header_icons/messages.png">
            </a>
            <div id="mm_message_box">
                <?php $this->load->view("member/pagelets/notification_message"); ?>
            </div>
        </div>

        <div id="mm_notification" style="position: relative" onclick="notf_toggle()">
            <a href="javascript:void(0)">
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
        angular.element($('#mm_friend_request_box')).scope().getPendingRequest(function () {
            $('#mm_friend_request_box').show();
        });
    }

    function msg_toggle() {
        $('#mm_message_box').show();
    }

    function notf_toggle() {
        $('#mm_notification_box').show();
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