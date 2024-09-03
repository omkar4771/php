<?php

//create a class 
class player{

    //properties
   public $name;
   public $sport;

   //constructor
   function __construct(){
    echo "this is constructor"."\n";
   }

   //destructor
   function __destruct(){
    echo "this is destructor","\n";
   }

   //function
    function set_name($name){
        $this->name = $name;
        // $this->sport = $sport;
    }
    function get_name(){
        return $this->name."\n";
    }
}

//creating a object 
$player1 = new player();
$player1->set_name("omkar");
echo $player1->get_name();

$player1 = new player();
$player1->set_name("shubham");
echo $player1->get_name();

$player1 = new player();
$player1->set_name("rohan");
echo $player1->get_name();
?>