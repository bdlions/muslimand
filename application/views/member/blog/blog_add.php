<div class="row form-group"></div>
<div class="row">
    <div class="col-md-10">
        <a href="<?php echo base_url(); ?>blogs/"><img src="<?php echo base_url(); ?>resources/images/blogs/icon/blog.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>blogs/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Blog</span></a>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-11">
        <div class="pagelet_divider"></div>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row form-group"></div>
<div class="row padding_top_over_row">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 20px; font-weight: bold;">Add a New Blog</span>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Title:</label><br>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <label>*Post:</label><br>
                <textarea id="blog_post_textarea"></textarea>
                <input type="hidden" id="blog_post_inp">
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Categories: </label><br>
                <ul class="li_dot_remove inline">
                    <li id="cat_all">All</li>
                    <li id="cat_public">Public</li>
                    <li id="cat_personal">Personal</li>
                    <li id="cat_used">Most Used</li>
                </ul>
                <div id="category_container">

                </div>
                <div class="pagelet_divider"></div>

            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Add a New Category">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div style="padding-left: 15px;">
                            <input type="checkbox">
                            Public
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" >
                        <Personal
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span style="font-size: 12px;">Separate multiple categories with commas.</span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 6px 28px;">Add</button>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row padding_top_over_row">
        <div class="col-md-6">
            <label> Privacy: </label>
            <select class="form-control" name="control">
                <option selected="1" value="0">Everyone</option>
                <option value="1">Friends</option>
                <option value="2">Friends of Friends</option>
                <option value="3">Only Me</option>
                <option value="4">Custom</option>
            </select>
            <span style="font-size: 12px;">Control who can see this Blog.</span>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row padding_top_over_row">
        <div class="col-md-6">
            <label>Comment Privacy: </label>
            <select class="form-control" name="control">
                <option selected="1" value="0">Everyone</option>
                <option value="1">Friends</option>
                <option value="2">Friends of Friends</option>
                <option value="3">Only Me</option>
                <option value="4">Custom</option>
            </select>
            <span style="font-size: 12px;">Control who can comment on this Blog.</span>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row padding_top_over_row">
        <div class="col-md-6">
            <label>Please, type what you see on the image below to confirm you are not a Robot</label>
            <script src="https://www.google.com/recaptcha/api.js?fallback=true" async defer></script>
            <form action="?" method="POST">
                <div class="g-recaptcha" data-sitekey="6LctLfISAAAAAEWmA7GBCAJC7SL4bzFc5jZuDA0O"></div>
                <br/>
                <input type="submit" value="Submit">
            </form><br>
            <div id="captcha_div"></div>
            <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Publish</button><br>
            <span style="font-size: 12px;">* Required Fields </span>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row form-group"></div>
    <div class="row form-group"></div>
