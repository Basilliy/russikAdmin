<?php
include "ConnectToDB.php";
class A{
  function sayHi(){
    echo'hi russik';
  }
  
}

$a = new A();
$a->sayHi();
$b = new ConnectToDB();
$b->sayHi();
echo'hi';
