<?php
    include_once('./link.php');
    session_start();
    $Win = [[1,2,3],[4,5,6],[7,8,9],[1,5,9],[2,5,8],[3,5,7],[1,4,7],[3,6,9]];
    if($_GET['Check'] == 'true'){
        $Data = explode(",",$_POST['ans']);
        if(count($Data) == 3){
            Sort($Data);
            if(array_search($Data,$Win)){
                $action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
                $action->bindValue('u',$_SESSION['member']);
                $action->bindValue('t',date('Y-m-d H:i:s'));
                $action->bindValue('r',"成功");
                $action->bindValue('a',"登入");
                $action->execute();
                echo "<script>alert('登入成功。');location.href='./member.php';</script>";
            }else{
                echo "<script>alert('二段驗證錯誤。');location.href='./login.php';</script>";
                $action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
                $action->bindValue('u',$_SESSION['member']);
                $action->bindValue('t',date('Y-m-d H:i:s'));
                $action->bindValue('r',"失敗");
                $action->bindValue('a',"登入");
                $action->execute();
            }
        }else{
            echo "<script>alert('二段驗證錯誤。');location.href='./login.php';</script>";
            $action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
            $action->bindValue('u',$_SESSION['member']);
            $action->bindValue('t',date('Y-m-d H:i:s'));
            $action->bindValue('r',"失敗");
            $action->bindValue('a',"登入");
            $action->execute();
        }
    }else{
        echo "<script>alert('請先登入帳號密碼');location.href='./login.php';</script>";
        $action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
        $action->bindValue('u',$_SESSION['member']);
        $action->bindValue('t',date('Y-m-d H:i:s'));
        $action->bindValue('r',"失敗");
        $action->bindValue('a',"登入");
        $action->execute();
    }
?>