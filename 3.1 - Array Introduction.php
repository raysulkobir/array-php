<?php
    $student = array(
        "Sajid",
        "Rubel",
        "Sanit",
        "Nishat",
        "akram"
    );

    $n = count($student);
    for($i = 0; $i < $n; $i++){
        echo $student[$i].PHP_EOL;
    }
    echo "=============";
    for($i = $n; $i >= 0; $i--){
        echo $student[$i].PHP_EOL;
    }
    
    echo "___________________".PHP_EOL;
    foreach($student as $st){
        echo $st.PHP_EOL;
    }