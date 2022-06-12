<?php
    $colors = ['red', 'green', 'blue', 'yellow', 'orange', 'purple'];
    $students = [
        'John' => [
            'name' => 'John',
            'age' => '25',
            'phone' => '123-456-7890',
            'email' => 'john@gmail.com',
        ],
        'Jane' => [
            'name' => 'Jane',
            'age' => '24',
            'phone' => '123-456-7890',
        ],
        'Jack' => [
            'name' => 'Jack',
            'age' => '23',
            'phone' => '123-456-7890',
        ],
        'Jill' => [
            'name' => 'Jill',
            'age' => '22',
            'phone' => '123-456-7890',
        ],
    ];


    print_r($students);


    echo "-----------".PHP_EOL;
    print_r($colors);

    echo "-----------add all array".PHP_EOL;
    $result = array_merge($colors, $students);
    print_r($result);