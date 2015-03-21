<div class="row padding_top_over_row">
    <div class="col-md-10">
        <a href="<?php echo base_url(); ?>academy/"><img src="<?php echo base_url(); ?>resources/images/academy/icon/course.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>academy/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Course</span></a>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-11">
        <div class="pagelet_divider"></div>
    </div>    
    <div class="col-md-1"></div>    
</div>
<div class="row">
    <!--LEFT_COLUMN-->
    <div class="col-md-3">
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo base_url(); ?>pages/pages_newsfeed" >
                    <img class="img-thumbnail" src="<?php echo base_url(); ?>resources/images/academy/cover/01.jpg">
                </a>
            </div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <ul class="video_ul">
                    <a href="<?php echo base_url(); ?>academy/academy_course_home"><li>Info</li></a>
                    <a href="<?php echo base_url(); ?>academy/academy_course_lecture"><li>Lectures</li></a>
                    <a href="<?php echo base_url(); ?>academy/academy_course_students"><li>Students</li></a>
                    <a href="<?php echo base_url(); ?>academy/academy_course_realted_ques"><li>Questions & Answers</li></a>
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
    <div class="col-md-8">
        <?php $this->load->view("member/pagelets/academy/course_info"); ?>
    </div>
</div>
