<script type="text/javascript">
    $(function () {
        var typingTimer;
        var doneTypingInterval = 100;
        var timeElapsed = 0;
        var timeoutfn;
        var waitForResult = false;
        $("#typeahead").on("keyup", function () {
            waitForResult = true;
            timeElapsed = 0;
        });
        $("#typeahead").on("keydown", function () {
            waitForResult = false;
        });
        setInterval(function () {
            if (waitForResult == true && timeElapsed >= doneTypingInterval) {
                waitForResult = false;
                var inputvalue = $("#typeahead").val();
                $.ajax({
                    dataType: 'json',
                    type: "POST",
                    url: '<?php echo base_url(); ?>search/get_search_result',
                    data: {
                        input_value: inputvalue
                    },
                    success: function (data) {
                        var users_dropdown_div = $("#type_ahead_user #dropdown_user");
                        $(users_dropdown_div).remove();
                        var pages_dropdown_div = $("#type_ahead_page #dropdown_page");
                        $(pages_dropdown_div).remove();
                        $(".user_image_id").hide();
                        $(".page_image_id").hide();
                        $(".b_user_image_id").hide();
                        var noOfUsers = 0;
                        var noOfPages = 0;
                        var noOfRecipes = 0;
                        var noOfbBlogs = 0;
                        var noOfbBUser = 0;
                        if (typeof data.users != 'undefined') {
                            noOfUsers = data.users.length;
                            console.log(noOfUsers);
                        }
                        if (typeof data.pages != 'undefined') {
                            noOfPages = data.pages.length;
                        }

                        if (noOfUsers > 0 || noOfPages > 0 || noOfRecipes > 0 || noOfbBlogs > 0 || noOfbBUser > 0) {
                            $("#page_late_id").show();
                        } else {
                            $("#page_late_id").hide();
                        }
                        if (noOfUsers > 0) {
                            $(".user_image_id").show();
                            $("#type_ahead_user").append("<div id='dropdown_user'></div>");
                            var user_temp_div = $("#type_ahead_user #dropdown_design_user");
                            var users_dropdown_div = $("#type_ahead_user #dropdown_user");
                            $(user_temp_div).find(".row").each(function () {
                                for (var i = 0; i < noOfUsers; i++) {
                                    $(users_dropdown_div).append($(this).clone());
                                }
                            });
                            $(user_temp_div).hide();
                            var usercount = 0;
                            while (noOfUsers > usercount) {
                                $(users_dropdown_div).find(".row ").each(function () {
                                    var user_name = $(this).find(".user_name");
                                    var user_anchor = $(this).find(".user_anchor");
                                    var user_image = $(this).find(".user_image");
                                    var user_on_error_image = $(this).find(".user_on_error_image");
                                    $(user_anchor).attr('href', data.users[usercount].url);
                                    $(user_image).attr('src', data.users[usercount].user_image);
                                    $(user_on_error_image).attr('src', data.users[usercount].user_on_error_image);
                                    $(user_name).html(data.users[usercount].firstName + ' ' + data.users[usercount].lastName);
                                    usercount++;
                                });
                            }
                        }
                        if (noOfPages > 0) {
                            $(".page_image_id").show();
                            $("#type_ahead_page").append("<div id='dropdown_page'></div>");
                            var page_temp_div = $("#type_ahead_page #dropdown_design_page");
                            var pages_dropdown_div = $("#type_ahead_page #dropdown_page");
                            $(page_temp_div).find(".row").each(function () {
                                for (var j = 0; j < noOfPages; j++) {
                                    $(pages_dropdown_div).append($(this).clone());
                                }
                            });
                            $(page_temp_div).hide();
                            var page_count = 0;
                            while (noOfPages > page_count) {
                                $(pages_dropdown_div).find(".row ").each(function () {
                                    var page_image = $(this).find(".page_image");
                                    var page_anchor = $(this).find(".page_anchor");
                                    var page_name = $(this).find(".page_name");
                                    var page_on_error_image = $(this).find(".page_on_error_image");
                                    $(page_anchor).attr('href', data.pages[page_count].url);
                                    $(page_image).attr('src', data.pages[page_count].page_image);
                                    $(page_on_error_image).attr('src', data.pages[page_count].page_on_error_image);
                                    $(page_name).html(data.pages[page_count].title);
                                    page_count++;
                                });
                            }
                        }
                    }
                });
            }
            timeElapsed += 100;
        }, 100);
    });

</script>