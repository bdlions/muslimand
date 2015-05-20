<div class="row form-group"></div>
<div class="row">
    <div class="col-md-10">
        <img src="<?php echo base_url(); ?>resources/images/video/film_add.png">
        <span style="font-size: 16px; font-weight: bold;">Video</span>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 20px; font-weight: bold;">Paste a URL</span>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 16px; font-weight: bold;">* Video URL: </span><br>
                <input class="form-control" type="text" style="width: 600px;" size="40" value=""><br>
                Click <a style="cursor: pointer;" onclick="open_modal_suppoted_video()">here</a> to view supported sites that you can import videos from. 
            </div>
        </div>
        <div class="row form-group"></div>

        <div class="row">
            <div class="col-md-4">
                <span style="font-size: 16px; font-weight: bold;">* Category:</span><br>
                <select class="form-control">
                    <option value="">Select:</option>
                    <option class="" value="0">Ummaland</option>
                    <option class="" value="1">Quran</option>
                    <option class="" value="2">Hadith</option>
                    <option class="" value="3">Islam</option>
                    <option class="" value="4">Dawah</option>
                    <option class="" value="5">Islamic History</option>
                    <option class="" value="6">Scientific Contribution of Islam</option>
                    <option class="" value="7">Nasheeds</option>
                    <option class="" value="8">Education</option>
                    <option class="" value="9">News & Politics</option>
                    <option class="" value="10">Nonprofits & Activism</option>
                    <option class="" value="11">People & Blogs</option>
                    <option class="" value="12">Pets & Animals</option>
                    <option class="" value="13">Science & Technology</option>
                    <option class="" value="14">Sports</option>
                    <option class="" value="15">Travels & Events</option>
                    <option class="" value="16">Howto & Styles</option>
                    <option class="" value="17">Gaming</option>
                    <option class="" value="18">Autos & Vehicles</option>
                    <option class="" value="19">Comedy</option>
                    <option class="" value="20">Entertainment and Arts</option>
                    <option class="" value="21">Film & Animation</option>
                </select>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Privacy:  </span><br>
                <select class="form-control" name="control">
                    <option value="0" selected="1">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
                Control who can see this video. 
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Comment Privacy: </span><br>
                <select class="form-control" name="control">
                    <option value="0" selected="1">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
                Control who can comment on this video. 
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-xs" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;">Add</button>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php $this->load->view("member/video/modal_suppoted_video"); ?>