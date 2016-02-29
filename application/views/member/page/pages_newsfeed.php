<script>
    $(function() {
        $('#photo_sub').on('click', function() {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function() {
            $('.video_test').show();
        });
    });
</script>

<?php $this->load->view("member/page/section/cover"); ?>

<div class="row form-group">
    <div class="col-md-5">
        <?php $this->load->view("member/page/section/left_panel"); ?>
    </div>
    <div class="col-md-7">
        <?php $this->load->view("member/page/section/top_menu_bar"); ?>
        <?php $this->load->view("member/page/section/page_title"); ?>

        <div class="row form-group"></div>
        <?php $this->load->view("member/page/post_status"); ?>
        <div class="row form-group"></div>
        <?php //$this->load->view("member/pagelets/shared_status"); ?>
        <div class="row form-group"></div>
        <?php //$this->load->view("member/pagelets/shared_link"); ?>
        <div class="row form-group"></div>
        <?php //$this->load->view("member/pagelets/shared_photo"); ?>
        <div class="row form-group"></div>
        <?php //$this->load->view("member/pagelets/shared_video"); ?>
        <div class="row form-group"></div>
        <?php //$this->load->view("member/pagelets/updated_profile_pic"); ?>
        <div class="row form-group"></div>
        <?php //$this->load->view("member/pagelets/updated_status"); ?>
        <div class="row form-group"></div>
    </div>
</div>


<!--<script>
    $(function() {
        $('#photo_sub').on('click', function() {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function() {
            $('.video_test').show();
        });
    });
</script>

<div class="row" style="margin-bottom: 3px;">
    <div class="col-md-12">
        <img src="<?php echo base_url() ?>resources/images/pages/cover/02.jpg" width="100%" height="250">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-5">
        <div class="pagelet form-group">
            <div class="row">
                <div class="col-md-12">
                    <a style="margin-left: 54px;" href="<?php echo base_url(); ?>pages/pages_newsfeed" >
                        <img class="img-circle" src="<?php echo base_url(); ?>resources/images/pages/profile/100_100/01.jpg">
                    </a>
                </div>
            </div>
        </div>
        <div class="pagelet form-group">
            <div class="row">
                <div class="col-md-12">
                    <label>20 people likes this</label>
                </div>
            </div>
        </div>
        <div class="form-group">
<?php //$this->load->view("member/page/brief_info"); ?>
        </div>
        <div class="form-group">
<?php //$this->load->view("member/page/photo_list"); ?>

        </div>
    </div>
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12">
                <div style="background-color: whitesmoke;">
                    <div aria-label="..." role="group" class="btn-group">
                        <a href="<?php echo base_url() ?>pages/pages_newsfeed" style="font-size: 100%" class="btn btn-default">Timeline</a>
                        <a href="<?php echo base_url() ?>pages/about" style="font-size: 100%" class="btn btn-default get_over_view_class">About</a>
                        <a href="<?php echo base_url() ?>photos" style="font-size: 100%" class="btn btn-default">Photos</a>
                        <a href="<?php echo base_url() ?>friend/get_friend_list" style="font-size: 100%" class="btn btn-default">Videos</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row form-group padding_top_10px">
            <div class="col-md-8">
                <div class="title_info">
                    <a class="link" href="<?php echo base_url(); ?>pages/pages_newsfeed">ISLAM : The Best Way of Life</a>
                    <div class="extra_info">
                        <ul class="extra_info_middot">
                            <li>Public</li>
                            <li>
                                <span>·</span>
                            </li>
                            <li>987 members</li>
                        </ul>
                    </div>
                    <div class="extra_info">
                        <span class="like_number">8,828</span>
                        <a href="#">Likes</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-xs glyphicon glyphicon-plus" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 20px;"> Join</button>
                <button class="btn btn-xs glyphicon glyphicon-star" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 20px;"> Invite</button>
            </div>
        </div>
        <div class="borber_style"></div>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/post_status"); ?>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/shared_status"); ?>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/shared_link"); ?>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/shared_photo"); ?>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/shared_video"); ?>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/updated_profile_pic"); ?>
        <div class="row form-group"></div>
<?php //$this->load->view("member/pagelets/updated_status"); ?>
        <div class="row form-group"></div>


    </div>
</div>
-->
