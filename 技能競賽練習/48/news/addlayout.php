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
            // $('[type=submit]').click(function(){
            //     var Arr = [];
            //     for(var i =0;i<=$('table tbody tr *').length-1;i++){
            //         var Data = $('table tbody tr *')[i];
            //         var Str = Data.innerText.toString().replace('\n','');
            //         if(Str != ""){Arr.push(Str)};
            //     };
            //     console.log(Arr);
            //     $.post('addlayoutprocess.php',{key:Arr,title:$('[name=title]').val()});
            // });
        });
    </script>
</head>
<body>
    <div align="center">
        <a href="createnews.php">功能區</a>
    </div>
    <p></p>
    <form action="addlayoutprocess.php" method="post">
        <table>
            <tbody>
                <div align="center">
                    版型名稱<input type="text" name="title" required>
                </div>
                <p></p>
                <tr id="Data">
                    <td><input type="hidden" name="key[]" value="news_coin">費用</td>
                    <td><input type="hidden" name="key[]" value="news_img">相片<img src="https://google.com.tw//logos/doodles/2018/winter-solstice-2018-northern-hemisphere-5609689915064320-s.png" value="相片"></td>
                    <td><input type="hidden" name="key[]" value="news_title">商品名稱</td>
                    <td><input type="hidden" name="key[]" value="news_summary">商品簡介</td>
                    <td><input type="hidden" name="key[]" value="news_date">發佈日期</td>
                    <td><input type="hidden" name="key[]" value="news_link">相關連結</td>              
                </tr>
                <div align="center">
                    <input type="submit">
                </div>
            </tbody>
        </table>
    </form>
    <div id="div1">
        
    </div>
</body>
</html>