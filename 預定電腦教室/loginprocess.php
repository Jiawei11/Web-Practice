<?php

    include_once('link.php');
    $sql = $db->prepare('select * from member');
    $sql->execute();

    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        $Arr1[] = $row['account'];
        $Arr2[] = $row['pwd'];
    }

    $bool = false;
    $num = 0;
    for($index=0;$index<=count($Arr1)-1;$index++){
        if($_POST['user']==$Arr1[$index] && $_POST['pwd']==$Arr2[$index]){
            $bool = true;
            $n = $index;
            break;
        }elseif($_POST['user']!=$Arr1[$index] && $_POST['pwd']==$Arr2[$index]){
            $num = 1; // 如果 帳號錯誤 密碼正確 的話為 1
            break;
        }elseif($_POST['user']==$Arr1[$index] && $_POST['pwd']!=$Arr2[$index]){
            $num = 2;
            break;
        }else{
            $num = 3;
        }
   }
   echo $bool . "<p>" . $num;