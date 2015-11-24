<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/ng-infinite-scroll.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/testController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/statusController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/statusService.js "></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/Utils.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/testApp.js "></script>
        <!--    <div ng-app='app.Test' ng-controller='statusController'>
                <div infinite-scroll='getStatusList()' infinite-scroll-distance='3'>
                    <div ng-repeat='number in numberList'>
                        {{number}}
                    </div>
        
                </div>
            </div>-->


    <div ng-app='myApp' ng-controller='DemoController'>
        <div infinite-scroll='reddit.nextPage()' infinite-scroll-disabled='reddit.busy' infinite-scroll-distance='1'>
            <div ng-repeat='item in reddit.items'>
                <span class='score'>{{item.name}}</span>
                <span class='title'>
                    <!--<a ng-href='{{item.url}}' target='_blank'>{{item.title}}</a>-->
                </span>
                <small>by {{item.author}} -
                    <!--<a ng-href='http://reddit.com{{item.permalink}}' target='_blank'>{{item.num_comments}} comments</a>-->
                </small>
                <div style='clear: both;'></div>
            </div>
            <div ng-show='reddit.busy'>Loading data...</div>
        </div>
    </div>