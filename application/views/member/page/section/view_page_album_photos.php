<div id="all_album_photos" style="display: none; margin-left: 15px" ng-clock>
    <div style="margin-bottom: 3px; margin-top: 15px;">
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 16px; font-weight: bold;" ng-bind="albumDetail.title"></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 14px; " ng-bind="albumDetail.description"></span>
            </div>
        </div>
        <hr>
        <div class="row form-group padding_top_10px">
            <div class="col-md-3" ng-repeat="photo in albumPhotoList" style="padding-bottom: 28px;">
                <img style="border: 1px solid #703684; height: 120px; width: 150px;"   ng-click="openPhotoModal(photo, albumDetail.pageInfo)" src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{photo.image}}">
            </div>
        </div>
        <!--        <div class="row form-group">
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
                </div>-->

        <div class="pagelet pagelet_mg_custom">
            <div class="row form-group">
                <div class="col-md-12">
                    <span ng-if = "albumDetail.likeStatus != '1'">
                        <a href style="color: #3B59A9;"  ng-click="addAlbumLike(albumDetail)" id="album_like_id">
                            <img src="<?php echo base_url() ?>resources/images/like_icon.png">
                            Like
                        </a>
                    </span>
                    <span ng-if = "albumDetail.likeStatus === '1'">
                        <a href style="color: #3B59A9;" id="album_dislike_id">
                            <img src="<?php echo base_url() ?>resources/images/like_icon.png">
                            Liked
                        </a>
                    </span>
                    .
                    <a href style="color: #3B59A9;" id="album_comment_id_focus"> 
                        <img src="<?php echo base_url() ?>resources/images/comment_icon.png">
                        Comment
                    </a>
                    .
                    <a href="#" style="color: #3B59A9;" onclick="open_modal_album_shared(angular.element(this).scope().albumDetail.albumId)"> 
                        <img src="<?php echo base_url() ?>resources/images/share_icon.png">
                        Share
                    </a>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <span ng-if = "albumDetail.likeCounter > 0">
                <div class="row form-group">
                    <div class="col-md-12">
                        <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                        <a  id="like_list_id"  style="color: #3B59A9;" href onclick="open_modal_like_list(angular.element(this).scope().albumDetail.albumId)" >
                            <span ng-if = "albumDetail.likeStatus == '1'">
                                <span  id="statusLike{{albumDetail.statusId}}"> you</span>
                            </span>
                            <span ng-if = "albumDetail.likeCounter > 1 && albumDetail.likeStatus == '1'">
                                and  {{albumDetail.likeCounter - 1}} people
                            </span>
                            <span ng-if ="albumDetail.likeCounter > 0 && albumDetail.likeStatus != '1'">
                                {{albumDetail.likeCounter}} people
                            </span>
                            like this.
                        </a> 
                    </div>
                </div>
                <div class="pagelet_divider"></div>
            </span>
            <span ng-if='albumDetail.shareCounter > 0'>
                <div class="row form-group">
                    <div class="col-md-12">
                        <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                        <a href="#"> {{albumDetail.shareCounter}} shares</a>
                    </div>
                </div>
                <div class="pagelet_divider"></div>
            </span>
            <div class="row form-group" ng-if="albumDetail.commentCounter > 0" id="album_more_comment_{{albumDetail.albumId}}">
                <div class="col-md-12" id="more_comment_id">
                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                    <a href  id="album_more_comment" onclick="get_album_comments(angular.element(this).scope().albumDetail)">view{{albumDetail.commentCounter}} more comments </a>
                </div>
            </div>
            <div class="row form-group"  ng-repeat="comment in albumDetail.commentList">
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
                            . <a>  {{comment.likeCounter}}</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-1">
                    <img class="lightgray_border" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{userGenderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 . $user_id . '.jpg?time=' . time(); ?>"/>
                </div>
                <div class="col-md-11">
                    <form  ng-submit="addAlbumComment(albumDetail)">
                        <input type ="text" id="album_comment_field" class="form-control" placeholder="Write a comment" ng-model="albumCommentInfo.comment">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function open_modal_like_list(albumId) {
        angular.element($('#like_list_id')).scope().getAlbumLikeList(albumId, function () {
            $('#modal_liked_people_list').modal('show');
        });
    }
    function get_album_comments(albumInfo) {
        var albumId = albumInfo.albumId;
        var mappingId = albumInfo.pageId;
        angular.element($('#album_more_comment')).scope().getAlbumComments(albumId, mappingId, function () {
            $('#album_more_comment_' + albumId).hide();
        });
    }
    function open_modal_album_shared(albumId) {
        return;
        $("#album_shared_id").val(albumId);
        $('#modal_share_album').modal('show');
    }


    $(function () {
        $("#album_comment_id_focus").on("click", function () {
            $('#album_comment_field').focus();
        });
    });
</script>
<?php // $this->load->view("modal/modal_liked_people_list"); ?>
<?php // $this->load->view("member/photo/modal_shared_album"); ?>

