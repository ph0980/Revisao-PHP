<?php
    $vetor = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
    $maior=$vetor[0];
    $menor=$vetor[0];
    $pares=0;
    $media=0;
    foreach($vetor as $i){
        if($i%2==0){
            $pares++;
        }
        if($i<$menor){
            $menor=$i;
        }
        else if($i>$maior){
            $maior=$i;
        }
        $media+=$i;
    }
    $percentual=$pares*100/sizeof($vetor);
    $media=$media/sizeof($vetor);
    echo "O maior valor é $maior <br>O menor é $menor<br>O percentual de pares é $percentual%<br>A média é $media";
?>