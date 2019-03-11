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
                    <th>
                        上傳檔案
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <form action="./DataProcess.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" required>
                            <p>
                                <input type="submit" value="上傳">
                            </p>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </span>
</body>

</html>