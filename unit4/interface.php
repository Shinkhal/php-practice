<?php
// Define the Animal interface
interface Animal {
    public function sound();
}

// Dog class implementing the Animal interface
class Dog implements Animal {
    public function sound() {
        echo "Woof woof! <br>";
    }
}

// Cat class implementing the Animal interface
class Cat implements Animal {
    public function sound() {
        echo "Meow meow! <br>";
    }
}

// Create instances of Dog and Cat and call their sound methods
$dog = new Dog();
$cat = new Cat();

$dog->sound(); // Output: Woof woof!
$cat->sound(); // Output: Meow meow!
?>
