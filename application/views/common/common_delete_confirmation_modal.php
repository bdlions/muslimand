<script>
    $(function() {
        $('#delete_content_btn_1').on('click', function() {
            $('#shared_link_content_1').hide();
        });
    });

</script>
<div class="modal fade" id="common_delete_confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="modal-title" >Delete Item</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="text-center">Are you sure to delete this item?</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-offset-8 col-md-2">
                        <input id="delete_content_btn_1" type="button" class="default_button form-control form_control_custom_style" value="Yes" >
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="close modal_cancel_button_style default_button form-control form_control_custom_style" data-dismiss="modal" aria-hidden="true" value="No">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

