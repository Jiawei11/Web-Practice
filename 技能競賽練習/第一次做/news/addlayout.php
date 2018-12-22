<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>製作版型</title>
    <script src="./jquery/jquery-3.3.1.min.js"></script>
    <script src="./jquery/jquery-ui.min.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <link rel="stylesheet" href="news.css">
    <script>
        $(function(){
            $('table tbody tr').sortable({
                containment:'table',
            });
            $('table tbody tr').disableSelection();
            $('[type=submit]').click(function(){
                var Arr = [];
                for(var i =0;i<=$('table tbody tr *').length-1;i++){
                    var Data = $('table tbody tr *')[i];
                    var Str = Data.innerText.toString().replace('\n','');
                    if(Str != ""){Arr.push(Str)};
                };
                console.log(Arr);
                $.post('addlayoutprocess.php',{key:Arr,title:$('[name=title]').val()});
            });
        });
    </script>
</head>
<body>
    <table>
        <form action="addlayoutprocess.php" method="post">
        <tbody>
            <div align="center">
                版型名稱<input type="text" name="title" required>
            </div>
            <p></p>
            <tr id="Data">
                <td name="item_money" value="item_money">費用</td>
                <td name="item_img" value="item_img">相片<img src="https://google.com.tw//logos/doodles/2018/winter-solstice-2018-northern-hemisphere-5609689915064320-s.png" value="相片"></td>
                <td name="item_name" value="item_name">商品名稱</td>
                <td name="item_summary" value="item_summary">商品簡介</td>
                <td name="item_date" value="item_date">發佈日期</td>
                <td name="item_link" value="item_link">相關連結</td>              
            </tr>
            <div align="center">
                <input type="submit">
            </div>
        </tbody>
        </form>
    </table>
    <div id="div1">
        
    </div>
</body>
</html>