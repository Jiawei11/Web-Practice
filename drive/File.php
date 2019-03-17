<?php
    $URL = file_get_contents('php://input','r');
    echo json_decode($URL);