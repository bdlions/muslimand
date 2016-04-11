<div id="all_albums" style="display: none;">
    <div class="row form-group font_11px padding_top_10px">
        <div  class="col-md-3" ng-show="album.totalImg != 0" ng-repeat="album in userAlbums">
            <div style="margin-bottom: 15px;" >
                <a id="album_id_{{album.albumId}}" onclick="get_user_album(angular.element(this).scope().album.albumId)" >
                    <img style="border: 1px solid #703684; height: 120px; width: 150px;" fallback-src="<?php echo base_url() ?>resources/images/photos/albums/user_album/profile.jpg" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{album.defaultImg}}">
                    <div style="margin-right: -3px; padding: 0 2px 2px 2px;">
                        <span ng-bind="album.title"></span><br>
                        <span ng-bind="album.totalImg"></span> photos
                    </div>
                </a>
            </div>
        </div>
    </div>
<!--    <div class="row form-group padding_top_10px">
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
</div>
