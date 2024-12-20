<?php
    class Book{
        private $title;
        private $author;
        private $price;
    
        public function getTitle(){
            return $this->title;
        }

        public function setTitle($title){
            if(!empty($title)){
                $this->title = $title;
            }else{
                throw new Exception("Title cannot be empty");
            }
        }
        public function getAuthor(){
            return $this->author;
        }
        public function setAuthor($author){
            if(!empty($author)){
                $this->author = $author;
            }
            else{
                throw new Exception("Author cannot be empty");
            }
        }
        public function getPrice(){
            return $this->price;
        }
        public function setPrice($price){
            if(is_numeric($price) && $price >=0){
                $this->price = $price;
            }
            else{
                throw new Exception("Price must be a number and greater than 0");
            }
        }

        public function displayDetails() {
            echo "Title: " . $this->getTitle() . "<br>";
            echo "Author: " . $this->getAuthor() . "<br>";
            echo "Price: $" . $this->getPrice() . "<br>";
        }

    }

    try {
        $book = new Book();
        $book->setTitle("Php");
        $book->setAuthor("Shinkhal");
        $book->setPrice(500);

        $book->displayDetails();

    } catch (Exception $e) {
        echo "Error" . $e->getMessage() . "\n";
    }
