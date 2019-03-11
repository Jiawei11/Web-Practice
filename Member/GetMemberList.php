<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./tools/jquery.js"></script>
    <script src="./tools/jquery-ui.js"></script>
    <link rel="stylesheet" href="./main.css">
    <title>php page</title>
    <script>
    $(function () {
        $('.test').click(function () {
            var CurrentPage = $(this).attr('CurrentPage');
            $('#Data').animate({
                'opacity': 0
            }, function () {
                location.href = CurrentPage;
            })
        });

        setInterval(function () {
            $.ajax({
                url: 'GetTime.php',
                success: function (res) {
                    $('#Date').html(res);
                }
            })
        }, 1000)

        $('#Login-Btn').click(function () {
            var User = $('[name=name]').val();
            var Pwd = $('[name=pwd]').val()

            if (User == "" || Pwd == "") {
                alert('帳號或密碼不能為空');
                return false;
            }

            $.post('loginprocess.php', {
                User: User,
                Pwd: Pwd
            }, function (res) {
                $('body').html(res);
            })
        })

        $('#Logout-Btn').click(function () {
            $.ajax({
                url: 'logoutprocess.php',
                success: function (res) {
                    $('body').html(res);
                }
            })
        })

        $('#Msgboard-Btn').click(function () {
            $.ajax({
                url: 'msgboard.php',
                async: false,
                success: function (res) {
                    $('#Data').html(res);
                }
            })
        })

        $('#ChangePwd-Btn').click(function () {
            $('#Data *').remove();
            $.ajax({
                url: 'modfiy.html',
                success: function (res) {
                    $('#Data').html(res);
                }
            })
        })

        $('#check-btn').click(function () {
            var NowPwd = $('#now_pwd').val();
            var ModPwd = $('#mod_pwd').val();
            $.post('modpwdprocess.php', {
                npwd: NowPwd,
                mpwd: ModPwd
            }, function (res) {
                $('body').html(res);
            })
        })

        $('#SmallGame-Btn').click(function () {
            location.href ='./SmallGame/';
        })

        $('#MemberList-Btn').click(function(){
            location.href = './GetMemberList.php';
        })
    })
    </script>
</head>

<body>
    <table id="tb">
        <tr>
            <td>
                <?php
                    session_start();
                    if(isset($_SESSION['user']) == false){
                ?>
                    Account:
                    <p><input type="text" name="name" placeholder="輸入帳號"></p>
                    Password:
                    <p><input type="password" name="pwd" placeholder="輸入密碼"></p>
                    <button id="Login-Btn">登入</button>
                <?php
                    }else{
                ?>
                    <div align="center">
                        歡迎回來
                        <p>
                            <?php echo $_SESSION['user']; ?>
                        </p>
                            <?php                            
                                if($_SESSION['rank'] == "root"){                             
                            ?>
                                <p>
                                    <button id="MemberList-Btn">會員清單</button>
                                </p>
                            <?php
                                }
                            ?>
                        <p>
                            <button id="ChangePwd-Btn">修改密碼</button>
                        </p>
                        <p>
                            <button id="Msgboard-Btn">公告欄</button>
                        </p>
                        <p>
                            <button id="SmallGame-Btn">小遊戲</button>
                        </p>
                        <p>
                            <button id="Upload-Btn">上傳檔案</button>
                        </p>
                        <p>
                            <button id="Logout-Btn">登出</button>
                        </p>
                    </div>
                <?php
                    }
                ?>
                <p>
                    <div id="Date"></div>
                </p>
            </td>
        </tr>
    </table>
    <span id="Data">                
    <table align="center">
        <thead>
            <tr>
                <th>編號</th>
                <th>姓名</th>
                <th>權限</th>
                <th>創建時間</th>                
            </tr>
        </thead>
        
        <tbody>
            <?php
                include_once('link.php');
                $sql = $db->query('select * from member');
                $Count = $sql->rowCount();
                $MaxDataCount = 5;
                $Pages = ceil($Count/$MaxDataCount);
                $Page = isset($_GET['page']) == false ? 1 : $_GET['page'];
                $StartSelect = ($Page-1) * $MaxDataCount;
                $query = $db->query('select * from member LIMIT ' . $StartSelect . ',' . $MaxDataCount);
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['user']; ?></td>
                <td><?php echo $row['power']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
            <?php
                }
            ?>
        <tr>
            <td colspan="5">
                <div id="list">
                    第
                    <?php
                        for($i=1;$i<=$Pages;$i++){
                            if($Page - 3 < $i && $i < $Page + 3){
                    ?>
                        <button class="test" CurrentPage='./getmemberlist.php?page=<?php echo $i; ?>'><?php echo $i; ?></button>
                    <?php
                        }
                    }
                    ?>
                    頁
                </div>
            </td>
        </tr>
    </tbody>
</table>
</span>
</body>
</html>