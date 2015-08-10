<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/controllers/basicProfileController.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/services/basicProfileService.js "></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/app/basicProfileApp.js "></script>

<div ng-app="app.BasicProfile">
    <div ng-controller="basicProfileController">
        <div id="category_overview" class="row" ng-click="overviewClick()">
            <div class="col-md-12" >
                <a style="color: black; text-decoration: none; cursor: pointer;" >Overview</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="category_career" class="row">
            <div class="col-md-12">
                <a style="color: black; text-decoration: none; cursor: pointer;" > Works and Education</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="category_place" class="row">
            <div class="col-md-12">
                <a style="color: black; text-decoration: none; cursor: pointer;" > Places you've lived</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="category_contact_info" class="row">
            <div class="col-md-12">
                <a style="color: black; text-decoration: none; cursor: pointer;" > Contacts and Basic Info</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="category_family_relation" class="row">
            <div class="col-md-12">
                <a style="color: black; text-decoration: none; cursor: pointer;" > Family and Relationships</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div id="category_details" class="row">
            <div class="col-md-12">
                <a style="color: black; text-decoration: none; cursor: pointer;" > Details About You</a>
            </div>
        </div>


    <div>
        <div>
            <form class="form-horizontal col-sm-6" ng-submit="submitTestIddnfo()">
                <div class="form-group">

                    <input type="text" ng-model="testArray.firstName" name="firstName" class="form-control">
                </div>
                <div class="form-group">

                    <input type="text" ng-model="testArray.lastName" name="lastName" class="form-control">
                </div>
                <div class="form-group">
                  
                        <input type="submit" id="submit" value="Submit" class="form-control btn-primary">
                </div>
            </form>
        </div>
        
<!--        <div id="category_overview" class="row" ng-click="angularTest()">
            <a style="color: black; text-decoration: none; cursor: pointer;" >click here</a>
        </div>
        add here <span ng-bind="test.firstName"></span>
        <span ng-bind="test1"></span>-->
    </div>
</div>
</div>