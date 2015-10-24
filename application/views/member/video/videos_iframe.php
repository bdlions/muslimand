<div class="row form-group"></div>
<div class="row form-group"></div>
<div class="row form-group"></div>
<div class="row">
    <div class="col-md-6">
        <span style="font-size: 25px; font-weight: bold;">Video</span>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
        <a  href="<?php echo base_url(); ?>videos/video_add"><button class="btn btn-xs" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;">Share a Video</button></a>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="pagelet_divider"></div>
    </div>    
    <div class="col-md-2">
    </div>    
</div>
<div class="row">
    <!--LEFT_COLUMN-->
    <?php $this->load->view("templates/sections/member_videos_left_pane"); ?>
    <!--MIDDLE COLUMN-->
    <div class="col-md-7 col_md_7_reduced">
        <div class="row">
            <div class="col-md-4 ">
                <div class="left-inner-addon">
                    <i class="glyphicon glyphicon-search"></i> 
                    <input style="height: 26px; border-radius: 3px;" type="text" class="mm_input form-control" placeholder="Search videos..." />
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Sort:</span>
                        <div class="btn-group" style="color: #703684;">
                            <button style="background-color: #703684; color: white;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Latest<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>videos/">Latest</a></li>
                                <li><a href="<?php echo base_url(); ?>videos/videos_sort_most_viewed">Most Viewed</a></li>
                                <li><a href="<?php echo base_url(); ?>videos/videos_sort_top_rated">Top Rated</a></li>
                                <li><a href="<?php echo base_url(); ?>videos/videos_sort_most_discussed">Most Discussed</a></li>
                            </ul>
                        </div>
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Show:</span>
                        <div class="btn-group">
                            <button style="background-color: #703684; color: white;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                12 per Page<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">12 per Page</a></li>
                                <li><a href="#">16 per Page</a></li>
                                <li><a href="#">20 per Page</a></li>
                                <li><a href="#">24 per Page</a></li>
                            </ul>
                        </div>
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">When:</span>
                        <div class="btn-group">
                            <button style="background-color: #703684; color: white;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                All Time<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">All Time</a></li>
                                <li><a href="#">This Month</a></li>
                                <li><a href="#">This Week</a></li>
                                <li><a href="#">Today</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group"></div>
        <?php $this->load->view("member/pagelets/video/iframe"); ?>
        <div class="row form-group"></div>
        <div ng-init="setVideoInfo(<?php echo htmlspecialchars(json_encode($video_info)); ?>)">
            <div class="row">
                <div class="col-md-12">
                    <div class="borber_box_full font_10px">
                        Published on Dec 13, 2013<br>
                        Just 4 years old Fatima Saleem Kodia is a Jr. KG student in Islamic International School (IIS) Mumbai.<br>
                        She is the youngest speaker in this program and MashaAllah Deliverd a great Speech "How to save Our Eeman?" in the Program "Goal". 
                    </div>
                    <div class="borber_box_others details text_center">
                        <div>Show more details</div>
                    </div>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="borber_box_full details">
                        <img src="<?php echo base_url(); ?>resources/images/video/star_5.png" >
                        <span >Favorite</span>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="pull-right text_center">
                        <img src="<?php echo base_url(); ?>resources/images/video/star_1.png" >
                        <img src="<?php echo base_url(); ?>resources/images/video/star_2.png" >
                        <img src="<?php echo base_url(); ?>resources/images/video/star_3.png" >
                        <img src="<?php echo base_url(); ?>resources/images/video/star_4.png" >
                        <img src="<?php echo base_url(); ?>resources/images/video/star_5.png" ><br>
                        0 Ratings
                    </div>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-12">
                    <span ng-if = "videoDetail.likeStatus != '1'">
                        <a href style="color: #3B59A9;"  onclick="add_video_like(angular.element(this).scope().videoDetail.videoId)" id="video_like_{{videoDetail.videoId}}">Like</a>
                    </span>
                    <span ng-if = "videoDetail.likeStatus == '1'">
                        <a href style="color: #3B59A9;" id="video_liked_{{videoDetail.videoId}}">liked</a>
                    </span>
                    .
                    <a href style="color: #3B59A9;" id="video_comment_id_focus"> Comment</a>
                    .
                    <a href="#" style="color: #3B59A9;"> Share</a>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" ><img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/facebook.png" ></a>
                    <a href="#" ><img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/google.png" ></a>
                    <a href="#" ><img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/twitter.png" ></a>
                    <a href="#" ><img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/linkedin.png" ></a>
                    <a href="#" ><img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/yahoo.png" ></a>
                    <a href="#" ><img style="padding: 2px; border-radius: 5px;"src="<?php echo base_url(); ?>resources/images/logins/live.png" ></a>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row form-group">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                    <a href id="video_like_list_id" onclick="open_modal_video_like_list(angular.element(this).scope().videoDetail.videoId)">{{videoDetail.likeCounter}}people </a> like this.
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row form-group">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>resources/images/share_icon.png">
                    <a href="#">{{videoDetail.shareCounter}} shares</a>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" >
                    <a href id="video_more_comment_show" onclick="get_video_comments(angular.element(this).scope().videoDetail.videoId)">view {{videoDetail.commentCounter}} more comments</a>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row form-group" ng-repeat="comment in videoDetail.comment">
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
            <div class="row">
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
                </div>
                <div class="col-md-11">
                    <form  ng-submit="addVideoComment(videoDetail.videoId)">
                        <input type ="text" id ="video_comment_field" class="form-control" placeholder="Write a comment" ng-model="videoCommentInfo.comment">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group"></div>
    <div class="row form-group"></div>
    <!--ADD COLUMN-->
    <div class="col-md-3">
    </div>
</div>
<script type="text/javascript">

    

    $(function () {
        $("#video_comment_id_focus").on("click", function () {
            $('#video_comment_field').focus();
        });
    });

    function get_video_comments(videoId) {
        angular.element($('#video_more_comment_show')).scope().getVideoComments(videoId, function () {
            $('#more_video_comment_id').hide();
        });
    }
    function open_modal_video_like_list(videoId) {
        angular.element($('#video_like_list_id')).scope().getVideoLikeList(videoId, function () {
            $('#modal_liked_people_list').modal('show');

        });
    }
    function add_video_like(videoId) {
        angular.element($('#video_like_' + videoId)).scope().addVideoLike(videoId, function () {
            $("#video_like_" + videoId).hide();
            $("#video_liked_" + videoId).show();
        });
    }
   
    function open_modal_delete_video(videoInfo) {
//        var videoId = videoInfo.videoId;
        var albumId = videoInfo.albumId;
        var selectionInfo = " Video ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == '<?php echo MODAL_DELETE_YES; ?>') {
                angular.element($('#delete_content_btn')).scope().deleteVideo(videoInfo, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    window.location = '<?php echo base_url(); ?>videos/get_album/' + albumId;
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }




</script>