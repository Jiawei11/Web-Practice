<?php
    header("content-type:png");
    $im = imagecreate(30,30);
    $BackGround_Color = imagecolorallocate($im,255,255,255);
    $Text_Color = imagecolorallocate($im,0,0,0);
    imagestring($im,10,10,10,$_GET['Number'],$Text_Color);
	imagepng($im);
    imagedestroy($im);
?>