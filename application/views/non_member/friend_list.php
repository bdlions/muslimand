<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-12">
            <a class="non_friend_pagelet_header_anchor_style" href="">Friends</a> ·
<!--            <a class="non_friend_pagelet_header_anchor_style" href="">207</a>  
            <a class="non_friend_pagelet_header_anchor_style" href=""></a>-->
        </div>
    </div>
</div>
<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-4" ng-repeat="friend in friends">
            <div class="friend_list_img_style">
                <!--<a href='<?php // echo base_url(); ?>member/timeline/{{friend.userId}}' >-->

                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>100x100_{{friend.genderId}}.jpg" alt="" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>{{friend.userId}}.jpg" />
                    <span class="img_caption">{{friend.firstName}}&nbsp;{{friend.lastName}}</span>
                <!--</a>-->
            </div>
        </div>
    </div>
</div>
