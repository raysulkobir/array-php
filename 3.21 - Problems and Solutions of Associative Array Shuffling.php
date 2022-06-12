<?php
    $student = ['a' => 'apple', 'b' => 'banana', 'c' => 'coconut'];
    $_student = $student;
    // shuffle($student);
    // print_r($student);

    echo "-----------".PHP_EOL;
    $key = array_rand($student);
    echo $student[$key];

    echo "-----------".PHP_EOL;
    print_r($_student);