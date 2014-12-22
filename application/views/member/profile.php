<div class="container-fluid" style="background-color: #E9EAED">
    <div class="row">

        <!--LEFT_COLUMN-->
        <div class="col-md-offset-1 col-md-8">

            <!-- Cover Image -->
            <?php $this->load->view("member/pagelets/profile_cover"); ?>

            <div class="row form-group"></div>

            <!--CARDS AFTER BANNER-->
            <div class="row">
                
                <div class="col-md-5">

                </div>
                
                
                <div class="col-md-7">
                    <?php $this->load->view("member/pagelets/post_status"); ?>
                    <div class="row form-group"></div>
                    <?php $this->load->view("member/pagelets/shared_link"); ?>
                    <div class="row form-group"></div>
                    <?php $this->load->view("member/pagelets/shared_status"); ?>
                </div>
                
            </div>
            <div class="row form-group"></div>
        </div>

        <!--RIGHT COLUMN (CHATBOX COLUMN)-->
        <div class="col-md-offset-1 col-md-2" style="border-left: 1px solid lightgray">
            <?php $this->load->view("member/sections/right_column_ticker_friends"); ?>            
        </div>
    </div>


</div>
