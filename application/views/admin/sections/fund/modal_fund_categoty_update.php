<div class="modal fade" id="modal_fund_category_update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Update Fund Raising Category</h4>
            </div>
            <div class="modal-body">


                <div class="row form-group">
                    <div class ="col-sm-2"></div>
                    <label class="col-sm-3 col-xs-12 control-label ">Category Name:</label>
                    <div class ="col-sm-4 col-xs-12">
                        <input  name="" value="" type="text" class="form-control"/>
                        <input id="" name="" value="" type="hidden" class="form-control"/>
                    </div>
                </div>
                <div class="row form-group">
                    <div class ="col-sm-6"></div>
                    <div class ="col-sm-3 col-xs-offset-6 col-xs-6">
                        <button id="" name="" value="" class="form-control btn button-custom pull-right">Update</button>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button-custom" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_fund_category_update() {
        $('#modal_fund_category_update').modal('show');
    }
</script>