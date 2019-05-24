<?php
    $URL = file_get_contents('php://input');
    
    $JSON = json_decode($URL);
    $File = fopen('./UserFiles/' . strval($JSON->fileName) . '.jpg','wb');
    var_dump($File);
    fwrite($File,base64_decode(explode(',',$JSON->src)[1]));
    fclose($File);