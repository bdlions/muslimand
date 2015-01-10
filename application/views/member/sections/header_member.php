<div class="row">
    <div class="col-md-offset-1 col-md-1">
        <a href="#">
            <img src="<?php echo base_url(); ?>resources/images/logo.png" height="30" width="30">
        </a>
    </div>
    <div class="col-md-4">
        <input type="text" class="mm_input" placeholder="Search for people, places and things">
    </div>
    <div class="col-md-offset-1 col-md-2">
        <span style="cursor: pointer; color: #fff; padding-top: 40px; font-size: 18px;">
            <img style="height: 25px; width: 25px;" src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg">
            &nbsp; <span style="text-decoration: none">Mohammad</span>
        </span>
    </div>
    <div class="col-md-2">
        <!--<div id="mm_friend_request"><a href="#"></a></div>-->
        
        <div id="mm_friend_request" style="position: relative" onclick="friend_toggle()">
            <a href="css_intro.asp"></a>
            <div id="mm_friend_request_box">
                <?php $this->load->view("member/pagelets/notification_friend_request"); ?>
            </div>
        </div>
        
        <div id="mm_messages" style="position: relative" onclick="msg_toggle()">
            <a href="css_intro.asp"></a>
            <div id="mm_message_box">
                <?php $this->load->view("member/pagelets/notification_message"); ?>
            </div>
        </div>
        
        <div id="mm_notification" style="position: relative" onclick="notf_toggle()">
            <a href="css_syntax.asp"></a>
            <div id="mm_notification_box">
                <?php $this->load->view("member/pagelets/notification_notification"); ?>
            </div>
        </div>
        
    </div>
    <div class="col-md-1">
    </div>
</div>
<script>
    $(document).mouseup(function (e)
    {
        var msg_container = $("#mm_friend_request_box");

        if (!msg_container.is(e.target) && msg_container.has(e.target).length === 0)
        {
            msg_container.hide();
        }
        var msg_container = $("#mm_message_box");

        if (!msg_container.is(e.target) && msg_container.has(e.target).length === 0)
        {
            msg_container.hide();
        }
        var container = $("#mm_notification_box");

        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
        }
    });
    function friend_toggle()
    {
        $('#mm_friend_request_box').toggle();
    }
    function msg_toggle()
    {
        $('#mm_message_box').toggle();
    }
    function notf_toggle()
    {
        $('#mm_notification_box').toggle();
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
        background-color: white;
        color: black;
    }
</style>