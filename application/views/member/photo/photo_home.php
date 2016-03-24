<div class="row form-group" ng-controller="friendController" ng-cloak >
    <div class="col-md-12">
        <?php $this->load->view("member/timeline/profile_cover"); ?>
    </div>
</div>
<div ng-controller="photoController" ng-clock class="pagelet">
    <div class="row form-group">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
            <a href="<?php echo base_url(); ?>photos/" class="anchor_property_change"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <button id="create_new_album" style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Create Album</span></button>
                <a href="<?php echo base_url(); ?>photos/add_photos"><button style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Add Photo</span></button></a>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <div style="background-color: whitesmoke;">
                <div aria-label="..." role="group" class="btn-group photo_menu_list_inline">
                    <a id="albums" href="" class="btn btn-default"  onclick="get_album_list()">Albums</a>
                    <a id="photos" href="" class="btn btn-default active">Photos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12" id="albums_id" >
            <?php $this->load->view("member/photo/section/my_albums"); ?>
        </div>
    </div>
    <div class="row form-group" id="all_photos_id">
        <div class="col-md-12"  ng-init="setTimeLinePhotoList(<?php echo htmlspecialchars(json_encode($photo_list)); ?>)" >
            <?php $this->load->view("member/photo/section/all_photos"); ?>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
            <div id="footer">
                <?php $this->load->view("auth/sections/footer"); ?>
            </div>
        </div>
    </div>
</div>

<script>
    function get_album_list() {
        angular.element($('#albums')).scope().getAlbumList(function() {
            $("#photo_albums").show();
            $("#all_photos").hide();
        });
    }
    $("#photos").click(function() {
        $("#all_photos").show();
        $("#photo_albums").hide();
    });
    $(function() {
        var selector = '.photo_menu_list_inline a';
        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
        $("#create_new_album").on("click", function() {
            $('#modal_create_album_box').modal('show');
        });
    });

</script>

<?php $this->load->view("member/photo/section/modal_create_album"); ?>



<!--Back up previous work-->
<!--
<div ng-controller="photoController" ng-clock>
    <div class="row form-group"></div>
    <div class="row">
        <div class="col-md-6">
            <span style="font-size: 25px; font-weight: bold;">Photos</span>
        </div>
        <div class="col-md-offset-3 col-md-3">
            <a  href="<?php //echo base_url();             ?>photos/add_photos"><button class="button-custom pull-right">Upload a New Image</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pagelet_divider"></div>
        </div>    
    </div>
    <div class="row">
        LEFT_COLUMN
<?php //$this->load->view("templates/sections/member_photos_left_pane"); ?>
        MIDDLE COLUMN
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
                                    <li><a href="<?php //echo base_url();             ?>photos/">Latest</a></li>
                                        <li><a href="<?php //echo base_url();              ?>photos/photos_sort_most_viewed">Most Viewed</a></li>
                                    <li><a href="<?php //echo base_url();              ?>photos/photos_sort_top_rated">Top Rated</a></li>
                                    <li><a href="<?php //echo base_url();              ?>photos/photos_sort_most_discussed">Most Discussed</a></li>
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
                <div class="col-md-12" ng-init="setUserAlbumList(<?php //echo htmlspecialchars(json_encode($user_album_list));             ?>)" >
<?php // $this->load->view("member/pagelets/photo/sort_latest"); ?>
<?php //$this->load->view("member/pagelets/photo/sort_view_my_albums"); ?>
                </div>
            </div>
        </div>
    </div>
</div>-->