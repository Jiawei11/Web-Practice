<?php
    include_once('link.php');
    session_start();
    $sql=$db->query('select * from class where apply="審核成功"');
    $request['apply']['Year'] = [];
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        list($y,$m,$d) = explode("-",$row['date']);
        if(array_key_exists($y,$request['apply']['Year']) == false){
            $request['apply']['Year'][$y] = [];
        }

        if(array_key_exists($m,$request['apply']['Year'][$y]) == false){
            $request['apply']['Year'][$y][$m] = [];
        }

        if(in_array($d,$request['apply']['Year'][$y][$m]) == false){
            array_push($request['apply']['Year'][$y][$m],$d);
        }
    }
    echo json_encode($request);
?>