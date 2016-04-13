<div class="bootstrap_custom scroll_style">
    <div class="examples">
        <div class="modal fade" id="modal_liked_people_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal_dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">People Who Liked This</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row modal_content_row_border_full" ng-repeat="likedUser in likeList">
                            <div class="col-md-2">
                                <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30 ?>30x30_{{likedUser.userInfo.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W30_H30; ?>{{likedUser.userInfo.userId}}.jpg?time=<?php echo time(); ?>" width="30" height="30" >
                            </div>
                            <div class="col-md-7">
                                <a href="<?php echo base_url(); ?>member/timeline/{{likedUser.userInfo.userId}}" ng-if="likedUser.userInfo.userId != '<?php echo $user_id; ?>'" >
                                    {{likedUser.userInfo.firstName}}&nbsp{{likedUser.userInfo.lastName}}
                                </a>
                                <a href="<?php echo base_url(); ?>member/timeline/{{likedUser.userInfo.userId}}" ng-if="likedUser.userInfo.userId == '<?php echo $user_id; ?>'" >
                                    you
                                </a>
                            </div>
                            <div class="col-md-3" ng-if="likedUser.userInfo.userId != '<?php echo $user_id; ?>'">
                                <input id="add_friend_id_1" type="button" class="default_button form-control form_control_custom_style" value="Friend" >
                                <div id="friend_list_id_1" class="btn-group" role="group" style=" display: none;">
                                    <button class="btn button-custom dropdown-toggle button-custom" aria-expanded="false" data-toggle="dropdown" type="button">
                                        Friend
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a>Get notifications</a>
                                        </li>
                                        <li>
                                            <a>Unfriend</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <input class="close modal_cancel_button_style" type="button" value="Cancel" aria-hidden="true" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    (function ($) {
        $(window).load(function () {
            $("#modal_liked_people_list .modal-body").mCustomScrollbar({
                setHeight: 340,
                theme: "minimal-dark"
            });
        });
    })(jQuery);
</script>
