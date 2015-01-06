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
        <a style="color: #fff; padding-top: 40px; font-size: 18px; ">
            <img style="height: 25px; width: 25px;" src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" alt="Smiley face">
            &nbsp; Mohammad
        </a>
    </div>
    <div class="col-md-2">
        <div id="mm_friend_request"><a href="#"></a></div>
        <div id="mm_messages"><a href="css_intro.asp"></a></div>
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
        var container = $("#mm_notification_box");

        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
        }
    });
    function notf_toggle()
    {
        $('#mm_notification_box').toggle();
    }
</script>
<style>
    #mm_notification_box{
        display: none;
        width: 300px;
        height: 500px;
        position: absolute;
        top: 40px;
        right: 1px;
        border: 2px solid darkgray;
        border-radius: 4px;
        background-color: white;
        color: blueviolet;
    }
</style>