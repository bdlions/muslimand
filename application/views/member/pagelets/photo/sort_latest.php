<div class="row form-group">
    <div class="col-md-12">
        <span style="font-size: 16px; font-weight: bold;">All Photos</span>
    </div>
</div>
<div class="pagelet_divider"></div>
<div class="row form-group"></div>
<div class="row form-group">
       <div class="col-md-3" ng-repeat=" in userAlbums">
            <a href="<?php echo base_url(); ?>photos/get_photo/{{photo.photoId}}" >
                <img style="border: 1px solid #703684;"src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{photo.image}}" width="120" height="100">
            </a>
        </div>
</div>

<div class="row form-group"></div>
<!--<div class="row">
    <div class="col-md-4">
        <span>1-12 of 2,666 Results</span>
    </div>
    <div class="col-md-8">
        <nav style="float: right;">
            <ul class="pagination pagination_margin">
                <li>
                    <a href="<?php echo base_url(); ?>videos/videos_iframe" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li>
                    <a href="" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>-->
