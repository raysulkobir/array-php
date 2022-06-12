<?php
    $vegetables = [
        "Tomato",
        "Potato",
        "Onion",
        "Cabbage",
        "Carrot",
        "Cucumber,ready",
    ];

    print_r($vegetables);
    echo "-------".PHP_EOL;

    $arrayToString = implode(",", $vegetables);
    echo $arrayToString;
    
    echo PHP_EOL."==============".PHP_EOL;
    $array2ToString = join(",", $vegetables);
    echo $array2ToString;

    echo PHP_EOL."==============".PHP_EOL;
    $stringToArray = explode(",", $arrayToString);
    print_r($stringToArray);

    echo PHP_EOL."==============".PHP_EOL;
    echo count($vegetables);

    $data = "Sajid-1,20,0123456789,Dhaka,088-123456789";
    // $dataArray = explode(";", $data);
    $dataArray = preg_split("/(, |-)/", $data);
    print_r($dataArray);
    // $data = page_split("\n", $arrayToString);