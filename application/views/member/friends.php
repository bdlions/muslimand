

<style>
    .friendd{
        border: 1px solid lightgray;
        padding: 1px;
        display: inline-block;
        width: 100%;
    }
</style>
<div ng-controller="friendController">
    <div class="row form-group">
        <div class="col-md-12" ng-init="setConstants(<?php echo htmlspecialchars(json_encode($constants)); ?>)">
            <?php $this->load->view("member/timeline/profile_cover"); ?>
        </div>
    </div>
    <div ng-init="setFriendList('<?php echo htmlspecialchars(json_encode($friendList)); ?>')">
        <div class="row form-group">
            <div class="col-md-12">
                <div class="pagelet">
                    <div class="row form-group">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" class="mm_thumb_comment">   
                        </div>
                        <div class="col-md-11 pagelet_title">
                            Friends
                        </div>
                    </div>
                </div>
                <div class="pagelet">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div ng-repeat="friend in friends">
                                <div style="padding: 10px; display: inline-block;">
                                    <div class="friendd">
                                        <div style="float: left">
                                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg"  width="100" height="100">
                                        </div>
                                        <div style="float: left; width: 180px; padding: 10px;">
                                            <div >
                                                <a style="font-weight: bold;" href ><span ng-bind="friend.firstName"></span>&nbsp;<span ng-bind="friend.lastName"></span></a>
                                            </div>
                                            <div >
                                                <span style="font-size: 12px">102 Mutual friends </span> 
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button style="margin: 10px 10px 0 0;" >Friends</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
