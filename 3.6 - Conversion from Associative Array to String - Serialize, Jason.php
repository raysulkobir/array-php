<?php
    $person = [
        "name" => "Sajid-1",
        "age" => "20",
        "mobile" => "0123456789",
        "address" => "Dhaka",
        "nic" => "123456789",
    ];

    print_r($person);
    echo "----------".PHP_EOL;

    $data = json_encode($person);
    print_r($data); // json_encode() converts array to json string


    $data = json_decode($data, true);
    print_r($data); // json_decode() converts json string to array

    echo "----------".PHP_EOL;
    $result = serialize($person);
    print_r($result); // serialize() converts array to string

    $result2 = unserialize($result);
    print_r($result2); // unserialize() converts string to array

