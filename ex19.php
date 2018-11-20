<?php
    $matriz=array(array(1,2,3,4,5),array(1,6,3,4,5),array(1,27,7,4,5),array(1,2,3,8,5),array(1,2,3,4,10));
    $n=0;
    foreach($matriz as $i){
        echo "$i[$n] ";
        $n++;
    }
?>