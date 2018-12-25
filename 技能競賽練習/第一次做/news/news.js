$(function () {
    $('#btn1').click(function () {
        Re();
        $.ajax({
            url: 'ChoiceVersion.php',
            success: function (result) {
                $('#div1').first().html(result);
            }
        })
    })
})

function Re() {
    $('#Data').first().text('');
};
