<div class="modal fade" id="modal_blog_category_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Blog Category</h4>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <span style="text-align: center">Are you sure to Delete this Category?</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-offset-4 col-md-2">
                         <button type="button" class="btn button-custom" >Yes</button>
                    </div>
                    <div class="col-md-3">
                         <button type="button" class="btn button-custom" >No</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-custom" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_blog_category_delete() {
        $('#modal_blog_category_delete').modal('show');
    }
</script>