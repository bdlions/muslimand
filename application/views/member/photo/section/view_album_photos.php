<div ng-repeat="albumDetail in albumDetailList" ng-clock>
    <div class="pagelet" style="margin-bottom: 3px;">
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 16px; font-weight: bold;" ng-bind="albumDetail.title"></span>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span style="font-size: 14px; " ng-bind="albumDetail.description"></span>
            </div>
        </div>
        <hr>
        <div class="row form-group padding_top_10px">
            <div class="col-md-3" ng-repeat="photo in albumPhotoList" style="padding-bottom: 28px;">
                <img style="border: 1px solid #703684;"   ng-click="open(photo)" src="<?php echo base_url() . USER_ALBUM_IMAGE_PATH ?>{{photo.image}}" width="120" height="100">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">
                <span>1-12 of 2,666 Results</span>
            </div>
            <div class="col-md-8">
                <nav style="float: right;">
                    <ul class="pagination pagination_margin">
                        <li>
                            <a href="<?php echo base_url(); ?>videos/videos_iframe" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li>
                            <a href="" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="pagelet pagelet_mg_custom">
            <div class="row form-group">
                <div class="col-md-12">
                    <span ng-if = "albumDetail.likeStatus != '1'">
                        <a href style="color: #3B59A9;"  onclick="add_album_like(angular.element(this).scope().albumDetail.albumId)" id="album_like_id">
                            <img src="<?php echo base_url() ?>resources/images/like_icon.png">
                            Like
                        </a>
                    </span>
                    <span ng-if = "albumDetail.likeStatus === '1'">
                        <a href style="color: #3B59A9;" id="album_dislike_id">
                            <img src="<?php echo base_url() ?>resources/images/like_icon.png">
                            Liked
                        </a>
                    </span>
                    .
                    <a href style="color: #3B59A9;" id="album_comment_id_focus"> 
                        <img src="<?php echo base_url() ?>resources/images/comment_icon.png">
                        Comment
                    </a>
                    .
                    <a href="#" style="color: #3B59A9;" onclick="open_modal_album_shared(angular.element(this).scope().albumDetail.albumId)"> 
                        <img src="<?php echo base_url() ?>resources/images/share_icon.png">
                        Share
                    </a>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row form-group">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                    <span id="your_like_id" style="display: none">You</span>
                    <span id="other_like_id" style="display: none">,and  {{albumDetail.likeCounter}} others</span>
                    <a class="cursor_holder_style" onclick="open_modal_like_list(angular.element(this).scope().albumDetail.albumId)"  id="like_list_id" >{{albumDetail.likeCounter}} people</a> like this.
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row form-group">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>resources/images/share_icon.png" >
                    <a href="#"> {{albumDetail.shareCounter}} shares</a>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row form-group">
                <div class="col-md-12" id="more_comment_id">
                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                    <a href  id="album_more_comment" onclick="get_album_comments(angular.element(this).scope().albumDetail.albumId)">view{{albumDetail.commentCounter}} more comments </a>
                </div>
            </div>
            <div class="row form-group"  ng-repeat="comment in albumDetail.comment">
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg" width="30" height="30">
                </div>
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-12">
                            <a style="font-weight: bold;" href="#">{{comment.userInfo.firstName}}&nbsp{{comment.userInfo.lastName}}</a>
                            {{comment.description}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            January 08, 2015 at 2:15pm. 
                            <a>like</a>
                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                            . <a>31</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
                </div>
                <div class="col-md-11">
                    <form  ng-submit="addAlbumComment(albumDetail.albumId)">
                        <input type ="text" id="album_comment_field" class="form-control" placeholder="Write a comment" ng-model="albumCommentInfo.comment">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
                function add_album_like(albumId) {
                    angular.element($('#album_like_id')).scope().addAlbumLike(albumId, function () {
                        $("#album_like_id").hide();
                        $("#album_dislike_id").show();
                        $("#your_like_id").show();
                        $("#like_list_id").hide();
                        if (angular.element($('#album_like_id')).scope().albumDetail.likeCounter > 0) {
                            $("#other_like_id").show();

                        }
                    });
                }
        function open_modal_like_list(albumId) {
            angular.element($('#like_list_id')).scope().getAlbumLikeList(albumId, function () {
                $('#modal_liked_people_list').modal('show');
            });
        }
        function get_album_comments(albumId) {
            angular.element($('#album_more_comment')).scope().getAlbumComments(albumId, function () {
                $('#more_comment_id').hide();
            });
        }
        function open_modal_album_shared(albumId) {
            $("#album_shared_id").val(albumId);
            $('#modal_share_album').modal('show');
        }


        $(function () {
        $("#album_comment_id_focus").on("click", function () {
        $('#album_comment_field').focus();
        });
        });
    </script>
    <?php $this->load->view("modal/modal_liked_people_list"); ?>
    <?php $this->load->view("member/photo/modal_shared_album"); ?>
    <?php $this->load->view("member/photo/section/modal_photo_view_1"); ?>

    <!--                    <div class="modal_photo_pagelet">
                                           <div class="row">
                                               <div class="col-md-2">
                                                   <img class="img-responsive" ng-src="<?php echo base_url(); ?>resources/images/profile_picture/40x40/Rx9hPNdqmRLRb4i.jpg?time= 1457357330" style="border: 1px solid lightgray" fallback-src="<?php echo base_url(); ?>resources/images/profile_picture/40x40/40x40_1.jpg" src="<?php echo base_url(); ?>resources/images/profile_picture/40x40/Rx9hPNdqmRLRb4i.jpg?time= 1457357330">
                                               </div>
                                               <div class="col-md-10">
                                                   <div class="row">
                                                       <div class="col-md-10 mrg_left">
                                                           <div class="row">
                                                               <div class="col-md-12">
                                                                   <div style="float: left;">
                                                                       <a style="font-weight: bold;" href="<?php echo base_url(); ?>member/timeline/Rx9hPNdqmRLRb4i"><span ng-bind="status.userInfo.firstName" class="ng-binding">Alamgir</span>&nbsp;<span ng-bind="status.userInfo.lastName" class="ng-binding">Kabir</span></a> 
                                                                       <a style="font-weight: bold;" href="<?php echo base_url(); ?>member/timeline/Rx9hPNdqmRLRb4i"><span class="ng-binding">Alamgir</span>&nbsp;<span class="ng-binding">Kabir</span></a> 
                                                                        ngIf: status.mappingUserInfo != null 
                                                                        ngIf: 1 == status.statusTypeId 
                                                                        ngIf: 2 == status.statusTypeId 
                                                                        ngIf: 4 == status.statusTypeId 
                                                                        ngIf: 5 == status.statusTypeId 
                                                                        ngIf: 6 == status.statusTypeId 
                                                                        ngIf: 3 == status.statusTypeId 
                                                                       <span ng-if="3 == status.statusTypeId" class="ng-scope">
                                                                       <span class="ng-scope">
                   
                                                                           updated 
                                                                            ngIf: 1 == status.genderId <span ng-if="1 == status.genderId" class="ng-scope">his</span> end ngIf: 1 == status.genderId 
                                                                            ngIf: 2 == status.genderId 
                                                                           profile picture 
                                                                       </span> end ngIf: 3 == status.statusTypeId 
                                                                        ngIf: 8 == status.statusTypeId 
                                                                        ngIf: 7 == status.statusTypeId 
                                                                       &nbsp;
                                                                       <a style="font-weight: bold;" href="#"> <span class="ng-binding">&nbsp;</span></a>
                                                                        ngIf: 4 == status.statusTypeId  
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
                                                                           <img width="15" height="15" ng-src="h<?php echo base_url(); ?>resources/images/friends_icon.png" src="<?php echo base_url(); ?>resources/images/friends_icon.png">
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
                                                                        ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' <span ng-if="status.mappingId == 'Rx9hPNdqmRLRb4i'" class="ng-scope">
                                                                           <li onclick="select_edit_field(angular.element(this).scope().status.statusId)"><a>Edit</a></li>
                                                                       </span> end ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' 
                                                                       <li><a href="#">Report</a></li>
                                                                        ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' || status.userId == 'Rx9hPNdqmRLRb4i' <span ng-if="status.mappingId == 'Rx9hPNdqmRLRb4i' || status.userId == 'Rx9hPNdqmRLRb4i'" class="ng-scope">
                                                                           <li><a ng-click="deleteStatus(status.statusId)" href="">Delete</a></li>
                                                                       </span> end ngIf: status.mappingId == 'Rx9hPNdqmRLRb4i' || status.userId == 'Rx9hPNdqmRLRb4i' 
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
                                                    ngRepeat: image in status.images <div ng-repeat="image in status.images" class="ng-scope">
                                                        ngIf: 3 == status.statusTypeId <div ng-if="3 == status.statusTypeId" class="ng-scope">
                                                           <div class="row from-group">
                                                               <div class="col-md-12 form-group">
                                                                   <img ng-src="<?php echo base_url(); ?>resources/images/photos/albums/user_album/Rx9hPNdqmRLRb4i_1454386530.jpg" style="border: 1px solid #703684; float: left;" class="img-responsive" src="<?php echo base_url(); ?>resources/images/photos/albums/user_album/Rx9hPNdqmRLRb4i_1454386530.jpg">
                                                               </div>
                                                           </div>
                                                       </div> end ngIf: 3 == status.statusTypeId 
                                                        ngIf: 8 == status.statusTypeId 
                                                   </div> end ngRepeat: image in status.images 
                                                    ngIf: 3 != status.statusTypeId && 8 != status.statusTypeId 
                                                   <div class="row from-group">
                                                        ngRepeat: image in status.referenceInfo.images 
                                                   </div>
                   
                                                   <div class="row from-group">
                                                       <div class="col-md-12">
                                                           <div style="float: left; text-align: justify" class="ng-binding">
                   
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div style="float: left;" class="row from-group">
                                                       <div class="col-md-12">
                                                            ngIf: status.likeStatus != '1' <span ng-if="status.likeStatus != '1'" class="ng-scope">
                                                               <a ng-click="addLike(status.userInfo.userId, status.statusId)" id="statusLike3SNXd7ulUTAXfrV" href="" style="color: #3B59A9;">
                                                                   <img src="<?php echo base_url(); ?>resources/images/like_icon.png"> Like </a>.
                                                           </span> end ngIf: status.likeStatus != '1' 
                                                            ngIf: status.likeStatus == '1' 
                                                           <a onclick="select_comment_field(angular.element(this).scope().status.statusId)" href="" style="color: #3B59A9;">
                                                               <img ng-src="<?php echo base_url(); ?>resources/images/comment_icon.png" src="<?php echo base_url(); ?>resources/images/comment_icon.png"> Comment </a>.
                                                           <a onclick="open_modal_share(angular.element(this).scope().status)" href="" id="share_add_id" style="color: #3B59A9;">
                                                               <img ng-src="<?php echo base_url(); ?>resources/images/share_icon.png" src="<?php echo base_url(); ?>resources/images/share_icon.png"> Share</a>
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
                                                       <img ng-src="<?php echo base_url(); ?>resources/images/profile_picture/30x30/Rx9hPNdqmRLRb4i.jpg?time=1457357330" fallback-src="<?php echo base_url(); ?>resources/images/profile_picture/30x30/30x30_1.jpg" src="<?php echo base_url(); ?>resources/images/profile_picture/30x30/Rx9hPNdqmRLRb4i.jpg?time=1457357330">
                                                   </div>
                                                   <div class="col-md-10">
                                                       <form ng-submit="addComment(userGenderId, status.userInfo, status.statusId)" class="ng-pristine ng-valid">
                                                           <input type="text" ng-model="statusInfo.commentDes" placeholder="Write a comment" class="form-control ng-pristine ng-untouched ng-valid" id="commentInputField3SNXd7ulUTAXfrV">
                                                       </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>  -->
