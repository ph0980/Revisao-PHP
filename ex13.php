<?php
    $num=array(12,13,15,117,299,100,110,112,114,-9);
    $qtd=0;
    foreach($num as $n){
        if($n>=100 && $n<=200){
            $qtd++;
        }
    }
    echo "$qtd número entre 100 e 200";
?>