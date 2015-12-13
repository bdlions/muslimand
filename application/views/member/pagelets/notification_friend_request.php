   
<script>
    function confirm_request(friendId) {
        angular.element($('#confirm_pending_friend_' + friendId)).scope().approveRequest(friendId, function () {
            $("#confirm_pending_friend_" + friendId).hide();
            $("#delete_pending_request_" + friendId).hide();
            $("#friend_request_accept_" + friendId).show();
        });
    }
    function delete_request(friendId) {
        angular.element($('#delete_pending_request_' + friendId)).scope().deleteRequest(friendId, function () {
            $("#confirm_pending_friend_" + friendId).hide();
            $("#delete_pending_request_" + friendId).hide();
            $("#request_spam_" + friendId).show();
        });
    }
    



</script>
<div style="max-height: 450px; overflow-x:hidden; overflow-y: scroll">
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-6">
                <span style="font-size: 12px; font-weight: bold;">Friend Requests</span>
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <a style="font-size: 11px;" href="#">Find Friends</a> .
                    <a style="font-size: 11px;" href="#">Settings</a> 
                </div>
            </div>
        </div>
    </div>

    <div class="pagelet" ng-repeat="notification in friendNotifications.slice().reverse()">
        <div class="row" ng-if="notification.friendNotification.typeId == '<?php echo NOTIFICATION_TYPE_PENDING_REQUEST; ?>'" >
            <div class="col-xs-2">
                <img ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>{{notification.friendNotification.userInfo.userId}}.jpg" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W40_H40; ?>40x40_{{notification.genderId}}.jpg" />
            </div>
            <div class="col-xs-4">
                <a href="<?php echo base_url(); ?>member/timeline/{{notification.friendNotification.userInfo.userId}}" style="font-size: 12px; font-weight: bold;" >{{notification.friendNotification.userInfo.firstName}} &nbsp; {{notification.friendNotification.userInfo.lastName}}</a>
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <div>
                        <button  id="confirm_pending_friend_{{notification.friendNotification.userInfo.userId}}" type="submit" class="btn btn-xs" style="background-color: #703684; color: white" onclick="confirm_request(angular.element(this).scope().notification.friendNotification.userInfo.userId)">Confirm</button>
                        <button id="delete_pending_request_{{notification.friendNotification.userInfo.userId}}" type="submit" class="btn btn-xs" style="background-color: #703684; color: white" onclick="delete_request(angular.element(this).scope().notification.friendNotification.userInfo.userId)">Delete Request</button>
                    </div>
                    <div>
                        <button   id="friend_request_accept_{{notification.friendNotification.userInfo.userId}}" style="display: none; background-color: #703684; color: white" type="button" class="btn btn-xs">Friend</button>   
                        <button  id="request_spam_{{notification.friendNotification.userInfo.userId}}" style="display: none; background-color: #703684; color: white;" type="button" class="btn btn-xs">Mark as Spam</button>   
                    </div>
                </div>
            </div>
        </div>
        <div class="row" ng-if="notification.friendNotification.typeId == '<?php echo NOTIFICATION_TYPE_ACCEPT_REQUEST; ?>'" >
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/success_img.png">
                <a href="<?php echo base_url(); ?>member/timeline/{{notification.friendNotification.userInfo.userId}}">{{notification.friendNotification.userInfo.firstName}}&nbsp;{{notification.friendNotification.userInfo.lastName}} </a>
                Accept your Friend Request
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-12">
                <span style="font-weight: bold;">People You May Know</span>
            </div>
        </div>
    </div>
<!--    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#">Maria Islam</a><br>
                <a style="font-size: 11px; color: black;" href="#">2 mutual friends</a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>-->
   
</div>
<div style="border-top: 1px solid lightgray;"class="pagelet message_friends_box_1">
    <div class="row">
        <div class="col-xs-12">
            <div style="text-align: center; font-weight: bold;">See All</div>
            <!--<div style="text-align: center; font-weight: bold;"><a href="<?php echo base_url(); ?>member/add_friends">See All</a></div>-->
        </div>
    </div>
</div>


