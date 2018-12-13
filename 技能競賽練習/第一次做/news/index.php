<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>電子報</title>
    <?php
        include_once('link.php');
        $sql = $db->prepare('select * from news where id=4');
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        echo "<style> {$row['new_css']} </style>";
    ?>
</head>
<body>
    <div align="center">
        <span>TEST</span>
    </div>
</body>
</html>