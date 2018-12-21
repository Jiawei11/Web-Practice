$(function () {
    $('#btn1').click(function () {
        Re();
        console.log(123);
        $.ajax({
            url: 'ChoiceVersion.php',
            success: function (result) {
                $('#Data').first().html(result);
            }
        })
    })
})

function check() {
    return confirm('確定要新增嗎?');
};

function Re() {
    $('#Data').first().text('');
};
