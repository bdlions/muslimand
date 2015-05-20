<div id="about_details" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">About You</span>
        </div>
    </div>
    <div class="pagelet_divider"></div>

    <div id="subcategory_details" class="row">
        <div class="col-md-12">
            <div class="cursor_holder_style">
                <img style="border: 1px solid lightpink;" src="<?php echo base_url(); ?>resources/images/plus.png">
                <a class="holder_style">Add about Yourself</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view("member/pagelets/about/details/details"); ?>
        </div>
    </div>

    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-4"> About You </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12"> I want to be a pure Muslim ... </div>
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
    <div class="pagelet_divider"></div>
    <div class="row form-group">
        <div class="col-md-4"> Favorite Quotes </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12"> I am a Muslim ... </div>
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
<script>
    $('#subcategory_details').on('click', function () {
        $('#subcategory_details').hide();
        $('#details').show();
    });
</script>