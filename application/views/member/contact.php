<div class="row form-group">
    <div class="col-md-11">
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <span style="font-size: 24px; font-weight: bold;">Contact Us</span>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row padding_top_over_row">
            <div class="col-md-3">
                <label>*Categories: </label><br>
                <select class="form-control" name="control">
                    <option selected="1" value="0">Sales</option>
                    <option value="1">Support</option>
                    <option value="2">Suggestions</option>
                </select>
            </div>
            <div class="col-md-9"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Subject: </label><br>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>*Message: </label><br>
                <textarea rows="6" class="form-control"></textarea>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <input type="checkbox" style="margin: 5px;">
                <span style="font-size: 12px;">Send Yourself a Copy </span>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-6">
                <label>Please, type what you see on the image below to confirm you are a human</label>
                <script src="https://www.google.com/recaptcha/api.js?fallback=true" async defer></script>
                <form action="?" method="POST">
                    <div class="g-recaptcha" data-sitekey="6LctLfISAAAAAEWmA7GBCAJC7SL4bzFc5jZuDA0O"></div>
                </form><br>
                <div id="captcha_div"></div>
                <button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Submit</button><br>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <span style="font-size: 12px;">* Required Fields </span>
            </div>
        </div>

        <div class="row form-group"></div>
        <div id="footer">
            <?php $this->load->view("auth/sections/non_member_footer"); ?>
        </div>
    </div>
</div>
