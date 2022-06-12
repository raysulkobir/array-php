<?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $result = [];
    foreach($numbers as $key => $number){
        $result[$key] = $number * 2;
        // $result[$key] = "this";
    }

    print_r($result);

    echo "-----------".PHP_EOL;

    function square($number){
        printf("This is a square %d is %d", $number, $number * $number);
        echo PHP_EOL;
    }

    function event($n){
        return $n % 2 == 0;
    }

    // array_walk($numbers, 'square');
    $newArray = array_walk($numbers, 'square');
    $newArray = array_map($numbers, 'square');

    echo "----------- New array".PHP_EOL;
    print_r($newArray);

    $arrayFilter = array_filter($numbers, 'event');
    // print_r($arrayFilter);

    $students =['sajid', 'sanit', 'rakib'];

    function searchStudent($student){
        return $student == "sanit";
    }

    $searchReasult = array_filter($students, 'searchStudent');
    print_r($searchReasult);