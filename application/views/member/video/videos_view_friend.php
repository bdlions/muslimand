<div class="row padding_top_30px">
    <div class="col-md-6">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/video/film_add.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>photos/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Video</span></a>
    </div>
    <div class="col-md-offset-3 col-md-3">
        <a  href="<?php echo base_url(); ?>Videos/add_video"><button class="button-custom pull-right" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Share a Video</button></a>
    </div>
</div>
<div class="row">
    <div class="col-md-13">
        <div class="pagelet_divider"></div>
    </div>    
</div>
<div class="row">
    <!--LEFT_COLUMN-->
    <?php $this->load->view("templates/sections/member_videos_left_pane"); ?>
    <!--MIDDLE COLUMN-->
    <div class="col-md-9">
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
                        <div class="btn-group">
                            <button style="background-color: #E9EAED; border: 1px solid #703684; padding: 2px 10px;" type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Latest<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>videos/">Latest</a></li>
                                <!--                                <li><a href="<?php //echo base_url(); ?>videos/videos_sort_most_viewed">Most Viewed</a></li>
                                <li><a href="<?php //echo base_url(); ?>videos/videos_sort_top_rated">Top Rated</a></li>
                                <li><a href="<?php //echo base_url(); ?>videos/videos_sort_most_discussed">Most Discussed</a></li>-->
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
            <div class="col-md-1"></div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-9">
                <?php $this->load->view("member/pagelets/video/view_friend"); ?>
            </div>
            
            
<!--            <div class="col-md-3">
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="ul_background_color">
                            <li>Most Viewed</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/Xl1zLHd6gp8/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">amazing child</a><br>
                        </div>
                        <div class="font_10px">
                            39 views<br>
                            by <a href="">Dr. Belal</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/RDKbkBa03CE/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Sheikh Motiur Rahman Madani 1</a><br>
                        </div>
                        <div class="font_10px">
                            859 views<br>
                            by <a href="">Jannatul Ferdaus</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/OTUoExVeQNI/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Sheikh Motiur Rahman Madani 2</a><br>
                        </div>
                        <div class="font_10px">
                            558 views<br>
                            by <a href="">Maria Islam</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/Re6T7aLVi1o/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Quran Recite</a><br>
                        </div>
                        <div class="font_10px">
                            7,954 views<br>
                            by <a href="">Mohammad Rafique</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>videos/videos_sort_most_viewed">See All</a>
                        </div>
                    </div>
                </div>

                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="ul_background_color">
                            <li>Most Rated</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/Xl1zLHd6gp8/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">amazing child</a><br>
                        </div>
                        <div class="font_10px">
                            39 views<br>
                            by <a href="">Dr. Belal</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/FgTuWiKSLkI/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Enlighten power</a><br>
                        </div>
                        <div class="font_10px">
                            1,921 views<br>
                            by <a href="">Jannatul Ferdaus</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/hCe81IJmmDo/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Waz 3</a><br>
                        </div>
                        <div class="font_10px">
                            3,159 views<br>
                            by <a href="">Barak Obama</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/NIvOrtLto0M/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Purity</a><br>
                        </div>
                        <div class="font_10px">
                            2,259 views<br>
                            by <a href="">Maria Islam</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>videos/videos_sort_top_rated">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="ul_background_color">
                            <li>Most Discussed</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/h9uGVSlTMK4/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Critical Ques</a><br>
                        </div>
                        <div class="font_10px">
                            3,901 views<br>
                            by <a href="">Sharmin Akter</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/ogfbPh0MkzQ/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Zakir Naik lecture 1</a><br>
                        </div>
                        <div class="font_10px">
                            952 views<br>
                            by <a href="">Mohammad Rafique</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/kwBDpW7QOmQ/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Zakir Naik lecture 2</a><br>
                        </div>
                        <div class="font_10px">
                            859 views<br>
                            by <a href="">Jannatul Ferdaus</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" >
                            <img scrolling="no" src="http://img.youtube.com/vi/NIvOrtLto0M/1.jpg" width="160" height="90" frameborder="0" allowfullscreen>
                        </a>
                        <div class="font_11px">
                            <a href="<?php echo base_url(); ?>videos/videos_iframe">Purity</a><br>
                        </div>
                        <div class="font_10px">
                            2,259 views<br>
                            by <a href="">Maria Islam</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a href="<?php echo base_url(); ?>videos/videos_sort_most_discussed">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row form-group"></div>
            </div>-->
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
