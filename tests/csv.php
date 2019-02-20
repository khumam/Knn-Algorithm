<?php

require '../src/Knn.php';
// $predict = [3, 2];
// $test = [[24, 43], [24, 22]];
// $label = ['A', 'M'];

// $test = [[47, 5, 6], [3, 64, 3], [5, 7, 7], [10, 6, 1], [12, 9, 8], [11, 1, 2]]; //Sample Data
// $label = ['a', 'a', 'a', 'b', 'b', 'c']; //Label Data. [7,5,6] labeled by a, [10,6,1] labeled by b, etc
// $key = 3;     //optional. Default is 3
$predict = [32, 13]; //Input

// $csv = new KnnCsv('file.csv', $predict, 3);

// print_r($csv->sample);
// print_r($test);

$data = new KnnTrain('file.csv', 20, 1, 200);
// $data->train(3, 1, 20);
//echo $data->result;
print_r($data->trainData);
