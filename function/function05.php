<?php

    $data = array(
        'nome' => "joao",
        'idade' => 20
    );

    foreach ($data as &$value) {
        if(gettype($value) === 'string') $value = "Cleison";
        echo $value.'<br>';
    }

    print_r($data);