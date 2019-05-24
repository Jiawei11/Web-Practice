<?php
    $opt = ['x','-','*'];
    $rand = mt_rand(0,count($opt)-1);
    echo $opt[$rand];