<div class="row" style="margin-bottom: 1px;">
    <div class="col-md-12">
        <img src="<?php echo base_url() ?>resources/images/pages/cover/02.jpg" width="100%" height="250">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="pull-right" style="margin-right: 10px;">
            <ul class="nav nav_page_custom nav-pills pull-right">
                <li id="joined_page_content_id_01" class="dropdown" style="position: relative; top: -35px; left: 0; z-index: 1001; font-weight: bold; display: none;">
                    <a  data-toggle="dropdown">
                        <button class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0;"> Joined <b class="caret" style="margin-left: -8px!important;"></b></button></a>
                    <ul class="dropdown-menu dropdown_menu_custom_page" id="menu1">
                        <li><a id="disjoin_page_id_01">Disjoin this page</a></li>
                        <li><hr></li>
                        <li>
                            <a><label>Posts in News Feed</label><br>
                                <select class="form-control form_control_custom_style">
                                    <option >Default</option>
                                    <option >Never</option>
                                </select>
                            </a>
                        </li>
                        <li><a><label>Notifications</label><br>
                                <select class="form-control form_control_custom_style">
                                    <option >All</option>
                                    <option >Only Posts</option>
                                    <option >Only Photos</option>
                                    <option >Only Videos</option>
                                </select>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="join_page_id_01" class="dropdown" style="position: relative; top: -35px;  z-index: 1001; font-weight: bold;">
                    <a  data-toggle="dropdown"><button class="button-custom glyphicon glyphicon-plus" style="margin: 0 3px 3px 0;"> Join</button></a>
                </li>
                <li class="dropdown" style="position: relative; top: -35px;  z-index: 1001; font-weight: bold;">
                    <a ><button onclick="open_modal_page_invitation()" class="button-custom glyphicon glyphicon-star" style="margin: 0 3px 3px 0;"> Invite </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $('#join_page_id_01').on('click', function() {
        $('#join_page_id_01').hide();
        $('#joined_page_content_id_01').show();
    });
    $('#disjoin_page_id_01').on('click', function() {
        $('#joined_page_content_id_01').hide();
        $('#join_page_id_01').show();
    });
</script>
<?php $this->load->view("modal/modal_page_invitation"); ?>
