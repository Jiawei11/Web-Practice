<?php
    //這裡用mb_convert_encoding函數，解決中文字的問題
    if(file_exists('./upload/' . mb_convert_encoding($_FILES['file']['tmp_name'],'BIG-5','auto')) == false){
        echo "<script>alert('檔案已存在!');location.href='./upload.php'</script>";
    }else{
        move_uploaded_file($_FILES['file']['tmp_name'],'./upload/' . mb_convert_encoding($_FILES['file']['name'],'BIG-5','auto'));
    }    
?>