<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span style="color:<?php echo $_POST['titlecolor']; ?>;font-size:<?php echo $_POST['size']; ?>px;">
        <?php echo $_POST['title']; ?>
    </span>
</body>
</html>