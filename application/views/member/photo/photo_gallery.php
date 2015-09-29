
<div ng-app="app.Photo">
    <div  ng-controller="photoController" ng-init="setPhotoInfo(<?php echo htmlspecialchars(json_encode($photo_info)); ?>)" >
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 25px; font-weight: bold;">Photos</span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <a  href="<?php echo base_url(); ?>photos/add_photos"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Upload a New Image</button></a>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="pagelet_divider"></div>
            </div>    
            <div class="col-md-1">
            </div>    
        </div>
        <div class="row">
            <!--LEFT_COLUMN-->
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="video_ul">
                            <a href="<?php echo base_url(); ?>photos/"><li>All Photos</li></a>
                            <a href="<?php echo base_url(); ?>photos/photos_view_my"><li>My Photos</li></a>
                            <a href="<?php echo base_url(); ?>photos/photos_view_friend"><li>Friends’ Photos</li></a>
                            <div class="category_divider"></div>
                            <a href="<?php echo base_url(); ?>photos/photos_albums"><li>All Albums</li></a>
                            <a href="<?php echo base_url(); ?>photos/get_user_albums"><li>My Albums</li></a>
                            <div class="category_divider"></div>
                        </ul> 
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Categories</span>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="category_ul">
                            <a href=""><li>Anthro</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Artisan Crafts</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Cartoons & Comics</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Comedy</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Community Projects</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Contests</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Customization</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Designs & Interfaces</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Digital Art</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Fan Art</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Film & Animation</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Fractal Art</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Game Development Art</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Literature</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>People</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Pets & Animals</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Photography</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Resources & Stock Images</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Science & Technology</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Sports</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Traditional Art</li></a>
                            <div class="category_divider"></div>
                        </ul> 
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Main</span>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <?php $this->load->view("member/sections/menu/menu_link"); ?>
                    </div>
                </div>
                <div class="row form-group"></div>
            </div>
            <!--MIDDLE COLUMN-->
            <div class="col-md-9" ng-repeat="photoInfo in photoInfoList">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="border_style slider_body">
                            <div class="flipbook">
                                <div class="slide">
                                    <img src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{photoInfo.image}}" /> 
                                    <!--<div class="content"><a href="#">Flowers: What you didn't know</a></div>--> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="pagelet">
                    <div class="row">
                        <div class="col-md-9">
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
                            <div class="row form-group" ng-repeat="comment in photoInfo.comment">
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
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" style="color: #3B59A9;"> Tag This Photo</a>
                                </div>
                            </div>
                            <div class="pagelet_divider"></div>
                            <div class="row">
                                <div class="col-md-7">
                                    <span style="font-size: 13px">Album:</span>
                                </div>
                                <div class="col-md-5">
                                    <a href="" style="color: #3B59A9;">Islamic</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <span style="font-size: 13px">Shared with:</span>
                                </div>
                                <div class="col-md-5">
                                    <a href="" style="color: #3B59A9;">Friends</a>
                                </div>
                            </div>
                            <div class="pagelet_divider"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="gallery_ul">
                                        <a href=""><li>Download</li></a>
                                        <a href=""><li>Make Profile Picture</li></a>
                                        <a href=""><li>Make Cover Photo</li></a>
                                        <a href=""><li>Make Album Photo</li></a>
                                        <a href=""><li>Delete This Photo</li></a>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.flipbook').pageFlip({});
    });
</script>