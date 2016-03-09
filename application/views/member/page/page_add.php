<div class="row padding_top_30px">
    <div class="col-md-12">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/pages/icon/page.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>pages/pages_newsfeed"><span class="" style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Pages</span></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 20px; font-weight: bold;">Creating a Page</span><br>
                Connect with friends, associates & fans. 
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-4">
                <div id="brand" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/brand.png"><br>
                        <span class="font_bold">Brand</span>
                    </div>

                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px" >Brand</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                             <?php $this->load->view("member/sections/page_category/brand"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="brand_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="product_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Product</span>
                                </div>-->
                <div id="product" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/product.png"><br>
                        <span class="font_bold">Product</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Product</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/product"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="product_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="group_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Group</span>
                                </div>-->
                <div id="group" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/group.png"><br>
                        <span class="font_bold">Group</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Group</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="group_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row padding_top_30px">
            <div class="col-md-4">
                <!--                <div class="brand_cover" id="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Community</span>
                                </div>-->
                <div id="community" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/community.png"><br>
                        <span class="font_bold">Community</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Community</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <a  href=""><button id="community_creating_page_button" class="button-custom">Get started</button></a>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="product_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Product</span>
                                </div>-->
                <div id="business" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/business.png"><br>
                        <span class="font_bold">Business</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Business</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/business"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Name">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Street Address">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="City/State">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Zip Code">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Phone">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 6px;">
                                <a  href=""><button id="business_creating_page_button" class="button-custom" >Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="group_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Group</span>
                                </div>-->
                <div id="place" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/place.png"><br>
                        <span class="font_bold">Place</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Place</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/place"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Name">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Street Address">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="City/State">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Zip Code">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <input type="text" class="form-control page_custom_form_control" placeholder="Phone">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 6px;">
                                <a  href=""><button id="place_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row padding_top_30px">
            <div class="col-md-4">
                <!--                <div class="brand_cover" id="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Brand</span>
                                </div>-->
                <div id="entertainment" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/entertainment.png"><br>
                        <span class="font_bold">Entertainment</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Entertainment</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/entertainment"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="entertainment_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="product_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Product</span>
                                </div>-->
                <div id="company" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/company.png"><br>
                        <span class="font_bold">Company</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Company</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/company"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="company_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="group_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Group</span>
                                </div>-->
                <div id="organization" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/organization.png"><br>
                        <span class="font_bold">Organization</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Organization</label>
                        </div><div class="col-md-offset-1"></div>

                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/organization"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="organization_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row padding_top_30px">
            <div class="col-md-4">
                <!--                <div class="brand_cover" id="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Brand</span>
                                </div>-->
                <div id="institution" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/institution.png"><br>
                        <span class="font_bold">Institution</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Institution</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="institution_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="product_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Product</span>
                                </div>-->
                <div id="artist" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/band.png"><br>
                        <span class="font_bold">Artist or Band</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Artist or Band</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                             <?php $this->load->view("member/sections/page_category/band"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div><div class="col-md-offset-1"></div>

                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="band_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--                <div id="group_cover" class="brand_cover" style="background-color: #CCBC90; width: 100%; height: 250px; border-radius: 8px; text-align: center;">
                                     <span class="font_bold">Group</span>
                                </div>-->
                <div id="public" class="brand">
                    <div class="brand_cover">
                        <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/public.png"><br>
                        <span class="font_bold">Public Figure</span>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top font_16px">Public Figure</label>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <?php $this->load->view("member/sections/page_category/public"); ?>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <label class="label_padding_top" >Name: </label>
                            <input type="text" class="form-control page_custom_form_control">
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div style="padding-top: 10px;">
                                <a  href=""><button id="public_creating_page_button" class="button-custom">Get started</button></a>
                            </div>
                        </div>
                        <div class="col-md-offset-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding_top_30px"></div>
    </div>
</div>

<?php $this->load->view("modal/modal_create_page_error"); ?>

<script>
    $(function() {
        $(".brand_cover").click(function() {
            $(".brand_cover").show();
            $(this).hide();
        });
    });
</script>
