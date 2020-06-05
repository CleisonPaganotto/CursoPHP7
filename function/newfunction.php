<?php

    function soma(int ...$valores){
        return array_sum($valores);
    }

    echo soma(5,7);

    echo "<br>";

    echo soma(9, 8);