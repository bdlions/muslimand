<div id="delete_content_1">
    <div class="pagelet">
        <div class="row form-group">
            <div class="col-md-12">
                <div style="float: left; padding-right: 10px;">
                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="40" height="40">
                </div>
                <div style="float: left;">
                    <div>
                        <a href="#" style="font-weight: bold;">Mohammad Azhar Uddin</a> shared 
                        <a href="#">Dr. Belal</a>'s post.
                        <ul style="list-style-type: none; float: right;">
                            <li class="dropdown">
                                <div>
                                    <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" width="15" height="15">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a >Everyone</a></li>
                                        <li><a >Friends</a></li>
                                        <li><a >Friends of friends</a></li>
                                        <li><a >Only Me</a></li>
                                        <li onclick="open_modal_custom_privacy()"><a >Custom</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        January 5, 2015 at 3.43pm.
                    </div>
                </div>
                <div style="float: right;">
                    <ul style="list-style-type: none;">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li onclick="open_modal_report_post()"><a >Report</a></li>
                                <li onclick="open_modal_delete_post()"><a >Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row form-group">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_1.jpg" width="30" height="30">
            </div>
            <div class="col-md-11">
                <a href="#">Dr. Belal</a>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                Charidik e adhar oshlil kalo
                srostha'r kache minotei dekhao ektu alo....
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="cursor_holder_style">Like .</a>
                <a id="write_comment_line_1" class="cursor_holder_style"> Comment .</a>
                <a id="share_content" onclick="open_modal_share_content()" class="cursor_holder_style"> Share</a>
            </div>
        </div>
    </div>
    <div class="pagelet">
        <div class="row form-group">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                <a id="liked_people_list" class="cursor_holder_style" onclick="open_modal_liked_people_list()" data-toggle="tooltip" title="Nazrul Islam" >79 people</a> like this.
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/share_icon.png">
                <a id="shared_people_list" class="cursor_holder_style" onclick="open_modal_shared_people_list()">54 shares</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group" id="hidden_comment_counter_line_1">
            <div class="col-md-12">
                <img src="<?php echo base_url(); ?>resources/images/comment_icon.png">
                <a id="hidden_comment_counter_anchor_1" data-toggle="collapse" href="#hidden_comments" aria-expanded="false">view 10 more comments </a>
            </div>
        </div>




        <div class="collapse" id="hidden_comments">
            <div class="well">
                <div class="row form-group" id="hidden_comment_line_1">
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_1.jpg" width="30" height="30">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <a style="font-weight: bold;" href="#">Dr. Belal</a>
                                kobi kobi vab ... bright future ...
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                January 5, 2015 at 2:30pm. 
                                <a>like</a>
                                <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                                . <a>7</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button id="single_comment_hidden_line_close_button_1" style="display: none;" type="button" onclick="hide_hidden_comment_line_1()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
        </div>





        <div class="row form-group" id="single_comment_line_1">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg" width="30" height="30">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <a style="font-weight: bold;" href="#">Maria Islam</a>
                        wow ... philosopher :)
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        January 6, 2015 at 6:30pm. 
                        <a>like</a>
                        <img src="<?php echo base_url(); ?>resources/images/like_icon.png">
                        . <a>5</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button id="single_comment_line_close_button_1" style="display: none;" type="button" onclick="hide_comment_line_1()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        </div>
        <div class="row form-group" id="single_comment_line_2">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_8.jpg" width="30" height="30">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <a style="font-weight: bold;" href="#">Mohammad Rafique</a>
                        Vai, ki kobi hoye gele naki? :D
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        January 7, 2015 at 10:15pm. 
                        <a>like</a>
                        <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                        . <a>15</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button id="single_comment_line_close_button_2" style="display: none;" type="button" onclick="hide_comment_line_2()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        </div>
        <div class="row form-group" id="single_comment_line_3">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <a style="font-weight: bold;" href="#">Mohammad Azhar Uddin</a>
                        Well said...
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        January 7, 2015 at 10:15pm. 
                        <a>like</a>
                        <img src="<?php echo base_url(); ?>resources/images/like_icon.png" >
                        . <a>15</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <ul id="single_comment_line_edit_or_delete_1" style="list-style-type: none; display: none;">
                    <li class="dropdown">
                        <a class="dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown" href="#">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a id="edit_option_comment_line_3" >Edit</a>
                            </li>
                            <li>
                                <a onclick="open_modal_delete_member_comment()">Delete</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row form-group" id="update_comment_line_3" style="display: none;" >
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
            </div>
            <div class="col-md-9" >
                <textarea class="form-control form_control_custom_style">Well said...</textarea>
            </div>
            <div class="col-md-2" >
                <button type="button" onclick="hide_update_comment_line_3()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
            </div>
            <div class="col-md-11">
                <input id="comment_input_field" type ="text" class="form-control" placeholder="Write a comment">
            </div>
        </div>
    </div>
</div>


<?php $this->load->view("modal/modal_custom_privacy"); ?>
<?php $this->load->view("modal/modal_delete_post"); ?>
<?php $this->load->view("modal/modal_report_post"); ?>
<?php $this->load->view("modal/modal_delete_member_comment"); ?>
<?php $this->load->view("modal/modal_liked_people_list"); ?>
<?php $this->load->view("modal/modal_shared_people_list"); ?>
<?php $this->load->view("modal/modal_share_content"); ?>


<script>
    $('#custom_option').on('click', function () {
        $('#modal_custom_privacy').show();
    });

    function hide_hidden_comment_line_1() {
        $('#hidden_comment_line_1').hide();
    }
    ;

    function hide_comment_line_1() {
        $('#single_comment_line_1').hide();
    }
    ;
    function hide_comment_line_2() {
        $('#single_comment_line_2').hide();
    }
    ;
    function hide_update_comment_line_3() {
        $('#update_comment_line_3').hide();
        $('#single_comment_line_3').show();
    }
    ;

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('#hidden_comment_line_1').mouseover(function () {
            $('#single_comment_hidden_line_close_button_1').show();
        });
        $('#hidden_comment_line_1').mouseout(function () {
            $('#single_comment_hidden_line_close_button_1').hide();
        });


        $('#single_comment_line_1').mouseover(function () {
            $('#single_comment_line_close_button_1').show();
        });
        $('#single_comment_line_1').mouseout(function () {
            $('#single_comment_line_close_button_1').hide();
        });
        $('#single_comment_line_2').mouseover(function () {
            $('#single_comment_line_close_button_2').show();
        });
        $('#single_comment_line_2').mouseout(function () {
            $('#single_comment_line_close_button_2').hide();
        });
        $('#single_comment_line_3').mouseover(function () {
            $('#single_comment_line_edit_or_delete_1').show();
        });
        $('#single_comment_line_3').mouseout(function () {
            $('#single_comment_line_edit_or_delete_1').hide();
        });
        $('#hidden_comment_counter_anchor_1').on('click', function () {
            $('#hidden_comment_counter_line_1').hide();
        });

        $('#liked_people_list').on('click', function () {
            $('#modal_liked_people_list').show();
        });

        $('#shared_people_list').on('click', function () {
            $('#modal_shared_people_list').show();
        });

        $('#write_comment_line_1').on('click', function () {
            $('#comment_input_field').focus();
        });
        $('#edit_option_comment_line_3').on('click', function () {
            $('#single_comment_line_3').hide();
            $('#update_comment_line_3').show();
        });
    });

</script>

