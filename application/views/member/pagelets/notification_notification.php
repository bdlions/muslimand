
<div class="pagelet">
    <div class="row">
        <div class="col-xs-6">
            <span style="font-size: 12px; font-weight: bold;">Notifications</span>
        </div>
        <div class="col-xs-6">
            <div style="text-align: right">
                <a style="font-size: 11px;" href="#">Mark as Read</a> . 
                <a style="font-size: 11px;" href="#">Settings</a>
            </div>
        </div>
    </div>
</div>
<div style="max-height: 450px; overflow-x:hidden; overflow-y: scroll">
    <div class="pagelet message_friends_box" ng-repeat="notificationInfo in generalNotifications.slice().reverse()">
        <div class="row">
            <span ng-if="notificationInfo.typeId == '<?php echo NOTIFICATION_TYPE_PAGE_LIKE; ?>' || notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_PAGE_INVITE_TO_LIKE; ?>">
                <a  href="<?php echo base_url() ?>pages/timeline/{{notificationInfo.referenceId}}">
                    <div class="col-xs-2">
                        <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50 ?>50x50_{{notificationInfo.genderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{notificationInfo.userList[0].userId}}.jpg"> 
                    </div>
                    <div class="col-xs-10 ">
                        <div>
                            <span ng-repeat="(key,user) in notificationInfo.userList">
                                <span style="font-weight: bold" ng-if="key == 2">and</span>
                                <span style="font-weight: bold" ng-if="key == 1" >,</span>
                                <span ng-if="user.userId != '<?php echo $user_id; ?>'">
                                    {{user.firstName}}&nbsp;{{user.lastName}}
                                </span>
                                <span ng-if="user.userId == '<?php echo $user_id; ?>'">
                                    you
                                </span>
                            </span>
                            <span ng-if="notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_PAGE_LIKE; ?>">
                                <span ng-if="notificationInfo.userList.length >= 2"> likes</span>
                                <span ng-if="notificationInfo.userList.length <= 1"> like</span> 
                                your Page {{notificationInfo.referencePageInfo.title}}
                            </span>
                            <span ng-if="notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_PAGE_INVITE_TO_LIKE; ?>">
                               invite you to like {{notificationInfo.referencePageInfo.title}}
                            </span>
                          
                        </div>
                        <div>
                            {{notificationInfo.timeDiff}}
                        </div>
                    </div>
                </a>
            </span>
            <span ng-if="notificationInfo.typeId == '<?php echo NOTIFICATION_TYPE_POST_COMMENT; ?>' || notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_POST_LIKE; ?> || notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_POST_SHARE; ?> || notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_PHOTO_LIKE; ?>">
                <a  href="<?php echo base_url() ?>status/get_status_details/{{notificationInfo.referenceId}}">
                    <div class="col-xs-2">
                        <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50 ?>50x50_{{notificationInfo.genderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W50_H50; ?>{{notificationInfo.userList[0].userId}}.jpg"> 
                    </div>
                    <div class="col-xs-10 ">
                        <div>
                            <span ng-repeat="(key,user) in notificationInfo.userList">
                                <span style="font-weight: bold" ng-if="key == 2">and</span>
                                <span style="font-weight: bold" ng-if="key == 1" >,</span>
                                <span ng-if="user.userId != '<?php echo $user_id; ?>'">
                                    {{user.firstName}}&nbsp;{{user.lastName}}
                                </span>
                                <span ng-if="user.userId == '<?php echo $user_id; ?>'">
                                    you
                                </span>
                            </span>
                            <span ng-if="notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_POST_LIKE; ?>">
                                <span ng-if="notificationInfo.userList.length >= 2"> likes</span>
                                <span ng-if="notificationInfo.userList.length <= 1"> like</span> 
                                your
                            </span>
                            <span ng-if="notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_POST_COMMENT; ?>">
                                <span ng-if="notificationInfo.userList.length >= 2"> commented on </span>
                                <span ng-if="notificationInfo.userList.length == 1"> commented on</span>
                                <span ng-if="notificationInfo.userList.length < 1"> commented on</span>
                            </span>
                            <span ng-if="notificationInfo.typeId == <?php echo NOTIFICATION_TYPE_POST_SHARE; ?>">
                                shared  your
                            </span>
                            <span ng-if="notificationInfo.referenceUserInfo.userId != '<?php echo $user_id; ?>'">
                                {{notificationInfo.referenceUserInfo.firstName}}&nbsp;{{notificationInfo.referenceUserInfo.lastName}}
                            </span>
                            <span ng-if="notificationInfo.referenceUserInfo.userId == '<?php echo $user_id; ?>'">

                                your 
                            </span>
                            status
                        </div>
                        <div>
                            {{notificationInfo.timeDiff}}
                        </div>
                    </div>
                </a>

            </span>
        </div>
    </div>

    <div style="border-top: 1px solid lightgray;"class="pagelet message_friends_box_1">
        <div class="row">
            <div class="col-xs-12">
                <div style="text-align: center; font-weight: bold;"><a href="<?php echo base_url(); ?>notification/get_all_notification">See All</a></div>
            </div>
        </div>
    </div>
</div>
