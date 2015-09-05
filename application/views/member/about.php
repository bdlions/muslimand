<div ng-app="app.BasicProfile">
    <div ng-controller="basicProfileController">
        <div class="row">
            <div class="col-md-10">
                <?php $this->load->view("member/pagelets/timeline/profile_cover"); ?>
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
                                <?php $this->load->view("member/profile/about/work_education/index"); ?>
                                <?php $this->load->view("member/pagelets/about/place/about_place"); ?>
                                <?php $this->load->view("member/pagelets/about/contact_info/about_contact_info"); ?>
                                <?php $this->load->view("member/pagelets/about/family_relation/about_family_relation"); ?>
                                <?php $this->load->view("member/pagelets/about/details/about_details"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="border-left: 1px solid lightgray"></div>
        </div>
    </div>
</div>
