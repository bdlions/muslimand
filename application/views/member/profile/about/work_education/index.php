<div id="about_career" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Work</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/work_education/add_work_place"); ?>
        </div>
    </div>
    <div id="work_place_tmpl_id" style="display: none;">
        <div class="row form-group" ng-repeat="workPlace in workPlaces.slice().reverse()">
            <div id="work_place_{{workPlace.id}}">
                <div class="col-md-2">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-8">
                            <a href=""><span ng-bind="workPlace.cmp"></span></a>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <!--<li role="presentation"><a role="menuitem" tabindex="-1" href ng-click="selectEditField(workPlace.id)">Edit</a></li>-->
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_work_place(this)" id="{{workPlace.id}}">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_work_Place_delete(this)" id="{{workPlace.id}}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span ng-bind="workPlace.pos"></span>,<span ng-bind="workPlace.ct"></span> .
                            <span ng-bind="workPlace.desc"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none" id="edit_work_{{workPlace.id}}">
                <?php $this->load->view("member/profile/about/work_education/edit_work_place"); ?>
            </div>
        </div>
    </div>

    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">Professional Skills</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/work_education/add_professional_skill"); ?>
        </div>
    </div>
    <div id="p_skill_tmpl_id" style="display: none;">
        <div class="row from-group" ng-repeat="pSkill in pSkills.slice().reverse()">
            <div id="p_skill_{{pSkill.id}}">
                <div class="col-md-8">
                    <a style="font-weight: bold" href=""><span ng-bind="pSkill.ps"></span></a>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_pskill_edit_place(this)" id="{{pSkill.id}}">Edit</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_p_skill_delete(this)" id="{{pSkill.id}}">Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="display: none" id="edit_p_skill_{{pSkill.id}}">
                <?php $this->load->view("member/profile/about/work_education/edit_professional_skill"); ?>
            </div>
        </div>
    </div>

    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">University</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/work_education/add_university"); ?>
        </div>
    </div>
    <div id="uv_tmpl_id" style="display: none;">
        <div class="row form-group"ng-repeat="university in universities.slice().reverse()">
            <div id="uv_{{university.id}}">  
                <div class="col-md-2">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-8">
                            <a href=""><span ng-bind="university.uni"></span></a>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_uv_edit_place(this)" id="{{university.id}}">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_university_delete(this)" id="{{university.id}}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span ng-bind="university.sd">-</span><span ng-bind="university.ed"></span>
                            <span ng-bind="university.uni"></span>.
                            <span ng-bind="university.desc"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none" id="edit_university_{{university.id}}">
                <?php $this->load->view("member/profile/about/work_education/edit_university"); ?>
            </div>
        </div>
    </div>
    <div class="row padding_top_over_row_30px">
        <div class="col-md-12">
            <span class="header_label_style">College</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/work_education/add_college"); ?>
        </div>
    </div>
    <div id="college_tmpl_id" style="display: none;">
        <div class="row form-group" ng-repeat="college in colleges.slice().reverse()">
            <div id="college_{{college.id}}">
                <div class="col-md-2">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-8">
                            <a href=""><span ng-bind="college.clg"></span></a>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_college_edit_place(this)" id="{{college.id}}">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_college_delete(this)" id="{{college.id}}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span ng-bind="college.sd">-</span><span ng-bind="college.ed"></span>
                            <span ng-bind="college.desc"></span>
                        </div>
                    </div>
                </div>
                <div style="display: none" id="edit_college_{{college.id}}">
                    <?php $this->load->view("member/profile/about/work_education/edit_college"); ?>
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
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/work_education/add_school"); ?>
        </div>
    </div>
    <div id="school_tmpl_id" style="display: none;">
        <div class="row form-group"ng-repeat="school in schools.slice().reverse()">
            <div id="school_{{school.id}}">
                <div class="col-md-2">
                    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-8">
                            <a href=""><span ng-bind="school.sch"></span></a>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                                <button type="button" class="btn btn_style btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="show_school_edit_place(this)" id="{{school.id}}">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href onclick="open_modal_school_delete(this)" id="{{school.id}}">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span ng-bind="school.sd">-</span><span ng-bind="school.ed"></span>
                            <span ng-bind="school.desc"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none" id="edit_school_{{school.id}}">
                <?php $this->load->view("member/profile/about/work_education/edit_school"); ?>
            </div>
        </div> 
    </div>
</div>
<?php $this->load->view("common/common_delete_confirmation_modal"); ?>
 <?php $this->load->view("member/profile/about/work_education/works_edu_delete_js"); ?>
