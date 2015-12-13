
    <div ng-controller="photoController" ng-clock>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 25px; font-weight: bold;">Photos</span>
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
            <?php $this->load->view("templates/sections/member_photos_left_pane"); ?>
            <!--MIDDLE COLUMN-->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
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
<!--                                        <li><a href="<?php //echo base_url(); ?>photos/photos_sort_most_viewed">Most Viewed</a></li>
                                        <li><a href="<?php //echo base_url(); ?>photos/photos_sort_top_rated">Top Rated</a></li>
                                        <li><a href="<?php //echo base_url(); ?>photos/photos_sort_most_discussed">Most Discussed</a></li>-->
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
                    <div class="col-md-12" ng-init="setUserAlbumList(<?php echo htmlspecialchars(json_encode($user_album_list)); ?>)" >
                        <?php // $this->load->view("member/pagelets/photo/sort_latest"); ?>
                         <?php $this->load->view("member/pagelets/photo/sort_view_my_albums"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>