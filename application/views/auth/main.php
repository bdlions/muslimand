<style>
    .user_brief_card
    {
        border: 4px solid lightgray; 
        padding: 6px; 
        background-color: white;
    }
</style>
<div class="container-fluid">
    <div class="row form-group"></div>
    <div class="row form-group"></div>
    <div class="row form-group">
        <div class="col-md-offset-1 col-md-5">
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <span style="font-size: 25px; color: #703684; font-weight: bold;">Global Social Network for People</span>
                </div>
            </div>
            <div class="row form-group"></div>
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/banner.png">
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <span style="font-size: 25px; color: #703684; font-weight: bold;">Sign Up</span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 padding_style">
                    <input type ="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type ="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type ="email" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="row form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type ="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type ="password" class="form-control" placeholder="Re-peated password">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                    <span style="color: #703684; font-size: 15px; font-weight: bold;">Birthday</span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
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
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    <div class="pages_type_add_form_input">
                        <select name="month" class="form-control">
                            <option selected="1"value="0">Month</option>
                            <option value="1">Jan</option>
                            <option value="2">Feb</option>
                            <option value="3">Mar</option>
                            <option value="4">Apr</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aug</option>
                            <option value="9">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                    <div class="pages_type_add_form_input">
                        <select name="year" class="form-control">
                            <option value="">Year</option>
                            <?php
                            for ($j = 1900; $j <= 2015; $j++) {
                                echo"<option value='{$j}'>{$j}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                    <label style="color: #703684; font-size: 15px; font-weight: bold;">Gender</label>
                    <select class="form-control">
                        <option class="">
                            Male
                        </option>
                        <option class="">
                            Female
                        </option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                    <label style="color: #703684; font-size: 15px; font-weight: bold;">Country</label>
                    <select class="form-control">
                        <option class="form-control">
                            Australia 
                        </option>
                        <option class="form-control">
                            Bangladesh 
                        </option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <span style="color: black; font-size: 11px;">By clicking Sign Up, you agree to our <a href="<?php echo base_url() ?>footer/terms">Terms and Conditions</a></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button id="btnSubmit" type="submit" class="btn button-custom" style="background-color: #703684; color: white"><b>Sign Up</b></button>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row form-group">
        <div class="col-md-12 col-sm-6 col-xs-12 form-group">
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; ">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="user_brief_card">
                                <div class="row">
                                    <div class="col-md-7 col-xs-7" style="padding-right: 6px">
                                        <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/face.jpg">
                                    </div>
                                    <div class="col-md-5 col-xs-5" style="padding-left: 0px">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="color: darkgreen; font-weight: bold; font-size: 8px; line-height: 10px">Nazrul Islam</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/flag.png">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               <div style="color: darkgreen; font-weight: bold; font-size: 8px; line-height: 10px">Nazrul Islam</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-1" style="padding-left: 3px; padding-right: 3px; "></div>
        </div>
    </div>
</div>