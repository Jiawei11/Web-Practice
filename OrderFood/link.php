<?php
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=website','root','');
    $db->exec('set names utf8');