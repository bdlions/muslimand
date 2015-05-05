    <div id="canvas">
        <div class="zoom-icon zoom-icon-in"></div>
        <div class="magazine-viewport">
            <div class="magazine_container">
                <div class="magazine">
                    <!-- Next button -->
                    <div ignore="1" class="next-button"></div>
                    <!-- Previous button -->
                    <div ignore="1" class="previous-button"></div>
                </div>
            </div>
        </div>
    </div>
<!--<div class="row form-group"></div>
<div class="row">
    <div class="col-md-6">
        <span style="font-size: 25px; font-weight: bold;">Photos</span>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <a  href="<?php echo base_url(); ?>photos/photos_add"><button class="btn btn-xs" style="background-color: #703684; color: white; font-weight: bold; padding: 3px 28px;">Upload a New Image</button></a>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-11">
        <div class="pagelet_divider"></div>
    </div>    
    <div class="col-md-1">
    </div>    
</div>
<div class="row">
    LEFT_COLUMN
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12">
                <ul class="video_ul">
                    <a href="<?php echo base_url(); ?>photos/"><li>All Photos</li></a>
                    <a href="<?php echo base_url(); ?>photos/photos_view_my"><li>My Photos</li></a>
                    <a href="<?php echo base_url(); ?>photos/photos_view_friend"><li>Friends’ Photos</li></a>
                    <div class="category_divider"></div>
                    <a href="<?php echo base_url(); ?>photos/photos_albums"><li>All Albums</li></a>
                    <a href="<?php echo base_url(); ?>photos/photos_view_my_albums"><li>My Albums</li></a>
                    <div class="category_divider"></div>
                </ul> 
            </div>
        </div>
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Categories</span>
            </div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <ul class="category_ul">
                    <a href=""><li>Anthro</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Artisan Crafts</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Cartoons & Comics</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Comedy</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Community Projects</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Contests</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Customization</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Designs & Interfaces</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Digital Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Fan Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Film & Animation</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Fractal Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Game Development Art</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Literature</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>People</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Pets & Animals</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Photography</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Resources & Stock Images</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Science & Technology</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Sports</li></a>
                    <div class="category_divider"></div>
                    <a href=""><li>Traditional Art</li></a>
                    <div class="category_divider"></div>
                </ul> 
            </div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <span style="color: black; font-size: 16px; font-weight: bold; opacity: .6;" href="">Main</span>
            </div>
        </div>
        <div class="row form-group"></div>
        <div class="row">
            <div class="col-md-12">
                <?php $this->load->view("member/sections/menu/menu_link"); ?>
            </div>
        </div>
        <div class="row form-group"></div>
    </div>
    MIDDLE COLUMN
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="border_style">
                    <div id="carousel_photo_slider" class="carousel slide" data-ride="carousel" data-interval="false">
                         Wrapper for slides 
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/01.jpg" style="height: 500px; width: 800px;">
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/02.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/03.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/04.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/05.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/06.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/07.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/08.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/09.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>resources/images/photos/albums/Islamic_life/10.jpg" style="height: 500px; width: 800px;" >
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>

                         Controls 
                        <a class="left carousel-control" href="#carousel_photo_slider" role="button" data-slide="prev">
                            <span class="glyphicon tp-leftarrow" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel_photo_slider" role="button" data-slide="next">
                            <span class="glyphicon tp-rightarrow" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagelet">
            <div class="row">
                <div class="col-md-9">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="#" style="color: #3B59A9;">Like</a>
                            .
                            <a href="#" style="color: #3B59A9;"> Comment</a>
                            .
                            <a href="#" style="color: #3B59A9;"> Share</a>
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/like_icon.png" width="35" height="35">
                            <a href="#">37 people </a> like this.
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/share_icon.jpg" width="30" height="30">
                            <a href="#">3 shares</a>
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <img src="<?php echo base_url(); ?>resources/images/comment_icon.png" width="30" height="30">
                            <a href="#">view 19 more comments</a>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_4.jpg" width="30" height="30">
                        </div>
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <a style="font-weight: bold;" href="#">Maria Islam</a>
                                    Nice pic :)
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    January 08, 2015 at 2:15pm. 
                                    <a>like</a>
                                    <img src="<?php echo base_url(); ?>resources/images/like_icon.png" width="30" height="30">
                                    . <a>31</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <img src="<?php echo base_url(); ?>resources/images/user_data/profile_pictures/profile_pictures_2.jpg" width="30" height="30">
                        </div>
                        <div class="col-md-11">
                            <input type ="text" class="form-control" placeholder="Write a comment">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="" style="color: #3B59A9;"> Tag This Photo</a>
                        </div>
                    </div>
                    <div class="pagelet_divider"></div>
                    <div class="row">
                        <div class="col-md-7">
                            <span style="font-size: 13px">Album:</span>
                        </div>
                        <div class="col-md-5">
                            <a href="" style="color: #3B59A9;">Islamic</a>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-7">
                                <span style="font-size: 13px">Shared with:</span>
                            </div>
                            <div class="col-md-5">
                            <a href="" style="color: #3B59A9;">Friends</a>
                            </div>
                        </div>
                     <div class="pagelet_divider"></div>
                     <div class="row">
            <div class="col-md-12">
                <ul class="gallery_ul">
                    <a href=""><li>Download</li></a>
                    <a href=""><li>Make Profile Picture</li></a>
                    <a href=""><li>Make Cover Photo</li></a>
                    <a href=""><li>Make Album Photo</li></a>
                    <a href=""><li>Delete This Photo</li></a>
                </ul> 
            </div>
        </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="col-md-1"></div>
