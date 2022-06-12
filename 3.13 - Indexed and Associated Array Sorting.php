<?Php
$truist = ['orange', 'pear', 'grape', 'strawberry', 'apple', 'banana', 'kiwi', 'peach', 'watermelon'];
$numbers = [5, 6, 7, 8, 9, 10, 1, 2, 3, 4, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

// sort($truist);
// sort($numbers);
// asort($truist);
ksort($truist);

print_r($truist);

echo "-----------".PHP_EOL;
// print_r($numbers);
