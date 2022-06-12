<?php
    $name='';

    if(isset($name)){
        echo "Name is set".PHP_EOL;
    }else{
        echo "Name is not set".PHP_EOL;
    }

    if(empty($name)){
        echo "Name is empty".PHP_EOL;
    }else{
        echo "Name is not empty".PHP_EOL;
    }
    echo "----------".PHP_EOL;

    if(isset($name) && !empty($name)){
        echo "Name is set and not empty".PHP_EOL;
    }else{
        echo "Name is not set or empty".PHP_EOL;
    }