</div>
<script>
    $('#carousel_photo_slider .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        for (var i = 0; i < 1; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
    });
</script>-->



    <script type="text/javascript">

        function loadApp() {

            $('#canvas').fadeIn(1000);

            var flipbook = $('.magazine');

            // Check if the CSS was already loaded

            if (flipbook.width() == 0 || flipbook.height() == 0) {
                setTimeout(loadApp, 10);
                return;
            }

            // Create the flipbook

            flipbook.turn({
                // Magazine width

                width: 700,
                // Magazine height

                height: 502,
                // Duration in millisecond

                duration: 1000,
                // Hardware acceleration

                acceleration: !isChrome(),
                // Enables gradients

                gradients: true,
                // Auto center this flipbook

                autoCenter: true,
                // Elevation from the edge of the flipbook when turning a page

                elevation: 50,
                // The number of pages

                pages: 12,
                // Events

                when: {
                    turning: function(event, page, view) {

                        var book = $(this),
                                currentPage = book.turn('page'),
                                pages = book.turn('pages');

                        // Update the current URI

                        Hash.go('page/' + page).update();

                        // Show and hide navigation buttons

                        disableControls(page);


                        $('.thumbnails .page-' + currentPage).
                                parent().
                                removeClass('current');

                        $('.thumbnails .page-' + page).
                                parent().
                                addClass('current');



                    },
                    turned: function(event, page, view) {

                        disableControls(page);

                        $(this).turn('center');

                        if (page == 1) {
                            $(this).turn('peel', 'br');
                        }

                    },
                    missing: function(event, pages) {

                        // Add pages that aren't in the magazine

                        for (var i = 0; i < pages.length; i++)
                            addPage(pages[i], $(this));

                    }
                }

            });

            // Zoom.js

            $('.magazine-viewport').zoom({
                flipbook: $('.magazine'),
                max: function() {

                    return largeMagazineWidth() / $('.magazine').width();

                },
                when: {
                    swipeLeft: function() {

                        $(this).zoom('flipbook').turn('next');

                    },
                    swipeRight: function() {

                        $(this).zoom('flipbook').turn('previous');

                    },
                    resize: function(event, scale, page, pageElement) {

                        if (scale == 1)
                            loadSmallPage(page, pageElement);
                        else
                            loadLargePage(page, pageElement);

                    },
                    zoomIn: function() {

                        $('.thumbnails').hide();
                        $('.made').hide();
                        $('.magazine').removeClass('animated').addClass('zoom-in');
                        $('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');

                        if (!window.escTip && !$.isTouch) {
                            escTip = true;

                            $('<div />', {'class': 'exit-message'}).
                                    html('<div>Press ESC to exit</div>').
                                    appendTo($('body')).
                                    delay(2000).
                                    animate({opacity: 0}, 500, function() {
                                        $(this).remove();
                                    });
                        }
                    },
                    zoomOut: function() {

                        $('.exit-message').hide();
                        $('.thumbnails').fadeIn();
                        $('.made').fadeIn();
                        $('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');

                        setTimeout(function() {
                            $('.magazine').addClass('animated').removeClass('zoom-in');
                            resizeViewport();
                        }, 0);

                    }
                }
            });

            // Zoom event

            if ($.isTouch)
                $('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
            else
                $('.magazine-viewport').bind('zoom.tap', zoomTo);


            // Using arrow keys to turn the page

            $(document).keydown(function(e) {

                var previous = 37, next = 39, esc = 27;

                switch (e.keyCode) {
                    case previous:

                        // left arrow
                        $('.magazine').turn('previous');
                        e.preventDefault();

                        break;
                    case next:

                        //right arrow
                        $('.magazine').turn('next');
                        e.preventDefault();

                        break;
                    case esc:

                        $('.magazine-viewport').zoom('zoomOut');
                        e.preventDefault();

                        break;
                }
            });

            // URIs - Format #/page/1 

            Hash.on('^page\/([0-9]*)$', {
                yep: function(path, parts) {
                    var page = parts[1];

                    if (page !== undefined) {
                        if ($('.magazine').turn('is'))
                            $('.magazine').turn('page', page);
                    }

                },
                nop: function(path) {

                    if ($('.magazine').turn('is'))
                        $('.magazine').turn('page', 1);
                }
            });


            $(window).resize(function() {
                resizeViewport();
            }).bind('orientationchange', function() {
                resizeViewport();
            });

            // Events for thumbnails

            $('.thumbnails').click(function(event) {

                var page;

                if (event.target && (page = /page-([0-9]+)/.exec($(event.target).attr('class')))) {

                    $('.magazine').turn('page', page[1]);
                }
            });

            $('.thumbnails li').
                    bind($.mouseEvents.over, function() {

                        $(this).addClass('thumb-hover');

                    }).bind($.mouseEvents.out, function() {

                $(this).removeClass('thumb-hover');

            });

            if ($.isTouch) {

                $('.thumbnails').
                        addClass('thumbanils-touch').
                        bind($.mouseEvents.move, function(event) {
                            event.preventDefault();
                        });

            } else {

                $('.thumbnails ul').mouseover(function() {

                    $('.thumbnails').addClass('thumbnails-hover');

                }).mousedown(function() {

                    return false;

                }).mouseout(function() {

                    $('.thumbnails').removeClass('thumbnails-hover');

                });

            }


            // Regions

            if ($.isTouch) {
                $('.magazine').bind('touchstart', regionClick);
            } else {
                $('.magazine').click(regionClick);
            }

            // Events for the next button

            $('.next-button').bind($.mouseEvents.over, function() {

                $(this).addClass('next-button-hover');

            }).bind($.mouseEvents.out, function() {

                $(this).removeClass('next-button-hover');

            }).bind($.mouseEvents.down, function() {

                $(this).addClass('next-button-down');

            }).bind($.mouseEvents.up, function() {

                $(this).removeClass('next-button-down');

            }).click(function() {

                $('.magazine').turn('next');

            });

            // Events for the next button

            $('.previous-button').bind($.mouseEvents.over, function() {

                $(this).addClass('previous-button-hover');

            }).bind($.mouseEvents.out, function() {

                $(this).removeClass('previous-button-hover');

            }).bind($.mouseEvents.down, function() {

                $(this).addClass('previous-button-down');

            }).bind($.mouseEvents.up, function() {

                $(this).removeClass('previous-button-down');

            }).click(function() {

                $('.magazine').turn('previous');

            });


            resizeViewport();

            $('.magazine').addClass('animated');

        }

    // Zoom icon

        $('.zoom-icon').bind('mouseover', function() {

            if ($(this).hasClass('zoom-icon-in'))
                $(this).addClass('zoom-icon-in-hover');

            if ($(this).hasClass('zoom-icon-out'))
                $(this).addClass('zoom-icon-out-hover');

        }).bind('mouseout', function() {

            if ($(this).hasClass('zoom-icon-in'))
                $(this).removeClass('zoom-icon-in-hover');

            if ($(this).hasClass('zoom-icon-out'))
                $(this).removeClass('zoom-icon-out-hover');

        }).bind('click', function() {

            if ($(this).hasClass('zoom-icon-in'))
                $('.magazine-viewport').zoom('zoomIn');
            else if ($(this).hasClass('zoom-icon-out'))
                $('.magazine-viewport').zoom('zoomOut');

        });

        $('#canvas').hide();


    // Load the HTML4 version if there's not CSS transform

        yepnope({
            test: Modernizr.csstransforms,
            yep: ['<?php echo base_url(); ?>resources/js/lib/turn.js'],
            nope: ['<?php echo base_url(); ?>resources/js/lib/turn.html4.min.js'],
            both: ['<?php echo base_url(); ?>resources/js/lib/zoom.min.js', '<?php echo base_url(); ?>resources/js/magazine.js', '<?php echo base_url(); ?>resources/css/magazine.css'],
            complete: loadApp
        });

    </script>