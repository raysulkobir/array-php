<?php
    $student = [
        "Sajid-1",
        "Ahmed-2",
        "Sami-3",
    ];

    // print_r($student);
    // echo "-------";
    // echo PHP_EOL;
    // echo count($student);
    // echo PHP_EOL;

    $students = [
        "name" => "Sajid-1",
        "age" => "20",
        "mobile" => "0123456789",
        "address" => "Dhaka",
        "nic" => "123456789",
    ];

    // echo $students["name"]; 

    echo "----------".PHP_EOL;
    // foreach($students as $stu){
    //     echo $stu.PHP_EOL;
    // }

    $arrayKeyData = array_keys($students);
    // print_r($arrayKeyData);

    $arrayValueData = array_values($students);
    // print_r($arrayValueData);
    for($i = 0; $i < count($arrayValueData); $i++){
        echo $arrayValueData[$i].PHP_EOL;
    }
