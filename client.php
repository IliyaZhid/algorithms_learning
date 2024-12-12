<?php
require __DIR__.'/vendor/autoload.php';

$solution = new AlgorithmsLearning\BinarySearch([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],6);
echo $solution->run() . PHP_EOL;
