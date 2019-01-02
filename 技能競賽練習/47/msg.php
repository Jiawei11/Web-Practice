<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitor Message</title>
    <script src="./jquery/jquery-3.3.1.min.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <script src="./jquery/jquery-ui.min.js"></script>
    <script>
        function check(){
            var Bool = false;
            var Count = 0;
            var Count2 = 0;
            var str = document.getElementsByName('phone')[0].value;
            for(var i =0;i<str.length;i++){
                isNaN(str.charAt(i)) == false  ? Count++ : Count = Count;
                str.charAt(i) == "-" ? Count2++ : Count2 = Count2;
            }

            if(Count == str.length-Count2 && Count2 <=1){
                Bool = true;
            }else{
                alert('電話格式錯誤。');
                Bool = false;
            }

            str = document.getElementsByName('mail')[0].value;
            Count = 0;
            Count2 = 0;
            for(var i=0;i<str.length;i++){
                if(str.charAt(i) == "@"){
                    Count++;
                }else if(str.charAt(i) == "."){
                    Count2++;
                }
            }
            
            if(Count >=1 && Count2 >=1 ){
                Bool = true;
            }else{
                alert('電子郵件格式錯誤。');
                Bool = false;
            }

            str = document.getElementsByName('nxcode')[0].value;
            Count = 0;
            Count2 = 0;
            for(var i=0;i<str.length;i++){
                if(str.charAt(i).charCodeAt() >= 48 && str.charAt(i).charCodeAt() <= 57 ){
                    Count++;
                }else if(str.charAt(i).charCodeAt() >= 65 && str.charAt(i).charCodeAt() <= 90 && str.charAt(i).charCodeAt() >= 97 && str.charAt(i).charCodeAt() <= 122){
                    Count2++;
                }
            }

            if(Count == 3 && Coung2 == 3){
                Bool = true;
            }else{
                alert('留言序號格式錯誤。');
                Bool = false;
            }
            return Bool;
        }
    </script>
</head>
<body>
    <div align="center">
        <form action="./msgprocess.php" method="post" onsubmit="return check()" enctype="mulitpart/form-data">
            <a href="./visitormsg.php">回留言列表</a><p></p>
            姓名: <input type="text" name="user"><p></p>
            E-mail: <input type="text" name="mail"> <input type="checkbox" name="mailcheck">顯示<p></p>
            電話: <input type="text" name="phone"> <input type="checkbox" name="phonecheck">顯示<p></p>
            內容: <input type="text" name="content"><p></p>
            留言序號: <input type="text" name="nxcode"><p></p>
            <input type="submit">
            <input type="reset">
            <!-- <input type="file" name="files[]" multiple> -->
        </form>
    </div>
</body>
</html>