<?php
    $vetor = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

    foreach($vetor as $n){
        if($n%2==0){
            echo "$n par<br>";
        }
        else{
            echo "$n ímpar<br>";
        }
    }
?>