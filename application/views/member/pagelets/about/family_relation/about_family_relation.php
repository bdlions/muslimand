<script type="text/x-tmpl" id="tmpl_relationship_status">
    {% var i=0, r_status = ((o instanceof Array) ? o[i++] : o); %}
    {% while(r_status){ %}
    <div class="row">
    <div class="col-md-2">
    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/relation.png">
    </div>
    <div class="col-md-10">
    <div class="row">
    <div class="col-md-8">
    <?php echo '{%= r_status.relationshipStatus%}' ?>
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
    {% r_status = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}

</script>
<script type="text/x-tmpl" id="tmpl_family_members">
    {% var i=0, f_member = ((o instanceof Array) ? o[i++] : o); %}
    {% while(f_member){ %}
    <div class="row form-group">
    <div class="col-md-2">
    <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
    </div>
    <div class="col-md-10">
    <div class="row ">
    <div class="col-md-8">
    <a href=""><?php echo '{%= f_member.memebrName%}' ?></a>
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
    <?php echo '{%= f_member.relation%}' ?>
    </div>
    </div>
    </div>
    </div> 

    {% f_member = ((o instanceof Array) ? o[i++] : null); %}
    {% } %}

</script>


<div id="about_family_relation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Family & Relational Information</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-12" id="relationship_id">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add your Relationship</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/pagelets/about/family_relation/relationship"); ?>
            </div>
        </div>
    </div>
    <div class="pagelet_divider"></div>
    <div id="relationship_add"></div>
    <div class="pagelet_divider"></div>
    <div  class="row">
        <div class="col-md-12" id="family_member_id">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add Family Member</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/pagelets/about/family_relation/family_member"); ?>
            </div>
        </div>

    </div>
    <div class="pagelet_divider"></div>
    <div id="family_member_add"></div>


</div>
<script>
    $(function () {
        $("#relationship_id").on("click", function () {
            $("#relationship_id").hide();
            $("#relationship_add_id").show();

        });
        $('#family_member_id').on('click', function () {
            $('#family_member_id').hide();
            $('#family_member_add_id').show();
        });

    });

</script>