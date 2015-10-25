<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/elif.js"></script>
<div id="updateStatusPagelet" ng-init="setStatusTypeIds(<?php echo htmlspecialchars(json_encode($ststus_type_ids)); ?>)">
    <div ng-repeat="status in statuses.slice().reverse()" class="form-group">
        <div class="pagelet" id="pagelet{{status.statusId}}">
            <div class="row form-group">
                <div class="col-md-12">
                    <div style="float: left; padding-right: 10px;">
                        <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg" width="40" height="40">
                    </div>
                    <div style="float: left;">
                        <div>
                            <a href="#" style="font-weight: bold;"><span ng-bind="status.userInfo.fristName"></span>&nbsp<span ng-bind="status.userInfo.lastName"></span></a>
                            <span ng-if="statusTypes.post_status_by_user_at_his_profile_id == status.statusTypeId">
                                update his/her status
                            </span>
                            <span ng-if="statusTypes.share_other_status_id == status.statusTypeId">
                                shared 
                            </span>
                            <span ng-if="statusTypes.share_other_photo_id == status.statusTypeId">
                                shared photos 
                            </span>
                            <span ng-if="statusTypes.share_other_video_id == status.statusTypeId">
                                shared video  
                            </span>
                            <span ng-if="statusTypes.change_profile_picture_id == status.statusTypeId">
                                update profile picture 
                            </span>
                            <span ng-if="statusTypes.change_cover_picture_id == status.statusTypeId">
                                update cover picture 
                            </span>
                            <span ng-if="statusTypes.add_album_photos_id == status.statusTypeId">
                                added a new photos 
                            </span>
                            &nbsp;
                            <a href="#" style="font-weight: bold;"> <span>{{status.referenceInfo.userInfo.fristName}}&nbsp;{{status.referenceInfo.userInfo.lastName}}</span></a>
                            <span ng-if="statusTypes.share_other_status_id == status.statusTypeId">
                                status
                            </span>
                            <ul style="list-style-type: none; float: right;">
                                <li class="dropdown">
                                    <div>
                                        <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" width="15" height="15">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Everyone</a></li>
                                            <li><a href="#">Friends</a></li>
                                            <li><a href="#">Friends of friends</a></li>
                                            <li><a href="#">Only Me</a></li>
                                            <li><a href="#">Custom</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div style="float: left;">
                            January 8, 2015 at 12.15am.
                        </div>
                    </div>
                    <div style="float: right;">
                        <ul style="list-style-type: none;">
                            <li class="dropdown">
                                <a href class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li ng-click="selectEditField(status.statusId)"><a >Edit</a></li>
                                    <li><a href="#">Report</a></li>
                                    <li><a href  ng-click="deleteStatus(status.statusId)">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <div id="displayStatus{{status.statusId}}" ng-bind="status.description"></div>
                    <div id="updateStatus{{status.statusId}}" style="display: none;">
                        <form ng-submit="updateStatus(status)" >
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <textarea class="form-control form_control_custom_style textarea_custom_style" ng-model="status.description"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-8 col-md-2">
                                    <input id="statusUpdateCancel{{status.statusId}}" type="button" class="button-custom" value="Cancel">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" id="submit" value="Done" class=" button-custom form-control btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row from-group">
                <div class="col-md-4" ng-repeat="image in status.images">
                    <img style="border: 1px solid #703684;"src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" width="120" height="100">
                </div>

            </div>
            <div class="row from-group">
                <div class="col-md-4" ng-repeat="image in status.referenceInfo.img">
                    <img style="border: 1px solid #703684;"src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" width="120" height="100">
                </div>
            </div>
            <div class="row from-group">
                <div class="col-md-12">
                    {{status.referenceInfo.description}}
                </div>
            </div>
            <div class="row">
                <div class=" col-md-11">
                    <span ng-if = "status.likeStatus != '1'">
                        <a style="color: #3B59A9;" href id="statusLike{{status.statusId}}" ng-click="addLike(status.statusId)">Like,</a> 
                    </span>
                    <span ng-if = "status.likeStatus == '1'">
                        <a style="color: #3B59A9;" href id="statusUnLike{{status.statusId}}" ng-click="unLike(status.statusId)">liked,</a> 
                    </span>
                    <a style="color: #3B59A9;" href ng-click="selectCommentField(status.statusId)"> Comment,</a>
                    <a style="color: #3B59A9;"  id="share_add_id" href onclick="open_modal_share(angular.element(this).scope().status)"> Share</a>
                </div>
            </div>
            <div class="pagelet">
                <div class="row form-group">
                    <div class="col-md-12">
                        <span ng-if = "status.likeCounter > 0">
                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                            <a  id="like_list_id"  style="color: #3B59A9;" href onclick="open_modal_like_list(angular.element(this).scope().status.statusId)" >
                                <span ng-if = "status.likeStatus === '1'">
                                    <span  id="statusLike{{status.statusId}}"> you</span>
                                </span>
                                <span ng-if = "status.likeCounter > 1 && status.likeStatus === '1'">
                                    and  {{status.likeCounter - 1}} people
                                </span>
                                <span ng-if ="status.likeCounter > 0 && status.likeStatus !== '1'">
                                    {{status.likeCounter}} people
                                </span>
                                like this.
                            </a> 
                        </span>
                    </div>
                </div>
                <span ng-if = "status.shareCounter > 0">
                    <div class="pagelet_divider"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                            <a href id="shared_list_id" onclick="open_modal_shared_list(angular.element(this).scope().status.statusId)">{{status.shareCounter}} shares</a>
                        </div>
                    </div>
                </span>
                <div class="pagelet_divider"></div>
                <div class="row form-group">
                    <div class="col-md-12" id="more_comment_id">
                        <span ng-if="status.commentCounter > 0">
                            <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                            <a href  id="status_more_comment" onclick="get_album_comments(angular.element(this).scope().status.statusId)">view{{status.commentCounter}}more comments </a>
                        </span>
                    </div>
                </div>
                <div class="row form-group">
                    <div ng-repeat="commentInfo in status.commentList">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg" width="30" height="30">
                        </div>
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <a style="font-weight: bold;" href><span ng-bind="commentInfo.userInfo.fristName"></span>&nbsp<span ng-bind="commentInfo.userInfo.lastName"></span></a>
                                    <span ng-bind="commentInfo.description">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    January 9, 2015 at 10:15pm. 
                                    <a>like</a>
                                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                                    . <a>15</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
                    </div>
                    <div class="col-md-11">
                        <form  ng-submit="addComment(status.statusId)">
                            <input  id="commentInputField{{status.statusId}}" type ="text" class="form-control" placeholder="Write a comment" ng-model="statusInfo.commentDes">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $this->load->view("member/pagelets/modal_share_content"); ?>
