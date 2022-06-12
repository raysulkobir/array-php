<?php
    $person = [
        "name" => "Sajid-1",
        "age" => "20",
        "mobile" => "0123456789",
        "address" => "Dhaka",
        "nic" => "123456789",
    ];
    
    // $personUpdate = &$person; // &$person is a reference to the person array
    $personUpdate = $person; // copy by reference
    $personUpdate["name"] = "Sajid-2";

    print_r($person);
    echo "----------".PHP_EOL;
    print_r($personUpdate);