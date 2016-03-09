<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.Jcrop.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>resources/css/jquery.Jcrop.css" type="text/css" />
<div class="modal fade bs-example-modal-lg" id="modal_page_photo_display_id" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal_background_color">
            <div class="modal-body" style="background-color: #333;">
                <div class="row form-group">
                    <div class="col-md-offset-11 col-md-1">
                        <button id="close_photo_modal" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7" style="background-color: #333; ">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div id="photo_slider" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/2.jpg" alt="...">
                                            <!--                                    <div class="carousel-caption">
                                                                                    ...
                                                                                </div>-->
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/4.jpg" alt="...">
                                        </div>
                                        <div class="item">
                                            <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/5.jpg" alt="...">
                                        </div>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#photo_slider" role="button" data-slide="prev" style="cursor: pointer;">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#photo_slider" role="button" data-slide="next" style="cursor: pointer;">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="inline pull-right">
                                    <li><button class="button-custom">Make Profile Picture</button></li>
                                    <li><button class="button-custom">Tag Photo</button></li>
                                    <li>
                                        <div class="btn-group dropup">
                                            <button style="margin-left: -8px;" class="button-custom dropdown-toggle" data-toggle="dropdown">
                                                <!--                                            <button class="button-custom">Options</button>-->
                                                Options
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">Download</a></li>
                                                <li> <a id="anchor_make_profile_picture" onclick="make_profile_picture()" href="javascript: void(0)"> Make profile picture </a></li>
                                                <li><a id="anchor_make_cover_picture" onclick="make_cover_picture()" href="javascript: void(0)"> Make Cover Picture </a></li>
                                                <li><a href onclick="open_modal_delete_photo(angular.element(this).scope().photoInfo)">Delete This Photo</a></li>
                                                <li><a id="full_screen_photo_display">Enter Full Screen</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><button class="button-custom">Share</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="modal_photo_pagelet">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-responsive" ng-src="<?php echo base_url();?>resources/images/profile_picture/40x40/Rx9hPNdqmRLRb4i.jpg?time= 1457357330" style="border: 1px solid lightgray" fallback-src="<?php echo base_url();?>resources/images/profile_picture/40x40/40x40_1.jpg" src="<?php echo base_url();?>resources/images/profile_picture/40x40/Rx9hPNdqmRLRb4i.jpg?time= 1457357330">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-10 mrg_left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="float: left;">
                                                        <!--<a style="font-weight: bold;" href="<?php echo base_url();?>member/timeline/Rx9hPNdqmRLRb4i"><span ng-bind="status.userInfo.firstName" class="ng-binding">Alamgir</span>&nbsp;<span ng-bind="status.userInfo.lastName" class="ng-binding">Kabir</span></a>--> 
                                                        <a style="font-weight: bold;" href="<?php echo base_url();?>member/timeline/Rx9hPNdqmRLRb4i"><span class="ng-binding">Alamgir</span>&nbsp;<span class="ng-binding">Kabir</span></a> 
                                                        <!-- ngIf: status.mappingUserInfo != null -->
                                                        <!-- ngIf: 1 == status.statusTypeId -->
                                                        <!-- ngIf: 2 == status.statusTypeId -->
                                                        <!-- ngIf: 4 == status.statusTypeId -->
                                                        <!-- ngIf: 5 == status.statusTypeId -->
                                                        <!-- ngIf: 6 == status.statusTypeId -->
                                                        <!-- ngIf: 3 == status.statusTypeId -->
                                                        <!--<span ng-if="3 == status.statusTypeId" class="ng-scope">-->
                                                        <span class="ng-scope">

                                                            updated 
                                                            <!-- ngIf: 1 == status.genderId --><span ng-if="1 == status.genderId" class="ng-scope">his</span><!-- end ngIf: 1 == status.genderId -->
                                                            <!-- ngIf: 2 == status.genderId -->
                                                            profile picture 
                                                        </span><!-- end ngIf: 3 == status.statusTypeId -->
                                                        <!-- ngIf: 8 == status.statusTypeId -->
                                                        <!-- ngIf: 7 == status.statusTypeId -->
                                                        &nbsp;
                                                        <a style="font-weight: bold;" href="#"> <span class="ng-binding">&nbsp;</span></a>
                                                        <!-- ngIf: 4 == status.statusTypeId --> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div style="float: left;" class="ng-binding">
                                                        1 month ago.
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul style="list-style-type: none; padding: 0;">
                                                        <li class="dropdown">
                                                            <img width="15" height="15" ng-src="h<?php echo base_url();?>resources/images/friends_icon.png" src="<?php echo base_url();?>resources/images/friends_icon.png">
                                                            <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="caret"></span></a>
                                                            <ul role="menu" class="dropdown-menu">
                                                                <li><a href="#">Everyone</a></li>
                                                                <li><a href="#">Friends</a></li>
                                                                <li><a href="#">Friends of friends</a></li>
                                                                <li><a href="#">Only Me</a></li>
                                                                <li><a href="#">Custom</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <ul style="list-style-type: none; padding: 0;">
                                                <li class="dropdown">
                                                    <input type="hidden">
                                                    <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="caret"></span></a>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <!-- ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' --><span ng-if="status.mappingId == 'Rx9hPNdqmRLRb4i'" class="ng-scope">
                                                            <li onclick="select_edit_field(angular.element(this).scope().status.statusId)"><a>Edit</a></li>
                                                        </span><!-- end ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' -->
                                                        <!--<li><a href="#">Report</a></li>-->
                                                        <!-- ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' || status.userId == 'Rx9hPNdqmRLRb4i' --><span ng-if="status.mappingId == 'Rx9hPNdqmRLRb4i' || status.userId == 'Rx9hPNdqmRLRb4i'" class="ng-scope">
                                                            <li><a ng-click="deleteStatus(status.statusId)" href="">Delete</a></li>
                                                        </span><!-- end ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' || status.userId == 'Rx9hPNdqmRLRb4i' -->
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div style="width: 100%;" class="row form-group">
                                        <div class="col-md-12">
                                            <div style="float: left; text-align: justify;">
                                                <div ng-bind="status.description" id="displayStatus3SNXd7ulUTAXfrV" class="ng-binding"></div>
                                            </div>
                                            <div style="display: none;" id="updateStatus3SNXd7ulUTAXfrV">
                                                <form ng-submit="updateStatus(status)" class="ng-pristine ng-valid">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <textarea ng-model="status.description" class="form-control textarea_custom_style ng-pristine ng-untouched ng-valid"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-offset-8 col-md-2">
                                                            <input type="button" value="Cancel" class="button-custom" id="statusUpdateCancel3SNXd7ulUTAXfrV">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="submit" class="button-custom" value="Done" id="submit">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ngRepeat: image in status.images --><div ng-repeat="image in status.images" class="ng-scope">
                                        <!-- ngIf: 3 == status.statusTypeId --><div ng-if="3 == status.statusTypeId" class="ng-scope">
                                            <div class="row from-group">
                                                <div class="col-md-12 form-group">
                                                    <img ng-src="<?php echo base_url();?>resources/images/photos/albums/user_album/Rx9hPNdqmRLRb4i_1454386530.jpg" style="border: 1px solid #703684; float: left;" class="img-responsive" src="<?php echo base_url();?>resources/images/photos/albums/user_album/Rx9hPNdqmRLRb4i_1454386530.jpg">
                                                </div>
                                            </div>
                                        </div><!-- end ngIf: 3 == status.statusTypeId -->
                                        <!-- ngIf: 8 == status.statusTypeId -->
                                    </div><!-- end ngRepeat: image in status.images -->
                                    <!-- ngIf: 3 != status.statusTypeId && 8 != status.statusTypeId -->
                                    <div class="row from-group">
                                        <!-- ngRepeat: image in status.referenceInfo.images -->
                                    </div>

                                    <div class="row from-group">
                                        <div class="col-md-12">
                                            <div style="float: left; text-align: justify" class="ng-binding">

                                            </div>
                                        </div>
                                    </div>
                                    <div style="float: left;" class="row from-group">
                                        <div class="col-md-12">
                                            <!-- ngIf: status.likeStatus != '1' --><span ng-if="status.likeStatus != '1'" class="ng-scope">
                                                <a ng-click="addLike(status.userInfo.userId, status.statusId)" id="statusLike3SNXd7ulUTAXfrV" href="" style="color: #3B59A9;">
                                                    <img src="<?php echo base_url();?>resources/images/like_icon.png"> Like </a>.
                                            </span><!-- end ngIf: status.likeStatus != '1' -->
                                            <!-- ngIf: status.likeStatus == '1' -->
                                            <a onclick="select_comment_field(angular.element(this).scope().status.statusId)" href="" style="color: #3B59A9;">
                                                <img ng-src="<?php echo base_url();?>resources/images/comment_icon.png" src="<?php echo base_url();?>resources/images/comment_icon.png"> Comment </a>.
                                            <a onclick="open_modal_share(angular.element(this).scope().status)" href="" id="share_add_id" style="color: #3B59A9;">
                                                <img ng-src="<?php echo base_url();?>resources/images/share_icon.png" src="<?php echo base_url();?>resources/images/share_icon.png"> Share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagelet_divider"></div>
                                </div>
                            </div>
                            <div class="">

                                <div class="row">
                                    <div profile_picture="" class="col-md-2">
                                        <img ng-src="<?php echo base_url();?>resources/images/profile_picture/30x30/Rx9hPNdqmRLRb4i.jpg?time=1457357330" fallback-src="<?php echo base_url();?>resources/images/profile_picture/30x30/30x30_1.jpg" src="<?php echo base_url();?>resources/images/profile_picture/30x30/Rx9hPNdqmRLRb4i.jpg?time=1457357330">
                                    </div>
                                    <div class="col-md-10">
                                        <form ng-submit="addComment(userGenderId, status.userInfo, status.statusId)" class="ng-pristine ng-valid">
                                            <input type="text" ng-model="statusInfo.commentDes" placeholder="Write a comment" class="form-control ng-pristine ng-untouched ng-valid" id="commentInputField3SNXd7ulUTAXfrV">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("modal/modal_liked_people_list"); ?>
