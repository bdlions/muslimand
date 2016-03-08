<div class="modal fade" id="modal_create_album_box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div style="text-align: center;"><h4 class="modal-title" id="myModalLabel">Create a New Photo Album</h4></div>
            </div>
            <div class="modal-body">
                <div style="padding: 5px 30px;">
                    <div class="row form-group">
                        <div class="col-md-6">
                            *Name:<br>
                            <input class="form-control" id="album_title_id" type="text"  ng-model="albumInfo.title">
                        </div>
                    </div>
                    <div class="row form-group padding_top_10px">
                        <div class="col-md-12">
                            Description:<br>
                            <textarea class="form-control form_control_custom_style textarea_custom_style" ng-model="albumInfo.description"></textarea>
                        </div>
                    </div>
                    <div class="row padding_top_10px">
                        <div class="col-md-6">
                            <span style="font-size: 16px; font-weight: bold;">Album(s) Privacy: </span><br>
                            <select class="form-control" name="control">
                                <option value="0" selected="1">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-12">
                            Control who can see this photo album and any photos associated with it.
                        </div>
                    </div>
                    <div class="row padding_top_10px">
                        <div class="col-md-6">
                            <span style="font-size: 16px; font-weight: bold;">Comment Privacy: </span><br>
                            <select class="form-control" name="control">
                                <option value="0" selected="1">Everyone</option>
                                <option value="1">Friends</option>
                                <option value="2">Friends of Friends</option>
                                <option value="3">Only Me</option>
                                <option value="4">Custom</option>
                            </select>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-12">
                            Control who can comment on this photo album and any photos associated with it.
                        </div>
                    </div>
                    <div class="row form-group padding_top_10px">
                        <div class="col-md-6">
                            <button class="btn btn-xs" id="create_album_btn" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;" onclick="create_album()">Submit</button>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            * Required Fields
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function create_album() {
        var title = $('#album_title_id').val();
        if (title.length == 0) {
            alert("Please Give the Title of your Album");
            return;
        }
        angular.element($('#create_album_btn')).scope().createAlbum(function() {
            $('#modal_create_album_box').modal('hide');
        });
    }
</script>

