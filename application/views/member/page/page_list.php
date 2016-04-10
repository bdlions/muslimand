<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.jscroll.min.js"></script>
<script type="text/javascript">
    function onImageUnavailable(img) {
        var div = img.parentNode;
        var firstImage = img;
        var secondImage = div.getElementsByTagName('img')[1];

        firstImage.style.display = 'none';
        secondImage.style.visibility = 'visible';
        secondImage.style.height = '100%';
    }
</script>

<div ng-controller="pageController" ng-clock >
    <div class="row"  ng-cloak  ng-init="setPageInfoList(<?php echo htmlspecialchars(json_encode($page_list)); ?>)">
        <!--LEFT_COLUMN-->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="row form-group" style="padding-top: 15px;">
                <div class="col-xs-12" class="newsfeed_profile_picture" style="margin-left: 0;">
                    <img style="background-color: #fff;" class="img-circle" fallback-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100; ?>100x100_{{userGenderId}}.jpg" ng-src="<?php echo base_url() . PROFILE_PICTURE_PATH_W100_H100 . $user_id . '.jpg'; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a style="color: black; font-size: 12px; font-weight: bold;" href="<?php echo base_url() ?>member/timeline"><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></a>
                </div>
            </div>
              <!--<textarea  ng-model="statusInfo.description" class="form-control form_control_custom_style textarea_custom_style"></textarea>-->
            <div class="row">
                <div class="col-xs-12">
                    <a style="color: black; font-size: 12px;" href="<?php echo base_url() ?>member/timeline">Edit Profile</a>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-12">
                    <?php $this->load->view("member/sections/menu/menu_link"); ?>
                </div>
            </div>
            <div class="row form-group"></div>
        </div>
        <!--MIDDLE COLUMN-->
        <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
            <div class="pagelet" style="margin-top: 25px; margin-bottom: 5px;">
                <div class="pagelet">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <span style="font-weight: bold; font-size: 20px;">Pages</span>
                        </div>
                        <div class="col-md-6">
                            <a class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0; float: right;" href="<?php echo base_url(); ?>pages/pages_add">Create a Page</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12" ng-repeat=" pageInfo in pageInfoList">
                            <a href="<?php echo base_url(); ?>pages/timeline/{{pageInfo.pageId}}" style="color: #555;">{{pageInfo.title}}</a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ADD COLUMN-->
    </div>
</div>
