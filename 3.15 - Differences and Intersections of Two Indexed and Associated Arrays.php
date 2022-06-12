<?php
    $colors = ['e'=>'yellow', 'orange', 'e' => 'purple'];
    $copyColors = ['b'=>'red', 'green', 'blue', 'e' => 'yellow'];

    $result1 = array_intersect($colors, $copyColors);
    print_r($result1);


    echo "-----------".PHP_EOL;
    $result2 = array_intersect_assoc($colors, $copyColors);
    print_r($result2);


    echo "-----------".PHP_EOL;
    $data1 = array_diff($colors, $copyColors);
    print_r($data1);

    echo "-----------".PHP_EOL;
    $data2 = array_diff_assoc($colors, $copyColors);
    print_r($data2);