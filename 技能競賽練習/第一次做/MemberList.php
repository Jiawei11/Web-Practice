<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script scr="jquery/jquery-ui.js"></script>
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            width:300px;
            height:60px;
        }
    </style>
    <script>
        $(function(){
            $('#btn').click(function(){
                $('#resultdiv>table').remove();
                $.ajax({
                    url:'Datalist.php',
                    type:'POST',
                    data:{
                        'KeyWord':$('[name=key]').val(),
                        'who':$('[name=sort]:checked').val(),
                        'Sort':$('[name=method]:checked').val()
                    },
                    success:function(e){
                        $('#resultdiv').html(e);
                    }
                })
            });
        });
    </script>
</head>

<body>
    <div align="center">
        <a href="member.php">回功能區</a><p></p>
        關鍵字:<P>
            <input type="text" name="key"/><P>	
            <input type="radio" name="sort" value="user"checked/>帳號
            <input type="radio" name="sort" value="name"/>姓名
            <input type="radio" name="sort" value="id"/>編號
            <P>
            <input type="radio" name="method" value="asc" checked />遞增
            <input type="radio" name="method" value="desc"/>遞減
            <P>
            <input type="button" id="btn" value="查詢"/>
    </div>
    <?php
    include_once('link.php');
    session_start();
    $sql = $db->prepare('select * from member');
    $sql->execute();
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    ?>
    
    <div align="center" id="resultdiv">   
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
                    <?php echo str_pad($row['id'],5,0,STR_PAD_LEFT); ?>
                </td>
                <td>
                    <?php echo $row['user']; ?>
                </td>
                <td>
                    <?php echo $row['pwd']; ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
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
        <p></p>
    </div>
</body>
<?php
    }
?>
</html>