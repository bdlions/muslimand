<script>
    $(function() {
        $("#update_btn_id").hide();
        $("#interest_next_id").hide();
        $("#about_next_id").hide();

        var selector = '.image_inline a';
        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
        $("#profile_picture span").css({'color': '#703684', 'font-weight': 'bold'});
        $("#about span").css({'color': '#333', 'font-weight': 'bold'});
        $("#preferred_page span").css({'color': '#333', 'font-weight': 'bold'});
        $("#profile_picture").click(function() {
            $("#profile_picture span").css({'color': '#703684', 'font-weight': 'bold'});
            $("#about span").css({'color': '#333', 'font-weight': 'bold'});
            $("#preferred_page span").css({'color': '#333', 'font-weight': 'bold'});
            $("#about_content").hide();
            $("#preferred_page_content").hide();
            $("#profile_picture_content").show();
            $("#profile_next_id").show();
            $("#update_btn_id").hide();
            $("#about_next_id").hide();
        });
        $("#about").click(function() {
            $("#profile_picture span").css({'color': '#333', 'font-weight': 'bold'});
            $("#about span").css({'color': '#703684', 'font-weight': 'bold'});
            $("#preferred_page span").css({'color': '#333', 'font-weight': 'bold'});
            $("#about_next_id").show();
            $("#about_content").show();
            $("#profile_picture_content").hide();
            $("#preferred_page_content").hide();
            $("#update_btn_id").hide();
            $("#profile_next_id").hide();
        });
        $("#preferred_page").click(function() {
            $("#profile_picture span").css({'color': '#333', 'font-weight': 'bold'});
            $("#about span").css({'color': '#333', 'font-weight': 'bold'});
            $("#preferred_page span").css({'color': '#703684', 'font-weight': 'bold'});
            $("#about_content").hide();
            $("#profile_picture_content").hide();
            $("#preferred_page_content").show();
            $("#about_next_id").hide();
            $("#profile_next_id").hide();
            $("#update_btn_id").show();
        });

//        -----------------------------------
        $("#profile_next_id").click(function() {
            $("#about span").css("color", "#703684");
            $("#profile_picture span").css("color", "#333");
            $("#preferred_page span").css("color", "#333");
        });
        $("#about_next_id").click(function() {
            $("#preferred_page span").css("color", "#703684");
            $("#profile_picture span").css("color", "#333");
            $("#about span").css("color", "#333");
        });
    });
    function active_profile_field() {
        $("#profile_picture_content").hide();
        $("#preferred_page_content").hide();
        $("#profile_next_id").hide();
        $("#about_next_id").show();
        $("#about_content").show();
    }
    function active_about_field() {
//         $( "#about span" ).css( "color", "#703684" );
        $("#about_content").hide();
        $("#profile_picture_content").hide();
        $("#preferred_page_content").show();
        $("#about_next_id").hide();
        $("#interest_next_id").hide();
        $("#update_btn_id").show();
    }
    function active_interest_field() {
        $("#about_content").hide();
        $("#profile_picture_content").hide();
        $("#preferred_page_content").show();
        $("#about_next_id").hide();
        $("#interest_next_id").hide();
        $("#update_btn_id").show();
    }

    function update_page() {
        var pageId = '<?php echo $page_id; ?>';
        angular.element($('#update_btn_id')).scope().updatePage(pageId, function(data) {
            if (data.status == 1) {
                window.location = '<?php echo base_url(); ?>pages/timeline/' + pageId;
            } else if (data.status == 0) {
                alert(data.message);
            } else {
                alert(data.message);
            }

        });
    }
