<?php
    header('Content-Type: image/png');
    $im = imagecreatetruecolor(32, 32);
    $text_color = imagecolorallocate($im, 233, 14, 91);
    imagestring($im, 20, 10, 10,  $_GET['id'], $text_color);
    if($_GET['id'] == 'x'){
        $im = imagerotate($im, -45, 0);
    }
    imagepng($im);
    imagedestroy($im);
?>