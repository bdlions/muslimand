<script>
    $(function() {
        $('#photo_sub').on('click', function() {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function() {
            $('.video_test').show();
        });
        $('#timeLineStatus').show();
        $('#updateStatusPagelet').show();
        $('#aboutPageMenu').on('click', function() {
            $('#timeLineStatus').hide();
            $('#updateStatusPagelet').hide();
            $('#pageAboutContent').show();
        });
        $('#timelinePageMenu').on('click', function() {
            $('#pageAboutContent').hide();
            $('#photoPageContent').hide();
            $('#timeLineStatus').show();
            $('#updateStatusPagelet').show();
        });
        $('#photoPageMenu').on('click', function() {
            $('#pageAboutContent').hide();
            $('#timeLineStatus').hide();
            $('#updateStatusPagelet').hide();
            $('#photoPageContent').show();
        });
    });
</script>
<div ng-controller="pageController">
    <div ng-init="setPageBasicInfo(<?php echo htmlspecialchars(json_encode($page_info)); ?>)">
        <div ng-init="setMemberInfo(<?php echo htmlspecialchars(json_encode($member_info)); ?>)">
            <?php $this->load->view("member/page/section/cover"); ?>

            <div class="row form-group">
                <div class="col-md-5">
                    <?php $this->load->view("member/page/section/left_panel"); ?>
                </div>
                <div class="col-md-7">
                    <?php $this->load->view("member/page/section/top_menu_bar"); ?>
                    <?php $this->load->view("member/page/section/timeline_page_title"); ?>
                    <div class="row form-group"></div>
                    <?php $this->load->view("member/page/post_status"); ?>
                    <div class="row form-group"></div>
                    <div ng-controller="statusController"  ng-init="setUserGender(<?php echo htmlspecialchars(json_encode($user_gender_id)); ?>)">
                        <div style="margin-left: -15px;">
                        <?php $this->load->view("member/pagelets/updated_status"); ?>
                        </div>
                        <?php $this->load->view("member/page/page_about"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



