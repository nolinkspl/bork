const $button = $('#button');

$(document).on('click', $button, function () {
    $.get({
        url: 'src/App.php',
        success: function (response) {
            console.log(response);
        }
    });
});
