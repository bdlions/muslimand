<div style="margin-left: -15px;">
    <div class="row padding_top_10px">
        <div class="col-md-12">
            <a class="link" target="_self" ng-cloak href="<?php echo base_url(); ?>pages/newsfeed/{{PageBasicInfo.pageId}}">{{PageBasicInfo.title}}</a>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12" ng-cloak>
           {{PageBasicInfo.category.categoryTitle}}/{{PageBasicInfo.subCategory.subCategoryTitle}}
        </div>
    </div>
</div>