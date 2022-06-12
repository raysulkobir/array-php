<?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    function sum($oldNumber, $newNumber){
        return $oldNumber + $newNumber;
    }

    $result = array_reduce($numbers, 'sum');
    echo $result;