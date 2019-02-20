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
