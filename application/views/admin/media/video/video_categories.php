<div class="panel panel-default">
    <div class="panel-heading table_row_style">Video</div>
    <div class="panel-body">
        <div class="row col-md-12" style="margin-left: 1px;">            
            <div class="row form-group" style="padding-left:10px;">
                <div class ="col-md-2 pull-left form-group">
                    <a href="<?php echo base_url().'admin/media/create_video_category'?>">
                        <button id="" value="" class="form-control pull-right btn_custom_button">Add Video category</button>  
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive table-left-padding">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table_row_style">
                                <th style="text-align: center">Id</th>
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Edit</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                            <tr>
                                <th style="text-align: center">1</th>
                                <th style="text-align: center">Quran</th>
                                <th style="text-align: center"><a href="<?php echo base_url()."admin/media/update_video_category";?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_video_category()"value="" class="">
                                        Delete </a></th>
                            </tr>
                            <tr>
                                <th style="text-align: center">2</th>
                                <th style="text-align: center">Hadith</th>
                                <th style="text-align: center"><a href="<?php echo base_url()."admin/media/update_video_category";?>">Edit</a></th>
                              <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_video_category()"value="" class="">
                                        Delete </a></th>
                            </tr>
                            <tr>
                                <th style="text-align: center">3</th>
                                <th style="text-align: center">Islam</th>
                                <th style="text-align: center"><a href="<?php echo base_url()."admin/media/update_video_category";?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_video_category()"value="" class="">
                                        Delete </a></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="btn-group" style="padding-right: 10px;">
                <input type="button" style="width:120px;" value="Back" id="back_button" onclick="javascript:history.back();" class="form-control btn_custom_button">
            </div>
        </div>
    </div>
</div>


 <?php $this->load->view("admin/media/video/modal_delete_video_category");
                           