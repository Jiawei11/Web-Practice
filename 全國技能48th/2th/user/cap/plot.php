<?php
	header("content-type:png");
	$w = 30;
	$h = 30;
	$code = $_GET['code'];
	$img = imagecreate($w,$h);
	$bgcolor = imagecolorallocate($img,255,255,255);
	$border = imagecolorallocate($img,0,0,0);
	$text = imagecolorallocate($img,0,0,0);
	imagestring($img,5,$w-20,$h-25,$code,$text);
	imagepng($img);
	imagedestroy($img);
?>