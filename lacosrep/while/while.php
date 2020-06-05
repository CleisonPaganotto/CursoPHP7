<?php

    $condicao = true;

    while ($condicao){
        $num = rand(1, 10);

        if($num === 3){
            echo "TRÊSS!!";
            $condicao = false;
        }
        
    echo $num." ";

    }