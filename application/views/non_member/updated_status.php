<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/elif.js"></script>
<?php if (isset($profile_id)) { ?>
    <div ng-cloak class="scroll" id="updateStatusPagelet" infinite-scroll='getProfileStatusList(<?php echo htmlspecialchars(json_encode($profile_id)); ?>)' infinite-scroll-disabled='busy' infinite-scroll-distance='1'>
    <?php } else { ?>
        <div ng-cloak class="scroll" id="updateStatusPagelet" infinite-scroll='getStatusList()' infinite-scroll-disabled='busy' infinite-scroll-distance='1'>
        <?php } ?>
        <div ng-repeat="status in statuses" class="form-group">
            <!--<div ng-repeat="status in statuses.slice().reverse()" class="form-group">-->
            <div class="pagelet" id="pagelet{{status.statusId}}">
                <div class="pagelet">
                    <div class="row">
                        <div class="col-md-2" >
                            <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40 ?>40x40_{{status.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>{{status.userInfo.userId}}.jpg?time= <?php echo time(); ?>">
                        </div>
                        <div class="col-md-10" >
                            <div class="row">
                                <div class="col-md-10 mrg_left">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: left;">
                                                <a href="<?php echo base_url(); ?>member/timeline/{{status.userInfo.userId}}" style="font-weight: bold;"><span ng-bind="status.userInfo.firstName"></span>&nbsp<span ng-bind="status.userInfo.lastName"></span></a> 
                                                <span ng-if="status.mappingUserInfo != null">
                                                    to 
                                                    <a href="<?php echo base_url(); ?>member/timeline/{{status.mappingUserInfo.userId}}" style="font-weight: bold;">{{status.mappingUserInfo.firstName}}&nbsp;{{status.mappingUserInfo.lastName}}</a> 
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE; ?> == status.statusTypeId">
                                                    updated 
                                                    <span ng-if="<?php echo Male; ?> == status.genderId">his</span>
                                                    <span ng-if="<?php echo Female; ?> == status.genderId">her</span>
                                                    <!--his/her--> 
                                                    status
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE; ?> == status.statusTypeId">

                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_SHARE_OTHER_STATUS; ?> == status.statusTypeId">
                                                    shared 
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_SHARE_OTHER_PHOTO; ?> == status.statusTypeId">
                                                    shared photos 
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_SHARE_OTHER_VIDEO; ?> == status.statusTypeId">
                                                    shared video  
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE; ?> == status.statusTypeId">
                                                    updated profile picture 
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE; ?> == status.statusTypeId">
                                                    updated cover picture 
                                                </span>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_ADD_ALBUM_PHOTOS; ?> == status.statusTypeId">
                                                    added a new photos 
                                                </span>
                                                &nbsp;
                                                <a href="#" style="font-weight: bold;"> <span>{{status.referenceInfo.userInfo.firstName}}&nbsp;{{status.referenceInfo.userInfo.lastName}}</span></a>
                                                <span ng-if="<?php echo STATUS_TYPE_ID_SHARE_OTHER_STATUS; ?> == status.statusTypeId">
                                                    status
                                                </span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div style="float: left;">
                                                {{status.timeDiff}}
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <ul style="list-style-type: none; padding: 0;">
                                                <li class="dropdown">
                                                    <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" width="15" height="15">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <span ng-if="status.mappingId == '<?php echo $user_id; ?>'">
                                                    <li onclick="select_edit_field(angular.element(this).scope().status.statusId)"><a >Edit</a></li>
                                                </span>
                                                <li><a href="#">Report</a></li>
                                                <span ng-if="status.mappingId == '<?php echo $user_id; ?>' || status.userId == '<?php echo $user_id; ?>'">
                                                    <li><a href  ng-click="deleteStatus(status.statusId)">Delete</a></li>
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
                            <div class="row form-group" style="width: 100%;">
                                <div class="col-md-12">
                                    <div style="float: left;">
                                        <div id="displayStatus{{status.statusId}}" ng-bind="status.description"></div>
                                    </div>
                                    <div id="updateStatus{{status.statusId}}" style="display: none;">
                                        <form ng-submit="updateStatus(status)" >
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <textarea class="form-control textarea_custom_style" ng-model="status.description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-offset-8 col-md-2">
                                                    <input id="statusUpdateCancel{{status.statusId}}" type="button" class="button-custom" value="Cancel">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="submit" id="submit" value="Done" class="button-custom">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div ng-repeat="image in status.images">
                                <div ng-if="<?php echo STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE; ?> == status.statusTypeId">
                                    <div class="row from-group">
                                        <div class="col-md-12 form-group">
                                            <img class="img-responsive" style="border: 1px solid #703684; float: left;" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" >
                                        </div>
                                    </div>
                                </div>
                                <div ng-if="<?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE; ?> == status.statusTypeId">
                                    <div class="row from-group">
                                        <div class="col-md-12 form-group">
                                            <img class="img-responsive" style="border: 1px solid #703684; float: left" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div ng-if="<?php echo STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE; ?> != status.statusTypeId && <?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE; ?> != status.statusTypeId">
                                <div class="row">
                                    <div ng-repeat="(key, image) in status.images">
                                        <img class="img-responsive" style="border: 1px solid #703684; float: left; height: 150px; width: 150px; margin: 0 10px 25px 15px" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}"  >
                                    </div>
                                </div>
                            </div>

                            <div class="row from-group">
                                <div class="from-group col-md-4" ng-repeat="image in status.referenceInfo.images">
                                    <img class="img-responsive" style="border: 1px solid #703684; float: left"src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" width="120" height="100">
                                </div>
                            </div>

                            <div class="row from-group">
                                <div class="col-md-12">
                                    <div style="float: left; text-align: justify">
                                        {{status.referenceInfo.description}}
                                    </div>
                                </div>
                            </div>
                            <div class="row from-group" style="float: left;">
                                <div class="col-md-12">
                                    <span ng-if = "status.likeStatus != '1'">
                                        <a style="color: #3B59A9;" href id="statusLike{{status.statusId}}" >
                                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png"> Like </a>.
                                    </span>
                                    <span ng-if = "status.likeStatus == '1'">
                                        <a style="color: #3B59A9;" href id="statusUnLike{{status.statusId}}" >
                                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png"> liked </a>. 
                                    </span>
                                    <a style="color: #3B59A9;" href >
                                        <img src="<?php echo base_url(); ?>resources/images/comment_icon.png"> Comment </a>.
                                    <a style="color: #3B59A9;"  id="share_add_id" href >
                                        <img src="<?php echo base_url(); ?>resources/images/share_icon.png"> Share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagelet">
                    <div class="row form-group" >
                        <div class="col-md-12">
                            <div style="float: left">
                                <span ng-if = "status.likeCounter > 0">
                                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                                    <a  id="like_list_id"  style="color: #3B59A9;" href  >
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
                    </div>
                    <span ng-if = "status.shareCounter > 0">
                        <div class="pagelet_divider"></div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                                    <a href id="shared_list_id" onclick="open_modal_shared_list(angular.element(this).scope().status.statusId)">{{status.shareCounter}} shares</a>
                                </div>
                            </div>
                        </div>
                    </span>
                    <span ng-if="status.commentCounter > 0">
                        <div class="pagelet_divider" id='pagelet_id_1'></div>
                        <div class="row form-group">
                            <div class="col-md-12" id="more_comment_id">
                                <div style="float: left;">

                                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                                    <a href  id="status_more_comment" onclick="get_album_comments(angular.element(this).scope().status.statusId)">view {{status.commentCounter}} more comments </a>
                                </div>
                            </div>
                        </div>
                    </span>

                    <span ng-if="status.commentList != null">
                        <div class="pagelet_divider" id='pagelet_id_2'></div>
                        <div ng-repeat="commentInfo in status.commentList.slice().reverse()">
                            <div class="row form-group" id="comment_{{commentInfo.commentId}}">
                                <div class="col-md-1" profile_picture >
                                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{commentInfo.userGenderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{commentInfo.userInfo.userId}}.jpg?time=<?php echo time();?>" width="30" height="30" >
                                </div>
                                <div class="col-md-9">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div style="float: left">
                                                <a style="font-weight: bold;" href='<?php echo base_url(); ?>member/timeline/{{commentInfo.userInfo.userId}}'></span><span ng-bind="commentInfo.userInfo.firstName"></span>&nbsp<span ng-bind="commentInfo.userInfo.lastName"></span></a>
                                                <span ng-bind="commentInfo.description" id="displayStatusComment_{{commentInfo.commentId}}"></span>
                                                <span id="updateStatusComment_{{commentInfo.commentId}}" style="display: none;">
<!--                                                    <form ng-submit="updateStatusComment(status.statusId, commentInfo)" >
                                                        <input class="form-control" ng-model="commentInfo.description" />
                                                    </form>-->
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: left">
                                                {{commentInfo.commentTimeDiff}}
                                                <span ng-if = "commentInfo.CommentlikeStatus != '1'">
                                                    <a style="color: #3B59A9;" href id="statusCommentLike{{commentInfo.commentId}}" >
                                                </span>
                                                <span ng-if = "commentInfo.CommentlikeStatus == '1'">
                                                    <a style="color: #3B59A9;" href id="statusUnLike{{commentInfo.commentId}}" ng-click="unLike(status.statusId)"> liked</a> 
                                                </span><!--<a>like</a>-->
                                                <a id="comment_like_{{commentInfo.commentId}}" ng-if="commentInfo.commentlikeCounter > 0">
                                                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                                                    {{commentInfo.commentlikeCounter}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2" >
                                    <ul id="single_comment_line_edit_or_delete_{{commentInfo.commentId}}" style="list-style-type: none;">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle cursor_holder_style" aria-expanded="false" role="button" data-toggle="dropdown" data-toggle="tooltip" title="Edit">
                                                <span class="caret"></span>
                                            </a>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <span ng-if="busy == false">
        <div>Loading data...</div>
    </span>
    <?php $this->load->view("member/pagelets/modal_share_content"); ?>
    <?php $this->load->view("modal/modal_liked_people_list"); ?>
    <?php $this->load->view("modal/modal_comment_liked_people_list"); ?>
    <?php $this->load->view("modal/modal_shared_people_list"); ?>
    <script>

        function get_album_comments(statusId) {
            angular.element($('#status_more_comment')).scope().getStatusComments(statusId, function () {
                $('#more_comment_id').hide();
                $('#pagelet_id_1').hide();
                $('#pagelet_id_2').hide();
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
        function select_edit_field(statusId) {
            $("#displayStatus" + statusId).hide();
            $("#updateStatus" + statusId).show();
        }
        function select_edit_comment_field(commentId) {
            $("#displayStatusComment_" + commentId).hide();
            $("#updateStatusComment_" + commentId).show();
        }
        function delete_status_comment(statusId, commentId) {
            angular.element($('#delete_option_comment_line_' + commentId)).scope().deleteStatusComment(statusId, commentId, function (response) {
                if (response == "1") {
                    $("#comment_" + commentId).hide();
                }
            });
        }
        function get_comment_like_list(statusId, commentId) {
            angular.element($('#comment_like_' + commentId)).scope().getStatusCommentLikeList(statusId, commentId, function () {
                $('#modal_comment_liked_people_list').modal('show');
            });
        }
        function select_comment_field(statusId) {
            $('#commentInputField' + statusId).focus();
        };

    </script>
