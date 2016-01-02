<!--<script src="<?php // echo base_url()       ?>jquery.Jcrop.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.Jcrop.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>resources/css/jquery.Jcrop.css" type="text/css" />
<div ng-app="app.Photo">
    <div  ng-controller="photoController" ng-clock ng-init="setPhotoInfo(<?php echo htmlspecialchars(json_encode($photo_info)); ?>)" >
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
                            <!--                            <div class="flipbook" onclick="get_next_photo(angular.element(this).scope().photoInfo)">-->
                            <div class="flipbook">
                                <div class="slide">
                                    <img id="image-display" src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{photoInfo.image}}"   /> 
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="x" name="x" />
                        <input type="hidden" id="y" name="y" />
                        <input type="hidden" id="w" name="w" />
                        <input type="hidden" id="h" name="h" />
                        <a id="anchor_finish_cropping" style="display: none" class="pull-right" onclick="crop_picture()" href="javascript: void(0)">Finished Cropping&nbsp;</a>                                
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="pagelet">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <span ng-if = "photoInfo.likeStatus != '1'">
                                        <a href style="color: #3B59A9;"  onclick="add_photo_like(angular.element(this).scope().photoInfo.photoId)" id="photo_like_{{photoInfo.photoId}}">
                                            <img src="<?php echo base_url() ?>resources/images/like_icon.png">
                                            Like
                                        </a>
                                    </span>
                                    <span ng-if = "photoInfo.likeStatus == '1'">
                                        <a href style="color: #3B59A9;" id="photo_dislike_{{photoInfo.photoId}}">
                                            <img src="<?php echo base_url() ?>resources/images/like_icon.png">
                                            Liked
                                        </a>
                                    </span>
                                    .
                                    <a href style="color: #3B59A9;" id="photo_comment_id_focus"> 
                                        <img src="<?php echo base_url() ?>resources/images/comment_icon.png">
                                        Comment
                                    </a>
                                    .
                                    <a href="#" style="color: #3B59A9;"> 
                                        <img src="<?php echo base_url() ?>resources/images/share_icon.png">
                                        Share
                                    </a>
                                </div>
                            </div>
                            <div class="pagelet_divider"></div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                                    
                                    <a href id="photo_like_list_id" onclick="open_modal_photo_like_list(angular.element(this).scope().photoInfo.photoId)">{{photoInfo.likeCounter}}people </a> like this.
                                </div>
                            </div>
                            <div class="pagelet_divider"></div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                                    <a href="#">{{photoInfo.shareCounter}} shares</a>
                                </div>
                            </div>
                            <div class="pagelet_divider"></div>
                            <div class="row form-group">
                                <div class="col-md-12" id="more_photo_comment_id">
                                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                                    <a href id="photo_more_comment_show" onclick="get_photo_comments(angular.element(this).scope().photoInfo.photoId)">view {{photoInfo.commentCounter}} more comments</a>
                                </div>
                            </div>
                            <div class="row form-group" ng-repeat="comment in photoInfo.comment">
                                <div class="col-md-1">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg" width="30" height="30">
                                </div>
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a style="font-weight: bold;" href="#">{{comment.userInfo.firstName}}&nbsp{{comment.userInfo.lastName}}</a>
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
                                        <!--<a href=""><li>Make Profile Picture</li></a>-->
                                        <li> <a id="anchor_make_profile_picture" onclick="make_profile_picture()" href="javascript: void(0)">Make profile picture&nbsp;</a></li>
                                        <li><a id="anchor_make_cover_picture" onclick="make_cover_picture()" href="javascript: void(0)"> Make Cover Picture&nbsp;</a></li>
                                        <!--<a href=""><li>Make Cover Photo</li></a>-->
                                        <a href=""><li>Make Album Photo</li></a>
                                        <a href onclick="open_modal_delete_photo(angular.element(this).scope().photoInfo)"><li>Delete This Photo</li></a>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <?php $this->load->view("modal/modal_liked_people_list"); ?>
        <?php $this->load->view("common/common_delete_confirmation_modal"); ?>
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

    function get_photo_comments(photoId) {
        angular.element($('#photo_more_comment_show')).scope().getPhotoComments(photoId, function () {
            $('#more_photo_comment_id').hide();
        });
    }
    function open_modal_photo_like_list(photoId) {
        angular.element($('#photo_like_list_id')).scope().getPhotoLikeList(photoId, function () {
            $('#modal_liked_people_list').modal('show');

        });
    }
    function add_photo_like(photoId) {
        angular.element($('#photo_like_' + photoId)).scope().addPhotoLike(photoId, function () {
            $("#photo_like_" + photoId).hide();
            $("#photo_dislike_" + photoId).show();
        });
    }
    function get_next_photo(photoInfo) {
        angular.element($('#next')).scope().getNextPhoto(photoInfo, function () {
                });
    }
    function open_modal_delete_photo(photoInfo) {
//        var photoId = photoInfo.photoId;
        var albumId = photoInfo.albumId;
        var selectionInfo = " Photo ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == '<?php echo MODAL_DELETE_YES; ?>') {
                angular.element($('#delete_content_btn')).scope().deletePhoto(photoInfo, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    window.location = '<?php echo base_url(); ?>photos/get_album/' + albumId;
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }




</script>
<script>
    function crop_picture()
    {
        imageInfo = new Array();
        imageInfo['x'] = $('#x').val();
        imageInfo['y'] = $('#y').val();
        imageInfo['w'] = $('#w').val();
        imageInfo['h'] = $('#h').val();
        imageInfo['src'] = $("#image-display").attr("src");
        imageInfo['src_w'] = $('#image-display').width();
        imageInfo['src_h'] = $('#image-display').height();
        angular.element($('#image-display')).scope().cropPicture(imageInfo, function () {

            window.location = '<?php echo base_url(); ?>member/newsfeed';
        });
    }
    function make_profile_picture()
    {
        $('#anchor_make_profile_picture').hide();
        $('#anchor_finish_cropping').show();
        $('#image-display').Jcrop({
            aspectRatio: 1,
            onSelect: updateCoords
        });
    }
    function make_cover_picture()
    {
        $('#anchor_make_cover_picture').hide();
        $('#anchor_finish_cropping').show();
        $('#image-display').Jcrop({
            aspectRatio: 1,
            onSelect: updateCoords
        });
    }
    function updateCoords(c)
    {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    }
  



</script>