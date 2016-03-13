<div class="row form-group"></div>
<div class="row">
    <div class="col-md-6">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>photos/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
    </div>
    <div class="col-md-offset-3 col-md-3">
        <a  href="<?php echo base_url(); ?>photos/add_photos"><button class="button-custom pull-right">Upload a New Image</button></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="pagelet_divider"></div>
    </div>    
</div>
<div class="row">
    <!--LEFT_COLUMN-->
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <ul class="video_ul">
                    <a href="<?php echo base_url(); ?>photos/"><li>All Photos</li></a>
                    <a href="<?php echo base_url(); ?>photos/photos_view_my"><li>My Photos</li></a>
                    <a href="<?php echo base_url(); ?>photos/photos_view_friend"><li>Friends’ Photos</li></a>
                    <div class="category_divider"></div>
                    <a href="<?php echo base_url(); ?>photos/photos_albums"><li>All Albums</li></a>
                    <a href="<?php echo base_url(); ?>photos/get_user_albums"><li>My Albums</li></a>
                    <div class="category_divider"></div>
                </ul>  
            </div>
        </div>
        <div class="row padding_top_20px">
            <div class="col-md-12">
                <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Categories</span>
            </div>
        </div>
        <div class="row padding_top_10px">
            <div class="col-md-12">
                <ul class="category_ul">
                    <a href=""><li>Anthro</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Artisan Crafts</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Cartoons & Comics</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Comedy</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Community Projects</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Contests</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Customization</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Designs & Interfaces</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Digital Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Fan Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Film & Animation</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Fractal Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Game Development Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Literature</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>People</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Pets & Animals</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Photography</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Resources & Stock Images</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Science & Technology</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Sports</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Traditional Art</li></a>
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
                    <input style="height: 26px; border-radius: 3px;" type="text" class="mm_input form-control" placeholder="Search photos..." />
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Sort:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Latest<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>photos/">Latest</a></li>
<!--                                <li><a href="<?php //echo base_url();   ?>photos/photos_sort_most_viewed">Most Viewed</a></li>
                                <li><a href="<?php //echo base_url();   ?>photos/photos_sort_top_rated">Top Rated</a></li>
                                <li><a href="<?php //echo base_url();   ?>photos/photos_sort_most_discussed">Most Discussed</a></li>-->
                            </ul>
                        </div>
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Show:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">

                <?php $this->load->view("member/pagelets/photo/sort_top_rated"); ?>
            </div>
        </div>
    </div>
</div>
