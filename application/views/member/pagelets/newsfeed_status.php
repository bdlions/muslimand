<div ng-app="app.Status">
    <div ng-controller="statusController"  ng-clock ng-init="setNewsfeeds(<?php echo htmlspecialchars(json_encode($newsfeed)); ?>)" >
        <li ng-repeat="newsfeed in newsfeeds">
           add hrer  {{newsfeed.userInfo.firstName + newsfeed.userInfo.lastName}}
        </li>
        <div class="pagelet">
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="float: left; padding-right: 10px;">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg" width="40" height="40">
                        </div>
                        <div style="float: left;">
                            <div>
                                <a href="#" style="font-weight: bold;"></a> update his/her status 
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li id="editStatusId"><a >Edit</a></li>
                                        <li><a href="#">Report</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <div id="displayStatusId" ng-bind="newsfeed.description"></div>
                        <div id="updateStatus" style="display: none;">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <textarea class="form-control form_control_custom_style textarea_custom_style" ng-bind="newsfeed.description" ng-model="statusInfo.description"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-8 col-md-2">
                                    <input id="closing_button_edited_textarea_1" type="button" class="button-custom" value="Cancel">

                                </div>
                                <div class="col-md-2">
                                    <input type="button" class="button-custom" data-dismiss="modal" aria-hidden="true" value="Done"  ng-click="updateStatus()">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a style="color: #3B59A9;" id="statusLikeId" href ng-click="addLike()">Like</a>fksdfjksdf
                            <a style="color: #3B59A9; display: none;" href="#" id="statusUnLikeId" ng-click="unLike()">UnLike</a> .
                            <a style="color: #3B59A9;" href="#" id="statusCommentId"> Comment</a> .
                            <a style="color: #3B59A9;" href="#"> Share</a>
                        </div>
                    </div>
                </div>
                <div class="pagelet">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                            <a style="color: #3B59A9;" href="#">60 people </a> like this.
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                            <a href="#">4 shares</a>
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                            <a href="#">view 21 more comments</a>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg" width="30" height="30">
                        </div>
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <a style="font-weight: bold;" href="#"><span ng-bind="newsfeed.status_comment_info.userInfo.firstName"></span><span ng-bind="newsfeed.status_comment_info.userInfo.lastName"></span></a>
                                    <span ng-bind="newsfeed.status_comment_info.description">
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
                    <div class="row">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
                        </div>
                        <div class="col-md-11">
                            <form  ng-submit="addComment()">
                                <input  id="commentInputField" type ="text" class="form-control" placeholder="Write a comment" ng-model="statusInfo.commentDes">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#editStatusId").on("click", function () {
            $("#displayStatusId").hide();
            $("#updateStatus").show();

        });
        $("#statusCommentId").on("click", function () {
            $('#commentInputField').focus();
        });
    });

</script>
