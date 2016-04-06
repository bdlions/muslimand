<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-12">
            <img class="img-circle"  src="<?php echo base_url(); ?>resources/images/header_icons/friends.png">
            <?php if ($profile_id != "0") { ?>
                <a class="non_friend_pagelet_header_anchor_style font_15px" href="<?php echo base_url(); ?>friend/get_friend_list/<?php echo $profile_id; ?>">Friends</a>
            <?php } else { ?>
                <a class="non_friend_pagelet_header_anchor_style font_15px" href="<?php echo base_url(); ?>friend/get_friend_list">Friends</a>
            <?php } ?>
            ·  <span class="non_friend_pagelet_header_anchor_style" href="">{{friendCounter}}</span>  
            <!--<a class="non_friend_pagelet_header_anchor_style" href="">(1 Mutual)</a>-->
        </div>
    </div>
</div>
<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row" >
        <div class="col-md-12">
            <div ng-repeat="friend in friends" style="padding-bottom: 28px; width: 33.33%; float: left; " >
                <a href='<?php echo base_url(); ?>member/timeline/{{friend.userId}}' style="text-decoration: none;">
                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>50x50_{{friend.genderId}}.jpg" alt="" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{friend.userId}}.jpg" />
                </a>
                <a href='<?php echo base_url(); ?>member/timeline/{{friend.userId}}' style="text-decoration: none;">
                    <div class="friend_list_name_caption inline_ellipsis" title="{{friend.firstName}}&nbsp{{friend.lastName}}" data-placement="top" data-toggle="tooltip">{{friend.firstName + " " + friend.lastName}}</div>
                </a>
            </div>
        </div>
    </div>
</div>
