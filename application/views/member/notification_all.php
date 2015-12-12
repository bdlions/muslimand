<div class="row" ng-controller="headerController" ng-clock ng-init="setNotificationList(<?php echo htmlspecialchars(json_encode($notification_list)); ?>)">
    <div class="col-md-10">
        <div class="pagelet">
            <div class="row">
                <div class="col-md-8">
                    <span style="font-weight: bold;">Your Notifications</span>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="#">Notification Settings</a>
                    </div>
                </div>
            </div>
        </div>  
        <div class="pagelet">
            <div class="row form-group">
                <div class="col-md-12">
                    Get notifications:
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row form-group">
                <div class="col-md-12">
                    <span style="font-weight: bold;">Today</span>
                </div>
            </div>
            <div ng-repeat="notification in allNotificationList.slice().reverse()">
                <div class="pagelet_divider"></div>
                <div class="row">
                    <a  href="<?php echo base_url() ?>status/get_status_details/{{notification.notification.referenceId}}">
                        <div class="col-xs-2">
                            <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50 ?>50x50_{{notification.genderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{notification.notification.userList[0].userId}}.jpg"> 
                        </div>
                        <div class="col-xs-10 ">
                            <div>
                                <span ng-repeat="(key,user) in notification.notification.userList">
                                    <span style="font-weight: bold" ng-if="key == 2">and</span>
                                    <span style="font-weight: bold" ng-if="key == 1" >,</span>
                                    <span ng-if="user.userId != '<?php echo $user_id; ?>'">
                                        {{user.firstName}}&nbsp;{{user.lastName}}
                                    </span>
                                    <span ng-if="user.userId == '<?php echo $user_id; ?>'">
                                        you
                                    </span>
                                </span>
                                <span ng-if="notification.notification.typeId == <?php echo NOTIFICATION_TYPE_POST_LIKE; ?>">
                                    <span ng-if="notification.notification.userList.length >= 2"> likes</span>
                                    <span ng-if="notification.notification.userList.length <= 1"> like</span> 
                                    your
                                </span>
                                <span ng-if="notification.notification.typeId == <?php echo NOTIFICATION_TYPE_POST_COMMENT; ?>">
                                    <span ng-if="notification.notification.userList.length >= 2"> commented on </span>
                                    <span ng-if="notification.notification.userList.length == 1"> commented on</span>
                                    <span ng-if="notification.notification.userList.length < 1"> commented on</span>
                                </span>
                                <span ng-if="notification.notification.typeId == <?php echo NOTIFICATION_TYPE_POST_SHARE; ?>">
                                    shared  your
                                </span>
                                <span ng-if="notification.notification.referenceUserInfo.userId != '<?php echo $user_id; ?>'">
                                    {{notification.notification.referenceUserInfo.firstName}}&nbsp;{{notification.notification.referenceUserInfo.lastName}}
                                </span>
                                <span ng-if="notification.notification.referenceUserInfo.userId == '<?php echo $user_id; ?>'">

                                    your 
                                </span>
                                status
                            </div>
                            <div>
                                {{notification.notification.timeDiff}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function onImageUnavailable(img) {

    }
</script>
