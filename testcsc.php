<?php

require('src/Knn.php');

$csvFileName = 'file.csv'; //name of csv file, must containt .csv {required}
$predict = [3, 4]; //predict {required}
$key = 3; //key {optional: default is 3}
$inputToCsv = false; //true, so the result will be inputed to csv file as the new sample. {optional: default is false}

$data = new KnnCsv($csvFileName, $predict, $key, $inputToCsv);
echo $data->result;
