<div id="pageAboutContent" style="display: none;">
    <div class="pagelet" style="border: 1px solid #fff;  margin-left: -15px;">
        <div class="row">
            <div class="col-md-12">
                <label ng-cloak>About {{PageBasicInfo.title}}</label>
            </div>
        </div>
    </div>
    <div class="pagelet" style="border: 1px solid #fff; margin-left: -15px;">
        <div class="row">
            <div class="col-md-3" >
                <a class="non_friend_pagelet_header_anchor_style font_bold" href="">Photo Info</a>
            </div>
            <div class="col-md-9" style="border-left: 1px solid #999;">
                <div class="row form-group">
                    <div class="col-md-12">
                        <span class="opacity_70 font_bold">PAGE INFO</span>
                        <hr>
                    </div> 
                </div> 
                <div class="row form-group">
                    <div class="col-md-3">
                        <span class="opacity_70 font_bold">Category</span>
                    </div> 
                    <div class="col-md-7">
                        <span id="page_about_category_edited_text" class="opacity_70" ng-cloak>{{PageBasicInfo.category.categoryTitle}} : {{PageBasicInfo.subCategory.subCategoryTitle}}</span>
                        <div id="page_about_category_edit_box"  style="display: none;">
                            <textarea class="form-control" style="resize: none; margin-bottom: 5px;" ng-cloak>{{PageBasicInfo.category.categoryTitle}} : {{PageBasicInfo.subCategory.subCategoryTitle}}</textarea>
                            <input id="page_about_category_edited_text_save" type="button" class="button-custom pull-right" value="Save">
                        </div>
                    </div> 
                    <div class="col-md-2">
                        <ul style="list-style-type: none; padding: 0;">
                            <li class="dropdown">
                                <a title="Edit" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle cursor_holder_style">
                                    <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <!--<a id="page_about_category_edit_option">Edit</a>-->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="row form-group">
                    <div class="col-md-12">
                        <hr>
                    </div> 
                </div> 
                <div class="row form-group">
                    <div class="col-md-3">
                        <span class="opacity_70 font_bold">Name</span>
                    </div> 
                    <div class="col-md-7">
                        <span id="page_about_name_edited_text" class="opacity_70" ng-cloak>{{PageBasicInfo.title}}</span>
                        <div id="page_about_name_edit_box"  style="display: none;">
                            <textarea class="form-control" style="resize: none; margin-bottom: 5px;" value="{{PageBasicInfo.title}}" ng-model="PageBasicInfo.title" ng-cloak></textarea>
                            <input id="page_about_name_edited_text_save" type="button" class="button-custom pull-right" value="Save">
                        </div>
                    </div> 
                    <div class="col-md-2">
                        <ul style="list-style-type: none; padding: 0;">
                            <li class="dropdown">
                                <a title="Edit" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle cursor_holder_style">
                                    <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <!--<a id="page_about_name_edit_option">Edit</a>-->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> 
     <!--             <div class="row form-group">
                    <div class="col-md-12">
                        <hr>
                    </div> 
                </div> 
              <div class="row form-group">
                    <div class="col-md-3">
                        <span class="opacity_70 font_bold">Short Description</span>
                    </div> 
                    <div class="col-md-7">
                        <span id="page_about_short_description_edited_text" class="opacity_70">Prime Bank has already made significant progress within a very short period of its exitance</span>
                        <div id="page_about_short_description_edit_box"  style="display: none;">
                            <textarea class="form-control" style="resize: none; margin-bottom: 5px;">Prime Bank has already made significant progress within a very short period of its exitance</textarea>
                            <input id="page_about_short_description_edited_text_save" type="button" class="button-custom pull-right" value="Save">
                        </div>
                    </div> 
                    <div class="col-md-2">
                        <ul style="list-style-type: none; padding: 0;">
                            <li class="dropdown">
                                <a title="Edit" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle cursor_holder_style">
                                    <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <a id="page_about_short_description_edit_option">Edit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="row form-group">
                    <div class="col-md-12">
                        <hr>
                    </div> 
                </div> 
                <div class="row form-group">
                    <div class="col-md-3">
                        <span class="opacity_70 font_bold">Interests</span>
                    </div> 
                    <div class="col-md-7">
                        <span id="page_about_interest_edited_text" class="opacity_70">Can help you connect with specific audiences by looking at their audiences by looking at their interests, activities the page</span>
                        <div id="page_about_interest_edit_box"  style="display: none;">
                            <textarea class="form-control" style="resize: none; margin-bottom: 5px;">Can help you connect with specific audiences by looking at their audiences by looking at their interests, activities the page</textarea>
                            <input id="page_about_interest_edited_text_save" type="button" class="button-custom pull-right" value="Save">
                        </div>
                    </div> 
                    <div class="col-md-2">
                        <ul style="list-style-type: none; padding: 0;">
                            <li class="dropdown">
                                <a title="Edit" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle cursor_holder_style">
                                    <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <a id="page_about_interest_edit_option">Edit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div> 
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#page_about_category_edit_option").on("click", function() {
            $('#page_about_category_edited_text').hide();
            $('#page_about_category_edit_box').show();
        });
        $("#page_about_category_edited_text_save").on("click", function() {
            $('#page_about_category_edit_box').hide();
            $('#page_about_category_edited_text').show();
        });
        $("#page_about_name_edit_option").on("click", function() {
            $('#page_about_name_edited_text').hide();
            $('#page_about_name_edit_box').show();
        });
        $("#page_about_name_edited_text_save").on("click", function() {
            $('#page_about_name_edit_box').hide();
            $('#page_about_name_edited_text').show();
        });
        $("#page_about_short_description_edit_option").on("click", function() {
            $('#page_about_short_description_edited_text').hide();
            $('#page_about_short_description_edit_box').show();
        });
        $("#page_about_short_description_edited_text_save").on("click", function() {
            $('#page_about_short_description_edit_box').hide();
            $('#page_about_short_description_edited_text').show();
        });
        $("#page_about_interest_edit_option").on("click", function() {
            $('#page_about_interest_edited_text').hide();
            $('#page_about_interest_edit_box').show();
        });
        $("#page_about_interest_edited_text_save").on("click", function() {
            $('#page_about_interest_edit_box').hide();
            $('#page_about_interest_edited_text').show();
        });
    });
</script>