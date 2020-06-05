<?php

    $meses = array(
        "Janeiro", "Fevereiro", "Março",
        "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro",
        "Outubro", "Novembro", "Dezembro"
    );
    /*
    echo '<select>';
    foreach ($meses as $mes) {
        echo '<option value ="'.$mes.'>'.$mes.'</option>';
    }
    echo '</select>';
    */

    foreach ($meses as $index =>$mes) {
        echo "Indice: ".$index."<br>";
        echo 'O mês é: '.$mes.'<br><br>';
    }