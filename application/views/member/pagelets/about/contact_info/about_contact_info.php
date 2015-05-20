<div id="about_contact_info" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Contact & Basic Info</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>

    <div id="subcategory_contact_info" class="row">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Your Contact Info</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/contact_info/contact_info"); ?>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
    <?php $this->load->view("member/pagelets/about/contact_info/info"); ?>
        </div>
    </div>
    <div class="pagelet_divider"></div>
</div>
<script>
    $('#subcategory_contact_info').on('click', function () {
        $('#subcategory_contact_info').hide();
        $('#contact_info').show();
    });
</script>