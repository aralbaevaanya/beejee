$(document).ready(function () {
    $('#createTaskForm').submit(function () {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: 'models/createTask.php',
            data: formNm.serialize(),
            success: function (data) {
                $(formNm).html(data);
                location.reload();
            },
            error: function (jqXHR, text, error) {
                $(formNm).html(error);
            }
        });
        return false;
    });
});