<?php $this->load->view("common/common_delete_confirmation_modal"); ?>
<script type="text/javascript">

    $(document).ready(function() {
        $('.flipbook').pageFlip({});
    });
    $(function() {
        $("#photo_comment_id_focus").on("click", function() {
            $('#photo_comment_field').focus();
        });
    });
    function get_photo_comments(photoId) {
        angular.element($('#photo_more_comment_show')).scope().getPhotoComments(photoId, function() {
            $('#more_photo_comment_id').hide();
        });
    }
    function open_modal_photo_like_list(photoId) {
        angular.element($('#photo_like_list_id')).scope().getPhotoLikeList(photoId, function() {
            $('#modal_liked_people_list').modal('show');
        });
    }
    function add_photo_like(photoId) {
        angular.element($('#photo_like_' + photoId)).scope().addPhotoLike(photoId, function() {
            $("#photo_like_" + photoId).hide();
            $("#photo_dislike_" + photoId).show();
        });
    }
    function get_next_photo(photoInfo) {
        angular.element($('#next')).scope().getNextPhoto(photoInfo, function() {
        });
    }
    function open_modal_delete_photo(photoInfo) {
        //        var photoId = photoInfo.photoId;
        var albumId = photoInfo.albumId;
        var selectionInfo = " Photo ? ";
        delete_confirmation(selectionInfo, function(response) {
            if (response == '<?php echo MODAL_DELETE_YES; ?>') {
                angular.element($('#delete_content_btn')).scope().deletePhoto(photoInfo, function() {
                    $('#common_delete_confirmation_modal').modal('hide');
                    window.location = '<?php echo base_url(); ?>photos/get_album/' + albumId;
                });
            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }




</script>
<script>
    function crop_picture()
    {
        imageInfo = new Array();
        imageInfo['x'] = $('#x').val();
        imageInfo['y'] = $('#y').val();
        imageInfo['w'] = $('#w').val();
        imageInfo['h'] = $('#h').val();
        imageInfo['src'] = $("#image-display").attr("src");
        imageInfo['src_w'] = $('#image-display').width();
        imageInfo['src_h'] = $('#image-display').height();
        angular.element($('#image-display')).scope().cropPicture(imageInfo, function() {

            window.location = '<?php echo base_url(); ?>member/newsfeed';
        });
    }
    function make_profile_picture()
    {
        $('#anchor_make_profile_picture').hide();
        $('#anchor_finish_cropping').show();
        $('#image-display').Jcrop({
            aspectRatio: 1,
            onSelect: updateCoords
        });
    }
    function make_cover_picture()
    {
        $('#anchor_make_cover_picture').hide();
        $('#anchor_finish_cropping').show();
        $('#image-display').Jcrop({
            aspectRatio: 1,
            onSelect: updateCoords
        });
    }
    function updateCoords(c)
    {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    }

    $(function() {
        $("#full_screen_photo_display").on("click", function() {
            $('.bs-example-modal-lg').addClass("modal-fullscreen");
            $('.modal_photo_pagelet').addClass("modal_photo_display_full_height");

            $(".modal-fullscreen").on('show.bs.modal', function() {
                setTimeout(function() {
                    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
                }, 0);
            });
            $(".modal-fullscreen").on('hidden.bs.modal', function() {
                $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
            });
        });
        $("#close_photo_modal").on("click", function() {
            $('.bs-example-modal-lg').removeClass("modal-fullscreen");
            $('.modal_photo_pagelet').removeClass("modal_photo_display_full_height");
            $(".modal-fullscreen").on('show.bs.modal', function() {
                setTimeout(function() {
                    $(".modal-backdrop").removeClass("modal-backdrop-fullscreen");
                }, 0);
            });
            $(".modal-fullscreen").on('hidden.bs.modal', function() {
                $(".modal-backdrop").removeClass("modal-backdrop-fullscreen");
            });
        });
    });


</script>

