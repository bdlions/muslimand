   
<script>
    function confirm_request(friendId) {
        angular.element($('#confirm_friend_id_2')).scope().approveRequest(friendId, function () {
            $("#confirm_friend_id_2").hide();
            $("#friend_request_accept_id").show();
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

    <div class="pagelet" ng-repeat="pFriend in prndingFriends">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_9.jpg" width="40" height="40">
            </div>
            <div class="col-xs-4">
                <a style="font-size: 12px; font-weight: bold;" href >{{pFriend.firstName}} &nbsp; {{pFriend.lastName}}</a>
            </div>
            <div class="col-xs-6">
                <div class="pull-right">
                    <div ng-if="pFriend.relationTypeId == constants.pending_relation_type_id">
                        <button  id="confirm_friend_id_2" type="submit" class="btn btn-xs" style="background-color: #703684; color: white" onclick="confirm_request(angular.element(this).scope().pFriend.userId)">Confirm</button>
                        <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white" ngclick="deleteRequest(pFriend.userId)">Delete Request</button>
                    </div>
                    <div  id="friend_request_accept_id" style="display: none">
                        <button type="button" class=" btn btn-default">Friend</button>   
                    </div>
                </div>
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
    <div class="pagelet">
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
    </div>
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#">Jannatul Ferdaus</a><br>
                <a style="font-size: 11px; color: black;" href="#">49 mutual friends</a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#">Fatematul Kobra</a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#">Sharmin Akter</a><br>
                <a style="font-size: 11px; color: black;" href="#">21 mutual friends</a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_8.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#"><b>Mohammad Rafique</b></a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#">Jannatul Ferdaus</a><br>
                <a style="font-size: 11px; color: black;" href="#">21 mutual friends</a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>  
    <div class="pagelet">
        <div class="row">
            <div class="col-xs-2">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_3.jpg" width="40" height="40">
            </div>
            <div class="col-xs-6">
                <a style="font-size: 12px; font-weight: bold;" href="#">Barak Obama</a>
            </div>
            <div class="col-xs-4">
                <div class="pull-right">
                    <button type="submit" class="btn btn-xs" style="background-color: #703684; color: white">Add Friend</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="border-top: 1px solid lightgray;"class="pagelet message_friends_box_1">
    <div class="row">
        <div class="col-xs-12">
            <div style="text-align: center; font-weight: bold;"><a href="<?php echo base_url(); ?>member/add_friends">See All</a></div>
        </div>
    </div>
</div>


