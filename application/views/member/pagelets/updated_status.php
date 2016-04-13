<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/elif.js"></script>
<?php if (isset($profile_id)) { ?>
    <div ng-cloak class="scroll" id="updateStatusPagelet" infinite-scroll='getProfileStatusList(<?php echo htmlspecialchars(json_encode($profile_id)); ?>)' infinite-scroll-disabled='busy' infinite-scroll-distance='1'>
    <?php } elseif (isset($page_id)) { ?> 
        <div ng-cloak class="scroll" id="updateStatusPagelet" infinite-scroll='getPageStatusList(<?php echo htmlspecialchars(json_encode($page_id)); ?>)' infinite-scroll-disabled='busy' infinite-scroll-distance='1'>
        <?php } else { ?> 
            <div ng-cloak class="scroll" id="updateStatusPagelet" infinite-scroll='getStatusList()' infinite-scroll-disabled='busy' infinite-scroll-distance='1'>
            <?php } ?>
            <div ng-repeat="status in statuses" class="form-group">
                <div class="pagelet" id="pagelet{{status.statusId}}">
                    <div class="pagelet">
                        <div class="row">
                            <div class="col-md-2" >
                                <div ng-if="status.statusTypeId == '<?php echo STATUS_TYPE_ID_PAGE_CHANGE_PROFILE_PICTURE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_PAGE_CHANGE_COVER_PICTURE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_S_PHOTO; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_M_PHOTOS; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_S_PHOTO; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_M_PHOTOS; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_ADD_PAGE_ALBUM_PHOTOS; ?>'">
                                    <img fallback-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W40_H40 ?>40x40_01.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W40_H40; ?>{{status.pageInfo.pageId}}.jpg?time= <?php echo time(); ?>" alt="">
                                </div>
                                <div ng-if="status.statusTypeId == '<?php echo STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_SHARE_OTHER_STATUS; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_SHARE_OTHER_PHOTO; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_SHARE_OTHER_VIDEO; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_ADD_ALBUM_PHOTOS; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_ADD_VIDEO; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTOS; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTO; ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTOS ?>' ||
                                                    status.statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTO; ?>'">
                                    <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40 ?>40x40_{{status.userInfo.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>{{status.userInfo.userId}}.jpg?time= <?php echo time(); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-10" >
                                <div class="row">
                                    <div class="col-md-10 mrg_left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: left;">
                                                    <span ng-if='status.pageInfo != null'>
                                                        <a href="<?php echo base_url(); ?>pages/timeline/{{status.pageInfo.pageId}}" style="font-weight: bold;"><span ng-bind="status.pageInfo.title"></span></a> 
                                                    </span>
                                                    <span ng-if='status.pageInfo == null'>
                                                        <a href="<?php echo base_url(); ?>member/timeline/{{status.userInfo.userId}}" style="font-weight: bold;"><span ng-bind="status.userInfo.firstName"></span>&nbsp<span ng-bind="status.userInfo.lastName"></span></a> 
                                                    </span>
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

                                                        updated 
                                                        <span ng-if="<?php echo Male; ?> == status.genderId">his</span>
                                                        <span ng-if="<?php echo Female; ?> == status.genderId">her</span>
                                                        profile picture 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_PAGE_CHANGE_PROFILE_PICTURE; ?> == status.statusTypeId">
                                                        updated profile picture 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_PAGE_CHANGE_COVER_PICTURE; ?> == status.statusTypeId">
                                                        updated cover picture 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE; ?> == status.statusTypeId">
                                                        updated 
                                                        <span ng-if="<?php echo Male; ?> == status.genderId">his</span>
                                                        <span ng-if="<?php echo Female; ?> == status.genderId">her</span>
                                                        cover picture 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_ADD_ALBUM_PHOTOS; ?> == status.statusTypeId">
                                                        added a new album 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTO; ?> == status.statusTypeId">
                                                        added a new photo 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTO; ?> == status.statusTypeId">
                                                        added a new photo 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTOS; ?> == status.statusTypeId">
                                                        added new photos 
                                                    </span>
                                                    <span ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTOS; ?> == status.statusTypeId">
                                                        added new photos 
                                                    </span>
                                                    &nbsp;
                                                    <span ng-if='status.referenceInfo.pageInfo != null'>
                                                        <a href="<?php echo base_url(); ?>pages/timeline/{{status.referenceInfo.pageInfo.pageId}}" style="font-weight: bold;"> <span>{{status.referenceInfo.pageInfo.title}} </a>
                                                    </span>
                                                    <span ng-if='status.referenceInfo.pageInfo == null'>
                                                        <a href="<?php echo base_url(); ?>timeline/{{status.referenceInfo.userInfo.userId}}" style="font-weight: bold;"> <span>{{status.referenceInfo.userInfo.firstName}}&nbsp;{{status.referenceInfo.userInfo.lastName}} </span></a>
                                                    </span>

                                                    <span ng-if="<?php echo STATUS_TYPE_ID_SHARE_OTHER_STATUS; ?> == status.statusTypeId">
                                                        's status
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
                                                        <img ng-src="<?php echo base_url(); ?>resources/images/friends_icon.png" width="15" height="15">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="disabled"><a href="">Everyone</a></li>
                                                            <li class="disabled"><a href="">Friends</a></li>
                                                            <li class="disabled"><a href="">Friends of friends</a></li>
                                                            <li class="disabled"><a href="">Only Me</a></li>
                                                            <li class="disabled"><a href="">Custom</a></li>
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
                                                    <!--<li><a href="#">Report</a></li>-->
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

                        <div class="row padding_top_10px">
                            <div class="col-md-12">
                                <div class="row form-group">
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

                                <!--profile picture --> 
                                <div ng-if="<?php echo STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE; ?> == status.statusTypeId">
                                    <div ng-repeat="image in status.images" >
                                        <div class="row from-group">
                                            <div class="col-md-12 form-group">
                                                <img class="img-responsive"  id="single_photo_{{status.statusId}}" ng-click="open(status, image.image)" style="border: 1px solid #703684; float: left;" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div ng-if="<?php echo STATUS_TYPE_ID_PAGE_CHANGE_PROFILE_PICTURE; ?> == status.statusTypeId">
                                    <div ng-repeat="image in status.images" >
                                        <div class="row from-group">
                                            <div class="col-md-12 form-group">
                                                <img class="img-responsive"  id="single_photo_{{status.statusId}}"  ng-click="openPage(status, image.image)" style="border: 1px solid #703684; float: left;" ng-src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{image.image}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!--cover picture-->
                                <div ng-if="<?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE; ?> == status.statusTypeId">
                                    <div ng-repeat="image in status.images" >
                                        <div class="row from-group">
                                            <div class="col-md-12 form-group">
                                                <img class="img-responsive" id="single_photo_{{status.statusId}}"  ng-click="open(status, image.image)"  style="border: 1px solid #703684; float: left" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div ng-if="<?php echo STATUS_TYPE_ID_PAGE_CHANGE_COVER_PICTURE; ?> == status.statusTypeId">
                                    <div ng-repeat="image in status.images" >
                                        <div class="row from-group">
                                            <div class="col-md-12 form-group">
                                                <img class="img-responsive" id="single_photo_{{status.statusId}}"  ng-click="openPage(status, image.image)" style="border: 1px solid #703684; float: left" ng-src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{image.image}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--upload  single picture-->
                                <div ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTO; ?> == status.statusTypeId || <?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTO; ?> == status.statusTypeId">
                                    <div ng-repeat="image in status.images" >
                                        <div class="row from-group">
                                            <div class="col-md-12 form-group">
                                                <img class="img-responsive" id="single_photo_{{status.statusId}}"  ng-click="open(status, image.image)"  style="border: 1px solid #703684; float: left" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--upload page single picture-->
                                <div ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_S_PHOTO; ?> == status.statusTypeId || <?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_S_PHOTO; ?> == status.statusTypeId">
                                    <div ng-repeat="image in status.images" >
                                        <div class="row from-group">
                                            <div class="col-md-12 form-group">
                                                <img class="img-responsive" id="single_photo_{{status.statusId}}"  ng-click="openPage(status, image.image)"  style="border: 1px solid #703684; float: left" ng-src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{image.image}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--user timeline or album photos-->
                                <div ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_HIS_PROFILE_WITH_PHOTOS; ?> == status.statusTypeId || <?php echo STATUS_TYPE_ID_POST_STATUS_BY_USER_AT_FRIEND_PROFILE_WITH_PHOTOS; ?> == status.statusTypeId || <?php echo STATUS_TYPE_ID_ADD_ALBUM_PHOTOS; ?> == status.statusTypeId">
                                    <div class="row">
                                        <div ng-repeat="(key, image) in status.images">
                                            <img class="img-responsive"  ng-click="open(status, image.image)" style="border: 1px solid #703684; float: left; height: 150px; width: 150px; margin: 0 10px 25px 15px" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}"  >
                                        </div>
                                    </div>
                                </div>
                                <!--page timeline or album photos-->
                                <div ng-if="<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_M_PHOTOS; ?> == status.statusTypeId || <?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_M_PHOTOS; ?> == status.statusTypeId || <?php echo STATUS_TYPE_ID_ADD_PAGE_ALBUM_PHOTOS; ?> == status.statusTypeId">
                                    <div class="row">
                                        <div ng-repeat="(key, image) in status.images">
                                            <img class="img-responsive"  ng-click="openPage(status, image.image)" style="border: 1px solid #703684; float: left; height: 150px; width: 150px; margin: 0 10px 25px 15px" ng-src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{image.image}}"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row from-group">
                            <span ng-if='status.referenceInfo.pageInfo != null'>

                                <div class="from-group col-md-4" ng-repeat="image in status.referenceInfo.images">
                                    <img class="img-responsive" ng-click="openPage(status, image.image)" style="border: 1px solid #703684; float: left; height: 150px; width: 150px; margin-bottom: 25px;" ng-src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{image.image}}">
                                </div>
                            </span>
                            <span ng-if='status.referenceInfo.pageInfo == null'>

                                <div class="from-group col-md-4" ng-repeat="image in status.referenceInfo.images">
                                    <img class="img-responsive"   ng-click="open(status, image.image)" style="border: 1px solid #703684; float: left; height: 150px; width: 150px; margin-bottom: 25px;" ng-src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{image.image}}">
                                </div>
                            </span>
                        </div>

                        <div class="row from-group">
                            <div class="col-md-12">
                                <div style="float: left; text-align: justify" ng-cloak>
                                    {{status.referenceInfo.description}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagelet">
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="row from-group" style="float: left;">
                                    <div class="col-md-12">
                                        <span ng-if = "status.likeStatus != '1'">
                                            <a style="color: #3B59A9;" href id="statusLike{{status.statusId}}" ng-click="addLike(status)">
                                                <img src="<?php echo base_url(); ?>resources/images/like_icon.png"> Like </a>.
                                        </span>
                                        <span ng-if = "status.likeStatus == '1'">
                                            <a style="color: #3B59A9;" href id="statusUnLike{{status.statusId}}" ng-click="unLike(status.statusId)">
                                                <img ng-src="<?php echo base_url(); ?>resources/images/like_icon.png"> liked </a>. 
                                        </span>
                                        <a style="color: #3B59A9;" href onclick="select_comment_field(angular.element(this).scope().status.statusId)">
                                            <img ng-src="<?php echo base_url(); ?>resources/images/comment_icon.png"> Comment </a>.
                                        <a style="color: #3B59A9;"  id="share_add_id" href onclick="open_modal_share(angular.element(this).scope().status)">
                                            <img ng-src="<?php echo base_url(); ?>resources/images/share_icon.png"> Share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group" >
                            <div class="col-md-12">
                                <div  class="pagelet_divider"></div>
                                <div style="float: left">
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
                        </div>
                        <span ng-if = "status.shareCounter > 0">
                            <div class="pagelet_divider"></div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <div style="float: left;">
                                        <img ng-src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                                        <a href id="shared_list_id" onclick="open_modal_shared_list(angular.element(this).scope().status.statusId)">{{status.shareCounter}} shares</a>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <span ng-if="status.commentCounter > 0" id="more_comment_{{status.statusId}}">
                            <div class="pagelet_divider" ></div>
                            <div class="row form-group">
                                <div class="col-md-12" >
                                    <div style="float: left;">
                                        <img ng-src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                                        <a href  id="status_more_comment" onclick="get_status_comments(angular.element(this).scope().status.statusId)">view {{status.commentCounter}} more comments </a>
                                    </div>
                                </div>
                            </div>
                        </span>

                        <span ng-if="status.commentList != null">
                            <div class="pagelet_divider" id='pagelet_id_2'></div>
                            <div ng-repeat="commentInfo in status.commentList.slice().reverse()">
                                <div class="row form-group" id="comment_{{commentInfo.commentId}}">
                                    <div class="col-md-1" profile_picture >
                                        <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{commentInfo.userInfo.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{commentInfo.userInfo.userId}}.jpg" width="30" height="30">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div style="float: left">
                                                    <a style="font-weight: bold;" href='<?php echo base_url(); ?>member/timeline/{{commentInfo.userInfo.userId}}'></span><span ng-bind="commentInfo.userInfo.firstName"></span>&nbsp<span ng-bind="commentInfo.userInfo.lastName"></span></a>
                                                    <span ng-bind="commentInfo.description" id="displayStatusComment_{{commentInfo.commentId}}"></span>
                                                    <span id="updateStatusComment_{{commentInfo.commentId}}" style="display: none;">
                                                        <form ng-submit="updateStatusComment(status.statusId, commentInfo)" >
                                                            <input class="form-control" ng-model="commentInfo.description" />
                                                        </form>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: left">
                                                    {{commentInfo.commentTimeDiff}}
                                                    <span ng-if = "commentInfo.CommentlikeStatus != '1'">
                                                        <a style="color: #3B59A9;" href id="statusCommentLike{{commentInfo.commentId}}" ng-click="addStatusCommentLike(status.statusId, commentInfo.commentId)"> Like</a> 
                                                    </span>
                                                    <span ng-if = "commentInfo.CommentlikeStatus == '1'">
                                                        <a style="color: #3B59A9;" href id="statusUnLike{{commentInfo.commentId}}" ng-click="unLike(status.statusId)"> liked</a> 
                                                    </span><!--<a>like</a>-->
                                                    <a id="comment_like_{{commentInfo.commentId}}" onclick="get_comment_like_list(angular.element(this).scope().status.statusId, angular.element(this).scope().commentInfo.commentId)" ng-if="commentInfo.commentlikeCounter > 0">
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
                                                <ul class="dropdown-menu" role="menu">
                                                    <li ng-if="commentInfo.userInfo.userId == '<?php echo $user_id; ?>'">
                                                        <a id="edit_option_comment_line_{{commentInfo.commentId}}" onclick="select_edit_comment_field(angular.element(this).scope().commentInfo.commentId)">Edit</a>
                                                    </li>
                                                    <li ng-if="commentInfo.userInfo.userId == '<?php echo $user_id; ?>' || status.mappingId == '<?php echo $user_id; ?>'">
                                                        <a id="delete_option_comment_line_{{commentInfo.commentId}}" onclick="delete_status_comment(angular.element(this).scope().status.statusId, angular.element(this).scope().commentInfo.commentId)" >Delete</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <div class="row">
                            <div class="col-md-1" profile_picture>
                                <img class="lightgray_border" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{userGenderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 . $user_id . '.jpg?time=' . time(); ?>"/>
                            </div>
                            <div class="col-md-11">
                                <!--<form  ng-submit="">-->
                                <input   id="commentInputField{{status.statusId}}" type ="text" class="form-control" placeholder="Write a comment" ng-enter="addComment(userGenderId, status.userInfo, status)"  ng-model="status.commentDes">
                                <!--</form>-->
                            </div>
                        </div>
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
        <?php $this->load->view("member/photo/section/modal_newsfeed_photo_view"); ?>
        <?php $this->load->view("member/photo/section/page_modal_newsfeed_photo_view"); ?>


        <script type="text/javascript">
            $(function () {
                var showChar = 200;
                var ellipsestext = "...";
                var moretext = "Show more >";
                var lesstext = "Show less";

                $('.more').each(function () {
                    console.log("inside more");
                    var content = $(this).html();
                    if (content.length > showChar) {
                        var c = content.substr(0, showChar);
                        var h = content.substr(showChar, content.length - showChar);
                        var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                        $(this).html(html);
                    }
                });

                $(".morelink").click(function () {
                    if ($(this).hasClass("less")) {
                        $(this).removeClass("less");
                        $(this).html(moretext);
                    } else {
                        $(this).addClass("less");
                        $(this).html(lesstext);
                    }
                    $(this).parent().prev().toggle();
                    $(this).prev().toggle();
                    return false;
                });
            });
        </script>


        <script type="text/javascript">
            $(function () {
                $("#share_add_id").on("click", function () {
                    //                $("#template/newsfeed.html").hide();
                    $("#modal_share_content").show();
                });
            });
            function get_status_comments(statusId) {
                angular.element($('#status_more_comment')).scope().getStatusComments(statusId, function () {
                    $('#more_comment_' +statusId).hide();
                    $('#pagelet_id_1').hide();
                    $('#pagelet_id_2').hide();
                });
            }

            function open_modal_share(statusInfo) {
                var userId = statusInfo.userId;
                var pageId = statusInfo.pageId;

                var imageSize = 0;
                if (statusInfo.images) {
                    imageSize = statusInfo.images.length;
                }
                var statusTypeId = statusInfo.statusTypeId;

                angular.element($('#share_add_id')).scope().setSharedInfo(statusInfo, function () {

                    if (statusTypeId == '<?php echo STATUS_TYPE_ID_PAGE_CHANGE_PROFILE_PICTURE ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_PAGE_CHANGE_COVER_PICTURE ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_S_PHOTO ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_ADMIN_AT_PAGE_PROFILE_WITH_M_PHOTOS ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_S_PHOTO ?>'
                            || statusTypeId == '<?php echo STATUS_TYPE_ID_POST_STATUS_BY_MEMBER_AT_PAGE_PROFILE_WITH_M_PHOTOS ?>') {
                        $("#page_title_id").append(statusInfo.pageInfo.title)
                        $("#shared_user_profile_picture_set_id").attr('src', '<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W40_H40; ?>' + pageId + ".jpg");
                        $("#on-error-profile-photo").attr('src', '<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W40_H40; ?>' + "40x40.jpg");
                    } else {
                        var genderId = statusInfo.userInfo.genderId;
                        $("#user_first_name").append(statusInfo.userInfo.firstName);
                        $("#user_last_name").append(statusInfo.userInfo.lastName);
                        $("#old_description").append(statusInfo.description);
                        $("#shared_user_profile_picture_set_id").attr('src', '<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>' + userId + ".jpg");
                        $("#on-error-profile-photo").attr('src', '<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>' + "40x40_" + genderId + ".jpg");
                        if (imageSize > 0) {
                            if (statusTypeId == '<?php echo STATUS_TYPE_ID_CHANGE_PROFILE_PICTURE ?>') {
                                $("#status_type_id").append("Shared profile Picture");
                            } else if (statusTypeId == '<?php echo STATUS_TYPE_ID_CHANGE_COVER_PICTURE ?>') {
                                $("#status_type_id").append("Shared cover Picture");
                            } else if (statusTypeId == '<?php echo STATUS_TYPE_ID_ADD_ALBUM_PHOTOS ?>') {
                                $("#status_type_id").append("Shared Album ");
                            }
                        }
                    }

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
            }
            ;
        </script>







