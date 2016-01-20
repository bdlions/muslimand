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
        <div class="col-md-12">
            <div ng-repeat="friend in friends" style="padding-bottom: 28px; width: 33.33%; float: left; ">
                <div class="friend_list_img_style">
                    <!--<a href='<?php // echo base_url();  ?>member/timeline/{{friend.userId}}' >-->

                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>50x50_{{friend.genderId}}.jpg" alt="" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{friend.userId}}.jpg" />
                    <div class="img_caption">{{friend.firstName + " " + friend.lastName}}</div>
                    <!--</a>-->
                </div>
            </div>
        </div>
    </div>
</div>
