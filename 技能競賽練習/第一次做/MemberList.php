<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            width:auto;
            height:auto;
        }
    </style>
</head>

<body>
    <div align="center">
        <a href="member.php">回功能區</a>
    </div>
    <?php
    include_once('link.php');
    session_start();
    $sql = $db->prepare('select * from member');
    $sql->execute();
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    ?>
    
    <div align="center">        
        <table>
            <tr>
                <th>編號</th>
                <th>帳號</th>
                <th>密碼</th>
                <th>姓名</th>
                <th>功能</th>
            </tr>
            <tr>
                <td>
                    <?php
                        echo str_pad($row['id'],5,0,STR_PAD_LEFT);
                    ?>
                </td>
                <td>
                    <?php
                     echo $row['user'];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row['pwd'];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row['name'];
                    ?>
                </td>
                <td>
                    <?php
                        if($row['user'] == "admin"){
                            echo "無法修改";
                        }else{
                    ?>
                    <a href="revise.php?id=<?php echo $row['id']; ?>">修改資料</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">刪除</a>
                    <?php
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
<?php
    }
?>
</html>