<?php

require 'src/Knn.php';

$datasample = [[7, 5, 6], [3, 4, 3], [5, 7, 7], [10, 6, 1], [12, 9, 8], [11, 1, 2]]; //Sample Data
$datalabel = ['a', 'a', 'a', 'b', 'b', 'c']; //Label Data. [7,5,6] labeled by a, [10,6,1] labeled by b, etc
$key = 3;     //optional. Default is 3
$predict = [13, 41]; //Input

$data = new Knn($datasample, $predict, $datalabel, $key);
echo $data->result;
echo "\n";
print_r($data->getSample());
echo "\n";
print_r($data->getLabel());
echo "\n";
print_r($data->getPrediction());
echo "\n";
print_r($data->getSquare());