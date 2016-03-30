<!--<!doctype html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
<link rel="stylesheet" href="css/image-crop-styles.css">
<link rel="stylesheet" href="resources/css/imageCrop.css">
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/imageCropController.js"></script>
<script src="js/image-crop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/imageCropperApp.js"></script>
<html ng-app="app.ImageCopper">
    <head>
    <body>
        <div ng-controller="ImageCopperController" ng-clock>
            <div  ng-show="imageCropStep == 1" class="btn btn-success fileinput-button">		
                <img src="<?php // echo base_url() ?>resources/images/add_photo_album.jpg" alt="">
                <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
            </div>			
            <div ng-show="imageCropStep == 2">
                <image-crop			 
                    data-height="100"
                    data-width="100"
                    data-shape="square"
                    data-step="imageCropStep"
                    src="imgSrc"
                    data-result="result"
                    data-result-blob="resultBlob"
                    crop="initCrop"
                    padding="100"
                    max-size="1024"
                    ></image-crop>		   
            </div>

            <div ng-show="imageCropStep == 2">
                <br/>
                <button ng-click="clear()">Cancel</button>
                <button ng-click="initCrop = true">Crop</button>		
            </div>		  
            <div ng-show="imageCropStep == 3">
                <img ng-src="{{result}}"></img>
                <button onclick="imageUpload(angular.element(this).scope().result)">Save</button>	
                <button ng-click="clear()">Clear</button>	
            </div>
        </div>
    </body>
</html>

<script>

    function imageUpload(imageData) {
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '<?php echo base_url(); ?>welcome/image_crop/',
            data: {
                imageData: imageData
            },
            success: function (data) {
                alert(data.message);
            }
        });
    }

</script>-->