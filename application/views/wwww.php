<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/basicProfileController.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/basicProfileService.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/basicProfileApp.js "></script>
<div ng-app="app.BasicProfile">
    <div  id="login" ng-controller="basicProfileController" ng-clock>
<!--
        <form method="post" action="welcome/post">
            <input type="text" name="input" />-->
            <div id="container">
                <input type="text" size="40" ng-model="login.email"><br>
                <input type="text" size="40" ng-model="login.name"><br>
                <button ng-click="addWelcomeTest()">Login</button><br>
                <span id="message"></span>
            </div>
    </div>
</div>