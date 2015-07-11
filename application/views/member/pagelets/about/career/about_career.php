
<script type="text/javascript" src="<?php echo base_url() ?>resources/bootstrap3/js/tmpl.min.js"></script>

<script type="text/x-tmpl" id="tmpl_work_places">
    {% var i=0, work_place = ((o instanceof Array) ? o[i++] : o); %}
    {% while(work_place){ %}
<div class="row form-group">
    <div class="col-md-2">
        <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8">
                <a href=""><?php echo '{%= work_place.company%}' ?></a>
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
                 <?php echo '{%= work_place.position%}' ?>,<?php echo '{%= work_place.city %}'; ?>,<?php echo '{%= work_place.description %}'; ?>
            </div>
        </div>
    </div>
</div> 
    {% work_place = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_p_skills">
    {% var i=0, p_skill = ((o instanceof Array) ? o[i++] : o); %}
    {% while(p_skill){ %}
    <div class="row from-group">
    <div class="col-md-8">
    <a style="font-weight: bold" href=""><?php echo '{%= p_skill.pSkill%}' ?></a>
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
    {% p_skill = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_universities">
    {% var i=0, university = ((o instanceof Array) ? o[i++] : o); %}
    {% while(university){ %}
    <div class="row form-group">
    <div class="col-md-2">
    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
    </div>
    <div class="col-md-10">
    <div class="row">
    <div class="col-md-8">
    <a href=""><?php echo '{%= university.university%}' ?></a>
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
    <?php echo '{%= university.startDate%}' ?> - <?php echo '{%= university.endDate%}' ?>.<?php echo '{%= university.description%}' ?>
    </div>
    </div>
    </div>
    </div> 
    {% university = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>

<script type="text/x-tmpl" id="tmpl_colleges">
    {% var i=0, college = ((o instanceof Array) ? o[i++] : o); %}
    {% while(college){ %}
    <div class="row form-group">
    <div class="col-md-2">
        <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8">
                <a href=""><?php echo '{%= college.college%}' ?></a>
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
<?php echo '{%= college.startDate%}' ?> - <?php echo '{%= college.endDate%}' ?>.<?php echo '{%= college.description%}' ?>
            </div>
        </div>
    </div>
</div> 
    {% college = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>
<script type="text/x-tmpl" id="tmpl_schools">
    {% var i=0, school = ((o instanceof Array) ? o[i++] : o); %}
    {% while(school){ %}
<div class="row form-group">
    <div class="col-md-2">
        <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8">
                <a href=""><?php echo '{%= school.school%}' ?></a>
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
                 <?php echo '{%= school.startDate%}'  ?> - <?php echo '{%= school.endDate%}'  ?>.<?php echo '{%= school.description%}' ?>
            </div>
        </div>
    </div>
</div> 
    {% school = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}
</script>

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

    <div id="work_place_tmpl_id">

    </div>
    <div class="row padding_top_over_row_30px">
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
    <div id="p_skill_tmpl_id">

    </div>
    <div class="row padding_top_over_row_30px">
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
    <div id="uv_tmpl_id">

    </div>
    <div class="row padding_top_over_row_30px">
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
    <div id="college_tmpl_id">
        
    </div>

    <div class="row padding_top_over_row_30px">
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
    <div id="school_tmpl_id">
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


