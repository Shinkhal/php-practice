<?php   
interface Moveable{
    public function move();
}
interface Flyable{
    public function fly();
}
interface Swimable{
    public function swim();
}
class Bird implements Moveable, Flyable {
    public function move(){
        echo "Bird is moving <br>";
    }
    public function fly(){
        echo "Bird is flying <br>";
    }
}

class Fish implements Moveable, Swimable {
    public function move(){
        echo "Fish is moving <br>";
    }
    public function swim(){
        echo "Fish is swimming <br>";
    }
}

$bird = new Bird();
$fish = new Fish();

$bird->move();
$bird->fly();
$fish->move();
$fish->swim();
?>  