<?php $this->load->view("modal/modal_liked_people_list"); ?>
<?php $this->load->view("modal/modal_shared_people_list"); ?>
<script>
//            $(function () {
//            $("#editStatusId").on("click", function () {
//            $("#displayStatusId").hide();
//                    $("#updateStatus").show();
//            });
//        $("#statusCommentId").on("click", function () {
//            $('#commentInputField').focus();
//        });
//                    $("#statusUpdateCancelId").on("click", function () {
//            $('#updateStatus').hide();
//                    $("#displayStatusId").show();
//            });
//            });

    function get_album_comments(statusId) {
        angular.element($('#status_more_comment')).scope().getStatusComments(statusId, function () {
            $('#more_comment_id').hide();
        });
    }

    function open_modal_share(statusInfo) {
        angular.element($('#share_add_id')).scope().setSharedInfo(statusInfo, function () {
            $("#user_first_name").append(statusInfo.userInfo.firstName);
            $("#user_last_name").append(statusInfo.userInfo.lastName);
            $("#old_description").append(statusInfo.description);
            $('#modal_share_content').modal('show');
        });

    }

    function open_modal_like_list(statusId) {
        angular.element($('#like_list_id')).scope().getStatusLikeList(statusId, function () {
            $('#modal_liked_people_list').modal('show');
        });
    }
    function open_modal_shared_list(statusId) {
        angular.element($('#shared_list_id')).scope().getStatusShareList(statusId, function () {
            $('#modal_shared_people_list').modal('show');
        });
    }
</script>
