<div class="row padding_top_over_row">
    <div class="col-md-10">
        <a href="<?php echo base_url(); ?>library/"><img src="<?php echo base_url(); ?>resources/images/library/icon/library.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>library/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Library</span></a>
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
                <span style="font-size: 20px; font-weight: bold;">Create New Document</span>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-4">
                <label>*Title: </label><br>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <label>*Description: </label><br>
                <textarea id="blog_post_textarea"></textarea>
                <input type="hidden" id="blog_post_inp">
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Categories: </label><br>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Muslimand</option>
                    <option value="1">Health & Fitness</option>
                    <option value="2">Autos & Vehicles</option>
                    <option value="3">Comedy</option>
                    <option value="4">Education</option>
                    <option value="5">Entertainment</option>
                    <option value="6">Films & Animations</option>
                    <option value="7">Gaming</option>
                    <option value="8">Howto & Style</option>
                    <option value="9">People & Blogs</option>
                    <option value="10">Pets & Animals</option>
                    <option value="11">Science & Technology</option>
                    <option value="12">Sports</option>
                    <option value="13">Travels & Events</option>
                </select>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Document File: </label> (Max file size: 10 Mb)<br>
                <input id="image" type="file" name="image">
                <p>File types support: (doc, docx, ppt, pptx, pps, xls, xlsx, pdf, ps, odt, odp, sxw, sxi, txt, rtf)</p>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <label>Download Enabled: </label><br>
                <ul class="download_li">
                    <label style="padding: 2px 15px"><li class="download_li_active">
                            <input type="radio" value="1" name="download_enabled">
                            Yes
                        </li></label>
                    <label style="padding: 2px 15px"><li class="download_li_inactive">
                            <input type="radio" value="2" name="download_enabled">
                            No
                        </li></label>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="margin-top: -12px;">Enabling this option will allow others the rights to download this document.</p>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <label>Email Attachment:  </label><br>
                <ul class="download_li">
                    <label style="padding: 2px 15px"><li class="download_li_active">
                            <input type="radio" value="1" name="download_enabled">
                            Yes
                        </li></label>
                    <label style="padding: 2px 15px"><li class="download_li_inactive">
                            <input type="radio" value="2" name="download_enabled">
                            No
                        </li></label>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="margin-top: -12px;">Enabling this option will allow others emailed this document as attachment.</p>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>License Associated: </label><br>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Unspecified - no licensing information is associated</option>
                    <option value="1">Attribution CC BY</option>
                    <option value="2">Attribution-NoDerivs CC BY-ND</option>
                    <option value="3">Attribution-NonCommercial CC BY-NC</option>
                    <option value="4">Attribution-ShareAlike CC BY-SA</option>
                </select>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Visibility:  </label><br>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Private on this site</option>
                    <option value="1">Public on Scribd</option>
                </select>
            </div>
            <div class="col-md-6"></div>
        </div>




        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Privacy: </label>
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
                <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Publish</button>
                <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Cancel</button>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                * Required Fields
            </div>
            <div class="col-md-6"></div>
        </div>
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
