<div class="row padding_top_over_row">
    <div class="col-md-10">
        <a href="<?php echo base_url(); ?>academy/"><img src="<?php echo base_url(); ?>resources/images/academy/icon/course.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>academy/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Course</span></a>
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
                <span style="font-size: 20px; font-weight: bold;">Add a New Course</span>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-4">
                <label>*Course name: </label><br>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <label>Description: </label><br>
                <textarea id="blog_post_textarea"></textarea>
                <input type="hidden" id="blog_post_inp">
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Course photo: </label> (Photo should be with at least 175x175 size)<br>
                <input id="image" type="file" name="image">
                You can upload a jpg, gif or png file
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Categories: </label><br>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Technology</option>
                    <option value="1">Business</option>
                    <option value="2">Design</option>
                    <option value="3">Arts</option>
                    <option value="4">Photgraphy</option>
                    <option value="5">Heath & Fitness</option>
                    <option value="6">Math & Science</option>
                    <option value="7">Education</option>
                    <option value="8">Languages</option>
                    <option value="9">Humanities</option>
                    <option value="10">Social Science</option>
                    <option value="11">Crafts & Hobbies</option>
                    <option value="12">Sports</option>
                    <option value="13">Islamic Education</option>
                </select>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Tags (Keywords): </label><br>
                <input type="text" class="form-control">
                Separate tags with commas 
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>View Course Privacy: </label>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
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
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Invite Privacy: </label>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Submit The Course</button>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row"></div>
    </div>
    <div class="col-md-2"></div>
</div>


<script type="text/javascript" src="<?php echo base_url(); ?>resources/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    window.onload = function()
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

        $("#btnSubmit").on("click", function() {
            $("#blog_post_inp").val(jQuery('<div />').text(filter_html_tags(CKEDITOR.instances.blog_post_textarea.getData())).html());
        });
    }
</script>
