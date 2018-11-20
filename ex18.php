<?php
    $vetor1 = array(1,2,3,4,5,6,7,8,9,10);
    $vetor2 = array(1,12,13,14,15,16,1,18,19,20);
    $vetor3 = array_diff($vetor1,$vetor2);
    $vetor4 = array_diff($vetor2,$vetor1);
    $vetor5 = array_merge($vetor3,$vetor4);

    foreach($vetor5 as $v){
        echo "$v<br>";
    }
    
?>