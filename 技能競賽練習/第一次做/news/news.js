$(function () {
    $('#btn1').click(function () {
        Re();
    });
});

function check() {
    return confirm('確定要新增嗎?');
};

function Re() {
    $('#Data *').remove();
};