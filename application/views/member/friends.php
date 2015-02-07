<style>
    .friendd{
        border: 1px solid lightgray;
        padding: 1px;
        display: inline-block;
        width: 100%;
    }
</style>
<div class="row form-group">
    <div class="col-md-10">
        <div class="pagelet">
            <div class="row form-group">
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>resources/images/friends_icon.png" class="mm_thumb_comment">   
                </div>
                <div class="col-md-11 pagelet_title">
                    Friends
                </div>
            </div>
        </div>
        <div class="pagelet">
            <div class="row form-group">
                <div class="col-md-12">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div style="padding: 10px; display: inline-block;">
                            <div class="friendd">
                                <div style="float: left">
                                    <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_3.jpg"  width="100" height="100">
                                </div>
                                <div style="float: left; width: 180px; padding: 10px;">
                                    <div >
                                        <a style="font-weight: bold;" href="#">Barak Obama </a>
                                    </div>
                                    <div >
                                        <span style="font-size: 12px">102 Mutual friends </span> 
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button style="margin: 10px 10px 0 0;" >Friends</button>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="row form-group">
                <div style="padding: 10px; display: inline-block;">
                    <div class="col-md-6">
                        <div class="friendd">
                            <div style="float: left">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_9.jpg"  width="100" height="100">
                            </div>
                            <div style="float: left; width: 180px; padding: 10px;">
                                <div >
                                    <a style="font-weight: bold;" href="#">Mohammad Ali</a>
                                </div>
                                <div >
                                    <span style="font-size: 12px">43 Mutual friends </span> 
                                </div>
                            </div>
                            <div class="pull-right">
                                <button style="margin: 10px 10px 0 0;" >Friends</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="friendd">
                            <div style="float: left">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_7.jpg"  width="100" height="100">
                            </div>
                            <div style="float: left; width: 180px; padding: 10px;">
                                <div >
                                    <a style="font-weight: bold;" href="#">Sharmin Akter</a>
                                </div>
                                <div >
                                    <span style="font-size: 12px">351 friends </span> 
                                </div>
                            </div>
                            <div class="pull-right">
                                <button style="margin: 10px 10px 0 0;" >Friends</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div style="padding: 10px; display: inline-block;">
                    <div class="col-md-6">
                        <div class="friendd">
                            <div style="float: left">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_1.jpg"  width="100" height="100">
                            </div>
                            <div style="float: left; width: 180px; padding: 10px;">
                                <div >
                                    <a style="font-weight: bold;" href="#">Dr. Belal</a>
                                </div>
                                <div >
                                    <span style="font-size: 12px">33 Mutual friends </span> 
                                </div>
                            </div>
                            <div class="pull-right">
                                <button style="margin: 10px 10px 0 0;" >Friends</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="friendd">
                            <div style="float: left">
                                <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_5.jpg"  width="100" height="100">
                            </div>
                            <div style="float: left; width: 180px; padding: 10px;">
                                <div >
                                    <a style="font-weight: bold;" href="#">Jannatul Ferdaus </a>
                                </div>
                                <div >
                                    <span style="font-size: 12px">22 Mutual friends </span> 
                                </div>
                            </div>
                            <div class="pull-right">
                                <button style="margin: 10px 10px 0 0;" >Friends</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
