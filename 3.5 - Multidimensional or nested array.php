<?php
    $multiparaArray = [
        ['name' => 'Sajid-1', 'age' => '20', 'mobile' => '0123456789', 'address' => 'Dhaka', 'nic' => '123456789'],
        ['name' => 'Ahmed-2', 'age' => '21', 'mobile' => '0123456789', 'address' => 'Dhaka', 'nic' => '123456789'],
        ['name' => 'Sami-3', 'age' => '22', 'mobile' => '0123456789', 'address' => 'Dhaka', 'nic' => '123456789'],
    ];

    print_r($multiparaArray[1]['name']);
    echo"----------".PHP_EOL;
    print_r($multiparaArray[1]['age']);
    echo"----------".PHP_EOL;
    print_r($multiparaArray[1]);