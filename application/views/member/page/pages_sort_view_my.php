<div class="row form-group"></div>
<div class="row">
    <div class="col-md-6">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/pages/icon/page.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>pages/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Page</span></a>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <a  href="<?php echo base_url(); ?>pages/pages_add"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Create a Page</button></a>
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
                    <a href="<?php echo base_url(); ?>pages/"><li>All Pages</li></a>
                    <a href="<?php echo base_url(); ?>pages/pages_sort_view_my"><li>My Pages</li></a>
                    <a href="<?php echo base_url(); ?>pages/pages_sort_view_friend"><li>Friends’ Pages</li></a>
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
        <div class="row">
            <div class="col-md-4 ">
                <div class="left-inner-addon">
                    <i class="glyphicon glyphicon-search"></i> 
                    <input style="height: 26px; border-radius: 3px;" type="text" class="mm_input form-control" placeholder="Search pages..." />
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
                               <li><a href="<?php echo base_url(); ?>pages/pages_sort_most_liked">Most Liked</a></li>
                            </ul>
                        </div>
                        &nbsp;
                        <span style="font-size: 12px; font-weight: bold; opacity: .6;" href="">Show:</span>
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                10 per Page<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">10 per Page</a></li>
                                <li><a href="">15 per Page</a></li>
                                <li><a href="">20 per Page</a></li>
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
                <?php $this->load->view("member/pagelets/page/sort_view_my"); ?>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
