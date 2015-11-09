<div class="row padding_top_30px">
    <div class="col-md-3">
        <a style="font-size: 25px; font-weight: bold; text-decoration: none; cursor: pointer;" href="<?php echo base_url(); ?>fund/"><img src="<?php echo base_url(); ?>resources/images/fund/icon/fund.png">Fund Rising</a>
    </div>
    <div class="col-md-offset-1 col-md-4">
        <div class="row">
                <div class="col-md-5">
                    <span class="raise_numbers"><img src="<?php echo base_url(); ?>resources/images/fund/icon/dollar.png">162,233</span><br>
                    <span class="raise_name">Raised</span>
                </div>
                <div class="col-md-4">
                    <span class="raise_numbers">190</span><br>
                    <span class="raise_name">Campaigns</span>
                </div>
                <div class="col-md-3">
                    <span class="raise_numbers">2598</span><br>
                    <span class="raise_name">Donors</span>
                </div>
            </div>
    </div>
    <div class="col-md-offset-1 col-md-2">
        <a  href="<?php echo base_url(); ?>fund/fund_raising_page_add"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 20px;">Start a Campaign</button></a>
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
                    <a href="<?php echo base_url(); ?>fund/"><li>All Campaigns</li></a>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_my"><li>My Campaigns</li></a>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_friend"><li>Friends’ Campaigns</li></a>
                    <div class="category_divider"></div>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_my_donated"><li>My Donated Campaigns</li></a>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_featured"><li>Featured Campaigns</li></a>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_reached"><li>Reached Campaigns</li></a>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_expired"><li>Expired Campaigns</li></a>
                    <a href="<?php echo base_url(); ?>fund/fund_sort_view_closed"><li>Closed Campaigns</li></a>
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
                    <a href=""><li>International Emergencies</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Business & Entrepreneurs</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Education</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Environment</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Health</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Hunger</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Masjids & Local Communities</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Non-Profits & Charities</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Orphans</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Poverty</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Water</li></a>
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
            <div class="col-md-12">
                <?php $this->load->view("member/pagelets/fund/sort_view_reached"); ?>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
