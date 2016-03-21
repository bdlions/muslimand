<script>
    $(function () {
        $('#photo_sub').on('click', function () {
            $('.photo_test').show();
        });
        $('#video_sub').on('click', function () {
            $('.video_test').show();
        });
    });
</script>
<div ng-controller="pageController">
    <div ng-init="setPageInfo('<?php echo htmlspecialchars(json_encode($page_info))?>')">
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
                <?php // $this->load->view("member/page/updated_status"); ?>
            </div>
        </div>
    </div>
</div>

