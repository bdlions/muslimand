<div class="form-group">
        <h1>HTML5 local video file player example</h1>
        <div id="message"></div>
        <input id="test_video" type="file" accept="video/*"/>
        <video controls autoplay></video>
</div>
<div class="form-group">
    <?php echo (isset($error))?$error:'potato'; ?>
    <form action="<?php echo base_url() ?>videos/do_upload" >
        <input type="file" name="userfile" />
        <br /><br />
        <input type="submit" value="Upload" />
    </form>
</div>

<script>
    (function localFileVideoPlayerInit(win) {
        var URL = win.URL || win.webkitURL,
        displayMessage = (function displayMessageInit(){
            var node = document.querySelector('#message');
            return function displayMessage(message, isError) {
                node.innerHTML = message;
                node.className = isError ? 'error' : 'info';
            };
        }()),
        playSelectedFile = function playSelectedFileInit(event) {
            var file = this.files[0];
            var type = file.type;
            var videoNode = document.querySelector('video');
            var canPlay = videoNode.canPlayType(type);
            canPlay = (canPlay === '' ? 'no' : canPlay);
            var message = 'Can play type "' + type + '": ' + canPlay;
            var isError = canPlay === 'no';
            displayMessage(message, isError);
            if (isError) {
                return;
            }
            var fileURL = URL.createObjectURL(file);
            videoNode.src = fileURL;
        },
        inputNode = document.querySelector('#test_video');
        if (!URL) {
            displayMessage('Your browser is not ' + '<a href="http://caniuse.com/bloburls">supported</a>!', true);
            return;
        }
        inputNode.addEventListener('change', playSelectedFile, false);
    }(window));
</script>
<style>
    video, input {
        display: block;
    }
    input {
        width: 100%;       
    }
</style>