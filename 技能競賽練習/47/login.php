<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script>
        function CreateImg(){
            var record = [];
            for(var i=1;i<=4;i++){
                $.ajax({
                    url:'./captcha/captchatext.php',
                    async:false,
                    success:function(result){
                        record.push(result);
                        var img = document.createElement('img');
                        img.src = './captcha/captchaimg.php?Number=' + result;
                        $(img).attr('value',result);
                        $('#captchaimg').append(img);
                        $('#catpchans').append('<div></div>');
                    }
                })
            }
            record.sort();
            $('[name=ans]').val(record.join(''));
            $('#captchaimg>img').draggable({
                snap:'#catpchans',
				snapMode:'corner',
				revert:'invalid'
            })

            $('#catpchans>div').droppable({
                drop:function(event,ui){
					ui.helper.appendTo(this).css({
						'top':0,
						'left':0
                    })
                    AddValue();
                }
            })
        };

        function AddValue(){
				var value = "";
				$('#catpchans>div>img').each(function(){
					value += $(this).attr('value');
				});
				$('[name=captcha').val(value);
				return true;
			};

        $(function(){
            CreateImg();
            $('#btn').click(function(){
                console.log(1);
                $('#captchaimg>img').remove();
                $('#catpchans>div').remove();
                CreateImg();
            });
        })

        var index = 0;
        setInterval(()=>{
            $(function(){
                if(index==$('#sm>img').length){index=0;}
                $('#big').attr('src',$('#sm>img')[index].src);
                index ++;
            });
        },2000)
    </script>

    <style>
        #catpchans>div{
            border:1px solid #333;
            height:30px;
            width:30px;
            display:-webkit-inline-box;
        }

        #sm>img{
            width:100px;
            height:100px;
        }

        th>img{
            width:70%;
        }
    </style>
</head>
<body align="center" bgcolor="#39f">
    <h1 style="color:white;">網站管理登入</h1>
    <form action="loginprocess.php" method="post">
        帳號: <input type="text" name="user"><p></p>
        密碼: <input type="password" name="pwd"><p></p>
        <div id="captchaimg">
        
        </div>

        <div>驗證碼放置區</div>
        <div id="catpchans"></div>
        <input type="button" id="btn" value="重新產生驗證碼"><p></p>
        <input type="hidden" name="ans">
        <input type="hidden" name="captcha">
        <input type="submit">
        <input type="reset">
    </form>
    <p></p>
    <table>
        <thead>
            <tr>
                <th colspan="5"><img id="big" src="./img/1.png" alt=""></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <div id="sm">
                    <?php
                        include_once('link.php');
                        $sql = $db->query('select * from img');
                        while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                            echo "<img src=./img/{$row['name']}>";
                        }
                    ?>
                </div>
            </tr>
        </tbody>
    </table>
</body>
</html>