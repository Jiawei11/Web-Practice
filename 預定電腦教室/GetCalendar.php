<?php
    $date = $_POST['date'] == "try" ? date('Y-m'):$_POST['date'];
    $list = explode('-',$date);
    $maxday = date('t',strtotime($list[0] . "-" . $list[1]));
    $week = explode(" ","日 一 二 三 四 五 六");
    $count = 1;
    $result['date'] = [];
    for($i=1;$i<=$maxday;$i++){
        $weekday = date('w',mktime(0,0,0,$list[1],$i,$list[0])); //Serch Day of the Week;
        if($weekday==0 && count($result['date']) != 0){
            $count++;
        }
        $result['date'][$count][$weekday] = $i;
    }
    $result['prev_date'] = date('Y-m',mktime(0,0,0,$list[1]-1,1,$list[0]));
    $result['next_date'] = date('Y-m',mktime(0,0,0,$list[1]+1,1,$list[0]));
    $result['now_date'] = date('Y-m',mktime(0,0,0,$list[1],1,$list[0]));
    echo json_encode($result);
?>