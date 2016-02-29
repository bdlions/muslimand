<script>
    $(function() {
        $(".brand_cover").click(function() {
            $(".brand_cover").show();
            $(this).hide();
        });
        var selector = '.image_inline a';
        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
        $("#about").click(function() {
            $("#profile_picture_content").hide();
            $("#preferred_page_content").hide();
            $("#about_content").show();
        });
        $("#profile_picture").click(function() {
            $("#about_content").hide();
            $("#preferred_page_content").hide();
            $("#profile_picture_content").show();
        });
        $("#preferred_page").click(function() {
            $("#about_content").hide();
            $("#profile_picture_content").hide();
            $("#preferred_page_content").show();
        });
    });
</script>
<div class="padding_top_50px"></div>
<div class="row">
    <div class="col-md-9">
        <div style="outline: 10px solid #fff;  border-radius: 4px;">
            <div class="pagelet" style="border: 1px solid lightgrey; border-radius: 4px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Set Up Prime Bank</h4>
                        <hr>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="image_inline">
                            <a id="about" class="active" href=""><span style="margin-left: 16px;">About</span><img class="img-responsive" src="<?php echo base_url(); ?>resources/images/pages/1.png"></a>
                            <a id="profile_picture" href=""><span style="margin-left: 26px;">Profile Pictute</span><img class="img-responsive" src="<?php echo base_url(); ?>resources/images/pages/2.png"></a>
                            <a id="preferred_page" href=""><span style="margin-left: 32px;">Preferred Page Audience</span><img class="img-responsive" src="<?php echo base_url(); ?>resources/images/pages/3.png"></a>
                        </div>

                        <hr>
                    </div>
                </div>
                <div class="contain">
                    <div id="about_content" class="content_show">
                        <div class="row form-group padding_top_30px">
                            <div class="col-md-12">
                                Add a few sentences to tell people what your Page is about. 
                                This will help it show up in the right search results. You will
                                be able to add more details later from your Page settings.
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <textarea style="resize: none;" class="form-control" placeholder="*Tell people what your Page is about..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="profile_picture_content" class="content_show content_hidden">
                        <div class="row form-group padding_top_30px">
                            <div class="col-md-offset-4 col-md-8">
                                <div style="height: 150px!important; width: 150px!important;">
                                    <img src="<?php echo base_url(); ?>resources/images/pages/page_create_default_pic.jpg" style="border: 2px solid lightgray; box-shadow: 0 8px 4px -4px gray;">
                                    <form action="upload.php" method="post" style=" border: 2px solid #777; margin-bottom: 10px; margin-left: 2px; padding-top: 3px; position: relative; top: -33px; width: 150px; z-index: 10000; padding: 3px;" class="ng-pristine ng-valid">
                                        <label for="fileToUpload" style="cursor: pointer; height: 22px; margin-top: -5px; width: 150px;">
                                            <img style="cursor: pointer;" src="<?php echo base_url(); ?>resources/images/camera.png">
                                            <span style="font-size: 10px; color: #fff; text-align: center;">Upload From Computer</span>
                                        </label>
                                        <input type="File" name="fileToUpload" id="fileToUpload" class="hidden" >
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="preferred_page_content" class="content_show content_hidden">
                        <div class="row form-group padding_top_30px text-center">
                            <div class="col-md-offset-3 col-md-1">
                                <label style="margin-top: 5px;">Age</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control form_control_custom_style">
                                    <option >13</option>
                                    <option >14</option>
                                    <option >15</option>
                                    <option >16</option>
                                    <option >17</option>
                                    <option selected>18</option>
                                    <?php for ($i = 19; $i < 65; $i++) { ?>
                                        <option > <?php echo $i; ?></option>
                                    <?php } ?>
                                    <option >65+</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label style="margin-top: 5px;">-</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control form_control_custom_style">
                                    <option >13</option>
                                    <option >14</option>
                                    <option >15</option>
                                    <option >16</option>
                                    <option >17</option>
                                    <option >18</option>
                                    <?php for ($i = 19; $i < 65; $i++) { ?>
                                        <option > <?php echo $i; ?></option>
                                    <?php } ?>
                                    <option selected>65+</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group text-center">
                            <div class="col-md-offset-3 col-md-1">
                                <label style="margin-top: 5px;">Gender</label>
                            </div>
                            <div class="col-md-5">
                                <div class="btn-group btn-group-vertical-custom" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default page_btn_default">All</button>
                                    <button type="button" class="btn btn-default page_btn_default">Men</button>
                                    <button type="button" class="btn btn-default page_btn_default">Women</button>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding_top_30px"></div>
                <div class="row" style="background-color: #E9EAED; margin-bottom: -15px; padding: 10px;">
                    <div class="col-md-12">
                        <div class="uiInterstitialBar uiBoxGray pull-right">
                            <input type="button" class="btn btn-default" value="Skip" style="padding: 4px 8px;">
                            <a href="<?php echo base_url(); ?>pages/pages_newsfeed"><input type="button" class="btn button-custom" value="Save Info"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php //$this->load->view("modal/modal_create_page_error"); ?>


