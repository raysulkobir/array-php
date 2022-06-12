<?php
    $student = [
        "Sajid-1",
        "Ahmed-2",
        "Sami-3",
    ];
    print_r($student);
    echo"----------".PHP_EOL;

    unset($student[0]);
    print_r($student);