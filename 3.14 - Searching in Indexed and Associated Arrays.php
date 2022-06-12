<?php

$colors = ['b'=>'red', 'green', 'blue', 'yellow', 'orange', 'purple'];

// if(in_array('greenss', $colors, true)) {
//     echo "green is in the array";
// } else {
//     echo "green is not in the array";
// }


// $result = array_search('green', $colors, true);
// echo $result;

    if(key_exists('b', $colors)) {
        echo "green is in the array";
    } else {
        echo "green is not in the array";
    }