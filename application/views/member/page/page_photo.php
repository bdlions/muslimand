<script>
    $(function () {
        $('#photo_sub').on('click', function () {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function () {
            $('.video_test').show();
        });
        $('#timeLineContent').show();
        $('#updateStatusPagelet').show();
        $('#aboutPageMenu').on('click', function () {
            $('#timeLineContent').hide();
            $('#updateStatusPagelet').hide();
            $('#pageAboutContent').show();
        });
        $('#timelinePageMenu').on('click', function () {
            $('#pageAboutContent').hide();
            $('#timeLineContent').show();
            $('#updateStatusPagelet').show();
        });
        $('#photoPageMenu').on('click', function () {
            $('#pageAboutContent').hide();
            $('#timeLineContent').hide();
            $('#updateStatusPagelet').hide();
        });
        $('#aboutPageMenu').on('click', function () {
            alert("here");
            $('#pageAboutContent').show();
            $('#timeLineContent').hide();
            $('#updateStatusPagelet').hide();
        });
        $('#page_photo_upload_section').hide();
//        $('#page_add_photo_id').on('click', function () {
//            $('#page_photo_upload_section').show();
//            $('#page_photo_display_section').hide();
//        });
    });
</script>

<div ng-controller="pageController">
    <div ng-init="setPageBasicInfo(<?php echo htmlspecialchars(json_encode($page_info)) ?>)">
        <div ng-init="setMemberInfo(<?php echo htmlspecialchars(json_encode($member_info)) ?>)">
            <div  ng-init="setUserGender(<?php echo htmlspecialchars(json_encode($user_gender_id)); ?>)">
                <?php $this->load->view("member/page/section/cover"); ?>

                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="margin-left: 15px;">
                            <div style="margin-right: 5px;">
                                <?php $this->load->view("member/page/section/top_menu_bar"); ?>
                            </div>
                            <?php $this->load->view("member/page/section/photo_page_title"); ?>
                            <div id="page_photo_display_section" style="margin-right: 18px;" ng-clock >
                                <div class="row pagelet">
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
                                        <a href="<?php echo base_url(); ?>photos/" class="anchor_property_change"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pull-right">
                                            <a id="page_add_photo_id" onclick="get_page_album_list()"><button style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Add Photo</span></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group pagelet">
                                    <div class="col-md-offset-1 col-md-5">
                                        <div class="page_photo_menu_list_inline">
                                            <a id="page_photo_button" href="" class="btn btn-default active">Photos</a>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1 col-md-5">
                                        <div class="page_photo_menu_list_inline">
                                            <a id="page_album_button_id" onclick="get_album_list()" href="" class="btn btn-default">Albums</a>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="row form-group">
                                            <div class="col-md-12" >
                                                <?php $this->load->view("member/page/section/view_page_album_photos"); ?>
                                            </div>
                                        </div>
                                        <div class="row form-group" ng-init="setTimelineList(<?php echo htmlspecialchars(json_encode($photo_list)); ?>)" >
                                            <div class="col-md-12"  >
                                                <?php $this->load->view("member/page/section/all_photos"); ?>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-12" >
                                                <?php $this->load->view("member/page/section/page_photo_albums"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="page_photo_upload_section" style="display: none" >
                                <?php $this->load->view("member/page/section/page_photo_add"); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("member/page/section/slider_photo_modal"); ?>
    </div>
</div>
<script>
    function get_album_list() {
        var pageId = '<?php echo $page_id; ?>';
        angular.element($('#page_album_button_id')).scope().getPageAlbumList(pageId, function () {
            $("#all_photos").hide();
            $("#all_album_photos").hide();
            $("#page_photo_albums").show();
        });

    }
    function get_page_album(albumId) {
        var pageId = '<?php echo $page_id; ?>';
        angular.element($('#album_id_' + albumId)).scope().getPageAlbum(albumId, pageId, function () {
            $("#all_photos").hide();
            $("#page_photo_albums").hide();
            $("#all_album_photos").show();
        });
    }
    function get_page_album_list() {
        var pageId = '<?php echo $page_id; ?>';
        angular.element($('#page_add_photo_id')).scope().getPageAlbums(pageId, function () {
            $('#page_photo_display_section').hide();
            $('#page_photo_upload_section').show();

        });

    }

    $(function () {
//        $('#page_add_photo_id').on('click', function () {
//
//            $('#page_photo_display_section').hide();
//            $('#page_photo_upload_section').show();
//        });


        $("#page_photo_button").click(function () {
            $("#page_photo_albums").hide();
            $("#all_album_photos").hide();
            $("#all_photos").show();
        });
//        $("#page_album_button").click(function () {
//            $("#all_photos").hide();
//            $("#page_photo_albums").show();
//        });

        var selector = '.page_photo_menu_list_inline a';
        $(selector).on('click', function () {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
    });

</script>