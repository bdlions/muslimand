<script type="text/javascript">

    function show_work_place(e) {
        var workPlaceId = $(e).attr('id');
        $('#work_place_' + workPlaceId).hide();
        $('#edit_work_' + workPlaceId).show();
    }
    function show_pskill_edit_place(e) {
        var pSkillId = $(e).attr('id');
        $('#p_skill_' + pSkillId).hide();
        $('#edit_p_skill_' + pSkillId).show();
    }
    function show_uv_edit_place(e) {
        var uvId = $(e).attr('id');
        $('#uv_' + uvId).hide();
        $('#edit_university_' + uvId).show();
    }
    function show_college_edit_place(e) {
        var collegeId = $(e).attr('id');
        $('#college_' + collegeId).hide();
        $('#edit_college_' + collegeId).show();
    }
    function show_school_edit_place(e) {
        var schoolId = $(e).attr('id');
        $('#school_' + schoolId).hide();
        $('#edit_school_' + schoolId).show();
    }
    function open_modal_work_Place_delete(e) {
        var workPlaceId = $(e).attr('id');
        var selectionInfo = "Work Place ?";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deleteWorkPlace(workPlaceId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#work_place_' + workPlaceId).hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
    function open_modal_p_skill_delete(e) {
        var pSkillId = $(e).attr('id');
        var selectionInfo = "Professional Skill ?";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deletePSkill(pSkillId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#p_skill_' + pSkillId).hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }

    function open_modal_university_delete(e) {
        var universityId = $(e).attr('id');
        var selectionInfo = " University ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deleteUniversity(universityId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#uv_' + universityId).hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
    function open_modal_college_delete(e) {
        var collegeId = $(e).attr('id');
        var selectionInfo = " College ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deleteCollege(collegeId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#college_' + collegeId).hide();

                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }
    function open_modal_school_delete(e) {
        var schoolId = $(e).attr('id');
        var selectionInfo = " School ? ";
        delete_confirmation(selectionInfo, function (response) {
            if (response == "Yes") {
                angular.element($('#delete_content_btn')).scope().deleteSchool(schoolId, function () {
                    $('#common_delete_confirmation_modal').modal('hide');
                    $('#school_' + schoolId).hide();
                });

            } else {
                $('#common_delete_confirmation_modal').modal('hide');
            }
            $("#content").html("");
        });
    }

</script>