<?php

class KnnCsv
{

    protected $filePath;
    public $sample;
    public $label;
    public $result;

    public function __construct($filePath, $predictData, $k = 3)
    {
        $this->$filePath = $filePath;

        $file = fopen('../dataset/' . $filePath, 'r');
        while (($line = fgetcsv($file)) !== false) {

            $resultCsv[] = $line;
        }
        fclose($file);

        for ($i = 0; $i < count($resultCsv); $i++) {

            $label[] = end($resultCsv[$i]);
            unset($resultCsv[$i][count($resultCsv[$i]) - 1]);
        }

        $this->sample = $resultCsv;
        $this->label = $label;

        $result = new Knn($this->sample, $predictData, $this->label, $k);
        $this->result = $result->result;
    }
}