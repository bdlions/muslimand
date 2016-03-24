<div class="modal fade" id="modal_share_content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h4 class="modal-title" id="myModalLabel">Share This Video</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="float: left; padding-right: 10px;">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg" width="40" height="40">
                        </div>
                        <div style="float: left;">
                            <div>
                                <a style="font-weight: bold;"href="#">Fatematul Kobra</a> shared 
                                <a href="#">Maria Islam</a>'s video.
                            </div>
                            <div>
                                January 03, 2015 at 10:45am.
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <iframe src="http://www.youtube.com/embed/W7qWa52k-nE" frameborder="0" allowfullscreen></iframe>
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
                        <input type="button" class="close modal_cancel_button_style" data-dismiss="modal" aria-hidden="true" value="Cancel">
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="button-custom" value="Share Video" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_share_content() {
        $('#modal_share_content').modal('show');
    }
</script>