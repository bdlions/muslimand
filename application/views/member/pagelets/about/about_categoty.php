<div id="category_overview" class="row get_over_view_class" onclick="getOverview('<?php echo $user_id; ?>')">
    <div class="col-md-12" >
        <a style="color: black; text-decoration: none; cursor: pointer;" >Overview</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_career" class="row" ng-click="getWorksEducation('<?php echo $user_id ;?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Works and Education</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_place" class="row" ng-click="getCityTown('<?php echo $user_id ;?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Places you've lived</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_contact_info" class="row" ng-click="getContactBasicInfo('<?php echo $user_id ;?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Contacts and Basic Info</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_family_relation" class="row" ng-click="getFamilyRelation('<?php echo $user_id ;?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Family and Relationships</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_details" class="row" ng-click="getAboutFQuote('<?php echo $user_id ;?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Details About You</a>
    </div>
</div>
