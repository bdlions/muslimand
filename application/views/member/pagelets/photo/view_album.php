<div class="row">
    <div class="col-md-12">
        <span style="font-size: 16px; font-weight: bold;" ng-bind="albumDetail.title"></span>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <span style="font-size: 14px; " ng-bind="albumDetail.description"></span>
    </div>
</div>
<div class="pagelet_divider"></div>
<div class="row form-group"></div>
<div class="row form-group">
    <div class="col-md-3" ng-repeat="photo in albumPhotoList">
        <a href="<?php echo base_url();?>photos/get_photo/{{photo.photoId}}" >
            <img style="border: 1px solid #703684;"src="<?php echo base_url().USER_ALBUM_IMAGE_PATH ?>{{photo.image}}" width="120" height="100">
        </a>
    </div>
</div>
<div class="row form-group">
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
</div>
<div class="pagelet pagelet_mg_custom">
    <div class="row form-group">
        <div class="col-md-12">
            <a href="#" style="color: #3B59A9;">Like</a>
            .
            <a href="#" style="color: #3B59A9;"> Comment</a>
            .
            <a href="#" style="color: #3B59A9;"> Share</a>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
            <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
            <a href="#">37 people </a> like this.
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
            <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
            <a href="#">3 shares</a>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-12">
            <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
            <a href="#">view 19 more comments</a>
        </div>
    </div>
    <div class="row form-group"  ng-repeat="comment in albumDetail.comment">
        <div class="col-md-1">
            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg" width="30" height="30">
        </div>
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-12">
                    <a style="font-weight: bold;" href="#">{{comment.userInfo.fristName}}&nbsp{{comment.userInfo.lastName}}</a>
                    {{comment.description}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    January 08, 2015 at 2:15pm. 
                    <a>like</a>
                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                    . <a>31</a>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
        </div>
        <div class="col-md-11">
            <input type ="text" class="form-control" placeholder="Write a comment">
        </div>
    </div>
</div>
