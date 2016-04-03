<div class="row form-group" ng-controller="friendController" ng-cloak >
    <div class="col-md-12">
        <?php $this->load->view("member/timeline/profile_cover"); ?>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-6">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
        <a href="<?php echo base_url(); ?>photos/" class="anchor_property_change"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photos</span></a>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <button id="create_new_album" style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Create Album</span></button>
            <a href="<?php echo base_url();   ?>photos/add_photos"><button style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Add Photo</span></button></a>
        </div>
    </div>
</div>
<div class="row" ng-controller="photoController" ng-clock>
    <div ng-init="setAlbumPhotoList(<?php echo htmlspecialchars(json_encode($photo_list)); ?>)" >
        <div class="col-md-12" ng-init="setAlbumInfo(<?php echo htmlspecialchars(json_encode($album_info)); ?>)" >
            <?php $this->load->view("member/photo/section/view_album_photos"); ?>
        </div>
    </div>
</div>
<div class="row form-group">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div id="footer">
            <?php $this->load->view("auth/sections/member_footer"); ?>
        </div>
    </div>
</div>
