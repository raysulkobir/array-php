<?php
    $colors = ['red', 'green', 'blue', 'yellow', 'orange', 'purple'];
    $result = array_splice($colors, 1, 2);

    print_r($result);

    echo "-----------".PHP_EOL;
    print_r($colors);