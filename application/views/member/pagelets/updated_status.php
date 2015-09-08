<div style="display: none" id="updateStatusPagelet">
    <div ng-repeat="status in statuses.slice().reverse()" class="form-group">
        <div class="pagelet" id="pagelet{{status.statusId}}">
            <div class="row form-group">
                <div class="col-md-12">
                    <div style="float: left; padding-right: 10px;">
                        <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg" width="40" height="40">
                    </div>
                    <div style="float: left;">
                        <div>
                            <a href="#" style="font-weight: bold;"><span ng-bind="status.userInfo.fristName"></span>&nbsp<span ng-bind="status.userInfo.lastName"></span></a> update his/her status 
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
            <div class="row">
                <div class=" col-md-11">
                    <a style="color: #3B59A9;" href id="statusLike{{status.statusId}}" ng-click="addLike(status.statusId)">Like,</a> 
                    <a style="color: #3B59A9; display: none;" href id="statusUnLike{{status.statusId}}" ng-click="unLike(status.statusId)">UnLike,</a> 
                    <a style="color: #3B59A9;" href ng-click="selectCommentField(status.statusId)"> Comment,</a>
                    <a style="color: #3B59A9;" href ng-click="openModalShare(status.statusId)"> Share</a>
                </div>
            </div>

            <div class="pagelet">
                <div class="row form-group">
                    <div class="col-md-12">
                        <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                        <a style="color: #3B59A9;" href ><span id="statusLike{{status.statusId}}"> you</span> and 60 people </a> like this.
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

//            function openModalShare(){
//            alert("fgdghfh");
//            }

</script>
    <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title">I'm a modal!</h3>
        </div>
        <div class="modal-body">
            <ul>
                <li ng-repeat="item in items">
                    <a href="#" ng-click="$event.preventDefault(); selected.item = item">{{ item }}</a>
                </li>
            </ul>
            Selected: <b>{{ selected.item }}</b>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
    </script>