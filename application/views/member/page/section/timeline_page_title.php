<div style="margin-left: -15px;">
    <div class="row padding_top_10px">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <a class="link" target="_self" ng-cloak href="<?php echo base_url(); ?>pages/timeline/{{PageBasicInfo.pageId}}">{{PageBasicInfo.title}}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{PageBasicInfo.category.categoryTitle}}/{{PageBasicInfo.subCategory.subCategoryTitle}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div type="button" id="aboutPageMenu" class="btn button-custom pull-right get_over_view_class">Page Info</div>
        </div>
    </div>
</div>
