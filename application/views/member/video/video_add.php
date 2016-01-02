<div class="row padding_top_30px">
    <div class="col-md-10">
        <img src="<?php echo base_url(); ?>resources/images/video/film_add.png">
        <span style="font-size: 16px; font-weight: bold;">Video</span>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row" ng-controller="videoController">
    <div class="col-md-10">
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 20px; font-weight: bold;">Paste a URL</span>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 16px; font-weight: bold;">* Video URL: </span><br>
                <input id="video_url_id" class="form-control" type="text" style="width: 600px;" size="40" value="" ng-model="videoInfo.url"><br>
                Click <a style="cursor: pointer;" onclick="open_modal_suppoted_video()">here</a> to view supported sites that you can import videos from. 
            </div>
        </div>
        <div class="row form-group"></div>

        <div class="row">
            <div class="col-md-4" ng-init="setVideoCategories(<?php echo htmlspecialchars(json_encode($category_list)); ?>)">
                <span style="font-size: 16px; font-weight: bold;">* Category:</span><br>
                <select class="form-control"  ng-options="category.categoryId as category.title for category in categories" ng-model="videoInfo.categoryId">
                    <option value="" selected>Select Category</option>
                </select>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Privacy:  </span><br>
                <select class="form-control" name="control">
                    <option value="0" selected="1">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
                Control who can see this video. 
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Comment Privacy: </span><br>
                <select class="form-control" name="control">
                    <option value="0" selected="1">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
                Control who can comment on this video. 
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-4">
                <button id="video_save_id" class="btn btn-xs" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;" onclick="add_video()">Add</button>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php $this->load->view("member/video/modal_suppoted_video"); ?>

<script>

    function add_video() {
        var url = $('#video_url_id').val();
        if (url.length == 0) {
            alert("PleaseGive  up url");
            return;
        }
        angular.element($('#video_save_id')).scope().addVideo(function () {
            window.location = '<?php echo base_url(); ?>videos/';
        });
    }
</script>