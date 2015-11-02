
<div ng-controller="friendController">

        <!--LEFT_COLUMN
        <!-- Cover Image -->
        <div class="row form-group">
            <?php $this->load->view("member/timeline/profile_cover"); ?>

        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/timeline/add_request"); ?>
            </div>
        </div>
        <div class="row form-group"></div>

        <!--CARDS AFTER BANNER-->
        <div class="row">
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

    <!--RIGHT COLUMN (CHATBOX COLUMN)-->
    <div class="col-md-2">
    </div>
</div>
</div>
<!--</div>-->
