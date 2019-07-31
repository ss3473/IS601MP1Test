<?php

main::start("sagar.csv");

class main
{
    static public function start($filename)
    {
       $records = csv::getRecords($filename);

       print_r($records);
    }
}

class csv {

    static public function getRecords($filename) {

        $file = fopen("sagar.csv", "r");

        while (!feof($file)) {
            $record = fgetcsv($file);

            $records[] = $record;
        }

        fclose($file);
        print_r($records);}
}