<div class="modal fade" id="modal_share_album" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h4 class="modal-title" id="myModalLabel">Share This Album</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-12">
                        <textarea ng-model="albumSharedInfo.description"> </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-offset-4 col-md-3">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Everyone
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a>Everyone</a></li>
                                <li><a>Friends</a></li>
                                <li><a>Friends of Friends</a></li>
                                <li><a>Only Me</a></li>
                                <li><a>Custom</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="close modal_cancel_button_style" data-dismiss="modal" aria-hidden="true" value="Cancel">
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" id="album_shared_id">
                        <input type="button" class="default_button form-control"  value="Share" id="add_album_share_id" onclick="add_album_share()">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function add_album_share(){
    var albumId = $("#album_shared_id").val();
     angular.element($('#add_album_share_id')).scope().addAlbumshare(albumId, function () {
           
        });
}    
</script>


