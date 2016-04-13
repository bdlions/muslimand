<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-12">
            <img class="img-circle" style="background-color: #703684;" src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png">
            <?php if ($profile_id != "0") { ?>
                <a class="non_friend_pagelet_header_anchor_style font_15px" href="<?php echo base_url(); ?>photos/get_home_photos/<?php echo $profile_id; ?>">Photos</a>
            <?php } else { ?>
                <a class="non_friend_pagelet_header_anchor_style font_15px" href="<?php echo base_url(); ?>photos/get_home_photos">Photos</a>
            <?php } ?>
        </div>
    </div>
</div>
<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-4" ng-show="album.totalImg != 0" ng-repeat="album in albumList" style="padding-bottom: 28px;">
            <div class="photo_list_img_style">
                <a href="<?php echo base_url(); ?>photos/get_home_photos/<?php echo $profile_id; ?>" >
                    <img class="img-responsive"  src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{album.defaultImg}}">
                </a>
                <a href="<?php echo base_url(); ?>photos/get_home_photos/<?php echo $profile_id; ?>" > <span ng-bind="album.title"></span></a><br>
                <span ng-bind="album.totalImg"></span> photos
            </div>
        </div>
    </div>
</div>
