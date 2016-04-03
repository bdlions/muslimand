<div class="row padding_top_over_row">
    <!--LEFT_COLUMN-->
    <div class="col-md-3">
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <div class="row form-group"></div>
                <?php $this->load->view("member/sections/menu/menu_link"); ?>
            </div>
        </div>
    </div>

    <!--  Middle Column-->
    <div class="col-md-7">
        <div class="pagelet">
            <div class="row padding_top_over_row">
                <div class="col-md-12">
                    <h2>Calculate Your Zakat:</h2>
                    <div class="form-group">
                        <span style="font-size: 20px; font-weight: bold;">Gold & Silver:</span><br>
                        Value of Gold: ($)
                        <input type="text" class="form-control">
                        Value of Silver: ($)
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span style="font-size: 20px; font-weight: bold;">Cash:</span><br>
                        In Hand: ($)
                        <input type="text" class="form-control">
                        In Bank Account: ($)
                        <input type="text" class="form-control">
                        Loans Given: ($)
                        <input type="text" class="form-control">
                        Other Savings: ($)
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span style="font-size: 20px; font-weight: bold;">Business Assets:</span><br>
                        Value of Stock: ($)
                        <input type="text" class="form-control">
                        Business Investments: ($)
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span style="font-size: 20px; font-weight: bold;">Liabilities:</span><br>
                        Loans Taken or Credit: ($)
                        <input type="text" class="form-control">
                        Expenses: ($)
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <span style="font-size: 20px; font-weight: bold;">Criteria for Zakat:</span><br>
                        Value of Total Assets =>  $0 <br>
                        Nisab                 => $3,217.22
                    </div>
                    <div class="form-group">
                        <span style="font-size: 20px; font-weight: bold;">Zakat:</span><br>
                        2.5% of Total Assets =>  $0 <br>
                        <button class="btn btn-xs" style="float: right; background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Calculate your Zakat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>    
</div>
<div class="row padding_top_over_row">
    <div class="col-md-11">
        <?php $this->load->view("auth/sections/member_footer"); ?>
    </div>
    <div class="col-md-1"></div>
</div>
