<div class="bootstrap_custom scroll_style">
    <div class="examples">
        <div class="modal fade" id="modal_shared_people_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">People Who Shared This</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row modal_content_row_border_full" ng-repeat="sharedUser in shareList">
                            <div class="col-md-2">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_8.jpg"  width="30" height="30">
                            </div>
                            <div class="col-md-7">
                                {{sharedUser.userInfo.firstName}}&nbsp{{sharedUser.userInfo.lastName}}
                            </div>
                            <div class="col-md-3">
                                <input id="add_friend_id_1" type="button" class="default_button form-control form_control_custom_style" value="Add Friend" >
                                <div id="friend_list_id_1" class="btn-group" role="group" style=" display: none;">
                                    <button class="btn btn-default dropdown-toggle button-custom" aria-expanded="false" data-toggle="dropdown" type="button">
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
            $("#modal_shared_people_list .modal-body").mCustomScrollbar({
                setHeight: 340,
                theme: "minimal-dark"
            });
        });
    })(jQuery);
</script>
