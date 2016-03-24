<div class="modal fade" id="modal_report_post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="modal-title" id="myModalLabel">Report about this post</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body" style="padding-left: 50px;">
                <div class="row">
                    <div class="col-md-12">
                        You are about to report a violation of our <a href="<?php echo base_url(); ?>footer/terms">Terms of Use</a>.
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        All reports are strictly confidential. 
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <select class="form-control form_control_custom_style">
                            <option>Nudity or Pornography</option>
                            <option>Violence</option>
                            <option>Attacks Individual or Groups</option>
                            <option>Copyright Infringement</option>
                        </select>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        Your comment: (optional)
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row  form-group">
                    <div class="col-md-6">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <input type="submit" class="default_button form-control form_control_custom_style" value="Submit" >
                    </div>
                    <div class="col-md-10"></div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-offset-9 col-md-2">
                        <input type="button" class="close modal_cancel_button_style" data-dismiss="modal" aria-hidden="true" value="Cancel">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_report_post() {
        $('#modal_report_post').modal('show');
    }
</script>