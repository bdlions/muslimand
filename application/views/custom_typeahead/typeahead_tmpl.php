<div class="row pixel_perfection pagelet_z_index" id="page_late_id" style="display: none; top: 27px">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="search_pagelet">
            <div class="row">
                <div class="col-md-6">
                    <div id="users_temp">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <span class="pagelet_title">People</span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div id="type_ahead_user">
                                    <div id="dropdown_design_user">
                                        <div class="row margin_style">
                                            <a class= "user_anchor" href="" >
                                                <div class="col-md-2">
                                                    <div class="profile-background profile_background_search_bar user_image_id">                                                                    
                                                        <img  alt="" src="" class="user_image img-responsive profile-photo" onError="userImageOnError(this)"/>
                                                        <!--<div class="signature_id" style="visibility:hidden;height:0px"></div>-->
                                                        <img style="visibility:hidden;height: 0px;" src="" class="user_on_error_image img-responsive on-error-profile-photo" alt="" >
                                                    </div>
                                                </div>
                                                <div class="col-md-10 font_12px">
                                                    <div class="user_name" style="padding-top: 7px; padding-top: 7px">
                                                    </div>
                                                </div>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="pages_temp">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <span class="pagelet_title">Page</span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <div id="type_ahead_page">
                                    <div id="dropdown_design_page">
                                        <div class="row margin_style">
                                            <a class= "page_anchor" href="" >
                                                <div class="col-md-2">
                                                    <div class="profile-background profile_background_search_bar page_image_id">                                                                    
                                                        <img  alt="" src="" class="page_image img-responsive profile-photo"/>
                                                        <img style="visibility: hidden; height: 0px;" src="" class="page_on_error_image img-responsive on-error-profile-photo" alt="" >
                                                    </div>
                                                </div>
                                                <div class="col-md-10 font_12px">
                                                    <div class="page_name" style="padding-top: 7px; padding-top: 7px"></div>
                                                </div>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function userImageOnError(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];
        var image = secondImage.src;
        firstImage.src = image;
    }

</script>