<?php
class Book{
    private $id =0;
    private $title = "";
    private $author = "";
    private $price =0.0;
    public function __construct($id,$title,$author,$price){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function setId($id){
        $this->id = $id;
    
    }
    public function getId(){
       return  $this->id;
    
    }
    public function setTitle($title){
    $this->title = $title;

}
public function getTitle(){
   return  $this->title;

}

public function setAuthor($author){
    $this->author = $author;

}
public function getAuthor(){
   return  $this->author;

}
public function setPrice($price){
    $this->price = $price;

}
public function getPrice(){
   return   $this->price;

}


}