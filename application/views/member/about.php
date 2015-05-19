<div class="row">
    <div class="col-md-10">
        <?php $this->load->view("member/pagelets/profile_cover"); ?>
        <div class="row form-group"></div>
        <div class="pagelet">
            <div class="row">
                <div class="col-md-1">
                    <div class="row form-group"></div>
                    <img src="<?php echo base_url(); ?>resources/images/about.png"  width="28" height="28">   
                </div>
                <div class="col-md-11">
                    <span style="font-size: 35px;">About</span>  
                </div>
            </div>
        </div>
        <div class="pagelet">
            <div class="row">
                <div class="col-md-4" style="border-right: 1px solid lightgray;">
                    <div class="pagelet">
                        <?php $this->load->view("member/pagelets/about/about_categoty"); ?>
                    </div>
                </div> 
                <div class="col-md-8">
                    <div class="pagelet">
                        <?php $this->load->view("member/pagelets/about/about_overview"); ?>
                        <?php $this->load->view("member/pagelets/about/about_career/about_career"); ?>
                        <?php $this->load->view("member/pagelets/about/about_place"); ?>
                        <?php $this->load->view("member/pagelets/about/about_contact_info"); ?>
                        <?php $this->load->view("member/pagelets/about/about_family_relation"); ?>
                        <?php $this->load->view("member/pagelets/about/about_details"); ?>
                        <?php $this->load->view("member/pagelets/about/about_life_events"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Left COLUMN (Update status & chat box)-->
    <div class="col-md-2" style="border-left: 1px solid lightgray">
    </div>
    <div class="row form-group"></div>
</div>

<script>
    $('#category_overview').on('click', function () {
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#about_life_events').hide();
        $('#work').hide();
        $('#about_overview').show();
    });
    $('#category_career').on('click', function () {
        $('#about_overview').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#about_life_events').hide();
        $('#about_career').show();
    });
    $('#category_place').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#about_life_events').hide();
        $('#work').hide();
        $('#about_place').show();
    });
    $('#category_contact_info').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#about_life_events').hide();
        $('#work').hide();
        $('#about_contact_info').show();
    });
    $('#category_family_relation').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_details').hide();
        $('#about_life_events').hide();
        $('#work').hide();
        $('#about_family_relation').show();
    });
    $('#category_details').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_life_events').hide();
        $('#work').hide();
        $('#about_details').show();
    });
    $('#category_life_events').on('click', function () {
        $('#about_overview').hide();
       $('#about_career').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#work').hide();
        $('#about_life_events').show();
    });


</script>

