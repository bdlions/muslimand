<div class="row">
    <div class="col-md-12">
        <div style="position: relative;">
            <img src="<?php echo base_url() ?>resources/images/car.jpg" width="100%" height="250">
            <a class="profilePicThumb" href="#">
                <img style="border: 6px solid whitesmoke; position: absolute; bottom: 1px; left: 1px;" class="img-circle profilePic img" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="160px" height="160px">
            </a>
            <a style="position: absolute; bottom: 2px; left: 190px; color: white;"class="btn" href="">
                <b>Mohammad Azhar Uddin</b>
            </a>
            <!--            <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  140px; font-size: 80%">Update Info</button>
            <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  20px; font-size: 80%">View Activity Log</button>-->
            <button type="button" class="addFriendRequestId btn btn-default" style="position: absolute; bottom: 20px; right:  160px; font-size: 80%" ng-click="addFriend()" >Add Friend</button>
            <button type="button" class="FriendRequestSentId btn btn-default  " style="display: none ; position: absolute; bottom: 20px; right:  160px; font-size: 80%" ng-click="" >Friend Request Sent</button>
            <button type="button" class="btn btn-default" style="position: absolute; bottom: 20px; right:  80px; font-size: 80%">Message</button>
            <div class="dropdown dropdown_style">
                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Report</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Block</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div style="background-color: whitesmoke">
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default" style="font-size: 100%">Timeline</button>
                <button type="button" class="btn btn-default get_over_view_class" style="font-size: 100%" onclick="getOverview('<?php echo $user_id; ?>')">About</button>
                <button type="button" class="btn btn-default" style="font-size: 100%">Photo</button>
                <button type="button" class="btn btn-default" style="font-size: 100%">Friends</button>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        More
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Groups</a></li>
                        <li><a href="#">Likes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>