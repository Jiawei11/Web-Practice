<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
        #captcha>div{
            border:1px solid #333;
            width: 280px;
            height: 30px;
            display:-webkit-inline-box;
            margin-left:5px;
        }
    </style>
    <script>
        $(function(){
            createNumber();
			createOpt();
			createOptSymbool();
			createOpt();

            function createNumber(){
				function Value(){
					var str = "";
					$('#captcha>div>img').each(function(){
						str += $(this).attr('value');
					})
					$('#pwd').val(str);
					return true;
                }
                
                for(let i=0;i<=9;i++){
                    var img = document.createElement('img');
                    img.src = './captchaimg.php?id=' + i;
                    $(img).attr('value',i);
                    $('#num').append(img);
                }

                $('#num>img').draggable({
                    snap:'#captcha',
                    snap:'corner'
                })

                $('#captcha>div').droppable({
                    drop:function(event,ui){
                        ui.helper.appendTo(this).css({
                            'top':0,
                            'left':0
                        })
                        $('#num *').remove();
                        createNumber();
						Value();
                    }
                })
            }

            var records = [];
            var num = 0;
            var record = 0;
            $('#opt img').each(function(){
                if(isNaN($(this).attr('value')) == true){
                    if(this.src.split('=')[1] == 'x'){
                        records.push('+');
                    }else{
                        records.push(this.src.split('=')[1]);
                    }
                }else{
                    record ++;
                    num += parseInt($(this).attr('value'));
                    if(record == 2){
                        records.push(num);
                        num = 0;
                    }
                }
            })
            records.push(num);
            // console.log(Math.abs(eval(records.join(''))));

            function createOpt(){
				for(let i=0;i<2;i++){
					$.ajax({
						url:'createText.php',
						async:false,
						success:function(res){
							var img = document.createElement('img');
                            img.src = 'captchaimg.php?id=' + res;
                            i % 2 == 0 ? $(img).attr('value',parseInt(res) * 10) : $(img).attr('value',res);        
                            $('#opt').append(img);
						}
					})
				}
			}
			
			function createOptSymbool(){
				for(let i=1;i<=1;i++){
					$.ajax({
						url:'opt.php',
						async:false,
						success:function(res){
							var img = document.createElement('img');
							img.src = 'captchaimg.php?id=' + res;
                            img.style.width = '32px';
                            img.style.height = '32px';   
                            $('#opt').append(img);
						}
					})
				}
			}

            $('button').click(function(){
                alert(eval(records.join('')) == parseInt($('#pwd').val()) ? '驗證成功' : '驗證失敗');
            })
        })
    </script>
</head>
<body align="center">
    <p>
        驗證碼:
        <div id="captcha">
            <div></div>
        </div>
        <div id="num">
            
        </div>
        <input type="hidden" id="pwd">
        <div id="opt">
            
        </div>
        <button>驗證</button>
    </p>
</body>
</html>