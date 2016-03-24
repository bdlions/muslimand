<script type="text/javascript">

    function open_modal_delete_photo_category() {
//        alert("Gfdg");
        
        $("#modal_delete_photo_category").modal('show');        
    }
</script>
<div class="modal fade" id="modal_delete_photo_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Photo category</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="row form-group">
                        <div class ="col-sm-2"></div>
                        <label class="col-sm-10 control-label">Are you sure to delete this photo category?</label>
<!--                        <input id="input_menu_id" name="input_menu_id" value="" type="hidden" class="form-control"/>-->
                    </div>
                </div>                
            </div>
            <div class="modal-footer">
                <div class ="col-md-6">
                    
                </div>
                <div class ="col-md-3">
                    <button style="width:100%" id="button_delete_menu" name="button_delete_menu" value="" class="form-control btn button-custom pull-right btn_custom_button">Delete</button>
                </div>
                <div class ="col-md-3">
                    <button style="width:100%" type="button" class="btn button-custom btn_custom_button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->