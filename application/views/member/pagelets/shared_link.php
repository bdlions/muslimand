<script>
    $(function() {
         $('#delete_shared_link_anchor_1').on('click', function() {
            $('#common_delete_confirmation_modal').modal('show');
        });
    });

</script>
<div id="shared_link_content_1">
    <div class="pagelet">
        <div class="row form-group">
            <div class="col-md-12">
                <div style="float: left; padding-right: 10px">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_8.jpg" width="40" height="40">
                </div>
                <div style="float: left">
                    <div>
                        <a style="font-weight: bold;" href="#">Mohammad Rafique</a> shared 
                        <a style="color: #3B59A9;" href="#">Cricinfo</a>'s Page.
                        <ul style="list-style-type: none; float: right;">
                            <li class="dropdown">
                                <div>
                                    <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" width="15" height="15">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Everyone</a></li>
                                        <li><a href="#">Friends</a></li>
                                        <li><a href="#">Friends of friends</a></li>
                                        <li><a href="#">Only Me</a></li>
                                        <li><a href="#">Custom</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        December 1, 2014 at 7.57pm.
                    </div>
                </div>
                <div style="float: right">
                    <ul style="list-style-type: none;">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a >Report</a></li>
                                <li><a id="delete_shared_link_anchor_1">Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--ORIGINAL CODE-->
        <!--    <div class="row form-group">
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_8.jpg" width="40" height="40">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <a style="font-weight: bold;" href="#">Mohammad Rafique</a> shared 
                            <a style="color: #3B59A9;" href="#">Cricinfo</a>'s Page.
                            <button style="max-width: 35px; max-height: 30px; background-color: white;"type="button" class="btn btn-xs" aria-label="Left Align">
                                <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" width="15" height="15"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            December 1, 2014 at 7.57pm.
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <button style="background-color: white;"type="button" class="btn btn-xs" aria-label="Left Align">
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    </button>
                </div>
            </div>-->
        <!--ORIGINAL CODE END-->




        <div class="row form-group">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/cricket.jpg" width="100%" height="60%">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <a href="#">Cricinfo</a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                The Bangladesh team poses with trophies after sweeping the series 5-0 with a five-wicket win in Mirpur.
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <a style="color: #3B59A9;" href="#"> http://www.espncricinfo.com/bangladesh/content/team/25.html</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a style="color: #3B59A9;" href="#">Like</a> .
                <a style="color: #3B59A9;" href="#"> Comment</a> .
                <a style="color: #3B59A9;" href="#"> Share</a>
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row form-group">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                <a style="color: #3B59A9;" href="#">23 people </a> like this.
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/share_icon.png">
                <a href="#">7 shares</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/comment_icon.png">
                <a href="#">view 51 more comments</a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_3.jpg" width="30" height="30">
            </div>
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-12">
                        <a style="font-weight: bold;" href="#">Barak Obama</a>
                        Great win ... :)
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        December 1, 2014 at 10:30pm. 
                        <a>like</a>
                        <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                        . <a>97</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
            </div>
            <div class="col-md-11">
                <input type ="text" class="form-control" placeholder="Write a comment">
            </div>
        </div>
    </div>
</div>
