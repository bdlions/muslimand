<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row">
        <div class="col-md-12">
            <a class="non_friend_pagelet_header_anchor_style" href="">Friends</a> 
<!--            ·  <a class="non_friend_pagelet_header_anchor_style" href="">207</a>  
            <a class="non_friend_pagelet_header_anchor_style" href="">(1 Mutual)</a>-->
        </div>
    </div>
</div>
<div class="pagelet" style="border: 1px solid #fff;">
    <div class="row" >
        <div class="col-md-4" ng-repeat="friend in friends">
                <a href='<?php echo base_url(); ?>member/timeline/{{friend.userId}}' style="text-decoration: none;">
                    <img  alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{friend.userId}}.jpg" onError="onImageUnavailable(this)"/>
                    <img style="visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>50x50_{{friend.genderId}}.jpg" alt="">
                </a>
                <a href='<?php echo base_url(); ?>member/timeline/{{friend.userId}}' style="text-decoration: none;">
                    <div class="img_caption">{{friend.firstName + " " + friend.lastName}}</div>
                </a>
        </div>
    </div>
</div>
<script>
    function onImageUnavailable(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];
        firstImage.style.display = 'none';
        secondImage.style.visibility = 'visible';
        secondImage.style.height = '100%';

    }


</script>