<div class="row form-group"></div>
<div class="row">
    <div class="col-md-6">
        <span style="font-size: 25px; font-weight: bold;">Blogs</span>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <a  href="<?php echo base_url(); ?>blogs/blogs_add"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Add a New Blog</button></a>
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
                    <a href="<?php echo base_url(); ?>blogs/"><li>All Blogs</li></a>
                    <a href="<?php echo base_url(); ?>blogs/blogs_sort_view_my"><li>My Blogs</li></a>
                    <a href="<?php echo base_url(); ?>blogs/blogs_sort_view_friend"><li>Friends’ Blogs</li></a>
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
                    <a href=""><li>Book Reviews</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Business</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Stories</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Dawah</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Education</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Arts</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Entertainment</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Family & Home</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Health & Fitness</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Interview</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Recreation</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Shopping</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Society</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Sports</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Stories of Phophets</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Technology</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Quran Contest</li></a>
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
                    <input style="height: 26px; border-radius: 3px;" type="text" class="mm_input form-control" placeholder="Search blogs..." />
                </div>
            </div>
            <div class="col-md-offset-2 col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Show:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                5 per Page<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">5 per Page</a></li>
                                <li><a href="">10 per Page</a></li>
                                <li><a href="">15 per Page</a></li>
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
            <div class="col-md-9">
                <?php $this->load->view("member/pagelets/blog/sort_view_my"); ?>
            </div>
            <div class="col-md-3">
                <label style="background-color: lightgray; padding: 5px 33px;">Top Bloggers</label>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="top_blogger_ul">
                            <a href=""><li>Mohammad Azhar Uddin (150)</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Jannatul Ferdaus (120)</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Sharmin Akter (110)</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Maria Islam (100)</li></a>
                            <div class="category_divider"></div>
                            <a href=""><li>Dr. Belal (95)</li></a>
                            <div class="category_divider"></div>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