</script>
<div class="padding_top_50px"></div>
<div class="row" ng-controller="pageController">
    <div class="col-md-9" ng-init="setPageBasicInfo('<?php echo htmlspecialchars(json_encode($page_info)) ?>')">
        <div style="outline: 10px solid #fff;  border-radius: 4px;">
            <div class="pagelet" style="border: 1px solid lightgrey; border-radius: 4px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Set Up {{PageBasicInfo.title}}</h4>
                        <hr>
                    </div>
                </div>

                <ng-form>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="image_inline">
                                <a id="profile_picture" href=""><span style="margin-left: 26px;">Profile Pictute</span><img class="img-responsive" src="<?php echo base_url(); ?>resources/images/pages/2.png"></a>
                                <a id="about" href=""><span style="margin-left: 16px;">About</span><img class="img-responsive" src="<?php echo base_url(); ?>resources/images/pages/1.png"></a>
                                <a id="preferred_page" href=""><span style="margin-left: 32px;">Preferred Page Audience</span><img class="img-responsive" src="<?php echo base_url(); ?>resources/images/pages/3.png"></a>
                            </div>

                            <hr>
                        </div>
                    </div>
                    <div class="contain">
                        <div id="profile_picture_content"  class="content_show" >
                            <div class="row form-group padding_top_30px">
                                <div class="col-md-offset-4 col-md-8">
                                    <div ng-controller="ImageCopperController" ng-clock style="position: absolute; left: 15px; z-index: 1001;">
                                        <div ng-show="imageCropStep == 1" class=" fileinput-button profile_picture timeline_profile_picture_custom" style="height: 150px!important; width: 150px!important;">
                                            <img  class="cursor_holder_style" fallback-src="<?php echo base_url() . 'resources/images/pages/profile_picture/100x100/01.jpg'; ?>"  ng-src="<?php echo base_url() . PAGE_PROFILE_PICTURE_PATH_W100_H100 . $page_id . '.jpg'; ?>"/>
                                            <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
                                            <img style="position: absolute; z-index: 99999; cursor: pointer; height: 22px; width: 22px;" src="<?php echo base_url(); ?>resources/images/camera.png">
                                            <span style="font-size: 10px; color: #fff; text-align: center;">Upload From Computer</span>
                                        </div>	
                                        <div ng-show="imageCropStep == 2">
                                            <image-crop			 
                                                data-height="150"
                                                data-width="150"
                                                data-shape="square"
                                                data-step="imageCropStep"
                                                src="imgSrc"
                                                data-result="result"
                                                data-result-blob="resultBlob"
                                                crop="initCrop"
                                                padding="50"
                                                max-size="1024"
                                                imagepath = "<?php echo base_url(); ?>pages/add_profile_picture/<?php echo $page_id; ?>"
                                                reloadpath = ""
                                                ></image-crop>		   
                                        </div>
                                        <div ng-show="imageCropStep == 2">
                                            <button class="btn btn-sm" style="position: absolute; bottom: 0; right: 45px; background-color: #999; color: #fff; width: 25%;"  ng-click="initCrop = true">Crop</button>		
                                            <button class="btn btn-sm" style="position: absolute; bottom: 0; left: 45px; background-color: #999; color: #fff; width: 28%; vertical-align: middle;" ng-click="clear()">Cancel</button>
                                        </div>		  
                                        <div  ng-show="imageCropStep == 3">
                                            <div >
                                                <img ng-src="{{result}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="about_content" class="content_show content_hidden">
                            <div class="row form-group padding_top_30px">
                                <div class="col-md-12">
                                    Add a few sentences to tell people what your Page is about. 
                                    This will help it show up in the right search results. You will
                                    be able to add more details later from your Page settings.
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <textarea style="resize: none;" class="form-control" placeholder="*Tell people what your Page is about..." ng-model="PageInfo.about"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="preferred_page_content" class="content_show content_hidden" ng-init="SetAgeRange('<?php echo htmlspecialchars(json_encode($age_range_list)) ?>')">
                            <div class="row form-group padding_top_30px text-center">
                                <div class="col-md-offset-3 col-md-1">
                                    <label style="margin-top: 5px;">Age</label>
                                </div>
                                <div class="col-md-2">
                                    <select  class="form-control " ng-options="ageRange for ageRange in ageRangeList" ng-model="PageInfo.minAge">
                                        <option class="form-control" value="">Please select</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label style="margin-top: 5px;">-</label>
                                </div>
                                <div class="col-md-2">
                                    <select  class="form-control " ng-options="ageRange for ageRange in ageRangeList" ng-model="PageInfo.maxAge">
                                        <option class="form-control" value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group text-center" ng-init="SetGenderList('<?php echo htmlspecialchars(json_encode($gender_list)) ?>')">
                                <div class="col-md-offset-3 col-md-1">
                                    <label style="margin-top: 5px;">Gender</label>
                                </div>
                                <div class="col-md-5">
                                    <select  class="form-control " ng-options="gender for gender in genderList" ng-model="PageInfo.intertestedGender">
                                        <option class="form-control" value="">Please select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padding_top_30px"></div>
                    <div class="row" style="background-color: #E9EAED; margin-bottom: -15px; padding: 10px;" id="update_info_id">
                        <div class="col-md-12">
                            <div class="uiInterstitialBar uiBoxGray pull-right">
                                <input type="button" class="btn btn-default" value="Next" id="profile_next_id" onclick="active_profile_field()"style="padding: 4px 8px;">
                                <input type="button" class="btn btn-default" value="Next" id="about_next_id" onclick="active_about_field()"style="padding: 4px 8px;">
                                <input type="button" class="btn btn-default" value="Next" id="interest_next_id" onclick="active_interest_field()"style="padding: 4px 8px;">
                                <input type="button" class="btn button-custom" value="Save Info" id="update_btn_id" onclick="update_page()">
                            </div>
                        </div>
                    </div>
                </ng-form>
            </div>
        </div>

    </div>
</div>



