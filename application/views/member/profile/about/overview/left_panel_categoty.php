<div id="category_overview" class="row get_over_view_class" onclick="get_overview('<?php echo $user_id; ?>')">
    <div class="col-md-12" >
        <a style="color: black; text-decoration: none; cursor: pointer;" >Overview</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_career" class="row" onclick="get_works_education('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Works and Education</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_place" class="row" onclick="get_city_town('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Places you've lived</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_contact_info" class="row" onclick="get_contact_basic_info('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Contacts and Basic Info</a>
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_family_relation" class="row" onclick="get_family_relation('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Relationship</a>
        <!--<a style="color: black; text-decoration: none; cursor: pointer;" > Family and Relationships</a>-->
    </div>
</div>
<div class="pagelet_divider"></div>
<div id="category_details" class="row" ng-click="getAboutFQuote('<?php echo $user_id; ?>')">
    <div class="col-md-12">
        <a style="color: black; text-decoration: none; cursor: pointer;" > Details About You</a>
    </div>
</div>
<?php $this->load->view("member/profile/about/overview/left_panel_categoty_js"); ?>
<script type="text/javascript">
    function get_family_relation(userId) {
        angular.element($('#category_family_relation')).scope().getFamilyRelation(userId, function (data) {
            if (typeof data.family_relations != "undefined") {
                if (typeof data.basic_info.bInfo != "undefined") {
                    if (typeof data.family_relations.bInfo.relationshipStatus != "undefined") {
                        $('#relationship_add').show();
                    }
                    if (typeof data.family_relations.bInfo.familyMember != "undefined") {
                        $('#family_member_add').show();
                    }
                }
            }

            $('#about_family_relation').show();
            $('#about_overview').hide();
            $('#about_career').hide();
            $('#about_place').hide();
            $('#about_contact_info').hide();
            $('#about_details').hide();
            $('#family_relation').hide();
            $('#subcategory_family_relation').show();

        });

    }

</script>