<div class="row">
    <div class="col-md-10">
        <div class="message_friends_divider_full">
            <div class="row">
                <div class="col-md-1">
                    <img class="img-responsive" src="<?php echo base_url() ?>resources/images/online.png">
                </div>
                <div class="col-md-8">
                    <a>Mohammad Rafique</a>
                </div>
                <div class="col-md-1">
                    <img class="img-responsive" src="<?php echo base_url() ?>resources/images/friend_add.png">
                </div>
                <div class="col-md-1">
                    <img class="img-responsive" src="<?php echo base_url() ?>resources/images/settings.png">
                </div>
                <div class="col-md-1">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
        <div id="chat_box_container" class="message_friends_divider_others" style="height: 150px; width: 100%; overflow-y: scroll; overflow-x: hidden; background-color: #fff;">
            <div class="row">
                <div class="col-md-12">
                    <div class="message_owner_style pull-right">
                        <span class="message_owner_content_style">As salamualaikum, Rafique vai!!! How are you? Myself Mohammad Azhar Uddin.</span>
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
                        <span class="message_friend_content_style">Alhamdulillah. What are you doing in profession?</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message_friend_style pull-left">
                        <span class="message_friend_content_style">I am a college teacher. You?</span>
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
        <div class="textarea_background_style" style="border: 1px solid lightgray; padding-bottom: 10px;">
            <div class="row">
                <div class="row form-group"></div>
                <div class="col-md-10">
                    <div class="col-md-12"><textarea class="chatting_textarea_style" style="width: 100%" rows="1"></textarea></div>
                </div>
                <div class="col-md-1">
                    <form action="upload.php" method="post">
                        <label for="fileToUpload">
                            <img style="cursor: pointer;" src="<?php echo base_url() ?>resources/images/camera.png" />
                        </label>
                        <input type="File" name="fileToUpload" id="fileToUpload" class="hidden">
                    </form>
                </div>
                <div class="col-md-1">
                    <img style="cursor: pointer;" src="<?php echo base_url() ?>resources/images/emotion.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#chat_box_container").scrollTop($("#chat_box_container").height());
    });
</script>
    
    