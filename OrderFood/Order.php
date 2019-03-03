<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordering System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            
            var ShopData = {
                'chicken':0,
                'egg':0,
                'penguin':0,
            }

            var ShopDataCost = {
                'chicken':20,
                'egg':30,
                'penguin':40,
            }

            //會員個人資料
            $('#MyData').click(function(){
                $.ajax({
                    url:'GetMemberData.php',                    
                    dataType:'JSON',
                    success:function(res){
                        $.each(res, function(Key, Value) {
                            $.each($('#Member *'),function(){
                                if($(this).attr('id') == Key.toString()){
                                    $(this).css('text-align','center');
                                    $(this).attr('value',Value);
                                }
                            })
                        })
                    },
                    error:function(err){
                        console.error(err);
                    }
                })
            })           
            
            //點餐數量
            $('.footer button').click(function(){
                var DataCount = prompt('要點多少份呢?');
                ShopData[this.value] += DataCount == '' ? 1 : parseInt(DataCount);             
                $('tbody').append('<tr>'+
                                        '<td>' + $(this).val() + '</td>' +
                                        '<td>' + DataCount + '</td>' +
                                        '<td>' + DataCount * ShopDataCost[$(this).val()] + '</td>' +
                                  '</tr>');
                                  
                //更新購物車數量標籤
                $('#ShopCount').text($('tbody tr').length);
            })

            $('#shopping').click(function(){
                console.log(ShopData);
            })
        })
    </script>
</head>

<body>
    <div align="center">
        <div class="container">
            <h1>
                歡迎來到Ordering System
            </h1>
        </div>
        <p>
            <div class="container">
                <button type="button" id="MyData" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    個人資料
                </button>
                <button id="shopping" class="btn btn-primary" data-toggle="modal" data-target="#ShopCar">
                    購物車 <span id="ShopCount" class="badge badge-light">0</span>
                </button>
                <button id="settle" class="btn btn-primary">
                    結帳
                </button>
            </div>
        </p>

        <!-- 個人資料Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">會員個人資料</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="Member">
                <p>
                    會員編號:
                    <input type="text" readonly id="m_id" class="form-control">
                </p>
                <p>
                    會員姓名:
                    <input type="text" readonly id="m_name" class="form-control">
                </p>
                <p>
                    會員權限:
                    <input type="text" readonly id="m_rank" class="form-control">
                </p>
                <p>
                    創建時間:
                    <input type="text" readonly id="m_date" class="form-control">
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>


        <!-- 購物車Modal -->
        <div class="modal fade" id="ShopCar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">購物車內物品</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="Member">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>名稱</th>
                            <th>數量</th>
                            <th>價錢</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <p>
            <div class="container">
                <div class="card-group">
                    <div class="card">
                        <img class=" card-img-top" src="./images/chicken.jpg">
                        <div class="card-body">
                            <p class="card-text">
                                好吃的烤雞
                            </p>
                            <p class="car-text">
                                價格:20元
                            </p>
                        </div>
                        <hr>
                        <div class="footer">
                            <button name="AddOrderBtn" class="btn btn-primary" value="chicken">
                                訂餐
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <img class=" card-img-top" src="./images/egg.jpg">
                        <div class="card-body">
                            <p class="card-text">
                                好吃的蛋炒飯
                            </p>
                            <p class="car-text">
                                價格:30元
                            </p>
                        </div>
                        <hr>
                        <div class="footer">
                            <button name="AddOrderBtn" class="btn btn-primary" value="egg">
                                訂餐
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <img class=" card-img-top" src="./images/penguin.jpg">
                        <div class="card-body">
                            <p class="card-text">
                                好吃的企鵝飯糰
                            </p>
                            <p class="car-text">
                                價格:40元
                            </p>
                        </div>
                        <hr>
                        <div class="footer">
                            <button name="AddOrderBtn" class="btn btn-primary" value="penguin">
                                訂餐
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </p>
    </div>
</body>

</html>