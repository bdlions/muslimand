<div class="modal fade" id="modal_delete_member_comment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="modal-title" id="myModalLabel">Delete Comment</h4>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal-body" style="padding-left: 50px;">
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="text-align: center;">Are you sure you want to delete this comment?</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-6 col-md-2">
                        <input type="button" class="close modal_cancel_button_style" data-dismiss="modal" aria-hidden="true" value="Cancel">
                    </div>
                    <div class="col-md-2">
                        <input id="delete_comment_line_3" type="button" class="default_button form-control" value="Delete" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_delete_member_comment() {
        $('#modal_delete_member_comment').modal('show');
    }
    ;

    $('#delete_comment_line_3').on('click', function () {
        $('#single_comment_line_3').hide();
    });
</script>