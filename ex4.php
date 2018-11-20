<?php
    $a=3;
    $b=9;
    $c=10;

    $arr = array($a,$b,$c);
    rsort($arr);

    foreach($arr as $n){
        echo "$n ";
    }
?>