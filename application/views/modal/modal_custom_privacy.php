<div class="modal fade" id="modal_custom_privacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h4 class="modal-title" id="myModalLabel">Custom Privacy</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body" >
                <div class="row form-group">
                    <div class="col-md-offset-1 col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/modal/add.png">
                    </div>
                    <div class="col-md-4">
                        <span style="font-size: 18px; vertical-align: top;">Share this with</span>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-4">
                        These people
                    </div>
                    <div class="col-md-6">
                        <input class="form-control form_control_custom_style" placeholder="Who can see this?" value="">
                    </div>
                </div>
                <div class="pagelet_divider"></div>
                <div class="row form-group">
                    <div class="col-md-offset-1 col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/modal/cancel.png">
                    </div>
                    <div class="col-md-4">
                        <span style="font-size: 18px; vertical-align: top;">Don't share this with</span>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-4">
                        These people
                    </div>
                    <div class="col-md-6">
                        <input class="form-control form_control_custom_style" placeholder="Who can't see this?" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-offset-7 col-md-2 form-group">
                        <input type="button" class="close modal_cancel_button_style" data-dismiss="modal" aria-hidden="true" value="Cancel">
                    </div>
                    <div class="col-md-3">
                        <input style="font-weight: bold;"type="button" class="form-control form_control_custom_style default_button" value="Save Changes">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_custom_privacy() {
        $('#modal_custom_privacy').modal('show');
    }
    
</script>