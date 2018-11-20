<?php
    $n=array(-1,-2,-3,-4,-5,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    $pos=0;
    $neg=0;
    foreach($n as $num){
        if($num<0){
            $neg++;
        }
        else{
            $pos+=$num;
        }
    }
    echo "Total de negativos = $neg <br>Soma dos positivos = $pos";
?>