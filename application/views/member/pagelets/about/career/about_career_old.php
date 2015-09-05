<div id="about_career" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Work</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_work" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a workplace</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/work_education/work"); ?>
        </div>
    </div>

    <div id="work_place_tmpl_id" style="display: none;">
        <div class="row form-group" ng-repeat="workPlace in workPlaces.slice().reverse() ">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="workPlace.company"></span></a>
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
                        <span ng-bind="workPlace.position"></span>,<span ng-bind="workPlace.city"></span> .
                        <span ng-bind="workPlace.description"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">Professional Skills</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>

    <div id="subcategory_professional_skill" class="row form-group" >
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Professional Skills</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/career/professional_skill"); ?>
        </div>
    </div>
    <div id="p_skill_tmpl_id" style="display: none;">
        <div class="row from-group" ng-repeat="pSkill in pSkills.slice().reverse()">
            <div class="col-md-8">
                <a style="font-weight: bold" href=""><span ng-bind="pSkill.pSkill"></span></a>
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

    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">University</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_university" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a University</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/career/university"); ?>
        </div>
    </div>
    <div id="uv_tmpl_id" style="display: none;">
        <div class="row form-group"ng-repeat="university in universities.slice().reverse()">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="university.university"></span></a>
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
                        <span ng-bind="university.startDate">-</span><span ng-bind="university.endDate"></span>
                        <span ng-bind="university.university"></span>.
                        <span ng-bind="university.description"></span>
                    </div>
                </div>
            </div>
        </div> 

    </div>
    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">College</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_college" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a College</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/career/college"); ?>
        </div>
    </div>
    <div id="college_tmpl_id" style="display: none;">
        <div class="row form-group" ng-repeat="college in colleges.slice().reverse()">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="college.college"></span></a>
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
                        <span ng-bind="college.startDate">-</span><span ng-bind="college.endDate"></span>
                        <span ng-bind="college.description"></span>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">School/High School</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_school" class="row form-group">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a School/High School</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/career/school"); ?>
        </div>
    </div>
    <div id="school_tmpl_id" style="display: none;">
        <div class="row form-group"ng-repeat="school in schools.slice().reverse()">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><span ng-bind="school.school"></span></a>
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
                        <span ng-bind="school.startDate">-</span><span ng-bind="school.endDate"></span>
                        <span ng-bind="school.description"></span>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>



<script>
    $('#subcategory_work').on('click', function () {
        $('#subcategory_work').hide();
        $('#work').show();
    });
    $('#subcategory_professional_skill').on('click', function () {
        $('#subcategory_professional_skill').hide();
        $('#professional_skill').show();
    });
    $('#subcategory_university').on('click', function () {
        $('#subcategory_university').hide();
        $("#university").show();
    });
    $("#subcategory_college").on('click', function () {
        $("#subcategory_college").hide();
        $("#college").show();
    });
    $('#subcategory_school').on('click', function () {
        $('#subcategory_school').hide();
        $('#school').show();
    });
</script>


