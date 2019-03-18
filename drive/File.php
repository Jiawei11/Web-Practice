<?php
    $URL = file_get_contents('php://input','r');
    echo json_decode($URL);
    $File = fopen('./UserFiles/'.json_decode($URL),'x+');
    fwrite($File,'test');
    fclose($File);