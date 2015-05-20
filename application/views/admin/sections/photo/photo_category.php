<div class="panel panel-default">
    <div class="panel-heading">Photo</div>
    <div class="panel-body font_12px">
        <div class="row">
            <div class="col-md-3">
                <button id="" name="" value="" onclick="open_modal_photo_category_create()" class="form-control btn button-custom">Create Photo Category</button>
            </div>
        </div>
        <div class="row padding_top_over_row">
            <div class="col-md-12">
                <div class="table-responsive table-left-padding">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th style="text-align: center">Edit</th>
                                <th style="text-align: center">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_product_category_list">
                            <tr>
                                <td>1</td>
                                <td>Anthro</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Artisan Crafts</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cartoons & Comics</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Comedy</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Community Projects</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_photo_category_delete()"> Delete </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/sections/photo/modal_photo_categoty_create"); ?>
<?php $this->load->view("admin/sections/photo/modal_photo_categoty_update"); ?>
<?php $this->load->view("admin/sections/photo/modal_photo_categoty_delete"); ?>