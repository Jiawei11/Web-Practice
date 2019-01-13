<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="./tools/jquery.js"></script>
	<script src="./tools/jquery-ui.js"></script>
    <title>Computer</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>
		$(function(){
			CreateCalendar('try');
            $('button').click(function(){
                CreateCalendar($(this).attr('value'));
            })


            $('#ND tr td').click(function(){
                if(typeof($(this).attr('value')) == "undefined"){
                    alert('該月份沒有該日期');
                }else{
                    alert($(this).attr('value'));
                }
            })

            function CreateCalendar(date){
                $('#ND *').remove();
                $.ajax({
                    url: 'getcalendar.php', 
                    dataType: 'json',
                    method: 'POST',
                    async:false,
                    data: {
                        date:date
                    },
                    success:function(result){
                        $.ajax({
                            url:'test.php',
                            dataType:'json',
                            async:false,
                            success:function(res){
                                a = res;
                            }
                        })

                        bool = false;
                        Object.keys(result['date']).forEach(function(x){
                            $('#ND').append('<tr></tr>');
                            for(var i =0;i<7;i++){
                                $('#ND tr').last().append('<td></td>');
                            }

                            var str = "";
                            Object.keys(a.apply.Year).forEach(function(x){
                                Object.keys(a.apply.Year[x]).forEach(function(y){
                                    if(x + "-" + y==result['now_date']){
                                        str = x + "-" + y;
                                        bool = true;
                                    };
                                })
                            })

                            var check = str.split("-");
                            Object.keys(result['date'][x]).forEach(function(y){
                                $('#ND tr').last().find('td').eq(y).text(result['date'][x][y]);
                                $('#ND tr').last().find('td').eq(y).attr('value',result['date'][x][y]);
                                if(bool==true){
                                    for(var i=0;i<=a.apply.Year[check[0]][check[1]].length;i++){
                                        if(a.apply.Year[check[0]][check[1]][i]==result['date'][x][y]){
                                            $('#ND tr').last().find('td').eq(y).attr('style','background:yellow');
                                        }
                                    }
                                }
                            })
                        })
                        
                        $('#prev').text(result['prev_date']);
                        $('#now').text(result['now_date']);
                        $('#next').text(result['next_date']);
                        $('#prev').attr('value',result['prev_date']);
                        $('#now').attr('value',result['now_date']);
                        $('#next').attr('value',result['next_date']);
                    },
                })
            }
		})
	</script>
    <style>
		#navbar{
			font-size:24px;
			color:white;
		}

		a{
			color:white;
			text-decoration:blink;
			font-size:20px;
		}

		span{
			color:white;
			font-size:20px;
		}

		span:hover{
			cursor:pointer;
		}

		#ND tr td:hover{
			background-color:red;
			cursor:pointer;
			user-select:none;
		}

		table,th,td{
            border:1px solid black;
        }

        table{
            border-collapse:collapse;
            text-align:center;
        }
	</style>
</head>
<body>

<div style="background-color:#39C">
		<span id="navbar" width="80%;">Data Processing</span>
			<span style="margin:520px;">
				<?php
					if(isset($_SESSION['cbool']) == "" || $_SESSION['cbool'] == false){
				?>
				<a href="./login.php">登入</a>
				<?php }else{ ?>
				<a href="./logout.php">登出</a>
				<?php } ?>
				<span onclick="location.href='computer.php'">動態</span>
				<span onclick="location.reload();">刷新</span>
				<span>設定</span>
			</span>
    </div> 
    <div align="center">
        <h1>Computer borrow System</h1>
		<table align="center">
        <thead>
            <tr>
                <td colspan="2">
                    <button id="prev"></button>
                </td>
                <td colspan="3" id="now"></td>
                <td colspan="2">
                    <button id="next"></button>
                </td>
            </tr>
            <tr>
                <td>星期7</td>
                <td>星期1</td>
                <td>星期2</td>
                <td>星期3</td>
                <td>星期4</td>
                <td>星期5</td>
                <td>星期6</td>
            </tr>
        </thead>
        <tbody id="ND">

        </tbody>
    </table>
    </div>
</body>
</html>