$(function () {
    $('#btn1').click(function () {
        Re();
        console.log(123);
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
