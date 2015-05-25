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
                        <?php $this->load->view("member/pagelets/about/career/about_career"); ?>
                        <?php $this->load->view("member/pagelets/about/place/about_place"); ?>
                        <?php $this->load->view("member/pagelets/about/contact_info/about_contact_info"); ?>
                        <?php $this->load->view("member/pagelets/about/family_relation/about_family_relation"); ?>
                        <?php $this->load->view("member/pagelets/about/details/about_details"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        $('#about_overview').show();
    });

    $('#category_career').on('click', function () {
        $('#about_overview').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#work').hide();
        $('#professional_skill').hide();
        $('#university').hide();
        $('#college').hide();
        $('#school').hide();
        $('#about_career').show();
        $('#subcategory_work').show();
        $('#subcategory_professional_skill').show();
        $('#subcategory_university').show();
        $("#subcategory_college").show();
        $('#subcategory_school').show();
        
    });

    $('#category_place').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#place').hide();
        $('#about_place').show();
        $('#subcategory_place').show();
    });

    $('#category_contact_info').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_family_relation').hide();
        $('#about_details').hide();
        $('#contact_info').hide();
        $('#about_contact_info').show();
        $('#subcategory_contact_info').show();

    });
    $('#category_family_relation').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_details').hide();
        $('#family_relation').hide();
        $('#about_family_relation').show();
        $('#subcategory_family_relation').show();
    });

    $('#category_details').on('click', function () {
        $('#about_overview').hide();
        $('#about_career').hide();
        $('#about_place').hide();
        $('#about_contact_info').hide();
        $('#about_family_relation').hide();
        $('#details').hide();
        $('#about_details').show();
        $('#subcategory_details').show();
    });
</script>

