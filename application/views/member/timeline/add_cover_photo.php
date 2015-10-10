<div ng-app="myApp">
    <div ng-controller="ImageCopperController">
        <div ng-show="imageCropStep == 1" class="fileinput-button">		
            <img src="<?php echo base_url() ?>resources/images/add_photo_album.jpg" alt="">
            <input type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)" />
        </div>			
        <div ng-show="imageCropStep == 2">
            <image-crop			 
                data-height="250"
                data-width="300"
                data-shape="square"
                data-step="imageCropStep"
                src="imgSrc"
                data-result="result"
                data-result-blob="resultBlob"
                crop="initCrop"
                padding="250"
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
</div>