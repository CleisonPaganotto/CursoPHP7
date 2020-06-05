<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));
array_push($pessoas, array(
    'nome' => 'Cleison',
    'idade' => 21
));

echo json_encode($pessoas);