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
                        <textarea rows="4" cols="70" ng-model="statusShareInfo.description"></textarea>
                        <input type="hidden" id="status_id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="float: left; padding-right: 10px;">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg" width="40" height="40">
                        </div>
                        <div style="float: left;">
                            <div>
                                <a style="font-weight: bold;"href id="status_user_id"><span id="user_frist_name"></span>&nbsp;<span id="user_last_name"></span></a>
                            </div>
                            <div>
                                January 03, 2015 at 10:45am.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row from-group">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <span id="old_description"></span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                        <input type="button" id="status_shared_add_id" class="default_button form-control" value="Share" onclick="share_status()" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function share_status() {
        var oldStatusInfo = new Array();
        oldStatusInfo['statusId'] = $("#status_id").val();
        oldStatusInfo['statusUserId'] = $("#status_user_id").val();
        oldStatusInfo['fristName'] = $("#user_frist_name").val();
        oldStatusInfo['lastName'] = $("#user_last_name").val();
        oldStatusInfo['description'] = $("#old_description").val();
        angular.element($('#status_shared_add_id')).scope().shareStatus(oldStatusInfo, function () {
            $('#modal_share_content').modal('hide');
        });
//        console.log(oldStatusInfo);
    }
</script>