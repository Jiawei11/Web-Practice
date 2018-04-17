<?php
    header('content-type:png');
    $w = 30;
    $h = 30;
    $code = $_GET['code'];
    $img =  imagecreate($w,$h);
    $bcolor = imagecolorallocate($img,255,255,255);
    $text = imagecolorallocate($img,0,0,0);
	imagestring($img,5,0,0,$code,$text);	
	imagepng($img);
	imagedestroy($img);
?>