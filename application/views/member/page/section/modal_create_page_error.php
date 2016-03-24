<div class="modal fade" id="modal_create_page_error_msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h4 class="modal-title">Error</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body" >
                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="create_page_error_msg_border">It looks like you already manage a Page named Prime Bank. Please choose a different name or</div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-offset-6 col-md-6">
                        <a class="create_page_error_msg_anchor_border">Go to your current page</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#brand_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#product_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#group_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#community_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#business_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#place_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#entertainment_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#company_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#organization_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#institution_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#band_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
        $('#public_creating_page_button').on('click', function() {
            $('#modal_create_page_error_msg').modal('show');
        });
    });
</script>