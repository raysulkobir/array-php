<?php
    $numbers = range(1, 10);
    $random = mt_rand(1, 5);
    // echo $random;

    if($numbers[$random] % 2 == 0){
        echo "You win!";
    } else {
        echo "You lose!";
    }