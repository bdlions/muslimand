<div class="modal fade" id="modal_page_invitation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="modal-title">Invite Friends</h4>
                    </div>
                    <div class="col-md-6">
<!--                        <div style="margin-left: -20px;" class="input-group">
                            <span style="margin-bottom: 10px; padding: 3px 12px!important;" class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                            <input type="text" placeholder="Search for people and interests" class="form-control" id="typeahead" style="height: 26px; padding: 3px 8px!important; ">
                            <div style="display: none; top: 27px" id="page_late_id" class="row pixel_perfection pagelet_z_index">
                                <div class="col-xs- 10 col-sm-10 col-md-10 col-lg-10">
                                    <div class="search_pagelet">
                                        <div id="users_temp">
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <span class="pagelet_title">People</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <div id="user">
                                                        <div id="user_temp">
                                                            <div class="row margin_style">
                                                                <a href="" class="user_anchor_id">
                                                                    <div class="col-md-2">
                                                                        <div class="profile-background profile_background_search_bar user_image">                                                                    
                                                                            <img onerror="userImageOnError(this)" class="user_image img-responsive profile-photo" src="" alt="">
                                                                            <div class="signature_id" style="visibility:hidden;height:0px"></div>
                                                                            <img alt="" class="user_on_error_image img-responsive on-error-profile-photo" src="" style="visibility:hidden;height: 0px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10 font_12px">
                                                                        <div style="padding-top: 7px; padding-top: 7px" class="user_name_class">
                                                                        </div>
                                                                    </div>
                                                                </a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>

                                function userImageOnError(img) {
                                    var div = img.parentNode;
                                    var firstImage = img;
                                    var secondImage = div.getElementsByTagName('img')[1];
                                    var image = secondImage.src;
                                    firstImage.src = image;
                                }
                            </script> 
                            <script>
                                (function ($) {
                                    $(window).load(function () {
                                        $("#page_invitation_list .ticker").mCustomScrollbar({
                                            setHeight: 300,
                                            theme: "dark-3"
                                        });
                                    });
                                })(jQuery);
                            </script>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="modal-body" >
                <div id="page_invitation_list" >
                    <div class="ticker">
                        <div class="row form-group"> 
                            <div class="col-md-6" ng-repeat="inviteMemberInfo in inviteFriendList">
                                <div class="row form-group" id="find_row_01">
                                    <div class="col-md-2">
                                        <img fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25 ?>25x25_{{inviteMemberInfo.friendInfo.genderId}}.jpg" style="border: 1px solid lightgray" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W25_H25; ?>{{inviteMemberInfo.friendInfo.userId}}.jpg?time= <?php echo time(); ?>" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="font_bold chatting_user_name">{{inviteMemberInfo.friendInfo.firstName}} &nbsp {{inviteMemberInfo.friendInfo.lastName}}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <div ng-if="inviteMemberInfo.status == '<?php echo PAGE_MEMBER_STATUS_ID_INVITED ?>'">
                                            <input id="" type="button" class="button-custom" value="Invited">
                                        </div>
                                        <div ng-if="inviteMemberInfo.status == '<?php echo PAGE_MEMBER_STATUS_ID_LIKED ?>'">
                                            <input id="" type="button" class="button-custom" value="Liked">
                                        </div>
                                        <div onclick="add_invitation(angular.element(this).scope().inviteMemberInfo.friendInfo)" ng-if="inviteMemberInfo.status != '<?php echo PAGE_MEMBER_STATUS_ID_LIKED ?>' && inviteMemberInfo.status != '<?php echo PAGE_MEMBER_STATUS_ID_INVITED ?>'">
                                            <input id="page_invitation_id" type="button" class="button-custom" value="Invite sent">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<script>

    function add_invitation(friendInfo) {
        var pageId = '<?php echo $page_id; ?>'
        angular.element($('#page_invitation_id')).scope().addInvitation(pageId, friendInfo, function () {
        });

    }
//    $('#page_invitation_id_01').on('click', function () {
//        $('#page_invitation_id_01').hide();
//        $('#successful_page_invitation_id_01').show();
//        $('#find_row_01').addClass("successful_page_invitation_bg");
//    });
//    $('#page_invitation_id_02').on('click', function () {
//        $('#page_invitation_id_02').hide();
//        $('#successful_page_invitation_id_02').show();
//        $('#find_row_02').addClass("successful_page_invitation_bg");
//    });
//    $('#page_invitation_id_03').on('click', function () {
//        $('#page_invitation_id_03').hide();
//        $('#successful_page_invitation_id_03').show();
//        $('#find_row_03').addClass("successful_page_invitation_bg");
//    });
//    $('#page_invitation_id_04').on('click', function () {
//        $('#page_invitation_id_04').hide();
//        $('#successful_page_invitation_id_04').show();
//        $('#find_row_04').addClass("successful_page_invitation_bg");
//    });
</script>