<div class="row form-group">
    <div class="col-md-12">
        <span style="font-size: 16px; font-weight: bold;">Latest</span>
    </div>
</div>
<div class="pagelet_divider"></div>
<div class="row form-group">
    <div class="col-md-4" ng-repeat=" video in videoList" >
            <a href="<?php echo base_url(); ?>videos/videos_iframe/{{video.videoId}}" >
                <img scrolling="no" src="{{video.imageUrl}}" frameborder="0" allowfullscreen>
            </a>
            <div class="font_11px">
                <a href="<?php echo base_url(); ?>videos/videos_iframe">amazing child</a><br>
            </div>
            <div class="font_10px">
                39 views<br>
                by <a href="">Dr. Belal</a>
            </div>
        </div>
 
</div>



