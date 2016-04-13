<script type="text/javascript">
    $(function() {
        var selector = '.photo_menu_list_inline a';
        $(selector).on('click', function() {
            $(selector).removeClass('active');
            $(this).addClass('active');
        });
        $("#create_new_album").on("click", function() {
            $('#modal_create_album_box').modal('show');
        });
    });

</script>

<div class="row form-group" ng-controller="friendController" ng-cloak >
    <div class="col-md-12">
        <?php $this->load->view("member/timeline/profile_cover"); ?>
    </div>
</div>
<div  ng-controller="photoController">
    <?php $this->load->view("member/photo/section/modal_create_album"); ?>
    <div ng-clock class="pagelet" ng-init="setUserRelation(<?php echo htmlspecialchars(json_encode($user_relation)); ?>)">
        <div class="row form-group">
            <div class="col-md-6">
                <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
                <a href="<?php echo base_url(); ?>photos/" class="anchor_property_change"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
            </div>
            <div class="col-md-6">
                <div class="pull-right">
                    <button  onclick="open_modal_create_photo()"id="" style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Create Album</span></button>
                    <a href="<?php echo base_url(); ?>photos/add_photos"><button style="margin: 0 3px 3px 0;" class="button-custom glyphicon glyphicon-plus"> <span style="vertical-align: text-top;">Add Photo</span></button></a>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <div style="background-color: whitesmoke;">
                    <div aria-label="..." role="group" class="btn-group photo_menu_list_inline">
                        <a id="albums" href="" class="btn btn-default"  onclick="get_album_list()">Albums</a>
                        <a id="photos" href="" class="btn btn-default active">Photos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group" >
            <div class="col-md-12" >
                <?php $this->load->view("member/photo/section/my_albums"); ?>
            </div>
        </div>
        <div class="row form-group" id="all_photos_id">
            <div class="col-md-12"  ng-init="setTimeLinePhotoList(<?php echo htmlspecialchars(json_encode($photo_list)); ?>)" >
                <?php $this->load->view("member/photo/section/all_photos"); ?>
            </div>
        </div>
            <div>
                <?php $this->load->view("member/photo/section/view_album_photos"); ?>
            </div>
    </div>
</div>
<?php $this->load->view("member/photo/section/slider_photo_modal"); ?>
<script type="text/javascript">

    function open_modal_create_photo() {
        $('#modal_create_album_box').modal('show');
    }
    function get_album_list() {
        var profileId = '<?php echo $profile_id; ?>';
        if (profileId === "0") {
            profileId = '<?php echo $user_id; ?>';
        }
        angular.element($('#albums')).scope().getAlbumList(profileId, function() {
            $("#all_albums").show();
            $("#all_album_photos").hide();
            $("#all_photos").hide();
        });
    }
    function get_user_album(albumId) {
        var profileId = '<?php echo $profile_id; ?>';
        if (profileId === "0") {
            profileId = '<?php echo $user_id; ?>';
        }
        angular.element($('#album_id_' + albumId)).scope().getUserAlbum(albumId, profileId, function() {
            $("#all_photos").hide();
            $("#all_albums").hide();
            $("#all_album_photos").show();
        });
    }

    $("#photos").click(function() {
        $("#all_albums").hide();
        $("#all_album_photos").hide();
        $("#all_photos").show();
    });

</script>



