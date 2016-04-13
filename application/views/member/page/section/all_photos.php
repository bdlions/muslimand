<div id="all_photos" style="margin-left: 15px;">
    <div class="row form-group">
        <div class="col-md-3" ng-repeat="photoInfo in timeLinePhotoList">
            <img style="border: 1px solid #703684; margin-bottom: 25px; height: 120px; width: 150px;"   ng-click="openTimelinePhotoModal(photoInfo)" src="<?php echo base_url() . PAGE_IMAGE_PATH ?>{{photoInfo.image}}" >
        </div>
    </div>
<!--    <div class="row form-group">
        <div class="col-md-4">
            <span>1-12 of 2,666 Results</span>
        </div>
        <div class="col-md-8">
            <nav style="float: right;">
                <ul class="pagination pagination_margin">
                    <li>
                        <a href="<?php echo base_url(); ?>videos/videos_iframe" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li>
                        <a href="" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>-->
</div>

