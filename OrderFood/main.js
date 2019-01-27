$(function () {
    var OrderList = {
        'User': "",
        'Order': {
            'chicken': 0,
            'penguin': 0,
            'egg': 0
        },
        'Total': 0
    }

    $('#Signin-btn').click(function () {
        var Account = $('#Account').val();
        var Password = $('#Password').val();
        if (Account == "Admin" && Password == "1234") {
            OrderList.User = OrderList.User == "" ? Account : "";
            alert('登入成功');
            location.href = 'Order.html';
        }
    })

    $('[name=AddOrderBtn]').click(function () {
        var Amount = prompt('輸入數量');
        OrderList.Order[$(this).val()] += parseInt(Amount == "" ? 0 : Amount);;
        OrderList.Total =
            parseInt(OrderList.Order.chicken) * 20 +
            parseInt(OrderList.Order.egg) * 30 +
            parseInt(OrderList.Order.penguin) * 40;

        console.table(OrderList);
    })

    $('#shopping').click(function () {
        alert('訂單人:' + OrderList.User + '\n' + '烤雞數量:' + OrderList.Order.chicken + '個' + '\n' + '炒飯數量:' + OrderList.Order.egg + '個' + '\n' + '企鵝飯糰數量:' + OrderList.Order.penguin + '個');
    })

    $('#settle').click(function () {
        var question = confirm('總金額為:' + OrderList.Total + '元');
        if (question == true) {
            $.post('AddOrderProcess.php', {
                Data: OrderList
            }, function (res) {
                console.log(res);
            })
        }
    })
})