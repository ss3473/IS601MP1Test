<?php

echo "test1";
echo "Hello World";

main:: start();
class main
{
    static public function start()
    {
        $records = csv::getRecords();
        echo 'test';
    }
}
class csv {

    static public function getRecords()
    {
        echo 'test';
    }
}
class html{
    static public function generateTable($records)
    {
        $table = $records;
        return $table;
    }
}
class system{

    static public function printPage($page)
    {
        echo $page;
    }
}