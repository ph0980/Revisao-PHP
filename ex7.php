<?php
    $livro="Poo para iniciantes";
    $tipo="Professor";
    if($tipo=="Aluno"){
        $dias=3;
    }
    else if($tipo=="Professor"){
        $dias=10;
    }

    echo "Livro: $livro <br> Tipo: $tipo <br> Dias para entregar: $dias";
?>