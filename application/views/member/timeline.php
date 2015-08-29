<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/friendController.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/friendService.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/friendApp.js "></script>
<div ng-app="app.Friend">
    <div ng-controller="friendController">
        <div class="row">
            <!--LEFT_COLUMN-->
            <div class="col-md-10">
                <!-- Cover Image -->
                <?php $this->load->view("member/pagelets/timeline/profile_cover"); ?>

                <div class="row form-group"></div>
                <div class="row">
                    <div class="col-md-12">
                        <?php $this->load->view("member/pagelets/timeline/add_request"); ?>
                    </div>
                </div>
                <div class="row form-group"></div>

                <!--CARDS AFTER BANNER-->
                <div class="row">
                    <div class="col-md-5">
                        <?php $this->load->view("member/pagelets/timeline/brief_info"); ?>
                        <div class="row form-group"></div>
                        <?php $this->load->view("member/pagelets/timeline/friend_list"); ?>
                        <div class="row form-group"></div>
                        <?php $this->load->view("member/pagelets/timeline/photo_list"); ?>
                    </div>
                    <div class="col-md-7">
                        <?php $this->load->view("member/pagelets/timeline/post_status"); ?>
                        <div class="row form-group"></div>
                        <?php $this->load->view("member/pagelets/timeline/shared_link"); ?>
                        <div class="row form-group"></div>
                        <?php $this->load->view("member/pagelets/timeline/shared_status"); ?>
                    </div>
                </div>
                <div class="row form-group"></div>
            </div>

            <!--RIGHT COLUMN (CHATBOX COLUMN)-->
            <div class="col-md-2">
            </div>
        </div>
    </div>
</div>