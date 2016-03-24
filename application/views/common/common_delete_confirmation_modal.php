<script>
    var responseFunction;
    function delete_confirmation(selectionInfo, requestFunction)
    {
        responseFunction = requestFunction;
        $("#content").append(selectionInfo);
        $('#common_delete_confirmation_modal').modal('show');

    }

    function delete_comfirm(comfirm_btn) {
        var confirmValue = $(comfirm_btn).val();
        responseFunction(confirmValue);

    }
    function delete_cancel(cancel_btn) {
        var cancelValue = $(cancel_btn).val();
        responseFunction(cancelValue);
    }

</script>
<div class="modal fade" id="common_delete_confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h4 class="modal-title" >Delete Item</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-12">
                        <div id="delete_id" class="text-center"></div>
                        <div class="text-center">
                            <span >Are you sure to delete this </span>
                            <span id="content"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-offset-8 col-md-2">
                        <input id="delete_content_btn" type="button" class="default_button form-control form_control_custom_style" value="Yes" onClick="delete_comfirm(this)" >
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="close modal_cancel_button_style default_button form-control form_control_custom_style" data-dismiss="modal" aria-hidden="true" value="No" onClick="delete_cancel(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

