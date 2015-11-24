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
                <div class="col-md-12">
                    <div ng-repeat="friend in friends">
                        <div style="padding: 10px; display: inline-block;">
                            <div class="friendd">
                                <div style="float: left">
                                    <img  alt="" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>{{friend.userId}}.jpg" onError="onImageUnavailable(this)"/>
                                    <img style="visibility:hidden; height: 0px" src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>50x50_{{userGenderId}}.jpg?time=' . time()" alt="">
                                </div>
                                <div style="float: left; width: 180px; padding: 10px;">
                                    <div >
                                        <a style="font-weight: bold;" href='<?php echo base_url(); ?>member/timeline/{{friend.userId}}' ><span ng-bind="friend.firstName"></span>&nbsp;<span ng-bind="friend.lastName"></span></a>
                                    </div>
                                    <div >
                                        <span style="font-size: 12px"> Mutual friends </span> 
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
