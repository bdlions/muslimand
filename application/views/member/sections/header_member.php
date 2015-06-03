<div class="row" style="padding-left: 25px; padding-top: 4px;">
    <div class="col-md-offset-1 col-md-1">
        <a href="<?php echo base_url(); ?>member/newsfeed">
            <img style="border-radius: 3px;"src="<?php echo base_url(); ?>resources/images/logo.png" height="30" width="30">
        </a>
    </div>
    <div class="col-md-4" style="padding-left: 40px;">
        <input type="text" class="mm_input" placeholder="Search for people, places and things">
    </div>
    <div class="col-md-4">
        <div class="pull-right">
            <div id="mm_friend_request" style="position: relative" onclick="friend_toggle()">
                <a href="javascript:void(0)"></a>
                <div id="mm_friend_request_box">
                    <?php $this->load->view("member/pagelets/notification_friend_request"); ?>
                </div>
            </div>

            <div id="mm_messages" style="position: relative" onclick="msg_toggle()">
                <a href="javascript:void(0)"></a>
                <div id="mm_message_box">
                    <?php $this->load->view("member/pagelets/notification_message"); ?>
                </div>
            </div>

            <div id="mm_notification" style="position: relative" onclick="notf_toggle()">
                <a href="javascript:void(0)"></a>
                <div id="mm_notification_box">
                    <?php $this->load->view("member/pagelets/notification_notification"); ?>
                </div>
            </div>
            <div id="mm_setting" style="position: relative;">
                <a href="#" data-toggle="dropdown" id="dropdownMenuRight">
                    <img src="<?php echo base_url(); ?>resources/images/menu.png">
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
        <div style="padding-right:  30px; vertical-align: middle; float: right;">
            <a href="<?php echo base_url(); ?>member/profile">
                <span style="cursor: pointer; color: #fff; font-size: 14px; font-weight: bold; vertical-align: middle;">
                    <img style="height: 25px; width: 25px;" src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg">
                    &nbsp; <span style="text-decoration: none">Mohammad</span>
                </span>
            </a>
        </div>
        </div>
    <div class="col-md-1"></div>
</div>
<script>
    $(document).mouseup(function (e) {
        var fr_container = $("#mm_friend_request_box");
        var container = $("#mm_notification_box");
        var msg_container = $("#mm_message_box");

        if (!fr_container.is(e.target) && fr_container.has(e.target).length === 0) {
            fr_container.hide();
        }
        if (!msg_container.is(e.target) && msg_container.has(e.target).length === 0) {
            msg_container.hide();
        }
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });

    function friend_toggle() {
        $('#mm_friend_request_box').show();
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