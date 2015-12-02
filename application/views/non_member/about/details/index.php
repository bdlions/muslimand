<div id="about_details" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <span class="header_label_style">About You</span>
        </div>
    </div>
    <span ng-if="about.about != null"> <div class="pagelet_divider"></div> </span>
    <div class="row"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/details/add_about"); ?>
        </div>
    </div>
    <!--Show updated yourself-->
    <div id="aboutId" style="display: none;" >
        <div class="row form-group">
            <div class="col-md-4"> About You </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <span ng-bind="about.about"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"> </div>
                </div>
            </div>
            <div class="col-md-2"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
                <div class="pull-right">
                    <button id="dropdownMenu1" class="btn btn_style btn-default dropdown-toggle" aria-expanded="true" data-toggle="dropdown" type="button">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                        <li role="presentation">
                            <a href="#" tabindex="-1" role="menuitem">Edit</a>
                        </li>
                        <li role="presentation">
                            <a href="#" tabindex="-1" role="menuitem">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <span ng-if="fQuote.fQuote != null"><div class="pagelet_divider"></div></span>
    <div class="row"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
        <div class="col-md-12">
            <?php $this->load->view("member/profile/about/details/add_favourite_quote"); ?>
        </div>
    </div>
    <!--Show updated favorite quote-->
    <div id="fQuoteId" style="display: none;" >
        <div class="row form-group">
            <div class="col-md-4"> Favorite Quotes </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <span ng-bind="fQuote.fQuote"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"> </div>
                </div>
            </div>
            <div class="col-md-2"  ng-if="(profileId != '0' && userId == profileId) || (profileId == '0') ">
                <div class="pull-right">
                    <button id="dropdownMenu1" class="btn btn_style btn-default dropdown-toggle" aria-expanded="true" data-toggle="dropdown" type="button">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                        <li role="presentation">
                            <a href="#" tabindex="-1" role="menuitem">Edit</a>
                        </li>
                        <li role="presentation">
                            <a href="#" tabindex="-1" role="menuitem">Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>