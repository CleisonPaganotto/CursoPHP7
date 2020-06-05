<?php

    function soma(float ...$valores):float{
        return array_sum($valores);
    }

    echo var_dump(soma(5,7));

    echo "<br>";

    echo soma(9, 8);

    echo "<br>";

    echo soma(3.2, 4.7);
