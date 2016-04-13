<script type="text/ng-template" id="template/slider_photo-modal.html">
<div class="modal-body" style="background-color: #000; ">
    <div class="row form-group">
        <div class="col-md-offset-11 col-md-1">
            <button id="close_photo_modal" type="button"  ng-click="ok()" class="close close_custom" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
    </div>

    <div class="row form-group" style="background-color: #000; height: 500px; width: 600px;">
        <div class="">

            <carousel>
                <slide ng-repeat="photoInfo in sliderImages" active="photoInfo.active">
                    <img ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{photoInfo.image}}"  class="img-responsive" />

                    <div class="row" style="bottom: 55px; position: fixed; margin-left: 220px;">
                        <div class="col-md-12">
                            <ul class="inline pull-right padding_top_30px">
                                <li><button class="button-custom">Make Profile Picture</button></li>
                                <li><button class="button-custom">Tag Photo</button></li>
                                <li>
                                    <div class="btn-group dropup">
                                        <button style="margin-left: -8px;" class="button-custom dropdown-toggle" data-toggle="dropdown">
                                            Options
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">Download</a></li>
                                            <li> <a id="anchor_make_profile_picture" onclick="make_profile_picture()" href="javascript: void(0)"> Make profile picture </a></li>
                                            <li><a id="anchor_make_cover_picture" onclick="make_cover_picture()" href="javascript: void(0)"> Make Cover Picture </a></li>
                                            <li><a href onclick="open_modal_delete_photo(angular.element(this).scope().photoInfo)">Delete This Photo</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><button class="button-custom">Share</button></li>
                            </ul>
                        </div>
                    </div>



                    <div class="modal_photo_pagelet modal_slider_comment_section">
                        <div class="row">
                            <div class="col-md-2" >
                                <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40 ?>40x40_{{photoInfo.userInfo.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>{{photoInfo.userInfo.userId}}.jpg?time= <?php echo time(); ?>" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-10 mrg_left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: left;">
                                                    <a style="font-weight: bold;" href="<?php echo base_url(); ?>member/timeline/{{photoInfo.userInfo.userId}}">{{photoInfo.userInfo.firstName}}&nbsp;{{photoInfo.userInfo.lastName}}</a> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div style="float: left;" class="ng-binding">
                                                    {{photoInfo.createdOn}}
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <ul style="list-style-type: none; padding: 0;">
                                                    <li class="dropdown">
                                                        <img width="15" height="15" ng-src="h<?php echo base_url(); ?>resources/images/friends_icon.png" src="<?php echo base_url(); ?>resources/images/friends_icon.png">
                                                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="caret"></span></a>
                                                        <ul role="menu" class="dropdown-menu">
                                                            <li><a href="#">Everyone</a></li>
                                                            <li><a href="#">Friends</a></li>
                                                            <li><a href="#">Friends of friends</a></li>
                                                            <li><a href="#">Only Me</a></li>
                                                            <li><a href="#">Custom</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <ul style="list-style-type: none; padding: 0;">
                                            <li class="dropdown">
                                                <input type="hidden">
                                                <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="caret"></span></a>
                                                <ul role="menu" class="dropdown-menu">
                                                    <span ng-if="photoInfo.userInfo.userId == '<?php echo $user_id; ?>'" class="ng-scope">
                                                        <li onclick="select_edit_field(angular.element(this).scope().status.statusId)"><a>Edit</a></li>
                                                        <li><a ng-click="deleteStatus(status.statusId)" href="">Delete</a></li>
                                                    </span>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div style="width: 100%;" class="row form-group">
                                    <div class="col-md-12">
                                        <div style="float: left;">
                                            <div ng-bind="photoInfo.description" id="displayStatus{{photoInfo.photoId}}" class="ng-binding"></div>
                                        </div>
                                        <div style="display: none;" id="updateStatus{{photoInfo.photoId}}">
                                            <form ng-submit="updateStatus(photoInfo)" class="ng-pristine ng-valid">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <textarea ng-model="photoInfo.description" class="form-control textarea_custom_style ng-pristine ng-untouched ng-valid"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-offset-8 col-md-2">
                                                        <input type="button" value="Cancel" class="button-custom" id="statusUpdateCancel3SNXd7ulUTAXfrV">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="submit" class="button-custom" value="Done" id="submit">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row from-group">
                                    <div class="col-md-12">
                                        <div style="float: left; text-align: justify" class="ng-binding">

                                        </div>
                                    </div>
                                </div>
                                <div style="float: left;" class="row from-group">
                                    <div class="col-md-12">
                                        <span ng-if = "photoInfo.likeStatus != '1'">
                                            <a href style="color: #3B59A9;"  onclick="add_photo_like(angular.element(this).scope().photoInfo)" id="photo_like_{{photoInfo.photoId}}">
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
                                        <a href style="color: #3B59A9;" id="photo_comment_id_focus" onclick="photo_comment_id_focus()"> 
                                            <img src="<?php echo base_url() ?>resources/images/comment_icon.png">
                                            Comment
                                        </a>
                                        <a onclick="open_modal_share(angular.element(this).scope().photoInfo)" href="" id="share_add_id" style="color: #3B59A9;">
                                            <img ng-src="<?php echo base_url(); ?>resources/images/share_icon.png" src="<?php echo base_url(); ?>resources/images/share_icon.png"> Share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagelet_divider"></div>
                        <span ng-if = "photoInfo.likeCounter > 0">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                                    <a  id="like_list_id"  style="color: #3B59A9;" href onclick="open_modal_photo_like_list(angular.element(this).scope().photoInfo.photoId)" >
                                        <span ng-if = "photoInfo.likeStatus === '1'">
                                            <span  id="statusLike{{status.statusId}}"> you</span>
                                        </span>
                                        <span ng-if = "photoInfo.likeCounter > 1 && photoInfo.likeStatus === '1'">
                                            and  {{photoInfo.likeCounter - 1}} people
                                        </span>
                                        <span ng-if ="photoInfo.likeCounter > 0 && photoInfo.likeStatus !== '1'">
                                            {{photoInfo.likeCounter}} people
                                        </span>
                                        like this.
                                    </a> 
                                </div>
                            </div>
                            <div class="pagelet_divider"></div>
                        </span>
                        <span ng-if="photoInfo.shareCounter > 0">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                                    <a href="#">{{photoInfo.shareCounter}} shares</a>
                                </div>
                            </div>
                        </span>
                        <span ng-if="photoInfo.commentCounter > 0" id="photo_more_comment_show_{{photoInfo.photoId}}">
                            <div class="pagelet_divider" ></div>
                            <div class="row ">
                                <div class="col-md-12" id="more_photo_comment_id">
                                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                                    <a href id="photo_more_comment_show" onclick="get_photo_comments(angular.element(this).scope().photoInfo.photoId)">view {{photoInfo.commentCounter}} more comments</a>
                                </div>
                            </div>
                        </span>
                        <div class="modal_photo_slider_custom_scroll">
                            <div class="row form-group" ng-repeat="comment in photoInfo.commentList">
                                <div class="col-md-1">
                                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{comment.userInfo.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{comment.userInfo.userId}}.jpg" width="30" height="30">
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
                                            {{comment.createdOn}}
                                            <a>like</a>
                                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                                            . <a> {{comment.likeCounter}}</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div profile_picture="" class="col-md-1">
                                <img class="lightgray_border"  fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{userRelation.your_gender_id}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 . $user_id . '.jpg?time=' . time(); ?>"/>
                            </div>
                            <div class="col-md-11">
                                <form  ng-submit="addPhotoComment(photoInfo)">
                                    <input type ="text" id ="photo_comment_field" class="form-control" placeholder="Write a comment" ng-model="photoCommentInfo.comment">
                                </form>
                            </div>
                        </div>
                    </div>


                </slide>

            </carousel>
        </div>

    </div>
</div>
</script>

<?php $this->load->view("modal/modal_liked_people_list"); ?>
<?php $this->load->view("member/photo/modal_shared_album"); ?>
<script type="text/javascript">

    $(document).ready(function () {
        $('.flipbook').pageFlip({});
    });

    function photo_comment_id_focus() {
        $('#photo_comment_field').focus();
    }

    function get_photo_comments(photoId) {
        angular.element($('#photo_more_comment_show')).scope().getPhotoComments(photoId, function () {
            $('#photo_more_comment_show_' + photoId).hide();
        });
    }
    function open_modal_photo_like_list(photoId) {
        angular.element($('#photo_like_list_id')).scope().getPhotoLikeList(photoId, function () {
            $('#modal_liked_people_list').modal('show');

        });
    }
    function add_photo_like(photoInfo) {
        var albumId = photoInfo.albumId;
        var photoId = photoInfo.photoId;
        var referenceId = photoInfo.referenceId;
        angular.element($('#photo_like_' + photoId)).scope().addPhotoLike(albumId, photoId, referenceId, function () {
            $("#photo_like_" + photoId).hide();
            $("#photo_dislike_" + photoId).show();
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
    $(function () {
        $('.left.carousel-control').on("click", function () {
            console.log("fgh");
        });
    });
</script>