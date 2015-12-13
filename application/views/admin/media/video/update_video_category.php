<div class="panel panel-default">
    <div class="panel-heading table_row_style">Update video category</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("admin/media/update_video_category", array('id' => 'form_update_video_category', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"></div>
                    </div>
                    <div class="form-group">
                        <label for="match_date" class="col-md-6 control-label requiredField">
                            Title
                        </label>
                        <div class ="col-md-6">
                               <input id="title" class="form-control" type="text" value="" name="title">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_video" class="col-md-6 control-label requiredField">

                        </label>
                        <div class ="col-md-3 pull-right">
                            <input id="submit_update_video" class="form-control button btn_custom_button" type="submit" value="Update" name="submit_update_video">
                        </div> 
                    </div>
                </div>
            </div>
            <div class="btn-group" style="padding-left: 10px;">
                <input type="button" style="width:120px;" value="Back" id="back_button" onclick="javascript:history.back();" class="form-control button btn_custom_button">
            </div>
        </div>
    </div>
</div>