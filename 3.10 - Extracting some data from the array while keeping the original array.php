<?php
    $person = [
        'name' => 'John',
        'age' => '25',
        'phone' => '123-456-7890',
        'email' => 'joha@gmail.com',
    ];

    $result = array_slice($person, 0, 2, true);
    $result2 = array_slice($person, -2, 2, true);
    print_r($result);
    
    echo "-----------".PHP_EOL;
    print_r($result2);

    echo "-----------".PHP_EOL;
    print_r($person);
