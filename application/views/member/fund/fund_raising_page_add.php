<div class="row padding_top_30px">
    <div class="col-md-10">
        <a href="<?php echo base_url(); ?>fund/"><img src="<?php echo base_url(); ?>resources/images/fund/icon/fund.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>fund/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Fund Rising</span></a>
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
                <span style="font-size: 20px; font-weight: bold;">Start a Campaign</span>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Campaign Name:  </label><br>
                <span style="font-size: 12px;">You can enter maximum 255 characters. </span>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Categories: </label><br>
                <select class="form-control" name="control">
                    <option selected="1" value="0">International Emergencies</option>
                    <option value="1">Business & Entrepreneurs</option>
                    <option value="2">Education</option>
                    <option value="3">Environment</option>
                    <option value="4">Health</option>
                    <option value="5">Hunger</option>
                    <option value="6">Masjids & Local Communities</option>
                    <option value="7">Non-Profits & Charities</option>
                    <option value="8">Orphans</option>
                    <option value="9">Poverty</option>
                    <option value="10">Water</option>
                </select>
            </div>
            <div class="col-md-6"></div>
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
                <label>*Your Paypal Email Account: </label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Goal of Campaign (Financial Goal):  </label><br>
                <span style="font-size: 12px;">You can set campaign goal to 0 for unlimited goal </span>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <label>Expired date:   </label><br>
                <span style="font-size: 12px;">You can set expired date for your campaign , otherwise checking the unlimited box to make this campaign never expired </span>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pages_type_add_form_input">
                            <select name="day" class="form-control">
                                <option value="">Day</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo "<option value='{$i}'>{$i}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pages_type_add_form_input">
                            <select name="month" class="form-control">
                                <option selected="1"value="0">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pages_type_add_form_input">
                            <select name="year" class="form-control">
                                <option value="">Year</option>
                                <?php
                                for ($j = 2015; $j <= 2025; $j++) {
                                    echo"<option value='{$j}'>{$j}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <input style="margin: 5px;" type="checkbox">
                <span style="font-size: 12px;">Set this to unlimited time </span>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <label>List predefined:</label><br>
                        <span style="font-size: 12px;">(enter up to preselected 5 donation amounts to available on the page) </span>
                    </div>
                </div>
                <div class="row padding_top_over_row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/add.png">
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/delete.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/add.png">
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/delete.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/add.png">
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/delete.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/add.png">
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>resources/images/fund/icon/delete.png">
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <input style="margin: 5px;" type="checkbox">
                <span style="font-size: 12px; font-weight: bold;">Allow anonymous donation? if donor select anonymous donation then his name and photo are hidden from public </span>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <input style="margin: 5px;" type="checkbox">
                <span style="font-size: 12px; font-weight: bold;">Allow Monthly Subscription? If allowed donors can subscribe to monthly donation.  </span>
            </div>
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
                <label>Donate Privacy: </label>
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
            <div class="col-md-12">
                <input style="margin: 5px;" type="checkbox">
                <span style="font-size: 12px;">* I understand that a fee of 5% will be automatically deducted from each donation I receive to sustain and support Ummaland. </span><br>
                <p style="font-size: 12px; padding-left: 28px;">* I agree to Ummaland's <a style="color: #703684" href="">Terms & Conditions</a>.</p>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Publish</button>
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
