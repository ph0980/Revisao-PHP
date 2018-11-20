<?php
    $matriz=array(array(1,2,3,4,5),array(1,6,3,4,5),array(1,27,7,4,5),array(1,2,3,8,5),array(1,2,3,4,10));
    $cont=0;
    $pares=array();
    $impares = array();
    foreach($matriz as $m){
        foreach($m as $v){
            if($v%2==0){
                $pares[]=$v;
            }
            else{
                $impares[]=$v;
            }
            $cont++;
            echo "$v ";
            if($cont==5){
                echo "<br>";
                $cont=0;
            }
        }
    }
    echo "<br>pares<br>";
    $cont=0;
    foreach($pares as $v){
        $cont++;
        echo "$v ";
        if($cont==5){
            $cont=0;
            echo "<br>";
        }
    }

    echo "<br>impares<br>";
    $cont=0;
    foreach($impares as $v){
        $cont++;
        echo "$v ";
        if($cont==5){
            $cont=0;
            echo "<br>";
        }
    }
?>