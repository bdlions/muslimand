<div class="row form-group">
    <div class="col-md-12">
        <span style="font-size: 16px; font-weight: bold;">My Albums</span>
    </div>
</div>
<div class="pagelet_divider"></div>
<div class="row form-group font_11px padding_top_10px">
    <div class="col-md-3" ng-repeat="album in userAlbums">
        <a href="<?php echo base_url(); ?>photos/get_album/{{album.albumId}}" >
            <img style="border: 1px solid #703684;" src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{album.defaultImg}}" width="120" height="100">
        </a>
        <div style="margin-right: -3px; padding: 0 2px 2px 2px;">
            <a href="" > <span ng-bind="album.title"></span></a><br>
            <span ng-bind="album.totalImg"></span> photos
        </div>
    </div>
</div>
<div class="row form-group"></div>
<!--<div class="row">
    <div class="col-md-4">
        <span> 1-2 of 2 Results</span>
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
