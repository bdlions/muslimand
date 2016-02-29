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
    <?php $this->load->view("member/page/brief_info"); ?>
</div>
<div class="form-group">
    <?php $this->load->view("member/page/photo_list"); ?>
</div>