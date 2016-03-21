<div class="modal fade" id="modal_page_invitation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
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
                        <div style="margin-left: -20px;" class="input-group">
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
                                                    <div id="type_ahead_user">
                                                        <div id="dropdown_design_user">
                                                            <div class="row margin_style">
                                                                <a href="" class="user_anchor">
                                                                    <div class="col-md-2">
                                                                        <div class="profile-background profile_background_search_bar user_image_id">                                                                    
                                                                            <img onerror="userImageOnError(this)" class="user_image img-responsive profile-photo" src="" alt="">
                                                                            <!--<div class="signature_id" style="visibility:hidden;height:0px"></div>-->
                                                                            <img alt="" class="user_on_error_image img-responsive on-error-profile-photo" src="" style="visibility:hidden;height: 0px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10 font_12px">
                                                                        <div style="padding-top: 7px; padding-top: 7px" class="user_name">
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
                                (function($) {
                                    $(window).load(function() {
                                        $("#page_invitation_list .ticker").mCustomScrollbar({
                                            setHeight: 300,
                                            theme: "dark-3"
                                        });
                                    });
                                })(jQuery);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body" >
                <div id="page_invitation_list" >
                    <div class="ticker">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <div class="row form-group" id="find_row_01">
                                    <div class="col-md-2">
                                        <img src="<?php echo base_url(); ?>resources/images/profile_picture/25x25/25x25_1.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="font_bold chatting_user_name">Alamgir Kabir</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="page_invitation_id_01" type="button" class="button-custom" value="Invite">
                                        <span id="successful_page_invitation_id_01" class="content_hidden">Invite sent</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row form-group" id="find_row_02">
                                    <div class="col-md-2">
                                        <img src="<?php echo base_url(); ?>resources/images/profile_picture/25x25/25x25_2.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="font_bold chatting_user_name">Rashida Suntana</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="page_invitation_id_02" type="button" class="button-custom" value="Invite">
                                        <span id="successful_page_invitation_id_02" class="content_hidden">Invite sent</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <div class="row form-group" id="find_row_03">
                                    <div class="col-md-2">
                                        <img src="<?php echo base_url(); ?>resources/images/profile_picture/25x25/25x25_1.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="font_bold chatting_user_name">Nazmul Hasan</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="page_invitation_id_03" type="button" class="button-custom" value="Invite">
                                        <span id="successful_page_invitation_id_03" class="content_hidden">Invite sent</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row form-group" id="find_row_04">
                                    <div class="col-md-2">
                                        <img src="<?php echo base_url(); ?>resources/images/profile_picture/25x25/25x25_2.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="font_bold chatting_user_name">Salma Akter</span>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="page_invitation_id_04" type="button" class="button-custom" value="Invite">
                                        <span id="successful_page_invitation_id_04" class="content_hidden">Invite sent</span>
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
    function open_modal_page_invitation() {
        $('#modal_page_invitation').modal('show');
    }
    $('#page_invitation_id_01').on('click', function() {
        $('#page_invitation_id_01').hide();
        $('#successful_page_invitation_id_01').show();
        $('#find_row_01').addClass("successful_page_invitation_bg");
    });
    $('#page_invitation_id_02').on('click', function() {
        $('#page_invitation_id_02').hide();
        $('#successful_page_invitation_id_02').show();
        $('#find_row_02').addClass("successful_page_invitation_bg");
    });
    $('#page_invitation_id_03').on('click', function() {
        $('#page_invitation_id_03').hide();
        $('#successful_page_invitation_id_03').show();
        $('#find_row_03').addClass("successful_page_invitation_bg");
    });
    $('#page_invitation_id_04').on('click', function() {
        $('#page_invitation_id_04').hide();
        $('#successful_page_invitation_id_04').show();
        $('#find_row_04').addClass("successful_page_invitation_bg");
    });
</script>