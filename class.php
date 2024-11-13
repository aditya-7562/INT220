<?php
class Book{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayDetails(){
        echo "Title: {$this->title} <br>";
        echo "Author: {$this->author} <br>";
        echo "Price: {$this->price} <br>";
    }
}

$book1 = new Book("1984", "George Orwell", 15.99);

$book1->displayDetails();

