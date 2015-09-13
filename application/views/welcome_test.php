<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/friendController.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/friendService.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/friendApp.js "></script>

<div ng-app="app.Friend">
    <div ng-controller="friendController">
        <button id="btn" onclick="testfunctioncall()" type="button">Click</button>
    </div>
</div>

<script type="text/javascript">
    function testfunctioncall(){
        angular.element(document.getElementById('btn')).scope().testfunction('Huhahaha');
    }
</script>