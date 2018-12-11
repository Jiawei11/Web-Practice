<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>test</title>
    <script>
        $(function(){
            $('button').click(function(){
                if($('#chbox').prop('checked') == false){
                    if($('button').text() == "開燈"){
                        $('body').css('background-color','white');
                        $('button').text("關燈");
                    }else{ 
                        $('body').css('background-color','black');
                        $('button').text("開燈");
                    }
                }
            });
        });
    </script>
</head>
<body>
    <div align="center">
        <button style="width:200px;height:200px;">開燈</button>
        <p></p>
        <input type="checkbox" id="chbox">綁定開關燈
    </div>
</body>
</html>