<div class="row form-group"></div>
<div class="row">
    <div class="col-md-10">
        <a href="<?php echo base_url(); ?>photos/"><img src="<?php echo base_url(); ?>resources/images/photos/icon/photo.png"></a>
        <a  class="anchor_property_change" href="<?php echo base_url(); ?>photos/"><span style="text-decoration: none; cursor: pointer; font-size: 16px; font-weight: bold;">Photo</span></a>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="font-size: 20px; font-weight: bold;">Upload Photos</span>
            </div>
        </div>
        <div class="pagelet_divider"></div>
        <div class="row">
            <div class="col-md-4">
                <span style="font-size: 16px; font-weight: bold;">* Photo Album:</span><br>
                <select class="form-control">
                    <option value="">Select an Album:</option>
                    <option class="" value="0">English Cotton</option>
                    <option class="" value="1">Perfumes</option>
                </select>
                <a style="text-decoration: none; cursor: pointer;"> <span onclick="open_modal_create_album()">(Create a New Photo Album)</span></a>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row form-group"></div>

        <div class="row">
            <div class="col-md-4">
                <span style="font-size: 16px; font-weight: bold;">* Category:</span><br>
                <select class="form-control">
                    <option value="">Select:</option>
                    <option class="" value="0">Anthro</option>
                    <option class="" value="1">Artisan Crafts</option>
                    <option class="" value="2">Cartoons & Comics</option>
                    <option class="" value="3">Comedy</option>
                    <option class="" value="4">Community Projects</option>
                    <option class="" value="5">Contests</option>
                    <option class="" value="6">Customization</option>
                    <option class="" value="7">Designs & Interfaces</option>
                    <option class="" value="8">Digital Art</option>
                    <option class="" value="9">Fan Art</option>
                    <option class="" value="10">Film & Animation</option>
                    <option class="" value="11">Fractal Art</option>
                    <option class="" value="12">Game Development Art</option>
                    <option class="" value="13">Literature</option>
                    <option class="" value="14">People</option>
                    <option class="" value="15">Pets & Animals</option>
                    <option class="" value="16">Photography</option>
                    <option class="" value="17">Resources & Stock Images</option>
                    <option class="" value="18">Science & Technology</option>
                    <option class="" value="19">Sports</option>
                    <option class="" value="20">Traditional Art</option>
                </select>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Photo(s) Privacy: </span><br>
                <select class="form-control" name="control">
                    <option value="0" selected="1">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
                Control who can see these photo(s). 
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Comment Privacy: </span><br>
                <select class="form-control" name="control">
                    <option value="0" selected="1">Everyone</option>
                    <option value="1">Friends</option>
                    <option value="2">Friends of Friends</option>
                    <option value="3">Only Me</option>
                    <option value="4">Custom</option>
                </select>
                Control who can comment on these photo(s).
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-6">
                <span style="font-size: 16px; font-weight: bold;">Select Photo(s): </span>
                <input type="file"  size="30" name="image[]">
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                You can upload a JPG, GIF or PNG file.<br>
                The file size limit is 2 Mb. If your upload does not work, try uploading a smaller picture. 
            </div>
            </div>
            <div class="row form-group"></div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-xs" style=" padding: 3px 28px; background-color: #703684; color: white; font-weight: bold;">Upload</button>
                </div>
                <div class="col-md-8"></div>
            </div>
        
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php $this->load->view("member/photo/modal_create_album"); ?>