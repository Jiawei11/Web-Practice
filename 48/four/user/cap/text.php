<?php
	$arr = [1,2,3,4,5,6,7,8,9,0];
	$count = count($arr);
	$rand = mt_rand(0,$count-1);
	echo $arr[$rand];
?>