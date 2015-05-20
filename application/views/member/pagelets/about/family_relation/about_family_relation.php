<div id="about_family_relation" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">Family & Relational Information</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>

    <div id="subcategory_family_relation" class="row">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add your Family & Relational Info</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/family_relation/family_relation"); ?>
        </div>
    </div>

    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-2">
            <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-8">
                    <a href="">Dr. Belal</a>
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
                    Brother
                </div>
            </div>
        </div>
    </div> 
    <div class="pagelet_divider"></div>
    <div class="row">
        <div class="col-md-2">
            <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/face.jpg">
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-8">
                    <a href="">Mohammad Rafique</a>
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
                    Cousin
                </div>
            </div>
        </div>
    </div> 
</div>
<script>
    $('#subcategory_family_relation').on('click', function () {
        $('#subcategory_family_relation').hide();
        $('#family_relation').show();
    });
</script>