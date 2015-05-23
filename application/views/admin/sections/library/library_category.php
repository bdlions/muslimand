<div class="panel panel-default">
    <div class="panel-heading">Library</div>
    <div class="panel-body font_12px">
        <div class="row">
            <div class="col-md-3">
                <button id="" name="" value="" onclick="open_modal_library_category_create()" class="form-control btn button-custom">Create Library Category</button>
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
                                <td>Muslimand</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Health & Fitness</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Autos & Vehicles</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Comedy</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Education</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_library_category_delete()"> Delete </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/sections/library/modal_library_categoty_create"); ?>
<?php $this->load->view("admin/sections/library/modal_library_categoty_update"); ?>
<?php $this->load->view("admin/sections/library/modal_library_categoty_delete"); ?>