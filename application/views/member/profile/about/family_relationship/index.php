<div id="about_family_relation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style"> Family & Relational Information</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row form-group" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/family_relationship/add_relationship"); ?>
        </div>
    </div>
    <div id="relationship_add" style="display: none">
        <div class="row" >
            <div class="col-md-3">
                <img class="pull-right" src="<?php echo base_url(); ?>resources/images/about_icons/relation.png">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-10">
                        <div style="margin-top: 5px;;" ng-bind="rStatus.relationshipStatus"></div>
                    </div>
                    <div class="col-md-2" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href id="show_relation_edit_place">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div id="edit_relation_status" style="display: none">
        <?php $this->load->view("member/profile/about/family_relationship/edit_relationship"); ?>  
    </div>
     <!-- 
   <div  class="row"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
        <div class="pagelet_divider"></div>
        <div class="col-md-12" id="family_member_id">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php //echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Family Member</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php //$this->load->view("member/profile/about/family_relationship/add_family_member"); ?>
            </div>
        </div>
    </div>
    <div id="family_member_add" style="display: none">
        <div class="pagelet_divider"></div>
        <div class="row form-group" ng-repeat="fMemeber in fMemebers">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php //echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row ">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="fMemeber.memebrName"></span></a>
                    </div>
                    <div class="col-md-4" ng-if="(profileId != '0' && userId == profileId) || (profileId == '0')">
                        <div class="pull-right">
                            <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span ng-bind="fMemeber.relation"></span>
                    </div>
                </div>
            </div>
        </div> 
    </div>-->
    
</div>
<script>
    $(function() {
        $('#show_relation_edit_place').on('click', function() {
            $('#relationship_add').hide();
            $('#edit_relation_status').show();
        });

    });

</script>