<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/friendController.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/friendService.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/friendApp.js "></script>

<div ng-app="app.Friend">
    <div ng-controller="friendController">
        <input type="text" class="form-control" ng-model="testInfo.fristName">
        <!--<input type="text" class="form-control" ng-model="testInfo.lastName" id="{{testInfo.fristName}}}">-->
        
        <button id="btn" onclick="testfunctioncall(angular.element(this).scope().testInfo.lastNmae)" type="button">Click</button>
        <!--<button id="btn" onclick="testfunctioncall(angular.element(this).scope().testInfo)" type="button">Click</button>-->

    </div>
</div>

<script type="text/javascript">
    function testfunctioncall(testId) {
        alert(testId)
//        var testInfo = angular.element($('#btn')).scope().testInfo;
//        console.log(testId);
//        console.log(testInfo);
//        $('#testId').show();
//        angular.
//        var scope = angular.element(document.getElementById('btn')).scope();
//        console.log(scope);
        angular.element(document.getElementById('btn')).scope().testfunction('Huhahaha', function (response) {
            console.log("Call back" + response);
        });
//        angular.element($('#btn')).scope().testfunction('Huhahaha');
    }
    
    function test(id){
        
        angular.element($('#btn')).scope().testfunction(id,function(){
            
        });
    }
</script>