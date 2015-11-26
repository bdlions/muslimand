<div class="row" ng-controller="headerController" ng-init="setNotificationList(<?php echo htmlspecialchars(json_encode($notification_list)); ?>)">
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
            <div ng-repeat="notification in allNotificationList.generalNotifications.slice().reverse()">
                <div class="pagelet_divider"></div>
                <div class="row">
                    <a  href="<?php echo base_url() ?>status/get_status_details/{{notification.referenceId}}">
                        <div class="col-md-1">
                            <img src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{notification.userList[0].userId}}.jpg" onError="onImageNotFound(this)"> 
                            <img style="visibility:hidden;height: 0px;" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50 ?>50x50_{{userGenderId}}.jpg">
                        </div>
                        <div class="col-md-11 ">
                            <div>
                                <span ng-repeat="(key,user) in notification.userList.slice.reverse ">
                                    <span style="font-weight: bold" ng-if="key == 2">and</span>
                                    <span style="font-weight: bold" ng-if="key == 1" >,</span>
                                    <span ng-if="user.userId != '<?php echo $user_id; ?>'">
                                        {{user.firstName}}&nbsp;{{user.lastName}}
                                    </span>
                                    <span ng-if="user.userId == '<?php echo $user_id; ?>'">
                                        you
                                    </span>
                                </span>
                                <span ng-if="notification.typeId == <?php echo NOTIFICATION_TYPE_POST_LIKE; ?>">
                                    <span ng-if="notification.userList.length >= 2"> likes</span>
                                    <span ng-if="notification.userList.length <= 1"> like</span> 
                                </span>
                                <span ng-if="notification.typeId == <?php echo NOTIFICATION_TYPE_POST_COMMENT; ?>">
                                    <span ng-if="notification.userList.length >= 2"> commented on </span>
                                    <span ng-if="notification.userList.length <= 1">also  commented on</span>
                                </span>
                                <span ng-if="notification.typeId == <?php echo NOTIFICATION_TYPE_POST_SHARE; ?>">
                                    shared  your
                                </span>
                                <span ng-if="notification.referenceUserInfo.userId != '<?php echo $user_id; ?>'">
                                    {{notification.referenceUserInfo.firstName}}&nbsp;{{notification.referenceUserInfo.lastName}}
                                </span>
                                <span ng-if="notification.referenceUserInfo.userId == '<?php echo $user_id; ?>'">
                                    your 
                                </span>
                                status
                            </div>
                            <div>
                                {{notification.timeDiff}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
