<?php
  header("content-type:png");
  $im = imagecreate(30,30);
  $Background_color = imagecolorallocate($im,0,0,0);
  $Text_Color = imagecolorallocate($im,255,255,255);
  imagestring($im,10,10,10,$_GET['Number'],$Text_Color);
  imagepng($im);
  imagedestory($im);
?>