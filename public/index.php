
<?php

main::start("sagar.csv");

class main
{
    static public function start($filename)
    {
       $records = csv::getRecords($filename);

       $table = html::generateTable($records);


    }
}

class html {


    public static function generateTable($records) {

        foreach ($records as $record) {
            $array = $record->returnArray();
            print_r($array);
        }
    }
}
class csv {

    static public function getRecords($filename) {

        $file = fopen("sagar.csv", "r");

        $fieldNames = array();
        $count = 0;


        while (!feof($file)) {
            $record = fgetcsv($file);
            if($count == 0) {
                $fieldNames = $record;
            } else {
                $records[] = recordFactory::create($fieldNames, $record);
            }
            $count++;
        }

        fclose($file);
        print_r($record);}
}

class record {

    public function __construct(Array $fieldNames = null, $values = null)
    {
        $record = array_combine($fieldNames, $values);

        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }

        print_r($this);


    }

    public function createProperty($name = 'first', $value = 'name') {

        $this->{$name} = $value;


    }
}

class recordFactory {

    public static function create(Array $fieldNames = null, Array $values = null) {


        $record = new record($fieldNames, $values);

        return $record;
    }
}

