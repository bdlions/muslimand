
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
            <div ng-repeat="notification in allNotificationList">
                <div class="pagelet_divider"></div>
                <div class="row">
                    <div class="col-md-1">
                        <img src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{notification.userList[0].userId}}.jpg" onError="onImageNotFound(this)"> 
                        <img style="visibility:hidden;height: 0px;" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50 ?>50x50.jpg">
                    </div>
                    <div class="col-md-11">
                        <span ng-repeat="(key,user) in notification.userList">
                            <span style="font-weight: bold" ng-if="key == 2">and</span>
                            <span style="font-weight: bold" ng-if="key == 1" >,</span>
                            {{user.firstName}}&nbsp;{{user.lastName}}
                        </span>
                        <span ng-if="notification.typeId == <?php echo NOTIFICATION_TYPE_POST_LIKE; ?>">
                            <span ng-if="notification.userList.length >= 2"> likes</span>
                            <span ng-if="notification.userList.length <= 1"> like</span> 
                        </span>
                        <span ng-if="notification.typeId == <?php echo NOTIFICATION_TYPE_POST_COMMENT; ?>">
                            <span ng-if="notification.userList.length >= 2"> commented on </span>
                            <span ng-if="notification.userList.length <= 1">also  commented on</span>
                        </span>
                        your status 15 mins
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>