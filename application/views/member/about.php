<div ng-app="app.BasicProfile">
    <div ng-controller="basicProfileController">
        <div class="row">
            <div class="col-md-10">
                <?php $this->load->view("member/timeline/profile_cover"); ?>
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
                                <?php $this->load->view("member/profile/about/overview/left_panel_categoty"); ?>
                            </div>
                        </div> 
                        <div class="col-md-8">
                            <div class="pagelet">
                                <?php $this->load->view("member/profile/about/overview/index"); ?>
                                <?php $this->load->view("member/profile/about/work_education/index"); ?>
                                <?php $this->load->view("member/profile/about/places/index"); ?>
                                <?php $this->load->view("member/profile/about/contact_basic_info/index"); ?>
                                <?php $this->load->view("member/profile/about/family_relationship/index"); ?>
                                <?php $this->load->view("member/profile/about/details/index"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="border-left: 1px solid lightgray"></div>
        </div>
    </div>
</div>
