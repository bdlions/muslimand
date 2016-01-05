<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-12">
            <a class="non_friend_pagelet_header_anchor_style" href="">Photos</a>
        </div>
    </div>
</div>
<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-4" ng-repeat="album in albumList" style="padding-bottom: 28px;">
            <div class="photo_list_img_style">
                <a>
                    <img class="img-responsive"  src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{album.defaultImg}}">
                </a>
                <a> <span ng-bind="album.title"></span></a><br>
                <span ng-bind="album.totalImg"></span> photos
            </div>
        </div>
    </div>
</div>