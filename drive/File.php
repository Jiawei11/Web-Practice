<?php
    $URL = file_get_contents('php://input','r');
    echo $URL;
    // $File = fopen('./UserFiles/'.json_encode($URL),'x+');
    // fwrite($File,'xxx');
    // fclose($File);