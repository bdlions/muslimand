<div class="pagelet form-group">
    <div class="row">
        <div class="col-md-12">
            <a style="margin-left: 54px;" href="<?php echo base_url(); ?>pages/pages_newsfeed" >
                <img  class="img-circle cursor_holder_style" fallback-src="<?php echo base_url() . 'resources/images/pages/profile_picture/100x100/01.jpg'; ?>"  ng-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W100_H100 . $page_id . '.jpg'; ?>"/>
            </a>
        </div>
    </div>
</div>
<div class="pagelet form-group" >
    <div class="row">
        <div class="col-md-12">
            <label><?php echo $like_counter?> people likes this</label>
        </div>
    </div>
</div>
<div class="form-group">
    <?php $this->load->view("member/page/brief_info"); ?>
</div>
<div class="form-group">
    <?php $this->load->view("member/page/photo_list"); ?>
</div>