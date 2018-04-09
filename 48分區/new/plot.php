<?php
    header('content-type:png');
    $w = 30;
    $h = 30;
    $code = $_GET['code'];
    $img =  imagecreate($w,$h);
    $bcolor = imagecolorallocate($img,255,255,255);
    $border = imagecolorallocate($img,0,0,0);
    $text = imagecolorallocate($img,0,0,0);
	imagestring($img,5,q($w-10,10),q($h-20,1),$code,$text);	
	imagepng($img);
	imagedestroy($img);
    function q($max=255,$min=0){
        return mt_rand($min,$max);
    }
?>