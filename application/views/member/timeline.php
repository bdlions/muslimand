<div ng-controller="friendController">
    <div ng-init="setConstants(<?php echo htmlspecialchars(json_encode($constants)); ?>)">

        <!--LEFT_COLUMN
        <!-- Cover Image -->
        <div class="row form-group">
            <div class="col-md-12">
            <?php $this->load->view("member/timeline/profile_cover"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/timeline/add_request"); ?>
            </div>
        </div>
        <div class="row form-group"></div>

        <!--CARDS AFTER BANNER-->
        <div class="row form-group">
            <div class="col-md-5">
                <?php $this->load->view("member/timeline/brief_info"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/timeline/friend_list"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/timeline/photo_list"); ?>
            </div>
            <div class="col-md-7">
                <?php $this->load->view("member/timeline/post_status"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/timeline/shared_link"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/timeline/shared_status"); ?>
            </div>
        </div>
        <div class="row form-group"></div>
    </div>
</div>
<!--</div>-->
