<div class="panel panel-default">
    <div class="panel-heading">Page</div>
    <div class="panel-body font_12px">
        <div class="row">
            <div class="col-md-3">
                <button id="" name="" value="" onclick="open_modal_page_category_create()" class="form-control btn button-custom">Create page Category</button>
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
                                <td>Brand</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Product</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Group</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Community</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Business</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Place</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Entertainment</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Company</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Organization</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Institution</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Artist or Band</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Public Figure</td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_update()"> Edit </button>
                                </td>
                                <td>
                                    <button class="form-control btn" value="" onclick="open_modal_page_category_delete()"> Delete </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/sections/page/modal_page_categoty_create"); ?>
<?php $this->load->view("admin/sections/page/modal_page_categoty_update"); ?>
<?php $this->load->view("admin/sections/page/modal_page_categoty_delete"); ?>