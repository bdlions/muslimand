<div class="row form-group"></div>
<div class="row">
    <div class="col-md-6">
        <span style="font-size: 25px; font-weight: bold;">Academy</span>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <a  href="<?php echo base_url(); ?>academy/course_add"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Create Course</button></a>
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
                    <a href="<?php echo base_url(); ?>academy/"><li>All Courses</li></a>
                    <a href="<?php echo base_url(); ?>academy/academy_sort_view_my"><li>My Courses</li></a>
                    <a href="<?php echo base_url(); ?>academy/academy_sort_view_my_published"><li>My Published Courses</li></a>
                    <a href="<?php echo base_url(); ?>academy/academy_sort_view_friend"><li>Friends’ Courses</li></a>
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
                    <a href=""><li>Technology</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Business</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Design</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Arts</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Photgraphy</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Heath & Fitness</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Math & Science</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Education</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Languages</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Humanities</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Social Science</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Crafts & Hobbies</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Sports</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Islamic Education</li></a>
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
                <?php $this->load->view("member/pagelets/academy/sort_latest"); ?>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
