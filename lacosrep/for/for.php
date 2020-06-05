<?php
/*
    for($index = 0; $index <= 10; $index ++){
        echo $index. "<br>";
    }

    for($i =0; $i < 1000; $i +=5){
        echo $i. "<br>";
    }
*/

    for($i =0; $i < 1000; $i +=5){
        if($i > 200 && $i < 800) continue;
        if($i === 900) break;
        echo $i. "<br>";
    }

?>