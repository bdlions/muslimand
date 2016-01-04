<div class="row form-group">
    <div class="col-md-9">
        <span style="font-size: 16px; font-weight: bold;">You are watching:</span>
    </div>
    <div class="col-md-3">
        <button class="button-custom pull-right" onclick="open_modal_delete_video(angular.element(this).scope().videoDetail.videoId)" >Delete </button>
    </div>
</div>
<div class="pagelet_divider"></div>
<div class="row form-group"></div>
<div class="row form-group">
    <div class="col-md-12">
        <?php echo $video_url; ?>
    </div>
</div>
  <?php $this->load->view("common/common_delete_confirmation_modal"); ?>
<script>
    function open_modal_delete_video(videoId) {
//        var videoId = videoInfo.videoId;
        var selectionInfo = " Video ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == '<?php echo MODAL_DELETE_YES; ?>') {
                angular.element($('#delete_content_btn')).scope().deleteVideo(videoId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    window.location = '<?php echo base_url(); ?>videos';
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
</script>
