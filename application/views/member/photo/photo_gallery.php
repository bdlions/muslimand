
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
            <?php $this->load->view("templates/sections/member_photos_left_pane"); ?>
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
                                    <a href style="color: #3B59A9;"  onclick="add_photo_like(angular.element(this).scope().photoInfo.photoId)" id="photo_like_{{photoInfo.photoId}}">Like</a>
                                    <a href style="color: #3B59A9; display: none" id="photo_dislike_{{photoInfo.photoId}}">unLike</a>
                                    .
                                    <a href style="color: #3B59A9;" id="photo_comment_id_focus"> Comment</a>
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
                                    <form  ng-submit="addPhotoComment(photoInfo.photoId)">
                                        <input type ="text" id ="photo_comment_field" class="form-control" placeholder="Write a comment" ng-model="photoCommentInfo.comment">
                                    </form>
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

    $(function () {
        $("#photo_comment_id_focus").on("click", function () {
            $('#photo_comment_field').focus();
        });
    });

    function add_photo_like(photoId) {
        angular.element($('#photo_like_' + photoId)).scope().addPhotoLike(photoId, function () {
            $("#photo_like_" + photoId).hide();
            $("#photo_dislike_" + photoId).show();
        });
    }
</script>