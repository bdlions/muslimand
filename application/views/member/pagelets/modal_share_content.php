<div class="modal fade" id="modal_share_content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h4 class="modal-title" id="myModalLabel">Share This Status</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-12">
                        <textarea class="textarea_custom_style" ng-model="statusShareInfo.description"></textarea>
                        <input type="hidden" id="status_id">
                        <!--<input type="hidden" id="status_type_id">-->
                        <input type="hidden" id="image">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="float: left; padding-right: 10px;">
                            <img id="shared_user_profile_picture_set_id" src="" width="40" height="40" fallback-src="">
                        </div>
                        <div style="float: left;">
                            <div>
                                <a style="font-weight: bold;"href id="status_user_id">
                                    <span id="user_first_name"></span>&nbsp;<span id="user_last_name"></span>
                                </a>
                            </div>
                            <div>
                                <!--January 03, 2015 at 10:45am.-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row from-group">
                    <div class="col-md-12">
                        <span id="old_description"></span>
                        <span id="status_type_id"></span>
                        <!--use when share a video-->
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-offset-5 col-md-3">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn button-custom dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
                        <input type="button" class="close modal_cancel_button_style" data-dismiss="modal" aria-hidden="true" value="Cancel" onclick="close()">
                    </div>
                    <div class="col-md-2">
                        <input type="button" id="status_shared_add_id" class="button-custom" value="Share" onclick="share_status()" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    function share_status() {
        angular.element($('#status_shared_add_id')).scope().shareStatus(function() {
            $("#user_first_name").val("");
            $("#user_last_name").val("");
            $("#old_description").val("");
            $('#modal_share_content').modal('hide');
            window.location = '<?php echo base_url(); ?>member/newsfeed';
        });
    }
</script>