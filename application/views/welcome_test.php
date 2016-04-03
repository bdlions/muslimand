<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/test_modal.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/testModal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/testModal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/testApp.js"></script>


<div ng-app="app.Test">
    <div ng-controller="testController">
        <div class="gallery">
            <img src="http://localhost/muslimand/resources/images/cover_picture/9Ixsx2qFkzWEliG.jpg" onclick="lightbox(0)" style="width:auto; height:140px;" />
            <img src="http://localhost/muslimand/resources/images/profile_picture/150x150/7OdqKzxmuakkpRq.jpg" onclick="lightbox(1)" style="width:auto; height:140px;" /><br />
            <img src="http://localhost/muslimand/resources/images/profile_picture/150x150/7OdqKzxmuakkpRq.jpg" onclick="lightbox(2)" style="width:auto; height:140px;" /><br />
        </div>

    </div>
</div>


<div style="display:none;">
    <div id="ninja-slider">
        <div class="slider-inner"> 
            <ul>
                <li><a class="ns-img" href="http://localhost/muslimand/resources/images/cover_picture/9Ixsx2qFkzWEliG.jpg"></a></li>
                <li><a class="ns-img" href="http://localhost/muslimand/resources/images/profile_picture/150x150/7OdqKzxmuakkpRq.jpg"></a></li>
                <li><a class="ns-img" href="http://localhost/muslimand/resources/images/profile_picture/150x150/7OdqKzxmuakkpRq.jpg"></a></li>
            </ul>
            <div id="fsBtn" class="fs-icon" title="Expand/Close">close</div> 
        </div>
    </div>
</div>

<script>

    function lightbox(idx) {
        
        console.log("here");
        var ninjaSldr = document.getElementById("ninja-slider");
        ninjaSldr.parentNode.style.display = "block";
        var abc = nslider.init(idx);
        var fsBtn = document.getElementById("fsBtn");
        fsBtn.click();
    }

    function fsIconClick(isFullscreen) {
        //Note: fsIconClick is the default event handler of the fullscreen button
        var ninjaSldr = document.getElementById("ninja-slider");
        ninjaSldr.parentNode.style.display = isFullscreen ? "block" : "none";
    }
</script>