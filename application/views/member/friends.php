<style>
    .friendd{
        border: 1px solid lightgray;
        padding: 3px;
        display: inline-block;
    }
</style>
<div ng-controller="friendController" ng-clock>
    <div class="row form-group">
        <div class="col-md-12">
            <?php $this->load->view("member/timeline/profile_cover"); ?>
        </div>
    </div>
    <div ng-init="setFriendList('<?php echo htmlspecialchars(json_encode($friendList)); ?>')">
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
                    <div ng-repeat="friend in friends">
                <div class="col-md-6">
                        <div style="padding: 10px;">
                            <div class="friendd">
                                <div style="float: left; border: 1px solid #703684;">
                                    <img class="img-responsive" style="height: 75px; width: 75px;" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>100x100_{{friend.genderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>{{friend.userId}}.jpg"/>
                                </div>
                                <div style="float: left; width: 180px; padding: 10px 0 0 2px; margin-top: 20px;">
                                    <div >
                                        <a style="font-weight: bold;" href='<?php echo base_url(); ?>member/timeline/{{friend.userId}}' ><span ng-bind-template="{{friend.firstName}} {{friend.lastName}}"></span></a>
                                    </div>
                                    <div >
                                        <!--<span style="font-size: 12px"> Mutual friends </span>--> 
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button style="margin-top: 28px;" >Friends</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
