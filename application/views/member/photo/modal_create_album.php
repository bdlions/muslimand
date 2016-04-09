<div class="modal fade" id="modal_create_album_box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal_dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div style="text-align: center;"><h4 class="modal-title" id="myModalLabel">Create a New Photo Album</h4></div>
            </div>
            <div class="modal-body" style="padding-left: 50px;">
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        *Name:<br>
                        <input class="form-control" id="album_title_id" type="text"  ng-model="albumInfo.title">
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        Description:<br>
                        <textarea class="form-control form_control_custom_style textarea_custom_style" ng-model="albumInfo.description"></textarea>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-xs" id="album_create_id" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;" onclick="create_album()">Submit</button>
                    </div>
                </div>
                <div class="row padding_top_10px">
                    <div class="col-md-12">
                        * Required Fields
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
    function create_album() {
        var title = $('#album_title_id').val();
        if (title.length == 0) {
            alert("Please Give the Title of your Album");
            return;
        }
        angular.element($('#album_create_id')).scope().createAlbum(function () {
            $('#modal_create_album_box').modal('hide');
        });
    }}
</script>