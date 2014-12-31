<div class="row">

    <!--LEFT_COLUMN-->
    <div class="col-md-10">

        <!-- Cover Image -->
        <?php $this->load->view("member/pagelets/profile_cover"); ?>

        <div class="row form-group"></div>

        <!--CARDS AFTER BANNER-->
        <div class="row">
            <div class="col-md-5">
                <?php $this->load->view("member/pagelets/brief_info"); ?>
            </div>
            <div class="col-md-7">
                <?php $this->load->view("member/pagelets/post_status"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/shared_link"); ?>
                <div class="row form-group"></div>
                <?php $this->load->view("member/pagelets/shared_status"); ?>
            </div>

        </div>
        <div class="row form-group"></div>
    </div>

    <!--RIGHT COLUMN (CHATBOX COLUMN)-->
    <div class="col-md-2">
    </div>
</div>



