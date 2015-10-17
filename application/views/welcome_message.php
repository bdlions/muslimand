<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin AngularJS Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
    <head>
        <!-- Force latest IE rendering engine or ChromeFrame if installed -->
        <meta charset="utf-8">

        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for AngularJS. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap styles -->
        <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.fileupload.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/jquery.fileupload-ui.css">
        <!--<link rel="stylesheet" href="css/jquery.fileupload.css">-->
        <!--<link rel="stylesheet" href="css/jquery.fileupload-ui.css">-->
        <style>
            /* Hide Angular JS elements before initializing */
            .ng-cloak {
                display: none;
            }
            .image-size {
                height: 100px;
                width: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <!-- The file upload form used as target for the file upload widget -->
            <div id="fileupload" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" ng-init="setPath('<?php echo base_url(); ?>photos/image_upload')" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
                <!-- Redirect browsers with JavaScript disabled to the origin page -->
                <!--<noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>-->
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="row fileupload-buttonbar">
                    <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="fileinput-button">
                            <!--{{queue.length }}-->
                            <span ng-if="queue.length != '0'">
                                <div class="col-md-4" data-ng-repeat="file in queue">
                                    <div class="preview" data-file-upload-preview="file"></div>
                                    <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img class="image-size" data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                                </div>
                            </span>
                            <span ng-if="queue.length == '0'">
                                <img src="<?php echo base_url() ?>resources/images/add_photo_album.jpg" alt="">
                            </span>
                            <input type="file" name="userfile" multiple ng-disabled="disabled">
                        </span>
                        <!--                        <button type="button" class="btn btn-primary start" data-ng-click="submit()">
                                                    <i class="glyphicon glyphicon-upload"></i>
                                                    <span>upload all files</span>
                                                </button>-->
                        <!--                        <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                    <span>Cancel all files upload </span>
                                                </button>-->
                        <!-- The global file processing state -->
                        <span class="fileupload-process"></span>
                    </div>
                    <!-- The global progress state -->
                    <div class="col-lg-5 fade" data-ng-class="{in: active()}">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <div class="row form-group"  data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                        
                    <div data-file-upload-preview="file"></div>
                    <div class="col-md-6 ng-cloak">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Start select</span>
                                </button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancel</span>
                                </button>
                                <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--<div class="row form-group">-->
                    <!--<div class="col-md-4" data-ng-repeat="file in queue">-->
                        <!--<div data-on="!!file.thumbnailUrl">-->
                        <!--<div class="preview" data-file-upload-preview="file"></div>-->
                        <!--</div>-->
                        <!--<a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img class="image-size" data-ng-src="{{file.thumbnailUrl}}" alt=""></a>-->
                    <!--</div>--> 
                <!--</div>-->
            </div>
            <br>
        </div>
        <button onclick="get_image_list()"> test</button>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>resources/js/image/load-image.all.min.js"></script>-->
        <!--<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>-->
        <!--<script src="js/vendor/jquery.ui.widget.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/vendor/jquery.ui.widget.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/load-image.all.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-process.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-image.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/image/jquery.fileupload-angular.js"></script>
        <!--<script src="js/jquery.fileupload-angular.js"></script>-->
        <script src="js/app.js"></script>
         <!--<script src="<?php echo base_url(); ?>resources/js/image/app.js"></script>-->
        <!--<script src="js/load-image.all.min.js"></script>-->
        <!--<script src="js/jquery.fileupload.js"></script>-->
        <!--<script src="js/jquery.fileupload-process.js"></script>-->
        <!--<script src="js/jquery.fileupload-image.js"></script>-->
    </body>
</html>
