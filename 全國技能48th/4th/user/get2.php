<?php
    include_once('link.php');
    $str = "";
    $key = $_POST['key'];
    $sort = $_POST['sort'];
    $method = $_POST['method'];
    if(isset($_POST['key'])){
        if($_POST['key'] != ""){
            $str = "select * from login where user = '{$key}' order by {$sort} {$method}";
        }else{
            $str = "select * from login order by {$sort} {$method}";
        }
    }
    $sql = $db->query($str);
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
    <body>
            <table border="1px" width="1024" height="auto" align="center">
                <tr>
                <th align="center">編號</th>
                <th align="center">帳號</th>
                <th align="center">密碼</th>
                <th align="center">姓名</th>
                <th width="200px" align="center">權限</th>
                </tr>
                <tr>
                    <td align="center"><?php echo str_pad($row['id'],3,0,STR_PAD_LEFT) ?></td>
                    <td align="center"><?php echo $row['user'] ?></td>
                    <td align="center"><?php echo $row['pwd'] ?></td>
                    <td align="center"><?php echo $row['name'] ?></td>
                    <td align="center"><?php echo $row['power'] ?></td>
                </tr>
            </table>
    </body>
</html>
<?php
    }
?>