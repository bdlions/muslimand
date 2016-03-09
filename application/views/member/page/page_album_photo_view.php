<?php $this->load->view("member/page/section/cover"); ?>
<div class="row form-group">
    <div class="col-md-5">
        <?php $this->load->view("member/page/section/left_panel"); ?>
    </div>
    <div class="col-md-7">
        <?php $this->load->view("member/page/section/top_menu_bar"); ?>
        <?php $this->load->view("member/page/section/page_title"); ?>

        <div ng-app="app.Photo">
            <div class="row pagelet" style="margin-right: 0;">
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
                    <a href="<?php echo base_url(); ?>photos/" class="anchor_property_change"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photos</span></a>
                </div>
                <div class="col-md-6">
                    <div class="pull-right">
                        <a href="<?php echo base_url(); ?>pages/pages_photo_add"><button style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Add Photo</span></button></a>
                    </div>
                </div>
            </div>
            <div class="row" ng-controller="photoController" ng-clock>
                <div ng-init="setAlbumPhotoList(<?php echo htmlspecialchars(json_encode($photo_list)); ?>)" >
                    <div class="col-md-12" ng-init="setAlbumInfo(<?php echo htmlspecialchars(json_encode($album_info)); ?>)" >
                        <?php $this->load->view("member/page/section/view_page_album_photos"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
