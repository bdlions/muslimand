<div class="row form-group">
    <!--LEFT_COLUMN-->
    <div class="col-md-2">
        <div class="row form-group"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <a style="color: black;" href="#">  Account</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <a style="color: black;" href="#"> Security</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <a style="color: black;" href="#"> Privacy</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <a style="color: black;" href="#"> Notifications</a>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row form-group">
            <div class="col-md-12">
                <a style="color: black;" href="#"> Blocking</a>
            </div>
        </div>
    </div>

    <!--  Middle Column-->
    <div class="col-md-8 font_12px">
        <div class="pagelet">
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="pagelet_title">
                        Privacy Settings
                    </div>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-3">
                    Who can see my stuff?
                </div>
                <div class="col-md-9">
                    <div class="row form-group">
                        <div class=col-md-7>
                            Who can see your future posts?
                        </div>
                        <div class=col-md-2>
                            Friends
                        </div>
                        <div class="col-md-3">
                            <a onclick="view_stuff_privacy()" style="color: #703684; cursor: pointer;">Edit</a> 
                        </div>
                    </div>
                    <div id="view_stuff_privacy_option" class="row" style="display: none;">
                        <div class="col-md-offset-5 col-md-4">
                            <select class="form-control font_12px form_control_custom_style">
                                <option>Everyone</option>
                                <option>Friends</option>
                                <option>Friends of Friends</option>
                                <option>Only Me</option>
                                <option onclick="open_modal_custom_privacy()">Custom</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" onclick="cancel_stuff_privacy()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row">
                        <div class=col-md-7>
                            Review all your posts and things you're tagged in
                        </div>
                        <div class=col-md-2>

                        </div>
                        <div class="col-md-3">
                            <a style="color: #703684;" href="#">Use Activity Log</a> 
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row">
                        <div class=col-md-7>
                            Limit the audience for posts you've shared with friends of friends or Public?
                        </div>
                        <div class=col-md-2>

                        </div>
                        <div class="col-md-3">
                            <a style="color: #703684;" href="#">Limit Past Posts</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagelet_divider"></div>
            <div class="row">
                <div class="col-md-3">
                    Who can contact me?
                </div>
                <div class="col-md-9">
                    <div class="row form-group">
                        <div class=col-md-7>
                            Who can send you friend requests?
                        </div>
                        <div class=col-md-2>
                            Everyone
                        </div>
                        <div class="col-md-3">
                            <a onclick="view_contact_privacy()" style="color: #703684; cursor: pointer;">Edit</a> 
                        </div>
                    </div>
                    <div id="view_contact_privacy_option" class="row" style="display: none;">
                        <div class="col-md-offset-5 col-md-4">
                            <select class="form-control font_12px form_control_custom_style">
                                <option>Everyone</option>
                                <option>Friends of Friends</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" onclick="cancel_contact_privacy()" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>

                    <div class="row">
                        <div class=col-md-7>
                            Whose messages do I want filtered into my Inbox?
                        </div>
                        <div class=col-md-2>
                            Strict Filtering
                        </div>
                        <div class="col-md-3">
                            <a style="color: #703684;" href="#">Edit</a> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagelet_divider"></div>
        </div>
    </div>
    <div class="col-md-2"></div>    
</div>
<div style="padding-bottom: 180px;"></div>

<?php $this->load->view("modal/modal_custom_privacy"); ?>

<script>
    function view_stuff_privacy() {
        $('#view_stuff_privacy_option').show();
    }
    function cancel_stuff_privacy() {
        $('#view_stuff_privacy_option').hide();
    }
    function view_contact_privacy() {
        $('#view_contact_privacy_option').show();
    }
    function cancel_contact_privacy() {
        $('#view_contact_privacy_option').hide();
    }
</script>

