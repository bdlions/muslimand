<div class="row padding_top_30px">
    <div class="col-md-6">
        <span style="font-size: 25px; font-weight: bold;">Library</span>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <a  href="<?php echo base_url(); ?>library/library_add"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 8px;">Create New Document</button></a>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-11">
        <div class="pagelet_divider"></div>
    </div>    
    <div class="col-md-1">
    </div>    
</div>
<div class="row">
    <!--LEFT_COLUMN-->
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12">
                <ul class="video_ul">
                    <a href="<?php echo base_url(); ?>library/"><li>All Documents</li></a>
                    <div class="category_divider"></div>
                    <a href="<?php echo base_url(); ?>library/library_sort_view_my"><li>My Documents</li></a>
                    <div class="category_divider"></div>
                    <a href="<?php echo base_url(); ?>library/library_sort_view_friend"><li>Friends’ Documents</li></a>
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
                    <a href=""><li>Muslimand</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Health & Fitness</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Autos & Vehicles</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Comedy</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Education</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Entertainment</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Films & Animations</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Gaming</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Howto & Style</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>News & Politics</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>People & Blogs</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Pets & Animals</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Science & Technology</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Sports</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Travels & Events</li></a>
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
        <div class="row">
            <div class="col-md-4 ">
                <div class="left-inner-addon">
                    <i class="glyphicon glyphicon-search"></i> 
                    <input style="height: 26px; border-radius: 3px;" type="text" class="mm_input form-control" placeholder="Search documents..." />
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Sort:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Latest<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>library/">Latest</a></li>
                                <li><a href="<?php echo base_url(); ?>library/library_most_view">Top Viewed Documents</a></li>
                                <li><a href="<?php echo base_url(); ?>library/library_most_discussed">Most Discussed Documents</a></li>
                            </ul>
                        </div>
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Show:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                9 per Page<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">9 per Page</a></li>
                                <li><a href="#">12 per Page</a></li>
                                <li><a href="#">15 per Page</a></li>
                            </ul>
                        </div>
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">When:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
            <div class="col-md-1"></div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-8">
                <?php $this->load->view("member/pagelets/library/sort_most_discussed"); ?>
            </div>
            <div class="col-md-4">
                <div class="row padding_top_over_row"></div>
                <div class="row padding_top_over_row"></div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12"></div>
                    <div class="title_right_panel">Top Active Members </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12"></div>
                    <img class="img-circle" width="40" height="40" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg">
                    <img class="img-circle" width="40" height="40" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg">
                    <img class="img-circle" width="40" height="40" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_6.jpg">
                    <img class="img-circle" width="40" height="40" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg">
                    <img class="img-circle" width="40" height="40" src="<?php echo base_url() ?>resources/images/user_data/profile_pictures/profile_pictures_9.jpg">
                </div>

                <div class="row padding_top_over_row">
                    <div class="col-md-12">
                        <div class="title_right_panel">Top Viewed Documents </div>
                    </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12">
                        <div class="img_border">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><img height="150" width="100%" src="<?php echo base_url() ?>resources/images/library/01.jpg"></a>
                        </div>
                        <div class="img_num_border">
                            <span>60p</span>
                        </div>
                        <div class="middle_right_side_para_title">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><span class="para_title">Hinduism & Islam</span></a><br>
                            <span class="para_author">by <a href="<?php echo base_url() ?>member/profile">Mohammad Azhar Uddin</a></span><br>
                            <span class="para_default">50 view(s) | 30 like(s)</span>
                        </div>
                    </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12">
                        <div class="img_border">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><img height="150" width="100%" src="<?php echo base_url() ?>resources/images/library/07.jpg"></a>
                        </div>
                        <div class="img_num_border">
                            <span>582p</span>
                        </div>
                        <div class="middle_right_side_para_title">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><span class="para_title">Shirk</span></a><br>
                            <span class="para_author">by <a href="<?php echo base_url() ?>member/profile">Mohammad Rafique</a></span><br>
                            <span class="para_default">520 view(s) | 39 like(s)</span>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="float: right;"><a href="<?php echo base_url() ?>library/library_most_view">See All</a></div>
                    </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12">
                        <div class="title_right_panel">Most Discussed Documents </div>
                    </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12">
                        <div class="img_border">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><img height="150" width="100%" src="<?php echo base_url() ?>resources/images/library/06.jpg"></a>
                        </div>
                        <div class="img_num_border">
                            <span>66p</span>
                        </div>
                        <div class="middle_right_side_para_title">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><span class="para_title">Imaner Dabi</span></a><br>
                            <span class="para_author">by <a href="<?php echo base_url() ?>member/profile">Dr. Belal</a></span><br>
                            <span class="para_default">200 view(s) | 120 like(s)</span>
                        </div>
                    </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-12">
                        <div class="img_border">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><img height="150" width="100%" src="<?php echo base_url() ?>resources/images/library/09.jpg"></a>
                        </div>
                        <div class="img_num_border">
                            <span>369p</span>
                        </div>
                        <div class="middle_right_side_para_title">
                            <a href="<?php echo base_url() ?>library/library_newsfeed"><span class="para_title">Sontaner Upor...</span></a><br>
                            <span class="para_author">by <a href="<?php echo base_url() ?>member/profile">Fatematul Kobra</a></span><br>
                            <span class="para_default">355 view(s) | 52 like(s)</span>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <div style="float: right;"><a href="<?php echo base_url() ?>library/library_most_discussed">See All</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
