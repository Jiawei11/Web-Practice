<?php
    session_start();
    if(isset($_SESSION['Temp']) == false){
        echo "請先設定人數!";
        exit();
    }
    $Num = mt_rand(1,$_SESSION['MaxPeople']);
    if(count($_SESSION['Temp']) == $_SESSION['MaxPeople']){
        echo "獎品抽完囉。";
        exit();
    }
    if(in_array($Num,$_SESSION['Temp']) == false){
        array_push($_SESSION['Temp'],$Num);
    }else {
        echo "再抽一次";
        exit();
    }
    echo end($_SESSION['Temp']) . "號獎品";
?>