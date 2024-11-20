<?php
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    abstract public function intro();
}

class Audi extends Car{
    public function intro(){
        echo "This is a car named " . $this->name;
    }
}

class Volvo extends Car{
    public function intro(){
        echo "This is a car named " . $this->name;
    }
}

$audi = new Audi("Audi");
$audi->intro();
echo "<br>";
$volvo = new Volvo("Volvo");
$volvo->intro();

?>
