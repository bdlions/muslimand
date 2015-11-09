<div class="row">
    <div class="col-md-11">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo base_url() ?>resources/images/pages/cover/01.jpg" width="100%" height="250">
            </div>
        </div>
        <div class="row">
            <!--LEFT_COLUMN-->
            <div class="col-md-3">
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <a href="<?php echo base_url(); ?>pages/pages_newsfeed" >
                            <img class="img-circle" src="<?php echo base_url(); ?>resources/images/pages/profile/01.jpg">
                        </a>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="video_ul">
                            <a href=""><li>Wall</li></a>
                            <a href=""><li>Info</li></a>
                            <a href=""><li>Blogs</li></a>
                            <a href=""><li>Library</li></a>
                            <a href=""><li>Fund Rising</li></a>
                            <li id='photo_sub' left_column_sub_category>Photos</li>
                            <ul class="photo_test" style="display: none" >
                                <a  href=""><li>All Albums</li></a>
                                <a  href=""><li>My Albums</li></a>
                            </ul>
                            <li id='video_sub'>Videos</li>
                            <ul class="video_test" style="display: none" >
                                <a  href=""><li>My Videos</li></a>
                                <a  href=""><li>Favorite Videos</li></a>
                            </ul>
                            <div class="category_divider"></div>
                        </ul> 
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Categories</span>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="category_ul">
                            <a href=""><li>Brand</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Product</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Group</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Community</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Business</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Place</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Entertainment</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Company</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Organization</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Institution</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Artist or Band</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Public Figure</li></a>
                            <div class="category_divider"></div>

                        </ul> 
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Main</span>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <?php $this->load->view("member/sections/menu/menu_link"); ?>
                    </div>
                </div>
                <div class="row form-group"></div>
            </div>
            <!--MIDDLE COLUMN-->
            <div class="col-md-9">
                <div class="row form-group"></div>
                <div class="row form-group">
                    <div class="col-md-8">
                        <div class="title_info">
                            <a class="link" href="<?php echo base_url(); ?>pages/pages_newsfeed">ISLAM : The Best Way of Life</a>
                            <div class="extra_info">
                                <ul class="extra_info_middot">
                                    <li>Public</li>
                                    <li>
                                        <span>·</span>
                                    </li>
                                    <li>987 members</li>
                                </ul>
                            </div>
                            <div class="extra_info">
                                <span class="like_number">8,828</span>
                                <a href="#">Likes</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-xs glyphicon glyphicon-plus" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 20px;"> Join</button>
                        <button class="btn btn-xs glyphicon glyphicon-star" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 20px;"> Invite</button>
                    </div>
                </div>
                <div class="borber_style"></div>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/post_status"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/shared_status"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/shared_link"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/shared_photo"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/shared_video"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/updated_profile_pic"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/updated_status"); ?>
                <div class="row form-group"></div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<script>
    $(function() {
        $('#photo_sub').on('click', function() {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function() {
            $('.video_test').show();
        });
    });
</script>