</div>
<div class="col-md-2"></div>
</div>
<div style="display: none">
    <div id="all_li"><ul class="li_dot_remove scrolling_y_axis_style">
            <a href=""><li><input id="categoty_1" type="checkbox" value="1"> all_li Book Reviews</li></a>
            <a href=""><li><input id="categoty_2" type="checkbox" value="2"> Business</li></a>
            <a href=""><li><input id="categoty_3" type="checkbox" value="3"> Stories</li></a>
            <a href=""><li><input id="categoty_4" type="checkbox" value="4"> Dawah</li></a>
            <a href=""><li><input id="categoty_5" type="checkbox" value="5"> Education</li></a>
            <a href=""><li><input id="categoty_6" type="checkbox" value="6"> Arts</li></a>
            <a href=""><li><input id="categoty_7" type="checkbox" value="7"> Entertainment</li></a>
            <a href=""><li><input id="categoty_8" type="checkbox" value="8"> Family & Home</li></a>
            <a href=""><li><input id="categoty_9" type="checkbox" value="9"> Health & Fitness</li></a>
            <a href=""><li><input id="categoty_10" type="checkbox" value="10"> Interview</li></a>
            <a href=""><li><input id="categoty_11" type="checkbox" value="11"> Recreation</li></a>
            <a href=""><li><input id="categoty_12" type="checkbox" value="12"> Shopping</li></a>
            <a href=""><li><input id="categoty_13" type="checkbox" value="13"> Society</li></a>
            <a href=""><li><input id="categoty_14" type="checkbox" value="14"> Sports</li></a>
            <a href=""><li><input id="categoty_15" type="checkbox" value="15"> Stories of Phophets</li></a>
            <a href=""><li><input id="categoty_16" type="checkbox" value="16"> Technology</li></a>
            <a href=""><li><input id="categoty_17" type="checkbox" value="17"> Quran Contest</li></a>
        </ul></div>
    <div id="public_li"><ul class="li_dot_remove scrolling_y_axis_style">
            <a href=""><li><input id="categoty_1" type="checkbox" value="1"> public_li Book Reviews</li></a>
            <a href=""><li><input id="categoty_2" type="checkbox" value="2"> Business</li></a>
            <a href=""><li><input id="categoty_3" type="checkbox" value="3"> Stories</li></a>
            <a href=""><li><input id="categoty_4" type="checkbox" value="4"> Dawah</li></a>
            <a href=""><li><input id="categoty_5" type="checkbox" value="5"> Education</li></a>
            <a href=""><li><input id="categoty_6" type="checkbox" value="6"> Arts</li></a>
            <a href=""><li><input id="categoty_7" type="checkbox" value="7"> Entertainment</li></a>
            <a href=""><li><input id="categoty_8" type="checkbox" value="8"> Family & Home</li></a>
            <a href=""><li><input id="categoty_9" type="checkbox" value="9"> Health & Fitness</li></a>
            <a href=""><li><input id="categoty_10" type="checkbox" value="10"> Interview</li></a>
            <a href=""><li><input id="categoty_11" type="checkbox" value="11"> Recreation</li></a>
            <a href=""><li><input id="categoty_12" type="checkbox" value="12"> Shopping</li></a>
            <a href=""><li><input id="categoty_13" type="checkbox" value="13"> Society</li></a>
            <a href=""><li><input id="categoty_14" type="checkbox" value="14"> Sports</li></a>
            <a href=""><li><input id="categoty_15" type="checkbox" value="15"> Stories of Phophets</li></a>
            <a href=""><li><input id="categoty_16" type="checkbox" value="16"> Technology</li></a>
            <a href=""><li><input id="categoty_17" type="checkbox" value="17"> Quran Contest</li></a>
        </ul></div>
    <div id="personal_id"><ul class="li_dot_remove scrolling_y_axis_style">
            <a href=""><li><input id="categoty_1" type="checkbox" value="1"> personal_id Book Reviews</li></a>
            <a href=""><li><input id="categoty_2" type="checkbox" value="2"> Business</li></a>
            <a href=""><li><input id="categoty_3" type="checkbox" value="3"> Stories</li></a>
            <a href=""><li><input id="categoty_4" type="checkbox" value="4"> Dawah</li></a>
            <a href=""><li><input id="categoty_5" type="checkbox" value="5"> Education</li></a>
            <a href=""><li><input id="categoty_6" type="checkbox" value="6"> Arts</li></a>
            <a href=""><li><input id="categoty_7" type="checkbox" value="7"> Entertainment</li></a>
            <a href=""><li><input id="categoty_8" type="checkbox" value="8"> Family & Home</li></a>
            <a href=""><li><input id="categoty_9" type="checkbox" value="9"> Health & Fitness</li></a>
            <a href=""><li><input id="categoty_10" type="checkbox" value="10"> Interview</li></a>
        </ul></div>
    <div id="used_id"><ul class="li_dot_remove scrolling_y_axis_style">
            <a href=""><li><input id="categoty_1" type="checkbox" value="1"> used_id Book Reviews</li></a>
            <a href=""><li><input id="categoty_2" type="checkbox" value="2"> Business</li></a>
            <a href=""><li><input id="categoty_3" type="checkbox" value="3"> Stories</li></a>
            <a href=""><li><input id="categoty_4" type="checkbox" value="4"> Dawah</li></a>
            <a href=""><li><input id="categoty_5" type="checkbox" value="5"> Education</li></a>
            <a href=""><li><input id="categoty_6" type="checkbox" value="6"> Arts</li></a>
            <a href=""><li><input id="categoty_7" type="checkbox" value="7"> Entertainment</li></a>
            <a href=""><li><input id="categoty_8" type="checkbox" value="8"> Family & Home</li></a>
            <a href=""><li><input id="categoty_9" type="checkbox" value="9"> Health & Fitness</li></a>
            <a href=""><li><input id="categoty_10" type="checkbox" value="10"> Interview</li></a>
            <a href=""><li><input id="categoty_11" type="checkbox" value="11"> Recreation</li></a>
            <a href=""><li><input id="categoty_12" type="checkbox" value="12"> Shopping</li></a>
        </ul></div>
</div>
<style>
    #category_container{
        width: 100%; background-color: white; padding: 10px; margin-top: -7px;
    }

</style>
<script>
    var backcol;
    $('.inline li:first').css('background-color', 'white');
    $('#category_container').html($('#all_li').html());
    $('.inline li').hover(
            function () {
                backcol = $(this).css('background-color');
//                alert(backcol);
                $(this).css('background-color', 'wheat');
            },
            function () {
                $(this).css('background-color', backcol);
            }
    );
    $('.inline li').click(function () {
        $('.inline li').css('background-color', 'transparent');
        $(this).css('background-color', 'white');
        backcol = $(this).css('background-color');
    });
    $('#cat_all').click(function () {
        $('#category_container').html($('#all_li').html());
    });
    $('#cat_public').click(function () {
        $('#category_container').html($('#public_li').html());
    });
    $('#cat_personal').click(function () {
        $('#category_container').html($('#personal_id').html());
    });
    $('#cat_used').click(function () {
        $('#category_container').html($('#used_id').html());
    });
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    window.onload = function ()
    {
        CKEDITOR.replace('blog_post_textarea', {
            language: 'en',
            toolbar: [
                {name: 'document', groups: ['mode', 'document', 'doctools'], items: ['Source', '-', 'Preview', '-', 'Templates']},
                {name: 'clipboard', groups: ['clipboard', 'undo'], items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
                {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                {name: 'colors', items: ['TextColor', 'BGColor']},
                '/',
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup'], items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
                {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
                '/',
                {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'], items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']},
                {name: 'forms', items: ['ImageButton']},
            ],
            toolbarGroups: [
                {name: 'document', groups: ['mode', 'document']}, // Displays document group with its two subgroups.
                {name: 'clipboard', groups: ['clipboard', 'undo']}, // Group's name will be used to create voice label.
                {name: 'links'},
                {name: 'colors'},
                '/', // Line break - next group will be placed in new line.
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'styles'},
                '/',
                {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
                {name: 'forms'},
            ]
        });

        $("#btnSubmit").on("click", function () {
            $("#blog_post_inp").val(jQuery('<div />').text(filter_html_tags(CKEDITOR.instances.blog_post_textarea.getData())).html());
        });
    }
</script>
