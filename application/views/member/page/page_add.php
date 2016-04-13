<script>
    function add_page(catrgoryInfo) {
        angular.element($('#add_page_id')).scope().addPage(catrgoryInfo, function (data) {
            if(data.status == 1){
                window.location = '<?php echo base_url(); ?>pages/pages_getting_started/' + data.page_id;
            }else if(data.status == 0){
                alert(data.message);
            }else{
                alert(data.message);
             }

        });
    }
</script>
<style>
    option{
        height: 28px!important; 
        padding: 3px!important; 
        font-size: 12px!important; 
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        color: #555;
        display: block;
        font-size: 14px;
        line-height: 1.42857;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        width: 100%;
    }
</style>

<div class="row padding_top_30px">
    <div class="col-md-12">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/pages/icon/page.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>pages/pages_newsfeed"><span class="" style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Pages</span></a>
    </div>
</div>
<div class="row" ng-controller="pageController">
    <div  ng-init="setCategoryList('<?php echo htmlspecialchars(json_encode($categories)); ?>')" >
        <div class="col-md-12" >
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <span style="font-size: 20px; font-weight: bold;">Creating a Page</span><br>
                    Connect with friends, associates & fans. 
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row padding_top_20px">
                <div id="add_page_id" class="col-md-4 padding_bottom_30px" ng-repeat="category in categoryList">
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_BRAND ?>'">
                        <form>
                            <div id="brand" class="brand">
                                <div class="brand_cover" >
                                    <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/brand.png"><br>
                                    <span class="font_bold">{{category.title}}</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top font_16px" >{{category.title}}</label>
                                        <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                    </div>
                                </div>
                                <div class="row form-group padding_top_20px">
                                    <div class="col-md-offset-1 col-md-10" ng-init="setBrandSubcategoryList('<?php echo htmlspecialchars(json_encode($brand_subcategories)); ?>')" >
                                        <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in brandSubCategoryList" ng-model="PageInfo.subCategory">
                                            <option class="form-control " value="">Please select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top" >Name: </label>
                                        <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <div style="padding-top: 10px;">
                                            <a  href=""><button id="" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_PRODUCT ?>'">
                        <form>
                            <div id="product" class="brand">
                                <div class="brand_cover">
                                    <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/product.png"><br>
                                    <span class="font_bold">{{category.title}}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top font_16px">{{category.title}}</label>
                                    </div>
                                </div>
                                <div class="row form-group padding_top_20px">
                                    <div class="col-md-offset-1 col-md-10" ng-init="setProductSubcategoryList('<?php echo htmlspecialchars(json_encode($product_subcategories)); ?>')" >
                                        <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in productSubCategoryList" ng-model="PageInfo.subCategory">
                                            <option class="form-control " value="">Please select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top" >Name: </label>
                                        <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <div style="padding-top: 10px;">
                                            <a  href=""><button id="product_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_GROUP ?>'">
                        <form>
                            <div id="group" class="brand">
                                <div class="brand_cover">
                                    <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/group.png"><br>
                                    <span class="font_bold">{{category.title}}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top font_16px" >{{category.title}}</label>
                                        <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                    </div>
                                </div>
                                <div class="row form-group padding_top_20px">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top" >Name: </label>
                                        <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <div style="padding-top: 10px;">
                                            <a  href=""><button id="group_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_COMMUNITY ?>'">
                        <form>
                            <div id="community" class="brand">
                                <div class="brand_cover">
                                    <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/community.png"><br>
                                    <span class="font_bold">{{category.title}}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top font_16px">{{category.title}}</label>
                                    </div>
                                </div>
                                <div class="row form-group padding_top_20px">
                                    <div class="col-md-offset-1 col-md-10">
                                        <label class="label_padding_top" >Name: </label>
                                        <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                        <a  href=""><button id="community_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_BUSINESS ?>'">
                        <div id="business" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/business.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10" ng-init="setBusinessSubcategoryList('<?php echo htmlspecialchars(json_encode($business_subcategories)); ?>')" >
                                    <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in businessSubCategoryList" ng-model="PageInfo.subCategory">
                                        <option class="form-control " value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Name"  ng-model="PageInfo.title" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Street Address" ng-model="PageInfo.street">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="City/State" ng-model="PageInfo.city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Zip Code" ng-model="PageInfo.zipCode">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Phone" ng-model="PageInfo.phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 6px;">
                                        <a  href=""><button id="business_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_PLACE ?>'">
                        <div id="place" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/place.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10" ng-init="setPlaceSubcategoryList('<?php echo htmlspecialchars(json_encode($place_subcategories)); ?>')" >
                                    <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in placeSubCategoryList" ng-model="PageInfo.subCategory">
                                        <option class="form-control " value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Name" ng-model="PageInfo.title" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Street Address" ng-model="PageInfo.street">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="City/State" ng-model="PageInfo.city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Zip Code" ng-model="PageInfo.zipCode">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <input type="text" class="form-control form_control_custom_style" placeholder="Phone" ng-model="PageInfo.phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 6px;">
                                        <a  href=""><button id="place_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_ENTERTAINMENT ?>'">
                        <div id="entertainment" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/entertainment.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row form-group padding_top_20px">
                                <div class="col-md-offset-1 col-md-10" ng-init="setEntertainmentSubcategoryList('<?php echo htmlspecialchars(json_encode($entertainment_subcategories)); ?>')" >
                                    <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in entertainmentSubCategoryList" ng-model="PageInfo.subCategory">
                                        <option class="form-control " value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top" >Name: </label>
                                    <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 10px;">
                                        <a  href=""><button id="entertainment_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_COMPANY ?>'">
                        <div id="company" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/company.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row form-group padding_top_20px">
                                <div class="col-md-offset-1 col-md-10" ng-init="setCompanySubcategoryList('<?php echo htmlspecialchars(json_encode($company_subcategories)); ?>')" >
                                    <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in companySubCategoryList" ng-model="PageInfo.subCategory">
                                        <option class="form-control " value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top" >Name: </label>
                                    <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 10px;">
                                        <a  href=""><button id="company_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_ORGANIZATION ?>'">
                        <div id="organization" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/organization.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row form-group padding_top_20px">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top" >Name: </label>
                                    <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 10px;">
                                        <a  href=""><button id="organization_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_INSTITUTION ?>'">
                        <div id="institution" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/institution.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row form-group padding_top_20px">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top" >Name: </label>
                                    <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 10px;">
                                        <a  href=""><button id="institution_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_ARTIST_OR_BAND ?>'">
                        <div id="artist" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/band.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row form-group padding_top_20px">
                                <div class="col-md-offset-1 col-md-10" ng-init="setArtistOrBandSubcategoryList('<?php echo htmlspecialchars(json_encode($artist_or_band_subcategories)); ?>')" >
                                    <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in artistOrBandSubCategoryList" ng-model="PageInfo.subCategory">
                                        <option class="form-control " value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top" >Name: </label>
                                    <input type="text" class="form-control form_control_custom_style" ng-model="PageInfo.title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 10px;">
                                        <a  href=""><button id="band_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-if="category.categoryId == '<?php echo CATEGORY_TYPE_ID_FOR_PUBLIC_FIGURE ?>'">
                        <div id="public" class="brand">
                            <div class="brand_cover">
                                <img class="img_padding_top" src="<?php echo base_url(); ?>resources/images/pages/icon/public.png"><br>
                                <span class="font_bold">{{category.title}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top font_16px" >{{category.title}}</label>
                                    <input type="hidden" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.categoryTitle" >
                                </div>
                            </div>
                            <div class="row form-group padding_top_20px">
                                <div class="col-md-offset-1 col-md-10" ng-init="setPublicFigureSubcategoryList('<?php echo htmlspecialchars(json_encode($public_figure_subcategories)); ?>')" >
                                    <select  class="form-control form_control_custom_style" ng-options="subCategory.title for subCategory in publicFigureSubCategoryList" ng-model="PageInfo.subCategory">
                                        <option class="form-control " value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <label class="label_padding_top" >Name: </label>
                                    <input type="text" class="form-control form_control_custom_style" value="{{category.title}}" ng-model="PageInfo.title" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <div style="padding-top: 10px;">
                                        <a  href=""><button id="public_creating_page_button" class="button-custom" onclick="add_page(angular.element(this).scope().category)">Get started</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group padding_top_30px"></div>
        </div>
    </div>
</div>

<?php // $this->load->view("member/page/section/modal_create_page_error"); ?>

<script>
    $(function() {
        $(".brand_cover").click(function() {
            $(".brand_cover").show();
            $(this).hide();
        });
    });
</script>


