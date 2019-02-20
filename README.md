# Machine Learning KNN Algorithm
This is a simple Machine Learning program using the KNN or K - Nearest Neighbor algorithm. Maybe the code can't be read properly, so I try to make this program so that it can be read better and for anyone who wants to use it is welcome.

# Usage
require the Knn.php inside src folder

```php
require 'src/Knn.php';
```
Here an example

```php
$datasample = [[2,3],[4,5],[5,1],[8,9],[3,7],[1,7]]; //Sample Data
$datalabel = ['a', 'a', 'b', 'b', 'c', 'c']; //Label Data. [2,3] labeled by a, [5,1] labeled by b, etc
$key = 3;     //optional. Default is 3. Smallest key is more accurate
$predict = [1, 7]; //Input

$data = new Knn($datasample, $predict, $datalabel, $key);
echo $data->result;     //output is c
```

more examples are in example.php file

### Using csv file as dataset
You can use csv file as dataset. Here the tutorial how to use it.

First create the dataset in csv format. Use this format below.

```
"parameter1", "parameter2", "parameter3", "etc", "label"
```

See file.csv inside dataset folder for example.
Save it to dataset folder.

The Code

```php
require('src/Knn.php');

$csvFileName = 'files.csv';     //name of csv file, must containt .csv {required}
$predict = [3,4,1];             //predict {required}
$key = 3;                       //key {optional: default is 3}
$inputToCsv = true;             //true, so the result will be inputed to csv file as the new sample. {optional: default is false}

$data = new KnnCsv($csvFileName, $predict, $key, $inputToCsv);
echo $data->result;

```

You can change the dataset folder in `src/KnnCsv.php`

### Train data

```php
$fileCsvName = 'file.csv';          //csv file name
$countData = 20;                    //Number of data will be inserted
$offset = 1;                        //Create offset random number
$limit = 200;                       //Create max random number

new KnnTrain($fileCsvName, $countData, $offset, $limit);
```

