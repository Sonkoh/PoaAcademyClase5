
$('#create-task').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "create-task.php",
        data: {
            title: $('#title').val(),
            description: $('#description').val()
        },
        success: function () {
            $('#title').val('')
            $('#description').val('')
            $.ajax({
                type: "post",
                url: "update-table.php",
                success: function (response) {
                    $('tbody').html(response);
                }
            });
        }
    });
});

function deleteTask(task) {
    $.ajax({
        type: "post",
        url: "delete-task.php",
        data: {
            task: task
        },
        success: function () {
            $.ajax({
                type: "post",
                url: "update-table.php",
                success: function (response) {
                    $('tbody').html(response);
                }
            });
        }
    });
}
