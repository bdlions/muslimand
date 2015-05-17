<div class="row">

    <!--LEFT_COLUMN-->
    <div class="col-md-10">
        <!-- Cover Image -->
        <?php $this->load->view("member/pagelets/non_friend/profile_cover"); ?>

        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                 <?php $this->load->view("member/pagelets/non_friend/add_request"); ?>
            </div>
        </div>
        <div class="row form-group"></div>

        <!--CARDS AFTER BANNER-->
        <div class="row">
            <div class="col-md-5">
                <?php $this->load->view("member/pagelets/non_friend/brief_info"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/non_friend/friend_list"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/non_friend/photo_list"); ?>
            </div>
            <div class="col-md-7">
                <?php $this->load->view("member/pagelets/non_friend/post_status"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/non_friend/shared_link"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/non_friend/shared_status"); ?>
                </div>
</div>
        <div class="row form-group"></div>
    </div>

    <!--RIGHT COLUMN (CHATBOX COLUMN)-->
    <div class="col-md-2">
    </div>
</div>



