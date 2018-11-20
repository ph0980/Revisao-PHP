<?php
    $t=0;
    $massa=1;

    while($massa>0.10){
        $t+=30;
        $massa-=25/100*$massa;
    }
    echo "$t segundos";
?>