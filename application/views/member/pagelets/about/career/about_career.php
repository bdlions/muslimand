<?php
$work_places = json_decode($basic_info['work_places']);
$work_place_list = array_reverse($work_places);
$prefessional_skills = json_decode($basic_info['p_skills']);
$prefessional_skill_list = array_reverse($prefessional_skills);
$universities = json_decode($basic_info['universities']);
$university_list = array_reverse($universities);
$colleges = json_decode($basic_info['colleges']);
$college_list = array_reverse($colleges);
$schools = json_decode($basic_info['schools']);
$school_list = array_reverse($schools);
?>

<div id="about_career" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Work</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_work" class="row">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add a workplace</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/career/work"); ?>
        </div>
    </div>

    <div class="pagelet_divider"></div>
    <div id="work_places_tmpl_add">
        <div id="work_place">
            <?php foreach ($work_place_list as $work_place) { ?>
                <div class="row form-group">
                    <div class="col-md-2">
                        <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-8">
                                <a href=""><?php echo $work_place->company; ?></a>
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
                                December 1, 2014 to present ·<?php echo $work_place->city; ?>, Bangladesh
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                http://sampan-it.com/
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row padding_top_over_row_70px">
        <div class="col-md-12">
            <span class="header_label_style">Professional Skills</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>

    <div id="subcategory_professional_skill" class="row">
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
    <div class="pagelet_divider"></div>
    <?php foreach ($prefessional_skill_list as $p_skill) { ?>
        <div class="row form-group">
            <div class="col-md-8">
                <a style="font-weight: bold" href=""><?php echo $p_skill->p_skill; ?></a>
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
    <?php } ?>

    <div class="row padding_top_over_row_70px">
        <div class="col-md-12">
            <span class="header_label_style">University</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_university" class="row">
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
    <div class="pagelet_divider"></div>
    <?php foreach ($university_list as $university) { ?>
        <div class="row form-group">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><?php echo $university->university; ?></a>
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
                        Class of 2014 · <?php echo $university->description; ?>
                    </div>
                </div>
            </div>
        </div> 
    <?php } ?>
    <div class="row padding_top_over_row_70px">
        <div class="col-md-12">
            <span class="header_label_style">College</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_college" class="row">
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
    <div class="pagelet_divider"></div>
    <?php foreach ($college_list as $college) { ?>
        <div class="row from-group">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><?php echo $college->college; ?></a>
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
                        Class of 2008 ·<?php echo $college->description; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="row padding_top_over_row_70px">
        <div class="col-md-12">
            <span class="header_label_style">School/High School</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="subcategory_school" class="row">
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
    <div class="pagelet_divider"></div>
    <?php foreach ($school_list as $school) { ?>
        <div class="row from-group">
            <div class="col-md-2">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <a href=""><?php echo $school->school; ?></a>
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
                        Class of 2006 · <?php echo $school->description; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>



<script>
    $('#subcategory_work').on('click', function() {
        $('#subcategory_work').hide();
        $('#work').show();
    });
    $('#subcategory_professional_skill').on('click', function() {
        $('#subcategory_professional_skill').hide();
        $('#professional_skill').show();
    });
    $('#subcategory_university').on('click', function() {
        $('#subcategory_university').hide();
        $("#university").show();
    });
    $("#subcategory_college").on('click', function() {
        $("#subcategory_college").hide();
        $("#college").show();
    });
    $('#subcategory_school').on('click', function() {
        $('#subcategory_school').hide();
        $('#school').show();
    });
</script>
