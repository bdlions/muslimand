<div id="about_family_relation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Relational Information</span>
            <!--<span class="header_label_style"> Family & Relational Information</span>-->
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/family_relationship/add_relationship"); ?>
        </div>
    </div>
    <!--Show updated relationship status-->
    <div id="relationship_status_id" style="display: none;" >
        <div class="row form-group">
            <div class="col-md-4"> Relationship Status </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <!--<span ng-bind="about.about"></span>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"> </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="pull-right">
                    <button id="dropdownMenu1" class="btn btn_style btn-default dropdown-toggle" aria-expanded="true" data-toggle="dropdown" type="button">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                        <li role="presentation">
                            <a href="#" tabindex="-1" role="menuitem">Edit</a>
                        </li>
                        <li role="presentation">
                            <a href="#" tabindex="-1" role="menuitem">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!--    <div class="pagelet_divider"></div>
        <div id="relationship_add" style="display: none">
            <div class="row" >
                <div class="col-md-2">
                    <img style="border: 1px solid lightpink;" src="<?php //echo base_url();   ?>resources/images/relation.png">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-8">
                            <span ng-bind="rStatus.relationshipStatus"></span>
                        </div>
                        <div class="col-md-4">
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
                </div>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div  class="row">
            <div class="col-md-12" id="family_member_id">
                <div class="cursor_holder_style">
                    <img style="border: 1px solid lightpink;" src="<?php //echo base_url();   ?>resources/images/plus.png">
                    <a class="holder_style">Add Family Member</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
    <?php //$this->load->view("member/profile/about/family_relationship/add_family_member"); ?>
                </div>
            </div>
        </div>
        <div class="pagelet_divider" > </div>
        <div id="family_member_add" style="display: none">
            <div class="row form-group" ng-repeat="fMemeber in fMemebers">
                <div class="col-md-2">
                    <img style="border: 1px solid lightpink;" src="<?php //echo base_url();   ?>resources/images/face.jpg">
                </div>
                <div class="col-md-10">
                    <div class="row ">
                        <div class="col-md-8">
                            <a href=""><span ng-bind="fMemeber.memebrName"></span></a>
                        </div>
                        <div class="col-md-4">
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
//        $('#family_member_id').on('click', function () {
//            $('#family_member_id').hide();
//            $('#family_member_add_id').show();
//        });

    });

</script>