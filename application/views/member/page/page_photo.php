<?php $this->load->view("member/page/section/cover"); ?>
<div class="row form-group">
    <div class="col-md-5">
        <?php $this->load->view("member/page/section/left_panel"); ?>
    </div>
    <div class="col-md-7">
        <?php $this->load->view("member/page/section/top_menu_bar"); ?>
        <?php $this->load->view("member/page/section/page_title"); ?>

        <div ng-controller="photoController" ng-clock>
            <div class="row pagelet">
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
                    <a href="<?php echo base_url(); ?>photos/" class="anchor_property_change"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
                </div>
                <div class="col-md-6">
                    <div class="pull-right">
                        <a href="<?php echo base_url(); ?>pages/pages_photo_add"><button style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Add Photo</span></button></a>
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
                        <a id="page_album_button" href="" class="btn btn-default">Albums</a>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12" ng-init="setUserAlbumList(<?php echo htmlspecialchars(json_encode($user_album_list)); ?>)" >
                    <?php $this->load->view("member/page/section/page_photo_albums"); ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12" >
                    <?php $this->load->view("member/page/section/page_random_photos"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#page_photo_button").click(function() {
        $("#page_photo_albums").hide();
        $("#page_random_photos").show();
    });
    $("#page_album_button").click(function() {
        $("#page_random_photos").hide();
        $("#page_photo_albums").show();
    });
    $(function() {
        var selector = '.page_photo_menu_list_inline a';
        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
    });

</script>