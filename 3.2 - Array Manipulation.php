<?php
     $student = [
         "Sajid-1",
         "Ahmed-2",
         "Sami-3",
     ];

     foreach($student as $stu){
        echo $stu.PHP_EOL;
     }

     array_pop($student);
     array_shift($student);
     array_push($student,"Sami-4");
     array_unshift($student,"Sami-5");

     print_r($student);
